## Abstração

É um dos pilares da programação orientada a objetos. Seu maior propósito é definir um contexto delimitado onde seja possível diferenciar responsabilidades entre objetos em uma determinada aplicação. Contribue para o gerenciamento de complexidade e oculta detalhes desnecessários dos seus "clientes".

Exemplo:

```php
<?php 

// dado um script procedural...

$indice = $peso / pow($altura);
```

Quando se abstrai a complexidade e se "escode" parte do comportamento através da definição de uma classe, um dos resultados obtidos é:

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
    public function __construct($pessoa)
    {
        $this->pessoa = $pessoa;
    }

    public function calculoIndice()
    {
        return $this->pessoa->getPeso() / pow($this->pessoa->getAltura);
    }
}

//programa.ph

$pessoa  = new Pessoa(75, 1.73);
$imc = new Imc($pessoa);

echo $imc->calculoIndice();
```
