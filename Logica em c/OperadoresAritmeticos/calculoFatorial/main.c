#include <stdio.h>
#include <stdlib.h>

int main()
{
  int numero;
  printf("digite o numero a ser calculado o fatorial: ");
  scanf("%d", &numero);
  int fatorial;
  for(fatorial=1; numero > 1; numero--){
    fatorial = fatorial * numero;
  }

  printf("o resultado fatorial: %d",fatorial);

    return 0;
}

