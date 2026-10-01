<?php

/**
 * Classe para manipulação dos dados do usuário.
 * 
 * Esta classe é responsavel por armazenar e gerenciar informações relacionadas a um usuário, incluindo nome, e-mail e idade. Ela fornece métodos para cadastrar um novo usuário, armazenando seus dados em artributos da classe.
 */
class Usuario
{

    /**
     * @var string $nome Nome do usuário
     */
    public string $nome;

    /**
     * @var string $email E-mail do usuário
     */
    public string $email;

    /**
     * @var int $idade Idade do usuário
     */
    public int $idade;

    /**
     * Cadastra um novo usuário com os dados fornecidos.
     * 
     * Este metodo recebe o nome, e-mail e idade do usuário como parâmetros, armazena esses valores nos atributos da classe e retorna uma mensagem de sucesso indicando que o usuário foi cadastrado com sucesso.
     * 
     * @param string $nome Nome do usuário
     * @param string $email E-mail do usuário
     * @param int $idade Idade do usuário
     * 
     * @return string Mensagem de sucesso com os detalhes do usuário cadastrado.
     */
    public function cadastrar(string $nome, string $email, int $idade) : string
    {

        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;

        return "O usuário <strong>{$this->nome}</strong> possui a idade <strong>{$this->idade}</strong> com e-mail <strong>" . $this->email . "</strong> cadastrado com sucesso!<br>";
    }
}