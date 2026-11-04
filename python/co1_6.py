names=input("Enter names :").split()
count=0
for name in names:
    count+=name.lower().count('a')
print(" Number of a =",count)
