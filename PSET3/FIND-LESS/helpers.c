/**
 * helpers.c
 *
 * Helper functions for Problem Set 3.
 */
 
#include <cs50.h>

#include "helpers.h"

/**
 * Returns true if value is in array of n values, else false.
 */
bool search(int value, int values[], int n)
{
    // TODO: implement a searching algorithm
   
     int f=0;
     int l=n-1;
     int m;
     while(f<=l)
     {
         m=(f+l)/2;
         if(value>values[m])
           f=m+1;
         else if(value<values[m])
             l=m-1;
         else 
             return true;
     }
     return false;
}

/**
 * Sorts array of n values.
 */
void sort(int values[], int n)
{
  int min;
  for(int i=0;i<n-1;i++)
  {
   for(int j=i+1;j<n;j++)
   {
       if(values[i]>values[j])
       {
           min=values[j];
           values[j]=values[i];
           values[i]=min;
       }
   }
  }
    return;
}

