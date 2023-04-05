#Copyright (C) 2023 Creative. All rights reserved.
import tkinter
import tkinter as tk
from idlelib import window
from tkinter import ttk, Tk, FLAT
import os
import sys
import platform
import threading
import subprocess
import datetime
import time
import socket
import platform

if('Windows' == platform.system()):
    print('Windows')
elif('Linux' == platform.system()):
    print('Linux')
else:
    print('Others')

curr_time = datetime.datetime.now()
timestamp = curr_time.date()

PLANT = platform.system()
DEV_NULL = open(os.devnull)
PING_RESULT = []

match PLANT:
    case 'MacOS':
        PING_ARGS = ['ping','-n','-w','1']
    case _:
        PING_ARGS = ['ping','-c','1','-w','1']

root = Tk()
root.title('Creative Hub')
root.geometry('852x480+150+100')

def label(root, text, font, fg):
    pass

la1= tk.Label(root,text='Whats New?')
la1.pack()
la2 = tk.Label(root,text='The Story of Jasmine')
la2.place(x=120,y=145)
la3 = tk.Label(root,text='Love Girlfriend')
la3.place(x=140,y=200)
la4 = tk.Label(root,text='Creative Engine')
la4.place(x=140,y=255)
root.resizable(0,0)

#button
btn1 = tkinter.Button(text='PLAY',width=5,height=2)
btn1.place(x=520,y=145)
btn2 = tkinter.Button(text='PLAY',width=5,height=2)
btn2.place(x=520,y=200)
btn3 = tkinter.Button(text='RUN',width=5,height=2)
btn3.place(x=520,y=255)

menubar = tk.Menu(root)

#file menu
filemenu = tk.Menu(menubar,tearoff=0)
menubar.add_cascade(label='File',menu=filemenu)
filemenu.add_command(label='New')
filemenu.add_command(label='Open')
filemenu.add_command(label='Save')

#edit menu
editmenu = tk.Menu(menubar,tearoff=0)
menubar.add_cascade(label='Edit',menu=editmenu)
editmenu.add_command(label='Cut')
editmenu.add_command(label='Copy')
editmenu.add_command(label='Paste')
editmenu.add_command(label='Undo')

#view menu
viewmenu = tk.Menu(menubar,tearoff=0)
menubar.add_cascade(label='View',menu=viewmenu)

#go menu
gomenu = tk.Menu(menubar,tearoff=0)
menubar.add_cascade(label='Go',menu=viewmenu)

host = '127.0.0.1'
port = 8000
addr = (host,port)

server = socket.socket(socket.AF_INET,socket.SOCK_STREAM)
server.bind(addr)
server.listen(3)

server_socket = socket.socket(socket.AF_INET,socket.SOCK_STREAM)
server_socket.listen(128)

class Servers(object):
    def _akane_(self,ip,port):
        self.socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        self.socket.bind((ip, port))
        self.socket.listen(128)
    def runner(self):
        while True:
            client_socket,client_addr = self.socket.accept()
            data = client_socket.recv(1024).decode('gbk')
            path = ''
            if data:
                path = data.splitlines()[0].split()[1]

root.config(menu = menubar)
root.mainloop()

def print_hi(name):
    print(f'Hi, {name}')  # Press ⌘F8 to toggle the breakpoint.

# Press the green button in the gutter to run the script.
if __name__ == '__main__':
    print_hi('PyCharm')
