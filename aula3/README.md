## Encapsulamento

>"The point of encapsulation isn't really about hidding data, but in hidding design decisions";

__Robert C. Martin (Uncle Bob)_

Assim como visto em **abstração** onde se oculta, abstrai, informações irrelevantes para agentes externos. O encapsulamento em conjunto com a abstração provê isso de uma maneira ainda mais completa. Em grande parte dos casos, encapsulamento serve para esconder operações que não devem ser conhecidas por outros objetos, ou melhor dizendo, participantes de um dado contexto de software.

```php
<?php
// CartaoCredito.php
class CartaoCredito
{
    private $numero;
    private $cvv;
    private $dataExpiracao;
    private $portador;

    public function __construct
    (
        $numero
        $cvv,
        $dataExpiracao,
        $portador
    )
    {
        $this->numero = $numero;
        $this->cvv = $cvv;
        $this->dataExpiracao = $dataExpiracao;
        $this->portador = $portador;
    }
}

// CaixaEletrônico.php
class CaixaEletronico
{
    private $cartaoCredito;

    public function __construct($cartaoCredito)
    {
        if ($this->validarCartao($cartaoCredito)) {
            $this->cartaoCredito = $cartaoCredito;
        }

        throw new Exception('Cartão de crédito inválido');
    }

    // inacessivel externamente. Pertence e somente pode ser usado por esta classe
    // escode uma decisao de design
    private function validarCartao()
    {
        $cartaoValido = ... // algoritmo de validacao

        if ($cartaoValido === true) {
            return true;
        }

        return false;
    }

    // visivel externamente
    public function sacar()
    {
       // code... 
    }
}
```
