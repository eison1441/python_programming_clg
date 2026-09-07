# genarate a list of 4 digit number in a giveen range with all there digit even and the number is a prefect square without using function
import math 
for i in range(1000,10000):
    sqroot= int(math.sqrt(i))
    if sqroot*sqroot==i:
        if all (int(digit) % 2 == 0 for digit in str(i)):
            print(i)