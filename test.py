import requests
import json
from bs4 import BeautifulSoup
year_number=2015
# print("key_word:")# 輸出
#key_word=input()
# key_word="allulose"

# start_index = 0
# end_index = 0
# print("loading")

# allteam=[]
 #開檔
# all_text=f.read() #讀檔
# f.close() #關檔
# status=0
# # allteam=all_text.split('\n') #切字
# total=len(allteam) #計算陣列長度

# path = 'answer.txt'
# f = open(path, 'w')

# str() #轉成字串
# for j in range(0,5):
context=""
map="http://127.0.0.1:60000/igem6/map.php"
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

all_php=context.split(' ')
goal="http://127.0.0.1:60000/igem6"
# for i in range(0,total-1):#for迴圈格式
    #if "Gold" in allteam[i]:
status=0
for file in all_php:
    try:
        go=requests.get(goal+file, timeout = 30)
        if  go.status_code == 200:
            status=1
            context=go.text
            file=file[0:-4] + '.html'
            path = "." + file
            f = open(path, 'w+')
            print(context,file=f)
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