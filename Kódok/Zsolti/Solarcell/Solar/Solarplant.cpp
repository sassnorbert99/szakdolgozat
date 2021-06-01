#include <Servo.h>
#include "Solarplant.h"
#include <Arduino.h>

Solarplant::Solarplant(int _lrpin, int _udpin,
               int _leftport,int _rightport,
			   int _upport,int _downport)
{
    lrpint=_lrpin;
    udpin=_udpin;
    leftport=_leftport;
    rightport=_rightport;
    upport=_upport;
    downport=_downport;

    lrposition=90;
    udposition=0;
    
    
    diff=25;
    delaytime=20;
    
}

void Solarplant::Enable(){
  enabled=true;
}

void Solarplant::Disable(){
 enabled=false;
 
}
void Solarplant::StartPosition(){
  horizontal.attach(lrpint);
  horizontal.write(90);
  horizontal.detach();
  
  vertical.attach(udpin);
  vertical.write(0);
  vertical.detach();
}
void Solarplant::Move(){
 if(enabled){

  //Program
  horizontal.attach(lrpint);
  vertical.attach(udpin);

    left=analogRead(leftport);
    right=analogRead(rightport);
    down=analogRead(downport);
    up=analogRead(upport);
    
   if(left>100||right>100||up>100||down>100){
    //Left
    
    if(left-diff>right &&lrposition>2){
      lrposition--;
      
      horizontal.write(lrposition);
      delay(delaytime);
      horizontal.detach();
    }

    //Right
    else if(right-diff>left &&lrposition<180){
      lrposition++;
      
      
      horizontal.write(lrposition);
      delay(delaytime);
      horizontal.detach();
    }

     //Up
     else if(up-diff>down && udposition>0){
      udposition--;
      
      
      vertical.write(udposition);
      delay(delaytime);
      vertical.detach();
    }

    //Down
    else if(down-diff>up && udposition<90 ){
      udposition++;
      
      
      vertical.write(udposition);
      delay(delaytime);
      vertical.detach();
    }
  
  }
 }

}
