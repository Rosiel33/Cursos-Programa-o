#include <stdio.h>
#include <stdlib.h>

int main()
{
    int a,b,c;

    printf("informe o lado a: ");
    scanf("%d", &a);
    printf("informe o lado b: ");
    scanf("%d", &b);
    printf("informe o lado c: ");
    scanf("%d", &c);

    if((a == b)&&(b==c)){
        printf("o triangulo e equilatero");
    }else if((a != b) && (b!=c) && (a !=c )){
        printf("o triangulo e escaleno");
    } else{
        printf(" o triangulo e isoceles");
    }

    return 0;
}
