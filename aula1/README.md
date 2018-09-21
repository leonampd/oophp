## Introdução à Orientação a Objetos

### Paradigmas de programação

**paradigma**: _substativo masculino_

1. um exemplo que serve como modelo; padrão.
2. conjunto de formas vocabulares que servem de modelo para um sistema de flexão ou de derivação (p.ex.: na declinação, na conjugação etc.); padrão.
3. conjunto dos termos substituíveis entre si numa mesma posição da estrutura a que pertencem.

Dada a definição podemos entender que um paradigma de programação é um modelo ou padrão de como se desenvolve software.
 
Existem diferentes tipos de paradigmas de programação, sendo alguns deles mais conhecidos como: paradigma orientado a objetos, funcional, orientada a aspectos etc.
 
### Orientação a objetos
 
Este paradigma de programação consiste, basicamente, em separar responsabilidades e contextos de um software em partes menores de modo que ocódigo se torne mais fácil de se manter, evoluir e escalar. Essa facilidade é provida pelos recursos das linguagens de programação.
Delimitando o problema em objetos menores, sua solução se dá através da comunicação (troca de mensagens) entre cada um dos objetos envolvidos.


#### Classes

Define contextos, através de características e comportamentos computacionalmente falando. Exemplo:

```php

<?php 
class Pessoa
{
    
}

```

#### Propriedades

Aparecem dentro de uma classe e podem ser entendidas como as características de um dado objeto

```php
<?php

class Pessoa
{
    private $corDosOlhos;
    private $altura;
    private $peso;
}

```

#### Métodos

São os comportamentos/ações de um determinado objeto que podem ser executadas/chamadas por agentes externos

```php

<?php

class Pessoa
{
    // propriedades...

    public function falar()
    {
        echo 'falando...';
    }
}

```

##### Método construtor

É um método "especial" que toda e qualquer classe possui. Ele é executado sempre que um novo objeto for instanciado com `$obj = new MinhaClasse()`.
Como o nome diz, este método é executado na "construção" de um objeto e ele pode receber parâmetros ou não:

```php
<?php

//Retangulo.php

class Retangulo
{
    private $base;
    private $altura

    // metodo construtor
    public function __construct($baseParametro, $alturaParametro)
    {
        $this->base = $baseParametro;
        $this->altura = $alturaParametro;
    }
}


// MinhaClasseQualquer.php

class MinhaClasseQualquer
{
    public function __construct()
    {
        // algum codigo que faça sentido ser executado sempre que um objeto desta classe for instanciado
    }
}
```

As classes, propriedades e métodos por si só não representam nenhum valor. Porém quando utilizada em um "programa":
```php
<?php

class Retangulo
{
    public $base;
    public $altura;

    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function area()
    {
        return $this->base * $this->altura;
    }
}
```

```php

<?php

// programa.php

require "Retangulo.php"; // carrega a classe a ser utilizada

$retangulo = new Retangulo(10, 30);

echo $retangulo->area(); // 300

```

#### Instâncias

Uma instância representa um objeto ("indivíduo") de uma determinada classe. Dentro de uma aplicação é possível utilizar mais de uma instância ao mesmo tempo de diferentes classes ou não.

#### $this

Partindo do princípio que uma classe é um "molde", um novo "tipo" dentro do sistema e que _n_ instâncias podem ser criadas a partir
 desse modelo, a palavra reservada `$this` tem o papel de contextualizar e representar os dados de um dado objeto de modo que o 
 interpretador da linguagem entenda de qual objeto/instância se trata. É através do uso do `$this` que o interpretador da linguagem consegue
 "diferenciar" um objeto de outro.
