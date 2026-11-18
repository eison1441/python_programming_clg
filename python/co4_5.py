# 5) Create a class Publisher (name). Derive class Book from Publisher with attributes title  and 
# author. Derive class Python from Book with attributes price and no_of_pages. Write  
# a 
# program that displays information about a Python book. Use base class constructor invocation and 
# method overriding. 
class Publisher:
    def __init__(self, name):
        self.name = name

    def display(self):
        print("Publisher:", self.name)


class Book(Publisher):
    def __init__(self, name, title, author):
        super().__init__(name)
        self.title = title
        self.author = author

    def display(self):
        print("Publisher:", self.name)
        print("Book Title:", self.title)
        print("Author:", self.author)


class PythonBook(Book):
    def __init__(self, name, title, author, price, no_of_pages):
        super().__init__(name, title, author)
        self.price = price
        self.no_of_pages = no_of_pages

    def display(self):
        super().display()
        print("Price:", self.price)
        print("Number of Pages:", self.no_of_pages)


p = PythonBook("ABC Publications", "Python Programming",
               "John", 450, 300)

print("Python Book Details")
p.display()