#!/usr/bin/python
# -*- coding: utf-8 -*-

import serial
import sys
import time
import struct
import subprocess
import MySQLdb


x = int (sys.argv[1])


p = subprocess.Popen("ls /dev/ |grep ttyA", stdout=subprocess.PIPE, shell=True)
(output, err) = p.communicate()
port = "/dev/"+ output.strip()

baudrate = 9600

hum = temp = lux1 = lux2 = mositure1 = mositure2 = relay1 = relay2 = relay3 = relay4 = 0




if x == 206:
   print "on 206"
   ser = serial.Serial(port, baudrate)
   time.sleep(2)
   #ser.write(struct.pack('>B',206))
   ser.close() 

if x == 207:
   print "0ff 207"
   ser = serial.Serial(port, baudrate)
   time.sleep(2)
   #ser.write(struct.pack('>B',207))
   #time.sleep(20)
   ser.close() 


#ser = serial.Serial(port, baudrate)
#time.sleep(2)
#ser.write(struct.pack('>B',207))
#time.sleep(10)
#ser.close() 



#time.sleep(10)

#print "hello world"
