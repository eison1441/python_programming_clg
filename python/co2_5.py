# dispaly the given piramid WITH step number accepted from user
l=int(input("Enter a Number =>"))
for i in range(1,l+1):
    for j in range(1,i+1):
        print(i*j,end=" ")
    print()
