import cgi, cgitb #importing cgi module, upon some reading cgitb does some detailed reports within your web browser could be useful
#https://docs.python.org/3/library/cgi.html

form = cgi.FieldStorage() #Stores value
password_input = form.getvalue("password_input", "Empty Form") #Grabs value from form

print ("Content-type:text/html")
print ("<html>") 
print ("<head>") 
print ("<title>Bradly Landucci</title>") 

#Why do javascript functions not work in this???
#print ("""
#<script>
#function pass_input() {
#    var submit_value;  // Kept trying to run this variable outside of function and I realized why that didn't make sense..
#    var text;
#    var password_1 = "password";
#
#    submit_value = document.getElementById("code").value;
#   
#    if (submit_value == password_1) {
#        text = "Correct."
#        window.location.href = './Subpages/Subpage_1.html';
#    } else {
#        text = "Incorrect.";
#    }
#
#    document.getElementById("password_reveal").innerHTML = text;
#    console.log("Password_input function is working.");
#}
#</script>""")

print ("</head>") 
print ("<body>") 

#Form #1 Recursively calls file and changes text on screen.
print ("""
<form method="post" action = "cgi_script.py">
<p>
       Replaces previous message below: 
       <input type = "text" name = "password_input"> 
</p>
</form> """)


#Prints input
print("<h1>%s</h1>" % (password_input))

#Takes you to next page.
print("""<a href = "http://localhost:8000/cgi-bin/cgi_script_2.py?first=Bradly&last=Landucci">Link to next page</a>""")

print ("</body>")
print ("</html>")