import cs50
def main():
    h=cs50.get_int()
    height(h)
#print("name: ", end="")
    #name = cs50.get_string()

def height(h):
    if h < 1:
        print("Height: {}".format(h))
        print("please re-enter the height")
        h=cs50.get_int();
        height(h)
    elif h >= 24:
        print("Height:{}".format(h))
        print("please re-enter the height")
        h=cs50.get_int();
        height(h)
    else:
       print("Height:{}".format(h))
       for i in range(2,h+2):
           for k in range(h+2-i,0,-1):
               print(" ",end="")
           for j in range(1,i+1):
               print("#",end="")
           print()

if __name__ == "__main__":
    main()
