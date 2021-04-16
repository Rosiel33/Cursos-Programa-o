#include <stdio.h>
#include <stdlib.h>

int main()
{
    int n1,n2;
    printf("digite 1º numero");
    scanf("%d", &n1);
    printf("digite 2º numero ");
    scanf("%d", &n2);
    printf("%d + %d = %d\n", n1,n2, n1 + n2);
    printf("%d * %d = %d\n", n1,n2, n1*n2);
    printf("o resto de %d dividido por %d e %d", n1,n2, n1%n2);

    return 0;
}
