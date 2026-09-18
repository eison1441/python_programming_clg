square = lambda a: a * a
rectangle = lambda l, b: l * b
triangle = lambda b, h: 0.5 * b * h

s = float(input(" square side: "))
print("Area of square:", square(s))
l = float(input(" rectangle length: "))
b = float(input(" rectangle breadth: "))
print("Area of rectangle:", rectangle(1, b))
b = float(input("triangle base: "))
h = float(input(" triangle height: "))
print("Area of triangle:", triangle(b, h))