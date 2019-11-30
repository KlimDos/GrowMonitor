#include <Adafruit_Sensor.h>
#include "DHT.h"

#define DHTPIN 1

DHT dht(DHTPIN, DHT22);

//DHT dht(DHTPIN, DHT11);

void setup() {

Serial.begin(9600);

dht.begin();

}

void loop() {

// delay two sec qqqqq

delay(2000);

//getting H

float h = dht.readHumidity();

// getting T

float t = dht.readTemperature();

// Check 

if (isnan(h) || isnan(t)) {

Serial.println("cant get the data");

return;

}

//Serial.print("Humidity: "+h+" %\t"+"Temperature: "+t+" *C ");

}
