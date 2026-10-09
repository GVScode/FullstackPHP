<?php

/**
 * Classe ClientePessoaJuridica
 * 
 *
 */
class ClientePessoaJuridica extends Cliente
{
    /**
     * @var string $nomeFantasia O nome fantasia da empresa.
     */
    public string $nomeFantasia;

    /**
     * @var int $cnpj O número do CNPJ (Cadastro Nacional da Pessoa Jurídica) da empresa.
     */
    public int $cnpj;

    /**
     * Exibe as informações completas da empresa.
     *
     * @return string As informações da empresa em formato HTML.
     */
    public function verInformacaoEmpresa(): string
    {
        $dados = "Endereço da pessoa jurídica<br>";
        $dados .= "Endereço: {$this->logradouro}<br>";
        $dados .= "Bairro: {$this->bairro}<br>";
        $dados .= "Nome Fantasia: {$this->nomeFantasia}<br>";
        $dados .= "CNPJ: {$this->cnpj}<br>";

        return "<p>$dados</p>";
    }
}
