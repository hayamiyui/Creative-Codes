using System;
using System.Diagnostics;
using System.Diagnostics.Eventing.Reader;
using System.Net.NetworkInformation;
using System.Runtime.InteropServices;
using System.IO;
using System.Net;
using System.Net.Sockets;
using System.Security.Cryptography.X509Certificates;
using System.Text;
using System.Threading;

namespace Demo
{
    internal class Program
    {
        private string host = "youtube.com";
        private Ping _ping = new Ping();
        private StringBuilder sbuilder;
        [DllImport("sensapi.dll", SetLastError = true)]
        private static extern bool IsNetworkAlive(out int connectionDescription);
        private static extern bool InternetGetConnectedState(ref IntPtr dwFlag, int dwReserved);
        private const int LanNetworkConnectedFlag = 1;
        public static bool IsConnected
        {
            get
            {
                var isNetworkConnected = IsNetworkAlive(out int flags);
                int errCode = Marshal.GetLastWin32Error();
                if (errCode != 0)
                {
                    Console.WriteLine($"error.");
                }
                if (isNetworkConnected && flags == LanNetworkConnectedFlag)
                {
                    var dwFlag = new IntPtr();
                    isNetworkConnected = InternetGetConnectedState(ref dwFlag, 0);
                    errCode = Marshal.GetLastWin32Error();
                }
                return IsConnected;
            }
        }
        
        public partial class TCP
        {
            #region MyRegion

            private TcpClient _tcpClient = null;
            private NetworkStream _networkStream = null;
            private BinaryWriter _writer;
            private const int Port = 8080;
            private  IPAddress _ipaddress = IPAddress.Loopback;
            private byte[] buffer;
            private string Send;
            #endregion
        }
        
        public static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
            Console.ReadKey();
            Console.ReadLine();
            Console.WriteLine("Size of int [0]");
            dynamic akane = 20;
            String str = "youtube.com";
            int i = 75;
            float f = 50f;
            double d = 1998.1030;
            bool b = true;
            int Akane = 20;
            int Ayano = 30;
            int cust;
            cust = Akane + Ayano;
            Console.WriteLine("",cust);
            int def = 21;
            int bef = 10;
            if (def == bef)
            {
                Console.WriteLine("a = b");
            }

            bool tohru = true;
            bool dragon = true;
            if (tohru && dragon)
            {
                Console.WriteLine("true");
            }

            Process[] processes = Process.GetProcessesByName("notepad");
            
        }

        public double length;
        public double width;

        public double GetArea()
        {
            return length * width;
        }

        public int Max(int num1, int num2)
        {
            int result;
            if (num1 > num2)
                result = num1;
            else
                result = num2;
            return result;
        }
    }
    
    class Akane
    {
        private double width;
        private double height;

        public void Ayano()
        {
            width = 1280;
            height = 720;
        }

        public double Area()
        {
            return height * width;
        }
    }
}
