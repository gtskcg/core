<?php 
    session_start();
    if(!isset($_SESSION['user'])) {
        echo "Sem acesso";
    }else {
?>
<head>
    <link href="../css/adm_estilo.css" rel="stylesheet">
</head>
<body>
    <div class="menu-sup">
        
    </div>
    <div class="menu-lateral">
        
    </div>
    <div class="main">
        <?php 
            @$p = $_GET['p'];
            if($p == "" || $p == "index" || $p == "index.php") {
                include_once 'home.php';
            }else {
                include_once $p.'.php';
            }
        ?>
    </div>
</body>
<?php
    }
