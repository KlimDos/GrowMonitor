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
hum = temp = lux1 = lux2 = 0
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
  ser = serial.Serial(port, baudrate)
  time.sleep(2)
  ser.write(struct.pack('>B',204))
  lux1 = ser.readline().strip()
  lux2 = ser.readline().strip()
  ser.close() 
#----------------------------------------------------------------------------------------------------------------
#----------------------------------------------------------------------------------------------------------------
#get datastamp like 2017-04-07 00:00:22 
p1 = subprocess.Popen('date "+%Y-%m-%d %H:%M:%S"', stdout=subprocess.PIPE, shell=True)
(output1, err) = p1.communicate()
date = output1.strip()
#----------------------------------------------------------------------------------------------------------------

#----------------------------------------------------------------------------------------------------------------
#write to BD
# conn = MySQLdb.connect(host= "localhost",user="root",passwd="123456",db="TnH")
# x1 = conn.cursor()

# try:
#     if x == 205:
#        x1.execute("""INSERT INTO Main VALUES (%s,%s,%s)""",(date, hum, temp))
#        conn.commit()
#     if x == 204:
#        x1.execute("""INSERT INTO luminosity VALUES (%s,%s,%s)""",(date,lux1,lux2))
#        conn.commit()
# except:
#     conn.rollback()

# conn.close()



#---relay-------------------------------------------------------------------------------------------------------------
if x == 140:
  ser = serial.Serial(port, baudrate)
  time.sleep(2)
  ser.write(struct.pack('>B',140))
  ser.close() 
  print "relay 1 on"

if x == 141:
  ser = serial.Serial(port, baudrate)
  time.sleep(2)
  ser.write(struct.pack('>B',141))
  ser.close() 
  print "relay 1 off"

if x == 150:
  ser = serial.Serial(port, baudrate)
  time.sleep(2)
  ser.write(struct.pack('>B',150))
  ser.close() 
  print "relay 2 on"

if x == 151:
  ser = serial.Serial(port, baudrate)
  time.sleep(2)
  ser.write(struct.pack('>B',151))
  ser.close() 
  print "relay 2 off"

if x == 160:
  ser = serial.Serial(port, baudrate)
  time.sleep(2)
  ser.write(struct.pack('>B',160))
  ser.close() 
  print "relay 3 on"

if x == 161:
  ser = serial.Serial(port, baudrate)
  time.sleep(2)
  ser.write(struct.pack('>B',161))
  ser.close() 
  print "relay 3 off"

if x == 170:
  ser = serial.Serial(port, baudrate)
  time.sleep(2)
  ser.write(struct.pack('>B',170))
  ser.close() 
  print "relay 4 on"

if x == 171:
  ser = serial.Serial(port, baudrate)
  time.sleep(2)
  ser.write(struct.pack('>B',171))
  ser.close() 
  print "relay 4 off"


print('date: |%s| hum: |%s| temp: |%s|' % (date,hum, temp))
print('date: |%s| lux1: |%s| lux2: |%s|' % (date,lux1, lux2))