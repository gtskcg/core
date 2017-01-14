<form method="POST" action="">
    <input type="text" name="database">
    <input type="submit" name="db" value="Criar banco de dados">
</form>
<?php 
    if(isset($_POST['db'])) {
        extract($_POST, EXTR_OVERWRITE);
        echo $database;
        include_once '../classes/adm.php';
        $adm = new adm();
        $adm->salvar();
    }

?>
    