# add 'ing' at the end of a given string if alredy ends with 'ing' then add 'ly'
string=input("Eter a string  ==>")
length=len(string)
if length>2:
    if string[-3:] == "ing":
        string+="ly"
    else:
        string+="ing"
    print("the string =>",string)
else:
    print("the string is too short")
