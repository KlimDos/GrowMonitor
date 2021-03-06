#!/usr/bin/python
# -*- coding: utf-8 -*-

import serial
import sys
import time
import struct
import subprocess
import MySQLdb
#----------------------------------------------------------------------------------------------------------------
#getting apruino device name
p = subprocess.Popen("ls /dev/ |grep ttyA", stdout=subprocess.PIPE, shell=True)
(output, err) = p.communicate()
port = "/dev/"+ output.strip()

baudrate = 9600
#----------------------------------------------------------------------------------------------------------------

#----------------------------------------------------------------------------------------------------------------
# if len(sys.argv) == 3:
#     ser = serial.Serial(sys.argv[1], sys.argv[2])
# else:
#     print "# Please specify a port and a baudrate"
#     print "# using hard coded defaults " + port + " " + str(baudrate)
#x = int (input('Temp Hum - 205; Lighttnes - 204:_'))
hum = temp = lux1 = lux2 = mositure1 = mositure2 = relay1 = relay2 = relay3 = relay4 = 0
#parameter
x = int (sys.argv[1])
#----------------------------------------------------------------------------------------------------------------
if x == 205:
  ser = serial.Serial(port, baudrate)
  time.sleep(2)
  ser.write(struct.pack('>B',205))
  hum = ser.readline().strip()
  temp = ser.readline().strip()
  ser.close()  
#----------------------------------------------------------------------------------------------------------------
if x == 204:
  #-----------upload sketch light--------------
  upload_code = "avrdude -q -V -D -p atmega328p -C /usr/share/arduino/hardware/tools/avr/../avrdude.conf -c arduino -b 115200 -P "+port+" -U flash:w:/home/sasha/sketchbook/light/build-uno/light.hex:i" 
  proc = subprocess.Popen(upload_code, stdout=subprocess.PIPE, stderr=subprocess.PIPE, shell=True)
  (output, err) = proc.communicate()



  time.sleep(2)
  #-------------------------

  ser = serial.Serial(port, baudrate)
  time.sleep(2)
  ser.write(struct.pack('>B',204))
  lux1 = ser.readline().strip()
  lux2 = ser.readline().strip()
  ser.close() 

  #-----------upload sketch mositure--------------
  upload_code = "avrdude -q -V -D -p atmega328p -C /usr/share/arduino/hardware/tools/avr/../avrdude.conf -c arduino -b 115200 -P "+port+" -U flash:w:/home/sasha/sketchbook/mositure/build-uno/mositure.hex:i" 
  proc = subprocess.Popen(upload_code, stdout=subprocess.PIPE, stderr=subprocess.PIPE, shell=True)
  (output, err) = proc.communicate()

  time.sleep(2)
#----------------------------------------------------------------------------------------------------------------
#----------------------------------------------------------------------------------------------------------------
if x == 203:
  ser = serial.Serial(port, baudrate)
  time.sleep(2)
  ser.write(struct.pack('>B',203))
  mositure1 = ser.readline().strip()
  mositure2 = ser.readline().strip()
  ser.close() 
#----------------------------------------------------------------------------------------------------------------
#----------------------------------------------------------------------------------------------------------------
#get datastamp like 2017-04-07 00:00:22 
p1 = subprocess.Popen('date "+%Y-%m-%d %H:%M:%S"', stdout=subprocess.PIPE, shell=True)
(output1, err) = p1.communicate()
date = output1.strip()
#----------------------------------------------------------------------------------------------------------------

#----------------------------------------------------------------------------------------------------------------
#----------------------------------------------------------------------------------------------------------------

if x == 206:

   ser = serial.Serial(port, baudrate)
   time.sleep(2)
   ser.write(struct.pack('>B',206))
   conn.close()

if x == 207:

   ser = serial.Serial(port, baudrate)
   time.sleep(2)
   ser.write(struct.pack('>B',207))
   conn.close()

  #-----------upload sketch light--------------
 # upload_code = "avrdude -q -V -D -p atmega328p -C /usr/share/arduino/hardware/tools/avr/../avrdude.conf -c arduino -b 115200 -P "+port+" -U flash:w:/home/sasha/sketchbook/test_sketch/build-uno/test_sketch.hex:i" 
 # proc = subprocess.Popen(upload_code, stdout=subprocess.PIPE, stderr=subprocess.PIPE, shell=True)
 # (output, err) = proc.communicate()

 # time.sleep(2)
  #-------------------------

  # ser = serial.Serial(port, baudrate)
  # time.sleep(2)

  # while True:
  #       name = input("1 or 2 or 3")
  #       if name == 1:
  #          ser.write(struct.pack('>B',206))
  #       if name == 2:
  #          ser.write(struct.pack('>B',207))
  #       if name == 3:
  #          ser.close()	
  #          break
  #relay1 = ser.readline().strip()s
  #relay2 = ser.readline().strip()
  #relay3 = ser.readline().strip()
  #relay4 = ser.readline().strip()
   

  #-----------upload sketch mositure--------------
  # upload_code = "avrdude -q -V -D -p atmega328p -C /usr/share/arduino/hardware/tools/avr/../avrdude.conf -c arduino -b 115200 -P "+port+" -U flash:w:/home/sasha/sketchbook/mositure/build-uno/mositure.hex:i" 
  # proc = subprocess.Popen(upload_code, stdout=subprocess.PIPE, stderr=subprocess.PIPE, shell=True)
  # (output, err) = proc.communicate()

  # time.sleep(2)

#----------------------------------------------------------------------------------------------------------------



#----------------------------------------------------------------------------------------------------------------
#write to BD
conn = MySQLdb.connect(host= "localhost",user="root",passwd="123456",db="TnH")
x1 = conn.cursor()

try:
    if x == 205:
       x1.execute("""INSERT INTO Main VALUES (%s,%s,%s)""",(date, temp, hum))
       msg = "telegram-send '" + "Дата:" + date + " Температура:" + temp + " Влажность:" + hum + "'"
       telegram = subprocess.Popen(msg, stdout=subprocess.PIPE, shell=True)
       conn.commit()
    if x == 204:
       x1.execute("""INSERT INTO luminosity VALUES (%s,%s,%s)""",(date,lux1,lux2))
       conn.commit()
    if x == 203:
       x1.execute("""INSERT INTO moisture VALUES (%s,%s,%s)""",(date,mositure1,mositure2))
       conn.commit()
except:
    conn.rollback()

conn.close()


print('date: |%s| hum: |%s| temp: |%s|' % (date,hum,temp))
print('date: |%s| lux1: |%s| lux2: |%s|' % (date,lux1,lux2))
print('date: |%s| Mositure1: |%s|%%  Mositure1: |%s|%%' % (date,mositure1,mositure2))
print('relay1: |%s| relay2: |%s| relay3: |%s| relay4: |%s|' % (relay1,relay2,relay3,relay4))
