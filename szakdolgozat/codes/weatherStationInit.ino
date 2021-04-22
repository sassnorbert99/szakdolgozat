#include <LiquidCrystal_I2C.h>
#include <hd44780.h>
//cime a 0x27 16 karakteres es 2 sorban fog elhelyezkedni
LiquidCrystal_I2C lcd(0x27,16,2); 

//igy fog kinezni a fok jele
byte degree_symbol[8] = 
{
  0b00111,
  0b00101,
  0b00111,
  0b00000,
  0b00000,
  0b00000,
  0b00000 
};

int pin=11; //pin
volatile unsigned long duration=0;
unsigned char i[5];
unsigned int j[40];
unsigned char value=0;
unsigned answer=0;
int z=0;
int b=1;

