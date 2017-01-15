<?php 
    session_start();
    if(!isset($_SESSION['user'])) {
        echo "Sem acesso";
    }else {
        
/*<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>*/
?>
   
    <div class="main-post">
         <div class="post-top">
        <h3>
           Criar nova postagem
        </h3>
        <input type="text" name="titulo" form="criar-post">
        
    </div>
        <textarea name="texto" form="criar-post">
            
        </textarea>
    </div>
    <div class="side-post">
        <div class="side-wid">
        <input type="submit" name="salvar" value="Salvar como Racunho">
        <input type="submit" name="salvar" value="Publicar">
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
