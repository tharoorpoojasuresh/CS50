#include<stdio.h>
#include<cs50.h>
#include<string.h>
#include<ctype.h>
int main(int argc,char *argv[])
{
    int d[100];
    if(argc!=2)
    {
        printf("enter with one argument only");
        return 1;
    }
   // printf("%s",argv[1]);
    //printf("%c",argv[1][1]);
   // printf("%lu",strlen(argv[1]));
    long int len=strlen(argv[1]);
    int k[len];
    printf("plaintext: ");
    string p=get_string();
    printf("%s\n",p);
    string c=p;
    //printf("%s\n",c);
    for(int l=0,i=0;i<strlen(p);l++,i++)
    {
        if(l==strlen(argv[1]))
         l=0;
     if((int)argv[1][l]>=97)
     {
         if((int)argv[1][l]<=122)
         {
            k[l]=(int)argv[1][l]-97; 
         }
     }
     else if((int)argv[1][l]>=65)
     {
         if((int)argv[1][l]<=90)
         {
           k[l]=(int)argv[1][l]-65;  
         }
     }
     else
     {
         printf("enter string argument");
         return 1;
     }
      if((int)p[i]>=97)
        {
           if((int)p[i]<=122)
               {
             if((int)p[i]+k[l]<=122)  
              d[i]=(int)p[i]+k[l];
              else
              {
                  d[i]=96+(int)p[i]+k[l]-122;
              }
               }
        }
        else if((int)p[i]>=65)
        {
            if((int)p[i]<=90)
            {
           if((int)p[i]+k[l]<=90)
                   d[i]=(int)p[i]+k[l];
              else
              {
                  d[i]=64+(int)p[i]+k[l]-90;
              }
               }
        }
        else
        {
          d[i]=(int)p[i];
          l=l-1;
        }
         
        c[i]=(char)d[i];
    }
    printf("ciphertext: ");
    printf("%s\n",c);
}