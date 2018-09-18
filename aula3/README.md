## Abstração

### Herança

Como dito anteriormente, assim como a composição, **Herança** é o processo de se
estabelecer uma relação entre objetos. Desta vez onde um objeto "B" _É UM_ 
objeto "A".

Basicamente estabelece-se uma relação de hierarquia, ou mais especificamente uma
estrutura de "taxonomia".

Exemplo:

```php
<?php

// Veiculo.php

class Veiculo
{
    // propriedades
    
    // métodos
}

// CarroDePasseio.php
class CarroDePasseio extends Veiculo
{
    // herda todas as propriedades e metodos de veiculos    
}

// Onibus.php
class Onibus extends Veiculo
{
    // herda todas as propriedades e metodos de veiculos
}
```