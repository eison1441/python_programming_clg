with open("python/sample.txt","r")as f1,open("python/odd.txt","w")as f2:
    count=1
    for l in f1:
        if count%2!=0:
            f2.write(l)
        count+=1
    print("Odd line print!!!!!!")

lines=[]

with open("python/odd.txt","r")as f3:
    for li in f3:
        lines.append(li.strip())
    print(lines)
        