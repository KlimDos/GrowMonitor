#!/usr/bin/python
# -*- coding: utf-8 -*-

import serial
import sys
import time
import struct
import subprocess

#----------------------------------------------------------------------------------------------------------------
#getting apruino device name
p = subprocess.Popen("ls /dev/ |grep ttyA", stdout=subprocess.PIPE, shell=True)
(output, err) = p.communicate()
port = "/dev/"+ output.strip()

baudrate = 9600
#----------------------------------------------------------------------------------------------------------------

hum = temp = lux1 = lux2 = Mositure = Mositure1 = Mositure2 = 0
#parameter
x = int (sys.argv[1])

#----------------------------------------------------------------------------------------------------------------
if x == 203:
  ser = serial.Serial(port, baudrate)
  #time.sleep(2)
  ser.write(struct.pack('>B',203))
  #Mositure = ser.readline().strip()
  #print(Mositure)
  #ser.close() 
#----------------------------------------------------------------------------------------------------------------
#print(Mositure)