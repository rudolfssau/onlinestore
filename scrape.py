from bs4 import BeautifulSoup
import requests
import json
path = requests.get("https://www.sainsburys.co.uk/webapp/wcs/stores/servlet/MobileHomeView?storeId=10151&langId=44&krypto=Y30ozjAso0U4Saj0mxhJ8Q%2FJ0g8CMRXeDD67iqTUMYBS9kD8fnnz4Cjv4i7oY0WVw6uVFs2c5ARnI9bZDwaCNLBJXvelhHMudz3cCXzJFTZnzEeW16IiBwWYiMxFSUynyevYXEuYgFRWNQ%2B%2FEuWLV8GrNuB8YqWTIVipL59exIg%3D&ddkey=https%3AMobileHomeView")
soup = BeautifulSoup(path.content, 'html.parser')
item = soup.findAll("div", {"class" : "productESpot gridItem"})
res = []
for item in soup.findAll("div", {"class" : "productESpot gridItem"}):
    for getatag in item.findAll("img"):
        info = {"Url": getatag["src"]}
        res.append(info)
print(res)
# with open("res.json", "w", encoding='utf-8') as file:
#     file.write(str(res))
with open("res.json", "w") as write_file:
        json.dump(res, write_file, indent=4)