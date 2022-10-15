<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<pre>
    <?php
        require_once "Lutador.php";
        $l = array();
        $l[0] = new Lutador("bolado","Br",30,1.80,60,5,0,2);
        $l[0]->apresentar();
        $l[0]->perderLuta();
        $l[0]->status();
    ?>
</pre>
</body>
</html>

