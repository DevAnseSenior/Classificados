<?php require 'pages/header.php'; ?>
<?php
    if(empty($_SESSION['cLogin'])) {
        ?>
        <script type="text/javascript">window.location.href="login.php";</script>
        <?php
        exit;
    }
?>
    <div class="container">
        <h1>Meus Anúncios - Adicionar Anuncios</h1>

        <form method="POST" enctype="multipart/form-data">
            
        </form>
    </div>
<?php require 'pages/footer.php'; ?>