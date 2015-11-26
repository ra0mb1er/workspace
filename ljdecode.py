#! /usr/bin/env python 
# -*- coding: utf-8 -*-
import urllib
import sys
import base64
if __name__ == '__main__':
    mm=sys.argv[1]
    murl= urllib.unquote(mm)
    print "[+decode:]"+murl
    m1base64=base64.b64decode(murl)
    print "[+decode:]"+m1base64
    m1base64=m1base64[1:]
    print "[+decode:]"+m1base64
    while m1base64.find('%')==-1:
           m1base64=base64.b64decode(m1base64)
    print '\033[1;31;40m'
    print '[+result:]',urllib.unquote(m1base64)
    print '\033[0m'
