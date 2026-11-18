# Create a Bank account with members account number, name, type of account and balance.
# Write constructor and methods to deposit at the bank and withdraw an amount from the bank

class BankAccount:


    def __init__(self, acc_no, name, acc_type, balance):
        self.acc_no = acc_no
        self.name = name
        self.acc_type = acc_type
        self.balance = balance


    def deposit(self, amount):
        self.balance += amount
        print("Deposited:", amount)

    
    def withdraw(self, amount):
        if amount <= self.balance:
            self.balance -= amount
            print("Withdrawn:", amount)
        else:
            print("Insufficient balance")

    
    def display(self):
        print("\n--- Account Details ---")
        print("Account Number:", self.acc_no)
        print("Name:", self.name)
        print("Account Type:", self.acc_type)
        print("Balance:", self.balance)



acc_no = int(input("Enter Account Number: "))
name = input("Enter Name: ")
acc_type = input("Enter Account Type: ")
balance = float(input("Enter Initial Balance: "))

b = BankAccount(acc_no, name, acc_type, balance)
b.display()
d = float(input("\nEnter amount to deposit: "))
b.deposit(d)
w = float(input("Enter amount to withdraw: "))
b.withdraw(w)
print("\nFinal Balance:", b.balance)