# Python program to read in json files for
# language conversion application

import json

# open the english, french and pirate json files
with open("languages-english.json") as f1, open("languages-french.json") as f2, open("languages-pirate.json") as f3:
    # create dicts from json objs
    data1 = json.load(f1)
    data2 = json.load(f2)
    data3 = json.load(f3)

# function takes a language key string as an arg
def string_translator(keyString):
    # find out which file we are going to use
    print('English or French or Pirate?')
    selection = input().upper()
    # access the english file
    if selection == 'ENGLISH':
        for i in data1[keyString.upper()]:
            print(i, end='')
    # access the french file
    elif selection == 'FRENCH':
        for i in data2[keyString.upper()]:
            print(i, end='')
    # access the pirate file
    elif selection == 'PIRATE':
        try:
            for i in data3[keyString.upper()]:
                print(i, end='')
        # if the keyString isn't found, use english string
        except KeyError:
            for i in data1[keyString.upper()]:
                print(i, end='')  
    # handle invalid inputs
    else:
        print('Sorry, translation not available')

# close the files
f1.close()
f2.close()
f3.close()

