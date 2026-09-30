a=int(input("Enter a number"))
b=int(input("Enter a number"))
while b!=0:
	a,b=b,a%b
print("GCD = ",a)
