list1=input("Enter color list11 =>").split()
list2=input("Enter color listt2 =>").split()
result=[x for x in list1 if x not in list2]
print(result)
