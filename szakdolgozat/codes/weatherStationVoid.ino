#include <LiquidCrystal_I2C.h>
#include <hd44780.h>

void setup() {
  
  lcd.init(); //1.sor inicializalasa
  lcd.init(); //2.sor inicializalasa
  lcd.backlight();
  lcd.print("Hom  = ");
  lcd.setCursor(0,1); //bottom left
  lcd.print("Para = ");

  //number, symbol
  lcd.createChar(1, degree_symbol); 
  lcd.setCursor(9,0); //1.sor 9. karaktere
  lcd.write(1);
  lcd.print("C");
  lcd.setCursor(10,1); //x=10, y=1
  lcd.print("%");
}