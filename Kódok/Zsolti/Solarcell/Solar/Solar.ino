#include <Servo.h>
#include "Solarplant.h";

Solarplant plant1(9,10,
                   A6,A7,A5,A4);


Solarplant plant2(6,5,
                  A2,A3,A0,A1);

void setup() {

  plant1.Enable();
  plant1.StartPosition();
  plant2.Enable();
  plant2.StartPosition();
}

void loop() {
  
plant1.Move();
plant2.Move();

}
