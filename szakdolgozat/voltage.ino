#include <LiquidCrystal_I2C.h>

#include <Wire.h>
LiquidCrystal_I2C lcd(0x27,16,2);

const int inPin = 0;
void setup()
{
  lcd.begin(16,2);                      
  
  lcd.backlight();
  lcd.setCursor(1,0);
  lcd.print("Voltage: ");
  lcd.setCursor(0,1);
  lcd.print("kW: ");
  
}

void loop()
{
  lcd.display();
  int value = analogRead(inPin);         
  
  float volts = (value / 1024.0) * 5;    
  float amper = 0.2;
  float kW = (volts * amper) / 1000;

  
  lcd.setCursor(10,0);                   
  lcd.print(volts);                      
  lcd.print("V");                       
  lcd.setCursor(6,1);                   
  lcd.print(kW, 6);
  lcd.print("kW");
  delay(500);


}
