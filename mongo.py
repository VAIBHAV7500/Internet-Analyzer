from pymongo import MongoClient
import datetime
import time
client = MongoClient('localhost',27017)

while True:
    from analyzer import *
    percentage= readFile()
    db = client['mydb']
    db.posts.drop()
    collection = db.test_collection
    post = {"social": percentage[0],
        "study": percentage[1],
         "video": percentage[2],
        "extra": percentage[3]
        }
    posts = db.posts
    post_id = posts.insert_one(post).inserted_id
    print(post_id)
    time.sleep(5)








    