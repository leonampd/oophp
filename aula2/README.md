## Abstração

É um dos pilares da programação orientada a objetos. Seu maior propósito é definir um contexto delimitado onde seja possível diferenciar responsabilidades entre objetos em uma determinada aplicação. Contribue para o gerenciamento de complexidade e oculta detalhes desnecessários dos seus "clientes".

Exemplo:

```php
<?php 

// dado um script procedural...

$indice = $peso / pow($altura);
```

Quando se abstrai a complexidade e se "esconde" parte do comportamento através da definição de uma classe, um dos resultados obtidos é:

- flexibilidade, dado que o mesmo código pode ser reaproveitado em outro local
- código mais legível e semântico

Veja:

```php

<?php
// Pessoa.php

class Pessoa
{
    private $peso;
    private $altura;

    public function __construct($peso, $altura)
    {
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function getAltura()
    {
        return $this->altura;
    }

}
// Imc.php
class Imc
{
    private $pessoa;

    public function __construct($pessoa)
    {
        $this->pessoa = $pessoa;
    }

    public function calculoIndice()
    {
        return $this->pessoa->getPeso() / pow($this->pessoa->getAltura);
    }
}

//programa.php

$pessoa  = new Pessoa(75, 1.73);
$imc = new Imc($pessoa);

echo $imc->calculoIndice();
```

Uma vez definidas as abstrações de um dado contexto, como dito e mostrado acima.
A reutilização de código se torna simplificada. Existem algumas formas de se
reaproveitar código:

## Composição

Visto que orientação a objetos acontece com a interação e troca de mensagens
entre objetos, a **composição** acontece quando um objeto é composto _N_ outros
objetos. É uma relação onde o objeto "A" _TEM UM_ objeto "B".

Exemplo:

```php
<?php
// Carro.php
class Carro
{
    private $rodas;
    private $motor;
    
    // métodos de um carro...
}

// Roda.php
class Roda
{
    private $aro;
    
    // métodos de uma porta
}

// Motor.php
class Motor
{
    private $potencia;
    
    // métodos de um motor
}
```
