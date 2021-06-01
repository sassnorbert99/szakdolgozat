#include "WiFiConnection.h"
#include "MQTTConnection.h"

//For mysql --------------------------------------------------------
#include <MySQL_Connection.h>
#include <MySQL_Cursor.h>
char user[] = ""; // MySQL user login username
char passwordSQL[] = ""; // MySQL user login password

char INSERT_SQL[] = "UPDATE varazstorony.terepasztal SET termeltenergia=%d ,energiaigeny=%d, napfelkelte=%s, naplemente=%s  WHERE id=1";
char query[128];
IPAddress server_addr(89, 40, 126, 232); // IP of the MySQL server here

WiFiConnection wifi;
MQTTConnection mqtt;

String sunriseTime;
String sunriseAzimuth;
String sunriseAltitude;

String sunriseEndTime;
String sunriseEndAzimuth;
String sunriseEndAltitude;

String solarNoonTime;
String solarNoonAzimuth;
String solarNoonAltitude;



void setup() {
  Serial.begin(115200);
  // put your setup code here, to run once:
  wifi.Connect();
  mqtt.Connect();
  client.onMessage(messageReceived);
}

void loop() {
  // put your main code here, to run repeatedly:
  mqtt.MQTTLoop();
  
  
}

void messageReceived(String &topic, String &payload) {
  sunriseTime=getValue(payload, ';', 0);
  sunriseAzimuth=getValue(payload, ';', 1);
  sunriseAltitude=getValue(payload, ';', 2);

  sunriseEndTime=getValue(payload, ';', 3);
  sunriseEndAzimuth=getValue(payload, ';', 4);
  sunriseEndAltitude=getValue(payload, ';', 5);

  solarNoonTime=getValue(payload, ';', 6);
  solarNoonAzimuth=getValue(payload, ';', 7);
  solarNoonAltitude=getValue(payload, ';', 8);




  
  Serial.println(sunriseTime);
  Serial.println(sunriseAzimuth);
  Serial.println(sunriseAltitude);
  
  Serial.println(sunriseEndTime);
  Serial.println(sunriseEndAzimuth);
  Serial.println(sunriseEndAltitude);
  
  Serial.println(solarNoonTime);
  Serial.println(solarNoonAzimuth);
  Serial.println(solarNoonAltitude);
  
  
  mySqlLoop(40,50,String sunriseTime,String sunriseEndTime)
}

void mySqlLoop(int termeltenergia,int energiaigeny,String napfelkelte,String naplemente){
  WiFiClient client;
  MySQL_Connection conn((Client *)&client);
  if (conn.connect(server_addr, 8080, user, passwordSQL)) {
    Serial.println("Database connected.");
  }
  else{
    Serial.println("Connection failed.");
    Serial.println("Recording data.");
  }
  // Initiate the query class instance
  MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);
  // Execute the query
  sprintf(query, INSERT_SQL, termeltenergia, energiaigeny,napfelkelte,naplemente);
  cur_mem->execute(query);
  // Note: since there are no results, we do not need to read any data
  // Deleting the cursor also frees up memory used
  delete cur_mem;
  Serial.println("closing connection\n");
  //client.stop();
}

String getValue(String data, char separator, int index)
{
    int found = 0;
    int strIndex[] = { 0, -1 };
    int maxIndex = data.length() - 1;

    for (int i = 0; i <= maxIndex && found <= index; i++) {
        if (data.charAt(i) == separator || i == maxIndex) {
            found++;
            strIndex[0] = strIndex[1] + 1;
            strIndex[1] = (i == maxIndex) ? i+1 : i;
        }
    }
    return found > index ? data.substring(strIndex[0], strIndex[1]) : "";
}
