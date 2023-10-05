<?php
        include("./db/conexao.php");
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Arcave</title>
</head>

<body>
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

            <!-- <div class="profile-container">
                <img class="profile-pic" src="https://images.unsplash.com/photo-1489939078242-0a1dc4a08f06?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" ></img>
                <div class="profile-text-container">
                    <i class="fas fa-caret-down"></i>
                </div> -->

                
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
    <!-- fim dos icones da lateral -->
    

    <div class="container">
        <div class="content-container">
            <div class="featured-content"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), #101820ff), url('https://blushinggeek.com/wp-content/uploads/2023/01/manhwa-review-beware-the-villainess-blushinggeek.jpg');background-repeat:no-repeat; background-position: center;">
                <h1 class="featured-title">Beware of the villainess </h1>
                <!-- <h3 class="featured-author"> <i>by</i> Mia Castello </h3> -->
                <p class="featured-text">Eu me tornei a vilã de um romance! Eu odeio isso? Não! Eu acho isso bem legal.
                    Filha de um duque = uma pessoa rica sem emprego. Como posso perder uma chance como essa?!
                    Esta é a melhor chance de aproveitar a vida. Eu deveria jogar fora a
                    trama principal e viver a vida como eu quero! Pouco tempo depois de
                    acordar como vilã, testemunhei meu noivo, o protagonista masculino do
                    romance, o príncipe coroado, me traindo. Eu o vi abraçar uma garota que
                    não era eu e ele estava sorrindo tão brilhante. Eu fui levada às
                    lágrimas… Brincadeirinha, eu não chorei! Minhas lágrimas valem demais
                    para serem desperdiçadas nesse lixo. Em vez de lágrimas, gritei: “Sua
                    alteza, vá se foder” .</p>
                <ul class="featured-hashtags">
                    <li class="hashs">Toni Infante</li>
                    <li class="hashs">On-Going</li>
                    <li class="hashs">Manhwa</li>
                    <li class="hashs">YA, Magic, Sorcery</li>
                </ul>
                <div class="button-section">
                    <a href="manhwa-Beware.php"><button class="featured-button">Ver <i class="fas fa-book"></i> </button></a>
                    <i class="save-later far fa-bookmark"></i>
                </div>

            </div>
            <div class="book-list-container">
                <h1 class="book-list-title">NEW</h1>
                <div class="book-list-wrapper">
                    <div class="book-list">
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/fc/03/11/fc0311102ad6db20a83969fc339c0fe9.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">The Matriarch</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/86/86/0a/86860a6fc3d852beb14138167d6d2ae7.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Rabbit & Panther</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><a href="manhwa-Rabbit.php"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></a></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/43/8b/bf/438bbfd1aa2bb187b11e946ed2e2f741.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">A Peach Blossom</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/60/ca/96/60ca969b8073ced447d5f8c85e67dace.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Lead's Daughter</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/2a/a6/15/2aa615c9a4672166433952d0005076d8.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Hour Glass</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/3f/0b/71/3f0b7122f9be21f2ccf52d6050436534.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Lala Shi</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/4d/45/e0/4d45e0448e7934569993177bd873bb62.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Doctor Empress</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                    </div>
                    <i class="arrow fas fa-chevron-right "></i>
                </div>
            </div>
            <div class="book-list-container">
                <h1 class="book-list-title">TOP PICKS FOR YOU</h1>
                <div class="book-list-wrapper">
                    <div class="book-list">
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/79/6c/ce/796ccecb83c8479b90d1e62b260678cb.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">I'm a Princess?</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/2e/d2/6f/2ed26f17eca311e8ffab0f1a381f9d4f.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Lady Baby</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/df/bb/92/dfbb92814290043e316a0eed647cb4d7.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Swapping You</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/ce/73/9d/ce739d1e6aaebd843bb501230c27fe08.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Villian's Family</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://cdn-4.ohay.tv/imgs/8353434f3efe4e2ba6b2/728.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Relive it</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/6d/3a/60/6d3a60915ad87a3ba8e536de61cdf6ac.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Perfumer</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/c4/02/a0/c402a03696f1ef0d95a9f5fe28fc54da.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">It was me </span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/71/48/db/7148dbbb104e147f38bc3d779100a0fe.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">MORE</span>
                            <p class="book-list-item-desc">There is so much more from where these came from</p>
                            <div class="button-class"><button class="book-list-item-button">Browse</button></div>
                        </div>
                    </div>
                    <i class="arrow fas fa-chevron-right "></i>
                </div>
            </div>
            <div class="book-list-container">
                <h1 class="book-list-title">TRENDING</h1>
                <div class="book-list-wrapper">
                    <div class="book-list">
                        <div class="book-list-item">
                            <img src="https://www.anime-planet.com/images/manga/covers/58984.jpg?t=1610071515" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Faking style</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/99/8b/07/998b0787ae55f1fc165b4f773e068013.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Phoinex</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/a6/d7/b9/a6d7b948db90556859c2fea9aa841eb5.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">ID is New</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/db/c4/cc/dbc4cc27a6d7014bc93ca1f1b0180e71.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">My Family</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/19/9d/42/199d42271c9a3723481994ed5ff1f6d8.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Anti-fan</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/bb/8b/c0/bb8bc0c13d52689b88d7dcd97c305c6e.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Leander Midnight</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>

                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/6e/de/99/6ede9926ab94d869e75727e59794496f.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Silver</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/71/48/db/7148dbbb104e147f38bc3d779100a0fe.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">MORE</span>
                            <p class="book-list-item-desc">There is so much more from where these came from</p>
                            <div class="button-class"><button class="book-list-item-button">Browse</button></div>
                        </div>

                    </div>
                    <i class="arrow fas fa-chevron-right "></i>
                </div>
            </div>
            <div class="featured-content"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), #101820ff), url('https://i.pinimg.com/originals/61/8f/d3/618fd378998dc06826fb2c33904d5142.jpg');background-repeat:no-repeat; background-position: center;">
                <h1 class="featured-title">Operation Name Pure Love </h1>
                <p class="featured-text">“Eu testemunhei meu namorado e minha melhor amiga se beijando, estou confusa… há uma quantidade pré-determinada de amor que cada pessoa receberá em sua vida? E a quantidade de amor que posso receber é “0”???”. Soo-Ae está tentando mudar seu destino, e Eun-Hyuk, que está preso em tal plano, entrou de cabeça! “Eu estava apenas tentando fingir estar em um caso para fazer ciúmes no meu namorado, mas estou realmente me envolvendo?! Este plano… vai funcionar?”</p>
                <ul class="featured-hashtags">
                    <li class="hashs">Yaongyi</li>
                    <li class="hashs">Completed</li>
                    <li class="hashs">Manhwa</li>
                    <li class="hashs">Drama, Romance</li>
                </ul>
                <div class="button-section">
                    <button class="featured-button">Ver <i class="fas fa-book"></i> </button>
                    <i class="save-later far fa-bookmark"></i>
                </div>

            </div>
            <div class="book-list-container">
                <h1 class="book-list-title">MY VerS</h1>
                <div class="book-list-wrapper">
                    <div class="book-list">
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/ce/73/9d/ce739d1e6aaebd843bb501230c27fe08.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Villian's Family</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/96/d7/69/96d769147ddc338d7723a1aa670b4b5c.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Witch of MueiVer</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/3e/05/54/3e05545915ee88a1668fbeb10a0c8aac.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Cloud Bell</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/c5/6e/23/c56e23550d4a021a8d748eb6b37c6207.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Dukes' Mansion</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/e5/1e/91/e51e915430f8d81579e67979465aca51.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Pancom Cheya</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/b4/68/c5/b468c5bcf6cd3a4edeb0b5a7b099c055.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Scrounge</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/c2/8b/27/c28b27f2cc7adefa22c0b7dfe70b40b7.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Charming The Beast</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>

                    </div>
                    <i class="arrow fas fa-chevron-right "></i>
                </div>
            </div>
            <div class="book-list-container">
                <h1 class="book-list-title">COMPLETED SERIES</h1>
                <div class="book-list-wrapper">
                    <div class="book-list">
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/a4/fd/c0/a4fdc011c14367fa4b6f3d92288cedf4.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Here</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/a9/a8/6c/a9a86c4ee8ad78421e1bb70a8efc8c17.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Cotton Candy</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/95/0d/71/950d714157b694a454ecbace58d3637c.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Dan-Ban</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/f7/85/c4/f785c4c1370a63948553756e7ff070a5.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">The Silvers</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/75/00/d7/7500d75fbcaf6f8d9e9d570d529dae1b.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Adopted Dad</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/4b/c5/5e/4bc55e51895765ffbd14ec898d41e1b9.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">HeaVer</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/46/fd/82/46fd8286ac1afaa84559bc3d9ab89573.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">Lottie</span>
                            <p class="book-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti tempore asperiores incidunt.</p>
                            <div class="button-class"><button class="book-list-item-button">Ver</button><i
                                    class="insider far fa-bookmark"></i></div>
                        </div>
                        <div class="book-list-item">
                            <img src="https://i.pinimg.com/564x/71/48/db/7148dbbb104e147f38bc3d779100a0fe.jpg" alt=""
                                class="book-list-item-img">
                            <span class="book-list-item-title">MORE</span>
                            <p class="book-list-item-desc">There is so much more from where these came from</p>
                            <div class="button-class"><button class="book-list-item-button">Browse</button></div>
                        </div>
                    </div>
                    <i class="arrow fas fa-chevron-right "></i>
                </div>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>