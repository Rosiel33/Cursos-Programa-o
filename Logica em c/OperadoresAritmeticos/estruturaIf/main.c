#include <stdio.h>
#include <stdlib.h>

int main()
{

    int idade = 0;

    printf("digite sua idade \n");
    scanf("%d", & idade);
    if(idade >= 18){
        printf("voce e de maior");
    }else{
        printf("Voce e de menor");
    }

    return 0;
}
