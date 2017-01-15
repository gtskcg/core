<?php 
    session_start();
    if(!isset($_SESSION['user'])) {
        echo "Sem acesso";
    }else {
?>
<head>
    <link href="../css/responsivel1.css" rel="stylesheet">

</head>
<body>
    <div class="main">
        
    <div class="menu-sup">
        <a href="Links rápidos">Links rápidos</a>
    </div>

            <div class="menu-lateral">
                <ul>
                    <li><a href="?p=postagem/criar_postagem">Nova postagem</a></li>
                
                    <li><a href="#">Link de exemplo</a></li>
                
                    <li><a href="#">Link de exemplo</a></li>
                
                    <li><a href="#">Link de exemplo</a></li>
                </ul>
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
