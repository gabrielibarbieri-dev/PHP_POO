<?php
class Carro {
    public $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->setVelocidade($velocidade); // usa o setter já com validação
    }

    // Getter
    public function getVelocidade() {
        return $this->velocidade;
    }

    // Setter com validação
    public function setVelocidade($novaVelocidade) {
        if ($novaVelocidade >= 0 && $novaVelocidade <= 200) {
            $this->velocidade = $novaVelocidade;
        } else {
            echo "Velocidade inválida! Deve estar entre 0 e 200 km/h.<br>";
        }
    }
}
?>