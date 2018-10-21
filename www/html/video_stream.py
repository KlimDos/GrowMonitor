#!/usr/bin/python
# -*- coding: utf-8 -*-

import serial
import sys
import time
import struct
import subprocess


x = int (sys.argv[1])

if x == 1:

   p = subprocess.call("ffserver -f /etc/ffserver.conf", stdout=subprocess.PIPE, shell=True)


if x == 0:
   p = subprocess.call("killall ffserver", stdout=subprocess.PIPE, shell=True)
