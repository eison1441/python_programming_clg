# count the number of characters in a string
string=input("Enter a string:")
d={}
for i in string:
    if i in d:
        d[i]+-1
    else:
        d[i]=1
print("character frequency = ",d)