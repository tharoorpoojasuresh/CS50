import cs50
import sys
if len(sys.argv) != 2:
       print("Usage: python caesar.py k")
       exit(1)
else:
        k = int(sys.argv[1])
        #print("{}".format(k))
        c=[None] * 100
        d=[None] * 100
        #print("{}".format(len(d)))
        print("plaintext: ",end="")
        p=cs50.get_string()
        #print("{}".format(p))
        #c=p
        for i in range(0,len(p)):
           if ord(p[i]) >= 97:
               if ord(p[i]) <= 122:
                 if (ord(p[i]) + k) <= 122:
                   d[i]=ord(p[i]) + k
                   #print("{}".format(d[i]))
                 else:
                   d[i]=96 + ord(p[i]) + k - 122
                   #print("{}".format(d[i]))
           elif ord(p[i]) >= 65:
               if ord(p[i]) <= 90:
                   if (ord(p[i]) + k) <= 90:
                      d[i]=ord(p[i]) + k
                      #print("{}".format(d[i]))
                   else:
                      d[i]=64 + ord(p[i]) + k - 90
                      #print("{}".format(d[i]))
           else:
            d[i]=ord(p[i])
           c[i]=chr(d[i])
        print("ciphertext: ",end="")
        for i in range(0,len(p)):
         print("{}".format(c[i]),end="")