//WAP to input numbers from a user until -1 is encountered..then print
//the last m elements
#include<stdio.h>
#define max 1000
int main()
{
        int arr[max],i=0,n=0,m;
        while(1)
        {
            scanf("%d",&arr[i]);
            i++;
            if(arr[i]==-1)
             break;

        }
        n=i-1;
        scanf("%d",&m);
        for(i=n-m+1;i<=n;i++)
            printf("%d\t",arr[i]);
        return 0;
}
