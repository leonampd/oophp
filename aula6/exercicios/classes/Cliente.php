<?php
namespace Digitalhouse;

class Cliente
{
    private $nome;
    private $email;
    private $id;
    public function __construct($nome, $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
}
