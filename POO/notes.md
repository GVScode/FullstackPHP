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