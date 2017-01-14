<?php 
    session_start();
    if(!isset($_SESSION['user'])) {
        echo "Sem acesso";
    }else {
?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="cat-ajax.js"></script>
    <form id="cat-form" method="POST" action="cat-process.php">
        <input type="text" name="cat-name">
        <input type="submit" name="cat-enviar">
    </form>

    <?php 
    
    } ?>
