# you can also use this to change height/width but css have property which contain the keyword
# E.g. : line-height , comments which contain the keyword
# It will let the code have error . To avoid this , add line.find(property) == -1 to find keyword line


from os import rename # switch temp file back to css

css_file = open('temp.css') # open old css file 
temp_file = open('temp.txt','a') # open temp file for storing code

for line in css_file:
    if line.find("width") != -1:
        line = line.replace("px;","").replace("width: " , "").replace(" ","") # remove other words
        line = float(line)/320*100 # transfer from pixel to percentage
        temp_file.write(f"            width: {line}%; \n") # write new code to temp file

    elif line.find("left") != -1: # find keyword
        line = line.replace("px;","").replace("left: " , "").replace(" ","") # remove other words
        line = float(line)/320*100 # transfer from pixel to percentage
        temp_file.write(f"            left: {line}%; \n") # write new code to temp file

    elif line.find("top") != -1: # find keyword
        line = line.replace("px;","").replace("top: " , "").replace(" ","") # remove other words
        line = float(line)/320*100 # transfer from pixel to percentage
        temp_file.write(f"            top: {line}%; \n") # write new code to temp file
    
    else:
        temp_file.write(line) # write original code to temp file
    
    


rename('temp.txt','temp1.css') # rename back to css