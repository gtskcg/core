<?php 
    session_start();
    if(!isset($_SESSION['user'])) {
        echo "Sem acesso";
    }else {
        
/*<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>*/
?>

<div class="titulo-pag">
    <h3>
        Criar nova postagem
    </h3>
</div>
    <div class="main-post">
        <form method="POST" id="criar-post" name="criar-post">
        <input type="text" name="titulo" form="criar-post">
    
        <textarea name="texto" form="criar-post">
                
        </textarea>
        </form>
    </div>
    <div class="side-post">
        <div class="side-wid">
            <input type="submit" name="salvar" form="criar-post" style="float: left" value="Salvar Racunho">
        <input type="submit" name="publicar" form="criar-post"  style="float: right" value="Publicar">
        </div>
        <div class="side-wid">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="cat-ajax.js"></script>
    <form id="cat-form" method="POST" action="cat-process.php">
        <input type="text" name="cat-name">
        <input type="submit" name="cat-enviar">
    </form>

    <?php 
    include_once '../classes/postrels.php';
    $caat = new Categoria();
    $caat->consultarchbx();
    } ?>
        </div>
    </div>
<?php 

    if(isset($_POST['salvar']) || isset($_POST['publicar'])){
        $post = new Postagem();
        extract($_POST, EXTR_OVERWRITE);
        foreach ($_POST['salvar'] as $key) {
            echo $key;
        }
        
        if(isset($_POST['salvar'])) {
            $status = 'salvar';
        }
        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        $data = strftime('%A, %d de %B de %Y', strtotime('today'));
        //$post->salvar($titulo, $texto, $status, $data, $_SESSION['user'], $categories);
    }

?>
