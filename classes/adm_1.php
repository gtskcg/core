<?php
session_start();
if(!isset($_SESSION['sessao'])){
    echo 'Sem acesso!';
}else{
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="ETEC Itu, Informatica, Informatica para Internet, WEB, Administracao, Meio Ambiente, Paisagismo, Hospedagem, Agenciamento de Viagem, Turismo, Escola Tecnica, Logistica, Integrado, Ensino Medio, Itu, Sao Paulo, Brasil, gratuito" />
        <meta name="description" content="Site da ETEC Itu - cursos tecnicos gratuitos" />
        <title>ETEC Itu - Martinho Di Ciero</title>
        
        <link rel="shortcut icon" href="../imagem/etec.ico" />		
        
        <script src="../js/lightbox/js/modernizr.custom.js"></script>
        
        <link href="../css/estilo.css" type="text/css" rel="stylesheet" />

	
	<link rel="stylesheet" href="../js/lightbox/css/lightbox.css" media="screen"/>
        
        <link rel='stylesheet' type='text/css' href='../css/styles.css' />
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    </head>

    <body>
        <div id="container">
        <header>      
            <img src="../imagem/logo.gif" />
        </header>
            
       <div id='cssmenu'>
        <ul>
           <li><a href='?p=home'><span>Home</span></a></li>
           <li class='has-sub'><a href='#'><span>Cadastro</span></a>
              <ul>
                 <li class='has-sub'><a href='#'><span>Marca</span></a>
                    <ul>
                       <li class='last'><a href='?p=marca/cadastrar'><span>Efetuar Cadastro</span></a></li>
                    </ul>
                 </li>
                 <li class='has-sub'><a href='#'><span>Moto</span></a>
                    <ul>
                       <li class='last'><a href='?p=moto/cadastrar'><span>Efetuar Cadastro</span></a></li>
                       
                    </ul>
                 </li>
                 <li class='has-sub'><a href='#'><span>Noticia</span></a>
                    <ul>
                       <li class='last'><a href='?p=noticia/cadastrar'><span>Efetuar Cadastro</span></a></li>
                       
                    </ul>
                 </li>
                 
                 <li class='has-sub'><a href='#'><span>Usuário</span></a>
                    <ul>
                       <li class='last'><a href='?p=login/cadastrar'><span>Efetuar Cadastro</span></a></li>
                    </ul>
                 </li>
              </ul>
           </li>
           <li class='has-sub'><a href='#'><span>Consulta</span></a>
              <ul>
                 <li class='has-sub'><a href='#'><span>Marca</span></a>
                    <ul>
                       <li class='last'><a href='?p=marca/consultar'><span>Consultar</span></a></li>
                       <li class='last'><a href='?p=marca/carregarCombo'><span>Carregar Combo</span></a></li>
                    </ul>
                 </li>
                 <li class='has-sub'><a href='#'><span>Moto</span></a>
                    <ul>
                       <li><a href='?p=moto/consultar'><span>Consultar</span></a></li>

                    </ul>
                 </li>
                 <li class='has-sub'><a href='#'><span>Noticia</span></a>
                    <ul>
                       <li><a href='?p=noticia/consultar'><span>Consultar</span></a></li>

                    </ul>
                 </li>
              </ul>
           </li>
           
           <li><a href='?p=logout'><span>Logout</span></a></li>
           <li class='last'><a href='#'><span>Fale Conosco</span></a></li>
        </ul>
        </div>

        <article id="conteudo">
            
                <?php
                @$p = $_GET['p'];		
                if($p == "" || $p == "index" || $p == "index.php"){
                    @include_once 'home.php';
                }else{
                    @include_once $p.'.php';
                }
                ?>
           
        </article>

        <footer>
            <div id="rodape">
                <h3>Rodape</h3>
            </div>
        </footer>
            
        </div>
        
        <script src="../js/lightbox/js/jquery-1.10.2.min.js"></script>
	<script src="../js/lightbox/js/lightbox-2.6.min.js"></script>

	<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
    </body>
</html>
<?php
}
?>