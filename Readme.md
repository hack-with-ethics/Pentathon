# Pentathon 2024
# Approach
# Task 1.Discover Ip
        First Task is to Discover the ip because the machine does not disclose the Ip address 
        so i used Netdiscover Tool
        
        # Command
        ----------------
        sudo netdiscover
        -----------------
# Task 2. Scan the Ip Address with Network Scanners[Nmap]:

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
        
                        
