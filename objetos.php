<?php
class Fruta {
    public $nome;
    public $cor;

    function __construct($nome, $cor) {
        $this->nome = $nome;
        $this->cor = $cor;
    }

    function get_nome() {
        return $this->nome;    
    }

    function get_cor() {
        return $this->cor
    }
}

$maca = new Fruta("Macã", "Vermelha");

echo "O nome da fruta é:  " . $maca->$get_nome();

echo "<br/>";

echo "A cor da Fruta é:  " . $maca->get_cor();
?>



