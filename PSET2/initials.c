#include<cs50.h>
#include<stdio.h>
#include<string.h>
#include<ctype.h>
int main(void)
{
    string n=get_string();
    //printf("%s",n);
    int i=1;
    int l=strlen(n);
    if(isupper(n[0]))
    {
    printf("%c",n[0]);
    }
    else
    {
        printf("%c",toupper(n[0]));
    }
    while(l-1)
    {
       if(n[i]==' ')
       {
           i++;
           l--;
           if(isupper(n[i]))
           {
           printf("%c",n[i]);
           }
           else
           {
               printf("%c",toupper(n[i]));
           }
       }
       else
       {
           i++;
           l--;
       }
    }
    printf("\n");
}