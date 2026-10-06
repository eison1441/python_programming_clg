word = input("Enter a string: ")
first = word[0]
result = first + word[1:].replace(first, '$')
print(result)