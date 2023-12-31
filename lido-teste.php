

<?php
    include("./db/conexao.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\lido-teste.css">
    <title>Arcave</title>
</head>
<body>



    <!-- nav bar -->
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">Arcave</h1>
            </div>
            <div class="menu-container">
            <ul class="menu-list">
                    <li class="menu-items"><a href="index.php">Inicio</a></li> 
                    <li class="menu-items"><a href="recomendacao.php">Recomendações</a></li> 
                    <li class="menu-items"><a href="lendo.php">Lendo</a></li> 
                    <li class="menu-items"><a href="lido.php">Lido</a></li> 
                    <li class="menu-items"><a href="quero-ler.php">Quero Ler</a></li> 
                    <li class="menu-items"><a href="dropados.php">Dropados</a></li> 
                </ul>
            </div>
                
         <!-- Esses icones são os de mudar o tema do site -->
            <div class="toggle">
                <i class="fas fa-moon toggle-icon"></i>
                <i class="fas fa-sun toggle-icon"></i>
                <div class="toggle-ball"></div>
            </div>
            <!-- fim do icone -->
        </div>
    </div>
    </div>


    <!-- icones da lateral -->
    <div class="sidebar">
        <i class="left-menu-icon fas fa-home"></i>
        <i class="left-menu-icon fas fa-search"></i>
    </div>



    <section>
<div>
    <h2>Seus  Manhwas  Lidos</h2>

</div>
</section>
    



    <div class="container">
    <div class="content">
    <div id="list-th">
      <div class="book read">
        <div class="cover">
          <img src="https://i.pinimg.com/236x/85/25/92/8525925220b373a4bd050698d11788e5.jpg">
        </div>
        <?php
         $sql = "SELECT * FROM tbmanhwas where idManhwa = 3";
         $rs = mysqli_query($conexao, $sql);
         while ($dados = mysqli_fetch_assoc($rs)){
        ?>
        
        <div class="description">
          <h1 class="titulo"><?=$dados["nomeManhwa"]?></h1>
        </div>
      </div>
</div>
    </div>
    </div>


    <?php
    }
    ?>



    
    <script src="js/app.js"></script>
</body>
</html>
    