<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        class Lutador{
            //Atributos
            private $nome,$nacionalidade,$idade,$altura,$peso,$categoria,$vitorias,$derrotas,$empates;

            //Metodos especiais
            public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
                $this->nome = $no;
                $this->nacionalidade = $na;
                $this->idade = $id;
                $this->altura = $al;
                $this->peso = $pe;
                $this->vitorias = $vi;
                $this->derrotas = $de;
                $this->empates = $em;
            }
            public function getNome() {
                return $this->nome;
            }
            public function setNome($nome) {
                $this->nome = $nome;
            }
            public function getNacionalidade() {
                return $this->nacionalidade;
            }
            public function setNacionalidade($nacionalidade) {
                $this->nacionalidade = $nacionalidade;
            }
            public function getIdade() {
                return $this->idade;
            }
            public function setIdade($idade) {
                $this->idade = $idade;
            }
            public function getAltura() {
                return $this->altura;
            }
            public function setAltura($altura) {
                $this->altura = $altura;
            }
            public function getPeso() {
                return $this->peso;
            }
            public function setPeso($pe) {
                $this->peso = $pe;
                $this->setCategoria();
            }
            public function getCategoria() {
                return $this->categoria;
            }
            public function setCategoria() {
                if ($this->peso < 52.2) {
                    $this->categoria = "Inválido";
                }elseif ($this->peso <= 70.3) {
                    $this->categoria = "Leve";
                }elseif ($this->peso <= 83.9) {
                    $this->categoria = "Médio";
                }elseif ($this->peso <= 120.2) {
                    $this->categoria = "Pesado";
                }else {
                    $this->categoria = "Inválido";
                }
            }
            public function getVitorias() {
                return $this->vitorias;
            }
            public function setVitorias($vitorias) {
                $this->vitorias = $vitorias;
            }
            public function getDerrotas() {
                return $this->derrotas;
            }
            public function setDerrotas($derrotas) {
                $this->derrotas = $derrotas;
            }
            public function getEmpates() {
                return $this->empates;
            }
            public function setEmpates($empates) {
                $this->empates = $empates;
            }
            //Metodos
            public function apresentar() {

            }
            public function status() {

            }
            public function ganharLuta() {
                $this->setVitorias($this->getVitorias() + 1);
            }
            public function perderLuta() {
                $this->setDerrotas($this->getDerrotas() +1);
            }
            public function empatarLuta() {
                $this->setEmpates($this->getEmpates() +1);
            }
        }
    ?>
</body>
</html>
