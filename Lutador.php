<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        class Lutador{
            //Atributos
            private $nome,$nacionalidade,$idade,$altura,$peso,$categoria,$vitorias,$derrotas,$empates;

            //Metodos especiais
            public function getNome()
            {
                return $this->nome;
            }
            public function setNome($nome)
            {
                $this->nome = $nome;
            }
            public function getNacionalidade()
            {
                return $this->nacionalidade;
            }
            public function setNacionalidade($nacionalidade)
            {
                $this->nacionalidade = $nacionalidade;
            }
            public function getIdade()
            {
                return $this->idade;
            }
            public function setIdade($idade)
            {
                $this->idade = $idade;
            }
            public function getAltura()
            {
                return $this->altura;
            }
            public function setAltura($altura)
            {
                $this->altura = $altura;
            }
            public function getPeso()
            {
                return $this->peso;
            }
            public function setPeso($peso)
            {
                $this->peso = $peso;
            }
            public function getCategoria()
            {
                return $this->categoria;
            }
            public function setCategoria($categoria)
            {
                $this->categoria = $categoria;
            }
            public function getVitorias()
            {
                return $this->vitorias;
            }
            public function setVitorias($vitorias)
            {
                $this->vitorias = $vitorias;
            }
            public function getDerrotas()
            {
                return $this->derrotas;
            }
            public function setDerrotas($derrotas)
            {
                $this->derrotas = $derrotas;
            }
            public function getEmpates()
            {
                return $this->empates;
            }
            public function setEmpates($empates)
            {
                $this->empates = $empates;
            }
            //Metodos
            public function apresentar(){

            }
            public function status(){

            }
            public function ganharLuta(){

            }
            public function perderLuta(){

            }
            public function empatarLuta(){

            }
        }
    ?>
</body>
</html>
