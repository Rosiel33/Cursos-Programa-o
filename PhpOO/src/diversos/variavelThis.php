<?php

class Cliente
{
    public $nome;
    public $idade;
    public $endereco;
    public $telefone;

    public function comprar()
    {
        echo "Cliente {$this->nome} realizou uma compra";
    }

    public function definirNome($nome)
    {
        $this->nome = $nome;   
    }
}
