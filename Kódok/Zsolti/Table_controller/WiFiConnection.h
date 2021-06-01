//WiFi connection file
#include "WiFi.h"
#include "WiFiDatas.h"

WiFiClient wifiClient;
WiFiDatas wifiData;

class WiFiConnection{
  public:
  WiFiConnection(){
    
  }
  
  void Connect(){
    WiFi.begin(wifiData.getSsid(), wifiData.getPassword());
    
    while (WiFi.status() != WL_CONNECTED) 
          {
           
            delay(500);
          }

     Serial.println("");
    Serial.println("WiFi connected");
    Serial.println("IP address: ");
    Serial.println(WiFi.localIP());
  }
};
