#!/usr/bin/python
import time
import sys


from subprocess import STDOUT, check_output



x = str (sys.argv[1])

output = check_output(["/home/sasha/TnH/tnh_main.py", x], shell=False, stderr=STDOUT, timeout=20)


print (output,x)
print ("real input")