# 1. Create Rectangle class with attributes length and breadth and methods to find area and
# perimeter. Compare two Rectangle objects by their area

class rectangle:

    def __init__(self,length,breadth):
        self.length=length
        self.breadth=breadth
    def area(self):
        return (self.length*self.breadth)
    def perimeter(self):
        return(2*(self.length+self.breadth))
r1=rectangle(10,20)
r2=rectangle(20,30)

print("Area of r1",r1.area())
print("Area of r2",r2.area())
print("perimeter of r1",r1.perimeter())
print("perimeter of r2",r2.perimeter())

if r1.area()>r2.area():
    print("Area of r1 is greater than area of r2")
else:
    print("Area of r2 is greater than area of r1")