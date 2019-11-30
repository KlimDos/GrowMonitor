#include <Wire.h>
#include <BH1750FVI.h>
 
BH1750FVI LightSensor1;
BH1750FVI LightSensor2;
 
void setup() {   
  Serial.begin(9600);
  LightSensor1.begin();
  LightSensor1.SetAddress(0x5C);// 0x5C id ad0 1-- 0x23 if ad0 0--
  LightSensor1.SetMode(Continuous_H_resolution_Mode);
  
  LightSensor2.begin();
  LightSensor2.SetAddress(0x23);
  LightSensor2.SetMode(Continuous_H_resolution_Mode);
}
 
 
void loop() {
  uint16_t lux1 = LightSensor1.GetLightIntensity();
  uint16_t lux2 = LightSensor2.GetLightIntensity();
  Serial.print("Light1: ");
  Serial.print(lux1);
  Serial.println(" lux");
  
  Serial.print("Light2: ");
  Serial.print(lux2);
  Serial.println(" lux");
  delay(1000);
}
