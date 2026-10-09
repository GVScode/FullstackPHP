<?php

/**
 * Classe ClientePessoaFisica
 */
class ClientePessoaFisica extends Cliente
{
    /**
     * @var string $nome O nome completo da pessoa física.
     */
    public string $nome;

    /**
     * @var int $cpf O número do CPF (Cadastro de Pessoa Física) da pessoa.
     */
    public int $cpf;

    /**
     * Exibe as informações completas da pessoa física.
     *
     * @return string As informações da pessoa física em formato HTML.
     */
    public function verInformacaoUsuario(): string
    {
        $dados = "Endereço da pessoa física<br>";
        $dados .= "Endereço: {$this->logradouro}<br>";
        $dados .= "Bairro: {$this->bairro}<br>";
        $dados .= "Nome: {$this->nome}<br>";
        $dados .= "CPF: {$this->cpf}<br>";

        return "<p>$dados</p>";
    }
}
