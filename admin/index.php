<!-- Head -->
<head>
        <title>Sistema de Administração - La Cigale</title>
        <?php include 'header/head.php' ?>
</head>
<!-- ENd Head -->


<!-- Sessão do Utilizador -->
<?php include 'request/session.php' ?> 
<!-- Fim do Contexto da Sessão do Utilizador -->


<!-- Content -->
<div id="content_info">
    

    
    
    
    <!-- Head -->
    
    
    <!-- Header -->
    <?php include 'header/header.php' ?>
    
        <!-- Mostra o Conteudo da Página Correspondente -->
        <div class="cont_page">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        Bem Vindo <?php echo $_SESSION['name']; ?>
                     </div>
                </div>
            </div>
        </div>
        
        <!-- End Conteudo -->
        
        
       
    
        <!-- Footer -->
        <?php include 'footer/footer.php' ?>

</div>




<!-- End Content -->





