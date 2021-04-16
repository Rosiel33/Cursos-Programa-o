#include <stdio.h>
#include <stdlib.h>

int main()
{

    int vetor[10];
    int i;
    for(i = 0; i < 10; i++ ){
        vetor[i]= i * 2;
    }

    for( i = 0; i < 10; i++){
        printf("elemento [%d] = %d\n", i,vetor[i]);
    }

    return 0;
}
