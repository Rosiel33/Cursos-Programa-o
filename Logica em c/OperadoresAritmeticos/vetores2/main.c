#include <stdio.h>
#include <stdlib.h>

int main()
{
    int numeros  [10];

    int i = 0;
    for(i=0; i <= 9; i++) {
        printf("digite um numero: ");
        scanf("%d", &numeros[i]);
    }
    printf("os numeros digitados foram: \n");
    for (i=0; i<=9; i++){
        printf("%d\n", numeros [i]);
    }


    return 0;
}
