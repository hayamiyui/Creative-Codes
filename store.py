import socket
import sys
import tkinter
from distutils.command.config import config
from logging import root
from tkinter import *
import os
import tkinter as tk
from tkinter import Tk,Menu
from tkinter import Tk
import ipaddress
import socket

def network():
    hostname = 'www.youtube.com'
    response = os.system('ping -c 1 {}'.format(hostname))
    if response == 0:
        print("".format(hostname))
    else:
        print("".format(hostname))
def center_window(root, width, height):
    screenwidth = root.winfo_screenwidth()
    screenheight = root.winfo_screenheight()
    size = '%dx%d+%d+%d' % (width, height, (screenwidth - width) / 2, (screenheight - height) / 2)
    root.geometry(size)
def main():
    root = Tk()
    root.title("Creative Store")
    width = 600
    height = 360
    center_window(root, width, height)
    counter = 0
    menubar = Menu(root)
    filemenu = Menu(menubar, tearoff=False)
    filemenu.add_command(label="New")
    filemenu.add_command(label="Open")
    filemenu.add_command(label="Save")
    filemenu.add_command(label="Quit")
    menubar.add_cascade(label="File", menu=filemenu)
    root.config(menu=menubar)
    root.mainloop()
def ipaddress():
    try:
        ip = ipaddress.IPv4Address(sys.argv[1])
        print('%s is a correct IP%s address.' %(ip,ip.version))
    except ValueError:
        print('address.netmask is invalid: %s' % sys.argv[1])
    except:
        print('Usage: %s ip' % sys.argv[0])

PATH = os.environ
for key in PATH:
    print(key,PATH[key])

if __name__ == '__main__':
    main()
    network()
    ipaddress()
