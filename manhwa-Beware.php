<?php
    include("./db/conexao.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\manhwas.css">
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










    <div class="container">
    <div class="content">
        <div>
        <img src="https://th.bing.com/th/id/OIP.ZlbBygRahRy8-uaNgA89rwAAAA?pid=ImgDet&rs=1" alt="" class="capa">
        </div>
        <?php
         $sql = "SELECT * FROM tbmanhwas where idManhwa = 1";
         $rs = mysqli_query($conexao, $sql);
         while ($dados = mysqli_fetch_assoc($rs)){
        ?>
        <div>
        <h1><?=$dados["nomeManhwa"]?></h1>
        <p><?=$dados["sinopseManhwa"]?></p>
        </div>
    </div>
    </div>
    <?php
    }
    ?>
    

    

    <div class="content-button">
    <button>     
        Lendo
    </button>
    <button>
        Lido
    </button>
    <button>
        Quero Ler
    </button>
    <button>
        Dropado
    </button>
    </div>




</body>
</html>