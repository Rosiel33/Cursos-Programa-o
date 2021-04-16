#include <stdio.h>
#include <stdlib.h>

int main()
{
        int n = 0;

        printf("digite um numero: ");
        scanf("%d", &n);
        printf("%d e maior que 10 ? %d \n", n,n > 10 );
        printf("%d e maior ou igual a 10? %d \n", n, n >= 10 );
        printf("%d e maior que 10? %d ", n, n > 10);

    return 0;
}
