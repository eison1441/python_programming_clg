#create a base class student with attributes student name , age and a derived class sem1 (mark ) and derive another class result (grade ) and display all the details using method overriding?
class Student:
    def __init__(self,name,age):
        self.name=name
        self.age=age
    def display(self):
        print("Name :",self.name)
        print("Age :",self.age)

class Sem1(Student):
    def __init__(self,name,age,mark):
        super().__init__(name,age)
        self.mark=mark
    def display(self):
        print("Name :",self.name)
        print("Age :",self.age)
        print("Mark :",self.mark)

class Result(Sem1):
    def __init__(self, name, age, mark,grade):
        super().__init__(name, age, mark)
        self.grade=grade
    def display(self):
        print("Name :",self.name)
        print("Age :",self.age)
        print("Mark :",self.mark)
        print("Grade :",self.grade)


s=Result("Eison",23,"100","S")

s.display()
