#!/usr/bin/python 
  
# Import CGI and CGIT module 
import cgi, cgitb

# to create instance of FieldStorage  
# class which we can use to work  
# with the submitted form data 
form = cgi.FieldStorage()       
password_input = form.getvalue("password_input", "Empty Form")     
  
print ("Content-type:text/html")
print ("<html>") 
print ("<head>") 
print ("<title>Bradly Landucci</title>") 
print ("</head>") 


print ("<body>") 
print ("""
<form method="post" action = "cgi_script.py">
<p>
       Replaces previous message below: 
       <input type = "text" name = "password_input">
</p>
</form> """)
print("<h1>%s</h1>" % (password_input))
print ("</form>")
print ("</body>")
print ("</html>")
