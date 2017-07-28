#include<cs50.h>
#include<stdio.h>
#include<string.h>
#include<ctype.h>
#include<math.h>
int main(int argc, char *argv[])
{
    if(argc!=2)
    {
     printf("enter only one argument");
     return 1;
    }
    else
    {
        int k=atoi(argv[1]); 
        //printf("%i",k);
        string c=NULL;
        int d[100];
        printf("plaintext: ");
        string p=get_string();
        //printf("%s\n",p);
        c=p;
        /*printf("%s",c);
        printf("%c",p[4]);
        printf("%li",strlen(p));*/
       for(int i=0;i<strlen(p);i++)
        {
            //printf("%c",c[i]);
           //int o=(int)c[0];
           //printf("%i",o);
           //printf("%i\n",(int)p[i]);
           if((int)p[i]>=97)
           {
               if((int)p[i]<=122)
               {
             if((int)p[i]+k<=122)  
              d[i]=(int)p[i]+k;
              else
              {
                  d[i]=96+(int)p[i]+k-122;
              }
               }
           }
           else if((int)p[i]>=65)
           {
               if((int)p[i]<=90)
               {
                   if((int)p[i]+k<=90)
                   d[i]=(int)p[i]+k;
              else
              {
                  d[i]=64+(int)p[i]+k-90;
              }
               }
           }
           else
            d[i]=(int)p[i];
           c[i]=(char)d[i];
        }
        printf("ciphertext: ");
        printf("%s\n",c);
    }
}