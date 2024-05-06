<?php
class Entretenimento {
    public $serie;
    public $classificacaoIndicativa;

    function __construct($serie, $classificacaoIndicativa) {
        $this->serie = $serie;
        $this->classificacaoIndicativa = $classificacaoIndicativa;
    }

    function get_serie() {
        return $this->serie;    
    }

    function get_classificacaoIndicativa() {
        return $this->classificacaoIndicativa;
    }

}

$Wandinha = new Entretenimento("Wandinha", "+16");

echo "O entretenimento é a serie:  " . $Wandinha->get_serie();

echo "<br/>";

echo "A Classificação Indicativa é:  " . $Wandinha->get_classificacaoIndicativa();
?>
