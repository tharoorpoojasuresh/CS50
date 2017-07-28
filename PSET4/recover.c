#include <stdio.h>
#include <stdlib.h>
#include <cs50.h>

int main(int argc, char *argv[])
{
    if(argc!=2)
    {
        fprintf(stderr,"usage:/wrong\n");
        return 1;
    }
    char *in=argv[1];
    int *infile=(int *) malloc(sizeof(int));
    char *filename=(char *) malloc(sizeof(char));
    FILE *inptr = fopen(in, "r");
    if (inptr == NULL)
    {
        fprintf(stderr, "Could not open %s.\n", in);
        return 2;
    }
    while(!feof(inptr))
    {
    fread(infile,512,1,inptr);
    if((infile[0])==0xff &&
    infile[1]==0xd8 && infile[2]==0xff && (infile[3] & 0xf0) == 0xe0)
    {
       sprintf(filename,"%03i.jpg",2);
       
    }
    }
    FILE *img= fopen(filename,"w");
    fwrite(filename,512,1,img);
    fclose(inptr);
    fclose(img);
}