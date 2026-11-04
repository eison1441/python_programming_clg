a=int(input("Enter a number to find factorial =>"))
fact=1
for i in range(1,a+1):
	fact=fact*i
print("Factorial of",a,"=",fact)
