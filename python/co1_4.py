line=input("Enter a Line =>")
words=line.split()
count={}
for word in words:
        if word in count:
                count[word]=count[word]+1
        else:
                count[word]=1
print(count)
