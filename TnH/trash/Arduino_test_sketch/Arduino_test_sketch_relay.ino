#include <DHT.h>
#include <Adafruit_Sensor.h>

#include <Wire.h>
#include <BH1750FVI.h>

//Constants
//-----------------------------------------------------------------------------
#define DHTPIN 2     // what pin we're connected to
#define DHTTYPE DHT22   // DHT 22  (AM2302)
DHT dht(DHTPIN, DHTTYPE); //// Initialize DHT sensor for normal 16mhz Arduino
//-----------------------------------------------------------------------------
//-----------------------------------------------------------------------------
BH1750FVI LightSensor1;
BH1750FVI LightSensor2;
//-----------------------------------------------------------------------------

//Variables
int chk;
float hum;  //Stores humidity value
float temp; //Stores temperature value
//-----------------------------------------------------------------------------

//relays
#define RELAY1  4                        
#define RELAY2  5                        
#define RELAY3  6                        
#define RELAY4  7

void setup()
{
  
    Serial.begin(9600);
    dht.begin();
  //-----------------------------------------------------------------------------
  LightSensor1.begin();
    LightSensor1.SetAddress(0x5C);// 0x5C id ad0 1-- 0x23 if ad0 0--
    LightSensor1.SetMode(Continuous_H_resolution_Mode);
  
    LightSensor2.begin();
    LightSensor2.SetAddress(0x23);
    LightSensor2.SetMode(Continuous_H_resolution_Mode);
  //-----------------------------------------------------------------------------
  //-----
  pinMode(RELAY1, OUTPUT);       
  pinMode(RELAY2, OUTPUT);
  pinMode(RELAY3, OUTPUT);
  pinMode(RELAY4, OUTPUT);

  digitalWrite(RELAY1,HIGH);
  digitalWrite(RELAY2,HIGH);
  digitalWrite(RELAY3,HIGH);
  digitalWrite(RELAY4,HIGH);
  //-----
}

void loop()
{
 
}

void serialEvent()
{
  while(Serial.available()) 
  {
    //Read data and store it to variables hum and temp
    int ch = Serial.read();
    
    if (ch==205)
      {    
        hum = dht.readHumidity();
        temp= dht.readTemperature();
        //Print temp and humidity values to serial monitor
        //Serial.print("Humidity: ");
        Serial.print(hum);
        Serial.print('\n');
        Serial.print(temp);
        Serial.print('\n');
        //Serial.println(" Celsius");
        //delay(2000); //Delay 2 sec.
      }
    
     if (ch==204)
      {    
        uint16_t lux1 = LightSensor1.GetLightIntensity();
        uint16_t lux2 = LightSensor2.GetLightIntensity();
        Serial.print(lux1);
        Serial.print('\n');
        Serial.print(lux2);
        Serial.print('\n');
      }

   //-----------------------------------------------------------------------------
       if (ch==140)
      {   
       digitalWrite(RELAY1,LOW);
      }
      if (ch==141)
      {
        digitalWrite(RELAY1,HIGH);
      }
      //-----
      if (ch==150)
      {   
       digitalWrite(RELAY2,LOW);
      }
      if (ch==151)
      {
        digitalWrite(RELAY2,HIGH);
      }
      //-----
       if (ch==160)
      {   
       digitalWrite(RELAY3,LOW);
      }
      if (ch==161)
      {
        digitalWrite(RELAY3,HIGH);
      }
      //-----
      if (ch==170)
      {   
       digitalWrite(RELAY4,LOW);
      }
      if (ch==171)
      {
        digitalWrite(RELAY4,HIGH);
      }
      
  }
}
