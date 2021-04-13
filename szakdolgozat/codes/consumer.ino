#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27,16,2);
class House{
  public:
    int house_consume = 230;
};
class Flat{
  public:
    int flat_consume = 200;
};
class School{
  public:
      int students = 300;
      int square_school = 20;
      float school_size = 2.5 * students;
      float school_consume = square_school * school_size;
};
class Hospital{
  public:
      int patients = 100;
      int square_hospital = 100;
      float hospital_size = 6 * patients;
      float hospital_consume = square_hospital* hospital_size;
};
