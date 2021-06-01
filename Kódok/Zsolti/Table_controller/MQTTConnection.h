//MQTT connection file
#include <MQTT.h>
#include "MQTTDatas.h"

MQTTDatas mqttData;


String topic = "table";

String function;

MQTTClient client;

class MQTTConnection {
  public:
    MQTTConnection() {
      client.begin(mqttData.getServer(), wifiClient);
    }

    void Connect() {
      while (!client.connect(mqttData.getClientName(), mqttData.getUserName(), mqttData.getUserPass())) {
        delay(1000);
      }
      
      client.subscribe(topic);
      
    }

    void MQTTLoop() {
      client.loop();

      if (!client.connected()) {
        Connect();
      }
    }
};
