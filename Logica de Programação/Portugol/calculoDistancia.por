programa
{
	
	funcao inicio()
	{
		real distTotal
		real distPercorrida
		real velocidade

		escreva ("distancia total ")
		leia(distTotal)
		escreva("distancia percorrida ")
		leia(distPercorrida)
		escreva("velocidade ")
		leia(velocidade)

		real distaciaASerPercorrida = distTotal - distPercorrida
		real horasRestantes = distaciaASerPercorrida / velocidade

		escreva("Faltam " , horasRestantes, "h para percorrer o trajeto")
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 100; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */