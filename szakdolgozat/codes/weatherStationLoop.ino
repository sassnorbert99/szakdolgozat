#include <LiquidCrystal_I2C.h>
#include <hd44780.h>

void loop() {
  lcd.display();
  delay(1000);
  while(1)
  {
    //delay(100);
    pinMode(pin,OUTPUT);
    digitalWrite(pin,LOW);
    delay(20);
    digitalWrite(pin,HIGH);
    pinMode(pin,INPUT_PULLUP); //magas lesz alaperelmezetten
    duration=pulseIn(pin,LOW);
    if(duration <= 84 && duration >= 72)
    {
      while(1)
      {
        duration=pulseIn(pin,HIGH);
        if(duration <= 26 && duration >= 20)
        {
          value=0;
        }
        else if(duration <= 74 && duration >= 65)
        {
          value=1;  
        }
        else if(z==40)
        {
          break;
        }
        i[z/8]|=value<<(7-(z%8)); 
        j[z]=value;
        z++;
      }
    }
    answer=i[0]+i[1]+i[2]+i[3];
    if(answer==i[4] && answer!=0)
    {
      lcd.setCursor(7,0);
      lcd.print(i[2]);
      lcd.setCursor(7,1);
      lcd.print(i[0]);
    }
    z=0;
    //kinullazom az eddigi ertekeket, 
    //hogy utana ujra tudjon szamolni 
    i[0]=i[1]=i[2]=i[3]=i[4]=0; 
  }
}
