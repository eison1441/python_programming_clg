#  Create a class Time with private attributes hour, minute and second. Overload ‘+’ operator to 
# find sum of 2 time. 

class Time:
    def __init__(self, hour, minute, second):
        self.__hour = hour
        self.__minute = minute
        self.__second = second

    def __add__(self, other):
        sec = self.__second + other.__second
        minute = self.__minute + other.__minute
        hour = self.__hour + other.__hour

        minute = minute + sec // 60
        sec = sec % 60

        hour = hour + minute // 60
        minute = minute % 60

        return Time(hour, minute, sec)

    def display(self):
        print(self.__hour, ":", self.__minute, ":", self.__second)


t1 = Time(2, 30, 40)
t2 = Time(1, 40, 30)

print("First Time:")
t1.display()

print("Second Time:")
t2.display()

t3 = t1 + t2

print("Sum of Two Times:")
t3.display()
