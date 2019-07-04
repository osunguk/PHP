#!/Python27/python
# -*- coding: utf-8 -*-
import cgi

print 'Content-type: text/html\n' # \r\n\r\n

print '<html><body>'

form = cgi.FieldStorage()
inputData=form.getvalue('inputData').decode('utf-8')

print len(inputData)

print '</body></html>'
"""
#!/Python27/python
# -*- coding: utf-8 -*-
import cgi

print 'Content-type: text/html\n' # \r\n\r\n

print '<html><body>'

form = cgi.FieldStorage()
inputData=form.getvalue('inputData').decode('utf-8')

print len(inputData)

print '</body></html>'
"""