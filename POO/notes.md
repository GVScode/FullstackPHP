@___________________________________________________@

27/09/2026 

Como criar classe e o metodo para listar registros do db

seguir da próxima aula

@___________________________________________________@

08/10/2026

## O Conceito de Herança Programação Orientada a Objetos (POO)

A **herança** é um dos pilares da Programação Orientada a Objetos. Ela permite que uma classe (chamada de **classe filha** ou **subclasse**) herde atributos e métodos de outra classe (chamada de **classe pai**, **superclasse** ou **classe base**).

**Principais vantagens:**

* **Reutilização de código:** Atributos e métodos comuns são escritos apenas uma vez na classe pai.
* **Organização e Manutenibilidade:** Alterações em comportamentos genéricos precisam ser feitas apenas na classe pai, refletindo automaticamente em todas as filhas.
* **Modelagem do mundo real:** Permite expressar relações do tipo *"é um"* (ex.: uma `ClientePessoaFisica` **é um** `Cliente`).

---

## Detalhamento Técnico dos Códigos

### 1. Classe Base (`Cliente.php`)

Esta classe representa a abstração genérica de qualquer cliente no sistema.

* **Atributos (`$logradouro`, `$bairro`):**
* Definidos com visibilidade `public` e tipagem estrita `string`.
* Como estão na classe pai, qualquer subclasse que herdar de `Cliente` automaticamente possuirá acesso a esses atributos.


* **Método `verEndereco()`:**
* Retorna uma string HTML concatenando as propriedades `$logradouro` e `$bairro` usando a variável especial `$this` (que faz referência à própria instância que chamou o método).



---

### 2. Subclasse `ClientePessoaFisica.php`

Representa um cliente do tipo pessoa física.

* **Palavra-chave `extends Cliente`:**
* Define explicitamente que `ClientePessoaFisica` é uma classe filha de `Cliente`. Ela herda os atributos `$logradouro` e `$bairro` e o método `verEndereco()`.


* **Atributos Específicos (`$nome`, `$cpf`):**
* Propriedades exclusivas de pessoas físicas (uma empresa geralmente não possui nome de pessoa ou CPF diretamente nessa estrutura).


* **Método `verInformacaoUsuario()`:**
* Monta uma string formatada contendo tanto dados herdados da classe pai (`$this->logradouro`, `$this->bairro`) quanto dados específicos da própria subclasse (`$this->nome`, `$this->cpf`).



---

### 3. Subclasse `ClientePessoaJuridica.php`

Representa um cliente do tipo empresa/pessoa jurídica.

* **Palavra-chave `extends Cliente`:**
* Assim como a classe anterior, estende `Cliente` para redefinir e reusar a estrutura de endereço.


* **Atributos Específicos (`$nomeFantasia`, `$cnpj`):**
* Propriedades exclusivas para cadastros empresariais.


* **Método `verInformacaoEmpresa()`:**
* Funciona de maneira análoga ao método da pessoa física, porém formatando os campos corporativos (`$nomeFantasia` e `$cnpj`) junto com o endereço herdado.



---

### 4. Execução Principal (`index.php`)

Este arquivo instancia os objetos e demonstra o funcionamento prático da herança no PHP.

* **Inclusão dos arquivos (`require`):**
* Garante que as definições de todas as três classes estejam disponíveis na execução antes de serem criadas.


* **Instância de `Cliente` (Objeto genérico):**
* `$cliente = new Cliente();`: Cria o objeto genérico.
* Define `$logradouro` e `$bairro` e exibe o retorno de `verEndereco()`.


* **Instância de `ClientePessoaFisica` (Demonstrando herança):**
* `$clientePF = new ClientePessoaFisica();`: Cria o objeto de pessoa física.
* Define `$clientePF->logradouro` e `$clientePF->bairro`: Note que **esses atributos não foram declarados** dentro do código de `ClientePessoaFisica`, mas funcionam perfeitamente porque foram herdados da classe `Cliente`.
* Define `$nome` e `$cpf` (específicos do objeto).
* Executa `verInformacaoUsuario()`, imprimindo todos os dados unificados.


