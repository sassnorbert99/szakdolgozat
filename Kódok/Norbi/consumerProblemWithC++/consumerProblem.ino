class House{
  
  public:
    int house_consume = 230;
    float dailyhouse = house_consume / 30;
};

class Flat{
  public:
    int flat_consume = 200;
    float dailyflat = flat_consume / 30;
};

class School{
  public:
      int students = 300;
      int square_school = 20;
      float school_size = 2.5 * students;
      float school_consume = square_school * school_size;
      float dailyschool = school_consume / 30;
};

class Hospital{
  public:
      int patients = 100;
      int square_hospital = 100;
      float hospital_size = 6 * patients;
      float hospital_consume = square_hospital * hospital_size;
      float dailyhospital = hospital_consume / 30;
};
int total_consume = 0;
int total_daily_consume = 0;
void setup() {
  Serial.begin(9600);
  

  int house_piece = 2;
  int flat_piece = 2;
  int school_piece = 1;
  int hospital_piece = 1;
  
  
  House houses[house_piece];
  Flat flats[flat_piece];
  School schools[school_piece];
  Hospital hospitals[hospital_piece];

  
  int house_length = 0;
  for (int i=0; i <= house_piece; i++){
    if (house_piece == 0){
      break;
    }
    houses[i] = House();
    house_length = i;
    total_consume += houses[i].house_consume;
    total_daily_consume += houses[i].dailyhouse;
 }
 
 int flat_length = 0;
 for (int i=0; i <= flat_piece; i++){
  if (flat_piece == 0){
      break;
    }
    flats[i] = Flat();
    flat_length = i;
    total_consume += flats[i].flat_consume;
    total_daily_consume += flats[i].dailyflat;
 }
 int school_length = 0;
 for (int i=0; i <= school_piece; i++){
  if (school_piece == 0){
      break;
    }
    schools[i] = School();
    school_length = i;
    total_consume += schools[i].school_consume;
    total_daily_consume += schools[i].dailyschool;
 }
 int hospital_length = 0;
 for (int i=0; i <= hospital_piece; i++){
  if (hospital_piece == 0){
      break;
    }
    hospitals[i] = Hospital();
    hospital_length = i;
    total_consume += hospitals[i].hospital_consume;
    total_daily_consume += hospitals[i].dailyhospital;
 }

 Serial.print("Házak száma: ");
 Serial.println(house_length);
 Serial.print("Lakások száma: ");
 Serial.println(flat_length);
 Serial.print("Iskolák száma: ");
 Serial.println(school_length);
 Serial.print("Kórházak száma: ");
 Serial.println(hospital_length);
 Serial.print("Összes fogyasztó igénye havi szinten: ");
 Serial.print(total_consume);
 Serial.println(" kWh");
 Serial.print("Összes fogyasztó igénye napi szinten: ");
 Serial.print(total_daily_consume);
 Serial.println(" kWh");
 
}

void loop() {
  // put your main code here, to run repeatedly:

}
