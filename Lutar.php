<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
require_once "Lutador.php";
class Lutar {
    //Atributos
    private $rouds, $aprovada, $desafiado, $desafiante;

    //Metodos Especiais
    public function getRouds() {
        return $this->rouds;
    }

    public function setRouds($rouds): void {
        $this->rouds = $rouds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }

    public function getDesafiado() {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    //Metodos
    public function marcarLuta($l1,$l2) {
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor ) {
                case 0://Empate
                    echo "<p>Empate!!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1://Desafiado vence
                    echo "<p>".$this->desafiado->getNome()." venceu!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2://Desafiante vence
                    echo "<p>".$this->desafiante->getNome()." venceu!!</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }


}

?>
</body>
</html>
