#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27,16,2);

void loop() {
  lcd.display();
  lcd.setCursor(8,0);
  lcd.print(total_consume);
  lcd.setCursor(8,1);
  lcd.print(total_consume/30);
}