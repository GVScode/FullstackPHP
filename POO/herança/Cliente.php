<?php

/**
 * Classe Cliente
 */
class Cliente
{
    /**
     * @var string $logradouro O logradouro do cliente (rua, avenida, etc.).
     */
    public string $logradouro;

    /**
     * @var string $bairro O bairro onde o cliente reside.
     */
    public string $bairro;

    /**
     * Exibe o endereço completo do cliente.
     *
     * @return string O endereço completo do cliente em formato HTML.
     */
    public function verEndereco(): string
    {
        return "<p>Endereço: {$this->logradouro}<br>Bairro: {$this->bairro}</p>";
    }
}

