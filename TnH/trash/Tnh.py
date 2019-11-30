#!/usr/bin/python
# -*- coding: utf-8 -*-

import serial
import sys
import time
import struct

port = "/dev/ttyACM2"

baudrate = 9600

# if len(sys.argv) == 3:
#     ser = serial.Serial(sys.argv[1], sys.argv[2])
# else:
#     print "# Please specify a port and a baudrate"
#     print "# using hard coded defaults " + port + " " + str(baudrate)
ser = serial.Serial(port, baudrate)
time.sleep(2)
ser.write(struct.pack('>B',205))
hum = ser.readline().strip()
temp = ser.readline().strip()
print('hum: %s, temp: %s' % (hum, temp))
ser.close()  