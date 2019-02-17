from substring import substring
path = r'C:\Users\Vaibhav\AppData\Local\Google\Chrome\User Data\Default\History'
def score(content,array):
    sum=0
    for website in array:
        sum+=substring(content,website)
    return sum

def readFile():
    f = open(path, 'rb')
    data = f.read()
    f.close()
    f = open('history.txt', 'w')
    f.write(repr(data))
    f.close()
    count=0
    social=["facebook","whatsapp","instagram","twitter","linkedin","wechat","pinterest","tumblr","flickr","reddit","snapchat"]
    study=["wikipedia","google","stackoverflow","w3school","nptel","bombayx","udemy","archive","edx","coursera","cosmolearning","bigthink","codeforces","hackerrank"]
    videos=["youtube","videomate","video"]
    website_list=[".com",".in",".org",".net",".int",".edu",".mil"]
    
    with open('history.txt','r') as file:
        content=file.read()
    social_score= score(content,social)
    study_score=score(content,study)
    video_score=score(content,videos)
    total_score=score(content,website_list)
    social_percentage= (social_score/total_score)*100
    study_percentage= (study_score/total_score)*100
    video_percentage=(video_score/total_score)*100
    extra_percentage=(100-(social_percentage+study_percentage+video_percentage))
    print("Use of Social Networking: ")
    print( social_percentage)
    print("%\n")
    print("Use of Study websites: ")
    print(study_percentage)
    print("%\n")
    print("Use of Video: ")
    print(video_percentage)
    print("%\n")
    print("Other Websites: ")
    print(extra_percentage)
    print("%\n")
    percentage = [social_percentage , study_percentage , video_percentage, extra_percentage]
    return percentage
