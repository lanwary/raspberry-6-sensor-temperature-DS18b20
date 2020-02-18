#!/usr/bin/env python
import urllib.request
#import httplib2
#import socket
import time
from ds18b20 import DS18B20     
while True :
# test temperature sensors
 x = DS18B20()
 capt1 = x.tempC(0)
 capt2 = x.tempC(1)
 capt3 = x.tempC(2)
 capt4 = x.tempC(3)
 capt5 = x.tempC(4)
 capt6 = x.tempC(5)
 url = "http://192.168.8.100/essai/Value.php?a="+str(capt1)+ \
 "&b="+str(capt2)+ \
 "&c="+str(capt3)+ \
 "&d="+str(capt4)+ \
 "&e="+str(capt5)+ \
 "&f="+str(capt6)


 request = urllib.request.Request(url)
 response = urllib.request.urlopen(request)
 time.sleep(30)




