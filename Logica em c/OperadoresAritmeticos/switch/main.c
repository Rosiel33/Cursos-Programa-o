#include <stdio.h>
#include <stdlib.h>

int main()
{
    printf("infome o mes");
    int mes = 0;
    scanf("%d", &mes);

    switch (mes){
    case 1:
        printf("janeiro");
    break;
    case 2:
        printf("fevereiro");
    break;
        case 3:
        printf(" março ");
    break;
        default:
            printf("mes invalido");
            break;
    }


    return 0;
}
