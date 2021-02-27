import cgi, cgitb #importing cgi module, upon some reading cgitb does some detailed reports within your web browser could be useful
#https://docs.python.org/3/library/cgi.html

form = cgi.FieldStorage()

first = form.getvalue('first') #Grabs value from URL.
last = form.getvalue('last')   #Grabs value from URL.

print ("Content-type:text/html")

print ("<html>") 
print ("<head>") 

print ("<title>Bradly Landucci</title>") 

print ("</head>") 
print ("<body>") 

print ("""
<form method="post" action = "cgi_script.py">
</form> """)

#Prints h1 input, Kind of weird that it is saving my previous inputs even after I restart the web server. Not sure how to reset this.

print("<p>Hello %s %s</p>" % (first, last))

print("""<a href = "http://localhost:8000/cgi-bin/cgi_script.py">Link to previous page</a>""")

print ("</body>")
print ("</html>")