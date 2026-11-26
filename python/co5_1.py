lines=[]

with open("python/sample.txt","r") as file:
    for l in file:
        lines.append(l)
print(lines)