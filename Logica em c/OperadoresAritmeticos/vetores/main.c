#include <stdio.h>
#include <stdlib.h>

int main()
{
    //VETORES
    int numeros [10];
    int i = 0;
    for(i = 0; i<=9; i++){
        printf("digite um numero; \n");
        scanf("%d", &numeros[i]);
    }

    return 0;
}
