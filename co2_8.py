li=[]
limit = int(input("enter the limit"))
for i in range(limit):
    word = input("enter the world")
    li.append(word)
print(li)
length = 0
longword =""
for i in li:
    if len(i) > length:
        length = len(i)
        longword = i
        print(longword)
        print(length)    