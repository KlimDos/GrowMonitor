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

print(port)

#p1 = Popen("avrdude -q -V -D -p atmega328p -C /usr/share/arduino/hardware/tools/avr/../avrdude.conf -c arduino -b 115200 -P /dev/ttyACM0 -U flash:w:/home/sasha/sketchbook/light/build-uno/light.hex:i", stdout=IPE, shell=True)
  
#out, err = Popen('echo You are an lazy stupid motherfucker', shell=True, stdout=PIPE).communicate()
#print out

upload_code = "avrdude -q -V -D -p atmega328p -C /usr/share/arduino/hardware/tools/avr/../avrdude.conf -c arduino -b 115200 -P "+port+" -U flash:w:/home/sasha/sketchbook/mositure/build-uno/mositure.hex:i" 
proc = subprocess.Popen(upload_code, stdout=subprocess.PIPE, stderr=subprocess.PIPE, shell=True)
(output, err) = proc.communicate()

print('upload_code: |%s| output2: |%s| err2: |%s| ' % (upload_code,output,err))


#print('date: |%s| hum: |%s| temp: |%s|' % (p,port,p1))