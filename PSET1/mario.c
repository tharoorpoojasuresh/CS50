#include<cs50.h>
#include<stdio.h>
 void height(int h)
    {
    if(h<1)
    {
        printf("Height: %i\n",h);
    }
    else if(h>=24)
    {
        printf("Height: %i\n",h);
        printf("please re-enter the height");
        h=get_int();
        height(h);
    }
    else
    {
       printf("Height: %i\n",h);
       for(int i=2;i<=h+1;i++)
       {
           for(int k=h+1-i;k>0;k--)
           {
               printf(" ");
           }
           for(int j=1;j<=i;j++)
           {
               printf("#");
           }
           printf("\n");
       }
    }
}
int main(void)
{
    int h=get_int();
    height(h);
}