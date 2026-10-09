<?php

/**
 * Classe para cálculos de investimentos em Fundo.
 * 
 * @author Cesar <cesar@celke.com.br>
 */
class Fundo extends Investimento
{

    /**
     * Calcula o valor do investimento com juros.
     *
     * @return string Retorna o valor inicial e o valor com juros formatados em reais.
     */
    public function calcularJuro(): string
    {

        // Calcular o juro
        $valorComJuro = (0.40 * $this->valor) + $this->valor;

        // Chamar o método para converter o valor para o formato do Real brasileiro
        $valorComJuro = $this->convertReal($valorComJuro);

        // Retornar a string
        return "Tipo de instimento {$this->tipo}, valor do investimento inicial R$ {$this->convertReal($this->valor)} e com juro R$ $valorComJuro <br>";
    }
}
