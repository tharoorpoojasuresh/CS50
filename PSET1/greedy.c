#include<cs50.h>
#include<stdio.h>
void cal(float n)
{
    int c=0;
  if(n<=0.009) 
  {
    printf(" How much change is owed?\n");
    float m=get_float();
    cal(m);  
  }
  else
  {
      while(n>0.009)
      {
          if(n>=0.25)
          {
              n=n-0.25;
              c++;
          }
          else if(n>=0.10)
          {
              n=n-0.10;
              c++;
          }
          else if(n>=0.05)
          {
              n=n-0.05;
              c++;
          }
          else
          {
              n=n-0.01;
              c++;
          }
      }
      printf("%i\n",c);
  }
}
int main(void)
{
    printf("O hai!");
    printf(" How much change is owed?\n");
    float n=get_float();
    cal(n);
}