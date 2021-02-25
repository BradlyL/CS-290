import cgi, cgitb #importing cgi module, upon some reading cgitb does some detailed reports within your web browser could be useful
#https://docs.python.org/3/library/cgi.html

form = cgi.FieldStorage() #Stores value
password_input = form.getvalue("password_input", "Empty Form") #Grabs value from form
  
print ("Content-type:text/html")
print ("<html>") 
print ("<head>") 
print ("<title>Bradly Landucci</title>") 
print ("</head>") 
print ("<body>") 

#Recursively calls file and changes text on screen.
print ("""
<form method="post" action = "cgi_script.py">
<p>
       Replaces previous message below: 
       <input type = "text" name = "password_input"> 
</p>
</form> """)

#Prints h1 input, Kind of weird that it is saving my previous inputs even after I restart the web server. Not sure how to reset this.
print("<h1>%s</h1>" % (password_input))
print ("</form>")
print ("</body>")
print ("</html>")