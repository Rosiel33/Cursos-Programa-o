programa
{
	
	funcao inicio()
	{
		inteiro n
		escreva("digite numero")
		leia(n)
		inteiro quantidadeDivisores = 0
		para (inteiro i = 1; i<= n; i++){
			se (n % i == 0){
				quantidadeDivisores++
			}
		}

		se(quantidadeDivisores == 2){
			escreva("numeroPrimo")
		} senao{
			escreva("nao e primo")
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 307; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */