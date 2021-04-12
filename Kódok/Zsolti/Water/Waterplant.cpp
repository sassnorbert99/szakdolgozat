#include "Waterplant.h"
#include "Arduino.h"

Waterplant::Waterplant(int _felsotartaly,int _alsotartaly,int _szivattyu,int _csap )
{
    felsotartaly=_felsotartaly;
    alsotartaly=_alsotartaly;
    szivattyu=_szivattyu;
    csap=_csap;
}

void Waterplant::Szivattyuzasindit(){
  if(analogRead(felsotartaly)<800){
    digitalWrite(szivattyu,HIGH);
    Felsotartalytele=false;
  }
  else{
    digitalWrite(szivattyu,LOW);
    Felsotartalytele=true;
  }
}

void Waterplant::Szivattyuallj(){
  digitalWrite(szivattyu,LOW);
}

void Waterplant::Csapnyit(){
  if(analogRead(alsotartaly)>800){
    digitalWrite(csap,LOW);
    Alsotartalytele=true;
  }
  else{
    digitalWrite(csap,HIGH);
    Alsotartalytele=false;
  }
  
}

void Waterplant::Csapzar(){
  analogWrite(csap,LOW);
}
