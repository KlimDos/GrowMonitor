#!/usr/bin/python
# -*- coding: utf-8 -*-
import sys
import time
import subprocess
#
#-parameter 1 - light ; parameter 2 - mositure---------------------------------------------------------------------------------------------------------------
#
x = int (sys.argv[1])



#getting apruino device name
p = subprocess.Popen("ls /dev/ |grep ttyA", stdout=subprocess.PIPE, shell=True)
(output, err) = p.communicate()
port = "/dev/"+ output.strip()

print(port)


if x == 1:
  #-----------upload sketch light--------------
  upload_code = "avrdude -q -V -D -p atmega328p -C /usr/share/arduino/hardware/tools/avr/../avrdude.conf -c arduino -b 115200 -P "+port+" -U flash:w:/home/sasha/sketchbook/light/build-uno/light.hex:i" 
  proc = subprocess.Popen(upload_code, stdout=subprocess.PIPE, stderr=subprocess.PIPE, shell=True)
  (output, err) = proc.communicate()

  time.sleep(2)
  #-------------------------

if x == 2:
  #-----------upload sketch light--------------
  upload_code = "avrdude -q -V -D -p atmega328p -C /usr/share/arduino/hardware/tools/avr/../avrdude.conf -c arduino -b 115200 -P "+port+" -U flash:w:/home/sasha/sketchbook/mositure/build-uno/mositure.hex:i" 
  proc = subprocess.Popen(upload_code, stdout=subprocess.PIPE, stderr=subprocess.PIPE, shell=True)
  (output, err) = proc.communicate()

  time.sleep(2)
  #-------------------------


print('upload_code: |%s| output2: |%s| err2: |%s| ' % (upload_code,output,err))

