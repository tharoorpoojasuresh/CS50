#include<cs50.h>
#include<stdio.h>
int main(void)
{
    int m,b;
    m=get_int();
    b=m*12;
    printf("Minutes: %i\n",m);
    printf("Bottles: %i\n",b);
}