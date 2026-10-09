<?php

/**
 * Classe abstrata para representar um investimento.
 * 
 * @author Cesar <cesar@celke.com.br>
 */
abstract class Investimento
{
    // Exemplo para PHP inferior a versão 8
    // public float $valor;
    // public string $tipo;

    // public function __construct(float $valor, string $tipo)
    // {
    //     $this->valor = $valor;
    //     $this->tipo = $tipo;
    // }

    // Exemplo para PHP 8 ou superior
    /**
     * Construtor da classe Investimento.
     *
     * @param float $valor Valor inicial do investimento.
     * @param string $tipo Tipo de investimento.
     */
    public function __construct(public float $valor, public string $tipo) {}

    // Método utilizado para estar a classe antes de converter para abstrata
    // public function verValor(): string
    // {
    //     return "Tipo de instimento {$this->tipo}, valor do investimento inicial R$ {$this->valor}<br>";
    // }

    /**
     * Converte um valor numérico para o formato de moeda BRL.
     *
     * @param float $valor Valor a ser convertido.
     * @return string Valor formatado em BRL.
     */
    public function convertReal(float $valor): string
    {
        return number_format($valor, '2', ',', '.');
    }
}
