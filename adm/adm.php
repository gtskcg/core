<?php 
    session_start();
    if(!isset($_SESSION['user'])) {
        echo "Sem acesso";
    }else {
?>
<head>
    <link href="../css/adm_estilo1.css" rel="stylesheet">
</head>
<body>
    <div class="main">
        
    <div class="menu-sup">
        <a href="?p=postagem/criar_postagem">Nova postagem</a>
    </div>

            <div class="menu-lateral">
        
    </div>
        <div class="container">
        <?php 
            @$p = $_GET['p'];
            if($p == "" || $p == "index" || $p == "index.php") {
                @include_once 'home.php';
            }else {
                @include_once $p.'.php';
            }
        ?>
        </div>
    </div>
</body>
<?php
    }
