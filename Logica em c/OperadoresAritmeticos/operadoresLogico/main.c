#include <stdio.h>
#include <stdlib.h>

int main()
{
    int a= 7, b=6;

    printf(" testes %d \n", 20 == 21 || 5 ==5 && 10 == 1);
    printf("digite primeiro numero");
    scanf("%d" , &a);
    printf("digite segundo numero");
    scanf("%d" ,&b);
    printf("%d > 10 e %d > 20 ? %d \n", a,b, a > 10 && b > 20);
    printf("%d < 10 ou %d < 20? %d ", a,b, a<10 || b < 20);

    // exercicio

    int var = 2+ 3 *4 /5 - 6;
    printf("%d", var);

    return 0;
}
