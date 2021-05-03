<?php
######### Element.class.php ###########
// Documentação para métodos mágicos
// https://www.php.net/manual/pt_BR/language.oop5.magic.php

class Element
{
    private $name;
    private $properties;
    private $children;
    private $tudo = array();
    private $conteudo;

    // Construtor recebe o elemento
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Método mágico set que recebe as propriedades de uma tag html e armazena no array
    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    // Método que adiciona ao array filhos do elemento html
    public function add($child)
    {
        $this->children[] = $child;
    }

    // Método usado para abrir a tag html e suas propriedades caso exista
    public function open()
    {
        $this->tudo[] = "<$this->name";
        if ($this->properties) {
            // percorre as propriedades
            foreach ($this->properties as $name => $value) {
                $this->tudo[] = " {$name}=\"{$value}\"";
            }
        }
        $this->tudo[] = '>';
    }

    // Método para fechar a estrutura html
    private function close()
    {
        $this->tudo[] = "</{$this->name}>\n";
    }

    // Método usado para agregar toda a estrutura desde a abertura, filhos e fechamento
    public function agrega()
    {
        $this->open();
        $this->tudo[] = "\n";

        if ($this->children) {
            // percorre todos objetos filhos
            foreach ($this->children as $child) {
                // se for objeto
                if (is_object($child)) {
                    foreach ($child->agrega() as $valor) {
                        $this->tudo[] = $valor;
                    }
                } else if ((is_string($child)) or (is_numeric($child))) {
                    // se for texto
                    $this->tudo[] = $child;
                }
            }
            $this->close();
        }
        return $this->tudo;
    }

    // Método usado para exibir a tag com suas propriedades e filhos caso tenha
    public function show()
    {
        foreach ($this->agrega() as $valor) {
            $this->conteudo .= $valor;
        }
        return $this->conteudo;
    }

    // Método mágico usado para converter o objeto em string para exibição
    public function __toString()
    {
        return $this->show();
    }
}
