
package Classes;

import java.util.Date;

public class Computador {
    private String nome;
    private int preco;
    private Date dataFabricacao;

   
    public String getNome() {
        return nome;
    }

    
    public void setNome(String nome) {
        this.nome = nome;
    }

   
    public int getPreco() {
        return preco;
    }

    
    public void setPreco(int preco) {
        this.preco = preco;
    }

   
    public Date getDataFabricacao() {
        return dataFabricacao;
    }

    
    public void setDataFabricacao(Date dataFabricacao) {
        this.dataFabricacao = dataFabricacao;
    }
    
    public void ligar(){
        System.out.print("Computador ligado");
    }
    public void desligar(){
        System.out.print("compudador desligado");
    }
    public void acessarInternet(){
        System.out.println("Online");
    }
}
