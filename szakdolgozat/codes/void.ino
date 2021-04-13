#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27,16,2);
long total_consume = 0;
void setup() {                      
  lcd.init(); //1.sor
  lcd.init(); //2.sor
  lcd.backlight();
  lcd.print("kWh/m = ");
  lcd.setCursor(0,1); //bottom left
  lcd.print("kWh/d = ");
  Serial.begin(9600);
  int house_piece = 50;
  int flat_piece = 50;
  int school_piece = 1;
  int hospital_piece = 1;
  House houses[house_piece];
  Flat flats[flat_piece];
  School schools[school_piece];
  Hospital hospitals[hospital_piece];
  int house_length = 0;
  for (int i=1; i <= house_piece; i++){
    if (house_piece == 0){
      break;
    } else {
      houses[i] = House();
      house_length = i;
      total_consume += 
            houses[i].house_consume;
    }
 }
 int flat_length = 0;
 for (int i=1; i <= flat_piece; i++){
  if (flat_piece == 0){
      break;
    }else {
      flats[i] = Flat();
      flat_length = i;
      total_consume += 
            flats[i].flat_consume;
    } 
 }
 int school_length = 0;
 for (int i=1; i <= school_piece; i++){
  if (school_piece == 0){
      break;
    } else {
      schools[i] = School();
      school_length = i;
      total_consume += 
          schools[i].school_consume;
    }
 }
 int hospital_length = 0;
 for (int i=1; i <= hospital_piece; i++){
  if (hospital_piece == 0){
      break;
    } else {
      hospitals[i] = Hospital();
      hospital_length = i;
      total_consume += 
        hospitals[i].hospital_consume;
    } 
 }
 Serial.print("Hazak szama: ");
 Serial.println(house_length);
 Serial.print("Lakasok szama: ");
 Serial.println(flat_length);
 Serial.print("Iskolak szama: ");
 Serial.println(school_length);
 Serial.print("Korhazak szama: ");
 Serial.println(hospital_length);
 Serial.print("Osszes fogyaszto igenye havi szinten: ");
 Serial.print(total_consume);
 Serial.println(" kWh");
 Serial.print("Osszes fogyaszto igenye napi szinten: ");
 Serial.print(total_consume / 30);
 Serial.println(" kWh");
}
