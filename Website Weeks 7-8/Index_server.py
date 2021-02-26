import http.server
import socketserver

#Not quite sure if I can make this page much different than your own code. seems straight forward.

Server_PORT = 8000
handler = http.server.CGIHTTPRequestHandler

#Tried to clean up as far as I could go, or just doing it in a different way. could go further to just remove variables since I'm not planning on changing anything.
#I suppose that would make it just less appealing to the eyes though.

if __name__ == "__main__":
    http.server.HTTPServer(("", Server_PORT), handler).serve_forever()