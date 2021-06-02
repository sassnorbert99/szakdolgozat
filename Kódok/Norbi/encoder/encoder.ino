int pinA = 3;
int pinB = 4; 
int count = 0; 
int totaldegree = 0;
int lastPin;  
int aValue;
boolean operate;
/*terepasztalhoz:
encoder több állapotot legyen képes felvenni:
- áttétekkel meg kell csinálni, hogy az encoder legalább akkor 2x-3x
körbeérjen
- val: int round = something
Ezzel beszorozni a 40-et, mert 40 állapotérték egy teljes fordulás
*/
 void setup() 
 { 
   pinMode (pinA,INPUT);
   pinMode (pinB,INPUT);
   lastPin = digitalRead(pinA);
   Serial.begin (9600);
   Serial.println("BEGIN");
   Serial.println();
 } 

 void loop() 
 { 
   aValue = digitalRead(pinA);
   if (aValue != lastPin)
   { 
     if (digitalRead(pinB) != aValue)
     { 
       count ++;
       operate = true;  
       
     } 
     
     else 
     
     {
       operate = false;
       count--;
     }

     if (count % 40 == 0)
     {
       totaldegree += 1;
       Serial.print("Encoder Count: ");
       Serial.println(totaldegree);
       Serial.println();
     }
   } 
   lastPin = aValue;
 } 
