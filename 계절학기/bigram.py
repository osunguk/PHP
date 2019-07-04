#!/Python27/python
# -*- coding: utf-8 -*-
import cgi,cgitb

def bigram(text):
   L=[]
   for t in text.split():
      if len(t)<=1: L.append(t); continue
      for i in range(len(t)-1):
         L.append(t[i:i+2])
      # end for
   # end for
   return ' '.join(L)
# end def

print 'Content-type: text/html\n' # \r\n\r\n
print '<html><head><meta charset=utf-8></head><body>'

cgitb.enable()
form = cgi.FieldStorage()
inputData=form.getvalue('inputData').decode('utf-8')

print bigram(inputData).encode('utf-8')

print '</body></html>'
