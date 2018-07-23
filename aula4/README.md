## Polimorfismo

**polimorfismo**
_substantivo masculino_

1. qualidade ou estado de ser capaz de assumir diferentes formas
2. **fisioquímica**: _m.q._ Alotropia

Assim como a definição do dicionário diz, polimorfismo no contexto de OO é a capacidade que um objeto tem de de assumir formas e comportamentos diferentes diante de um participante que o opera baseado em uma abstração.
Essa abstração pode ser obtida através de herança ou até mesmo de Interfaces.

```php
//Colaborador.php

abstract class Colaborador
{
    protected $nome;
    protected $salarioBase;

    public function __construct($nome, $salarioBase)
    {
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function getNome()
    {
        return $this->nome;
    }

    abstract public function salario();
}

// Desenvolvedor.php
class Desenvolvedor extends Colaborador
{
    protected $horasExtras;
    private $valorHoraExtra = 60;

    public function __construct($nome, $salarioBase, $horasExtras)
    {
        $this->horasExtras = $horasExtras;
        parent::__construct($nome, $salarioBase);
    }

    public function salario()
    {
        return $this->salarioBase + ($this->horasExtras * $this->valorHoraExtra);
    }
}

// Comercial.php
class Comercial extends Colaborador
{
    protected $comissao;

    public function __construct($nome, $salarioBase, $comissao)
    {
        $this->comissao = $comissao;
        parent::__construct($nome, $salarioBase);
    }

    public function salario()
    {
        return $this->salarioBase + $this->comissao;
    }
}


//FolhaPagamento.php

class FolhaPagamento
{
    protected $colaboradores;

    public function __construct($colaboradores)
    {
        $this->colaboradores = $colaboradores;
    }

    public function gerarFolha()
    {
        foreach($this->colaboradores as $colaborador) {
            echo 'Nome:' . $colaborador->getNome() . ' Salário: R$' . $colaborador->salario();
        }
    }
}


//programa.php

$colaboradores = [];

$colaboradores[] = new Desenvolvedor('Leonam Dias', 3000, 5);
$colaboradores[] = new Comercial('Manoel Dias', 2500, 3000);

$folha = new FolhaPagaento($colaboradores);
$folha->gerarFolha();
```

