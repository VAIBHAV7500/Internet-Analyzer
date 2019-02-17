import time
from datetime import datetime as dt

hosts_file=r"C:\Windows\System32\Drivers\etc\hosts"
toggle_file =r"C:\\xampp\htdocs\dashboard\toggle.txt"
local="127.0.0.1"
website_list=["www.facebook.com","facebook.com","www.twitter.com","twitter.com"]


while True:
    
    file = open(toggle_file, 'r+') 
    data = file.read()
    print(data)
    if (data=='1'):
        print("The social services are blocked now!!!")
        with open(hosts_file,'r+') as file:
            content=file.read()
            for website in website_list:
                if website in content:
                    pass
                else:
                    file.write(local+" "+ website+"\n")
    else:
        print("Enjoy the social services!!!")
        with open(hosts_file,'r+') as file:
            content=file.readlines()
            file.seek(0)
            for line in content:
                if not any(website in line for website in website_list):
                    file.write(line)
            file.truncate()
    time.sleep(2)