# Pentathon 2024
# Approach
# Task 1.Discover Ip
        First Task is to Discover the ip because the machine does not disclose the Ip address 
        so i used Netdiscover Tool
        
        # Command
        sudo netdiscover
# Task 2. Scan the Ip Address with Network Scanners[Nmap]:

        #Command:
        nmap -sV -sC -vv -A -oN namp.txt 192.168.1.39
        -sV - Version Detection
        -sC - Default Scripts
        -oN - Output File Spec
        -vv  - Verbose
        -A - Aggressive Scan and For os Detection
        Finally:
                Ip Address
                
