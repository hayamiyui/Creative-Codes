#Copyright (C) Creative. All rights reserved.
import datetime
import tkinter as tk
import time
import socket
import os
from socket import *
from threading import Thread

server = socket(AF_INET,SOCK_STREAM)
server.bind(("",8080))
PING_RESULT = 0
NETWORK_RESULT = 0
print("Hello World")

def recvsocket():
    response_start_line = "HTTP/1.1 200 OKrn"
    response_headers = "Server"
    response_body = "Hello World"
    response = response_start_line + response_headers + "rn" + response_body

def Disabled():
    result = os.system(u"")

def ping():
    result = os.system(u"192.168.0.1")
    return result

def recvsocket(client_socket):
    recvdata = client_socket.recv(1024)
    print("request data:", recvdata)
    response_start_line = "HTTP/1.1 200 OKrn"
    response_headers = "Server: pycharm serverrn"
    response_boby = "hello world"
    response = response_start_line + response_headers + "rn" + response_boby
    client_socket.send(response.encode("utf-8"))
    client_socket.close()

if __name__ == '__main__':
    Disabled()
    ping()
    while True:
        PING_RESULT = ping()
        if PING_RESULT == 0:
            time.sleep(20)
        else:
            Disabled()
            time.sleep(10)
    server = socket(AF_INET,server.accept)
    childthread = Thread(target=recvsocket, args=(client_socket,))
    childthread.start()


