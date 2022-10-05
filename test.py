import requests
import json
from bs4 import BeautifulSoup
import os
import shutil
print("stage1")
port="29292"
def check_path(path):
    if os.path.isdir(path)==False:
        temp=path[0:path.rfind("/")]
        check_path(temp)
        os.mkdir(path)
    else :
        
        return


print("stage2")

context=""
map="http://127.0.0.1:"+port+"/igem6/map.php"
try:
    go=requests.get(map, timeout = 30)
    if  go.status_code == 200:
        status=1
        context=go.text
    else :
        error=go.status_code
except requests.exceptions.RequestException as e:
    status=0
    exit()
all_php=context.split('\n')
all_php.pop()
goal="http://127.0.0.1:"+port+"/igem6"
# for i in range(0,total-1):#for迴圈格式
    #if "Gold" in allteam[i]:

print("stage3")
status=0
for file in all_php:
    try:
        go=requests.get(goal+file, timeout = 30)
        if  go.status_code == 200:
            status=1
            context=go.text
            if file[-4:]==".php":
                file=file[0:-4] + '.html'
            path = "../igem6_final"
            path=path+file[0:file.rfind("/")]
            check_path(path)
            path+=file[file.rfind("/"):]
            if file[-4:]==".jpg" or file[-4:]==".png" or file[-4:]==".ttf" or file[-4:]==".ico":
                shutil.copyfile(os.getcwd()+"/"+file, path)
            else:
                f = open(path, 'w+',encoding = "UTF-8",newline='')
                # print(context)
                f.write(context.strip())
                f.close()
        else :
            error=go.status_code
    except requests.exceptions.RequestException as e:
        status=0
        print(e)
        # if key_word in content: #查找是否存在
        #     print("======================================================")
        #     if status==1 :
        #         print(goal+team+"/Description",file=f)
        #     elif status==2 :
        #         print(goal+team+"/Project",file=f)
        #     elif status==3 :
        #         print(goal+team+"/Applied_Design",file=f)
print("end")



