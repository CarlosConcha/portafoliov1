﻿using System;
using System.Runtime.InteropServices;
using System.Text;

namespace ProcesoPractica.controlador
{
    /// <summary>
    /// Create a New INI file to store or load data
    /// </summary>
    class IniFile
    {
        [DllImport("kernel32.dll")]
        private static extern int WritePrivateProfileString(string ApplicationName, string KeyName, string StrValue, string FileName);
        [DllImport("kernel32.dll")]
        private static extern int GetPrivateProfileString(string ApplicationName, string KeyName, string DefaultValue, StringBuilder ReturnString, int nSize, string FileName);


        public static void WriteValue(string SectionName, string KeyName, string KeyValue, string FileName)
        {
            WritePrivateProfileString(SectionName, KeyName, KeyValue, FileName);
        }

        public static string ReadValue(string SectionName, string KeyName, string FileName)
        {
            StringBuilder szStr = new StringBuilder(255);
            GetPrivateProfileString(SectionName, KeyName, "", szStr, 255, FileName);
            return szStr.ToString().Trim();
        }
    }
}