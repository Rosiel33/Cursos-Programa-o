#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main()
{
        char nome="";
        while(strcmp(&nome, "parar")!= 0){
            printf("digite o nome: \n");
            scanf("%s", &nome);
            printf("ola, %s \n", &nome);
        }

    return 0;
}