* **Instância de `ClientePessoaJuridica` (Demonstrando reutilização):**
* `$clientePJ = new ClientePessoaJuridica();`: Cria o objeto de pessoa jurídica.
* Define também os dados de endereço herdados e os dados de empresa (`$nomeFantasia`, `$cnpj`).
* Executa `verInformacaoEmpresa()`, imprimindo a estrutura formatada com os dados da empresa.


Uma **classe abstrata** é um modelo/molde que serve como base para outras classes, mas **não pode ser instanciada diretamente** (ou seja, você nunca executará `new Investimento()`). Ela é utilizada quando temos atributos e comportamentos comuns a uma "família" de objetos, mas a entidade em si é genérica demais para existir por conta própria.

No seu exemplo, a ideia é que um "Investimento" é um conceito genérico: todo investimento possui um valor, um tipo e precisa de formatação monetária. Porém, o cálculo do rendimento depende da modalidade específica (Renda Fixa, Fundo de Investimento, Ações, etc.).

---




## Classe Abstrata

### 1. A Classe Abstrata Base (`Investimento.php`)

A declaração `abstract class Investimento` estabelece este contrato base.

* **Impossibilidade de Instanciação:** A palavra-chave `abstract` impede que o PHP execute `new Investimento()`. Se você tentar, o PHP disparará um erro fatal.
* **Construtor com *Constructor Property Promotion* (PHP 8+):**
```php
public function __construct(public float $valor, public string $tipo) {}

```


Ao declarar os modificadores de visibilidade (`public`) nos parâmetros do método construtor, o PHP cria e atribui automaticamente as propriedades `$this->valor` e `$this->tipo`. As filhas reutilizam esse construtor ao serem instanciadas.
* **Reutilização de Métodos Concretos (`convertReal`):**
Classes abstratas podem conter métodos comuns prontos para uso. O método `convertReal()` usa `number_format()` para padronizar valores no formato BRL e fica disponível para todas as subclasse (como `RendaFixa` e `Fundo`).

---

### 2. As Subclasses Concretas (`RendaFixa.php` e `Fundo.php`)

Ambas as classes herdam de `Investimento` através da instrução `extends`.

* **Especialização do Comportamento:**
* Em **`RendaFixa`**, o cálculo aplica um rendimento de 20% (`0.20 * $this->valor`).
* Em **`Fundo`**, a taxa é de 40% (`0.40 * $this->valor`).


* **Acesso a Atributos e Métodos da Base:**
Dentro do método `calcularJuro()` de ambas as subclasses, é possível acessar diretamente:
* Propriedades criadas pelo construtor da classe pai: `$this->valor` e `$this->tipo`.
* Métodos utilitários da classe pai: `$this->convertReal()`.



---

### 3. Execução Principal (`index.php`)

* **Tentativa Comentada de Instanciação Direta:**
```php
// $investimento = new Investimento(100.11, 'CDI');

```


O código exemplifica exatamente o propósito central: uma classe abstrata serve apenas para herança, não para criar objetos diretos.
* **Instanciação Concreta:**
```php
$cofrinho = new RendaFixa(3000.33, 'Cofrinho');
$fundo = new Fundo(4000.44, 'Fundo Multimercado');

```


Os objetos são criados a partir das classes filhas concretas. Quando passamos os argumentos `(3000.33, 'Cofrinho')`, eles são repassados ao construtor definido em `Investimento`.
* **Chamada dos Métodos Especializados:**
Cada objeto executa sua respectiva regra de cálculo de juros (`calcularJuro()`) enquanto utiliza a formatação monetária herdada da classe abstrata.

---

## Resumo dos Pontos-Chave

1. **Abstração:** Protege o sistema contra instâncias genéricas indesejadas (não faz sentido existir um "investimento" genérico sem regras de rendimento).
2. **Aproveitamento de Código:** O construtor e o método de conversão de moeda (`convertReal`) foram escritos apenas uma vez em `Investimento`.
3. **Polimorfismo / Especialização:** Cada modalidade especifica sua própria implementação para calcular os juros, mantendo a coerência do sistema.