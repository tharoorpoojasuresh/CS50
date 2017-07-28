#include<cs50.h>
#include<stdio.h>
int main(void)
{
    long long r=0;
    int c=0,sum=0;
    int d,l,l1,l2;
    long long n=get_long_long();
    //printf("%lld",n);
    while(n>0)
    {
       d=n%10;
       r=r*10+d;
       c++;
       n=n/10;
    }
    //printf("rev %lld",r);
    //printf("c: %i",c);
    if(c%2==0)
    {
        while(n>0)
        {
            d=n%10;
            d=d*2;
            sum=sum+d;
            n=n/10;
            d=n%10;
            sum=sum+d;
            n=n/10;
        }
    }
    else
    {
      while(n>0)
        {
            d=n%10;
            sum=sum+d;
            n=n/10;
            d=n%10;
            d=d*2;
            sum=sum+d;
            n=n/10;
        }  
    }
    l=sum%10;
    if(l==0)
    {
      l1=r%10;
      if(c==15 && l1==3)
      {
          r=r/10;
          l2=r%10;
          if(l2==44 || l2==7)
          {
              printf("AMEX\n");
          }
          else
          {
              printf("INVALID\n");
          }
      }
      else if(c==16 && l1==5)
      {
          r=r/10;
          l2=r%10;
          if(l2==1 || l2==2 || l2==3 || l2==4 || l2==5)
          {
              printf(",MASTERCARD\n");
          }
          else
          {
              printf("INVALID\n");
          }
      }
      else if((c==13 || c==16) && l1==4)
      {
          printf("VISA\n");
      }
      else
      {
          printf("INVALID\n");
      }
    }
}