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

#----------------------------------------------------------------------------------------------------------------
#----------------------------------------------------------------------------------------------------------------

if x == 206:

   ser = serial.Serial(port, baudrate)
   time.sleep(2)
   ser.write(struct.pack('>B',206))
   ser.close() 

if x == 207:

   ser = serial.Serial(port, baudrate)
   time.sleep(2)
   ser.write(struct.pack('>B',207))
   #time.sleep(20)
   ser.close() 


if x == 208:

   ser = serial.Serial(port, baudrate)
   time.sleep(2)
   ser.write(struct.pack('>B',208))
   ser.close() 

if x == 209:

   ser = serial.Serial(port, baudrate)
   time.sleep(2)
   ser.write(struct.pack('>B',209))
   #time.sleep(20)
   ser.close() 



print('date: |%s| hum: |%s| temp: |%s|' % (date,hum,temp))
print('date: |%s| lux1: |%s| lux2: |%s|' % (date,lux1,lux2))
print('date: |%s| Mositure1: |%s|%%  Mositure1: |%s|%%' % (date,mositure1,mositure2))
print('relay1: |%s| relay2: |%s| relay3: |%s| relay4: |%s|' % (relay1,relay2,relay3,relay4))
