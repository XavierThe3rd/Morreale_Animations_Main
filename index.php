<!DOCTYPE html>
<html>
    <head>
        <title> Morreale Portfolio </title>
        <link href="./css/styles.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    </head>
    <body>
        <header class="flex between">
            <div id ="navWrap"class="nav-wrap grid10 flex column">
                <div id="navTitle" class="nav-title flex center z2 grid4">
                    <h1 class="roman">Morreale Animations</h1>
                </div>
                <div class= "navbar-wrap end flex">
                    <nav id="navBar" class="navbar abs grid10 rel">
                        <button class="open-nav none abs" onclick="togNav()">Navigation</button>
                        <ul class="even flex">
                            <li class="flex center">
                                <a class="roman" href="home.html" class="z4">Home</a>
                            </li>
                            <li class="flex center">
                                <a class="roman" href="about.html">About</a>
                            </li>
                            <li class="flex center" >
                                <a class="roman" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav>
                     <div id="sidewnav-wrapper" class="sidenav-wrapper flex center grid10">
                        <ul id="mySidenav" class="sidenav center grid8 column z1 abs">
                            <li class="flex center">
                                <a class="roman" href="#">Home</a>
                            </li>
                            <li class="flex center">
                                <a class="roman" href="#">About</a>
                            </li>
                            <li class="flex center">
                                <a class="roman" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <nav class="hidden-navbar grid5 fix z1" id="nav2">
                        <button class="open-nav none abs" onclick="togNav2()">Navigation</button>
                        <ul class="even flex">
                            <li class="flex center">
                                <a class="roman" href="home.html">Home</a>
                            </li>
                            <li class="flex center">
                                <a class="roman" href="about.html">About</a>
                            </li>
                            <li class="flex center">
                                <a class="roman" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div id="sidewnav-wrapper2" class="sidenav-wrapper2 flex center">
                        <ul id="mySidenav2" class="sidenav grid8 center column z1 fix">
                            <li class="flex center">
                                <a class="roman" href="#">Home</a>
                            </li>
                            <li class="flex center">
                                <a class="roman" href="#">About</a>
                            </li>
                            <li class="flex center">
                                <a class="roman" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="reel-wrap flex  column between grid10">
            <div class="reel-empty grid10"></div>
            <div class="reel-video flex column a-center grid5">
            <div class="video-holder">
                <h3 class="roman">Demo Reel</h3>
                <p>-----------------------------------instert description here------------------------------</p>
               <div class="video-wrap flex center">
                   <div id="gear-state1" class="video-block1 video-wrapper abs z0">
                        <video class="video-element" preload="metadata">
                            <source src="./uploads/vid1" type="video/ogg">
                            <source src="./uploads/vid1" type="video/mp4">
                        </video>
                        <div class="video-controls abs">
                            <button class="btn btn-backward"><span class="fa fa-backward"></span></button>
                        
                            <button class="btn btn-play"><span class="fa fa-play"></span></button>
                        
                            <button class="btn btn-forward"><span class="fa fa-forward"></span></button>
                        
                            <button class="btn btn-stop"><span class="fa fa-stop"></span></button>
                        
                            <button class="btn btn-reset" hidden><span class="fa fa-undo"></span></button>
                        
                            <button class="btn btn-mute"><span class="fa fa-volume-off"></span></button>
                        
                            <button class="btn btn-expand"><span class="fa fa-expand"></span></button>
                          </div>
                        
                          <div class="progress-bar">
                            <div class="progress-bar-fill"></div>
                        </div>
                   </div>
                    <div id="gear-follow1" class="gear-follow flex center a-center rel z1m">
                    </div> 
                </div>
            </div>
            </div>
        </div> 
        <div class="drawings flex column">
            <h3 class="roman">Drawings</h3>
            <ul class="flex between">
                <button class="main-link auto point"type="button" onclick="openNav1()">
                    <li class="flex a-center center">
                        <a>
                            <img src="./uploads/1">
                        </a>
                    </li>
                </button>
                <button class="main-link auto point"type="button" onclick="openNav2()">
                    <li class="flex a-center center">
                        <a>
                            <img src="./uploads/22">
                        </a>
                    </li>
                </button>
                <button class="main-link auto point"type="button" onclick="openNav3()">
                    <li class="flex a-center center">
                        <a>
                            <img src="./uploads/43">
                        </a>
                    </li>
                </button>
            </ul>
        </div>  
        <div class="lightbox none center column fix grid10 h10 z4" id="img1">
            <a href="javascript:void(0)" class="closebtn auto" onclick="closeNav1()">&times;</a>

            <div class="slideshow-container flex rel center auto">
                <?php
                    $beta = 1;
                    for($alpha=1; $alpha<22; $alpha++){
                        echo str_repeat("<div class='mySlides none fade'>
                        <div class='numbertext abs'>$alpha / 21</div>
                        <img src='./uploads/$alpha' style='width:100%'>
                    </div>", $beta);
                    }
                ?>
                
                <a class="prev">&#10094;</a>
                <a class="next">&#10095;</a>
                
                <div class= "checkers abs">
                    <?php
                        $theta= 1;
                        for($eta=1; $eta<22; $eta++){
                            echo str_repeat("<span class='dot point $eta'></span>", $theta);
                        }
                    ?>
                </div>
            </div>
            <br>
        </div>
  
        <div class="lightbox none center column fix grid10 h10 z4" id="img2">
            <a href="javascript:void(0)" class="closebtn auto" onclick="closeNav2()">&times;</a>

            <div class="slideshow-container flex rel center auto">
            <?php
                    $delta = 1;
                    for($gamma=22, $nu=1; $gamma<44, $nu<22; $gamma++, $nu++){
                        echo str_repeat("<div class='mySlides none fade'>
                        <div class='numbertext abs'>$nu / 21</div>
                        <img src='./uploads/$gamma' style='width:100%'>
                    </div>", $delta);
                    }
                ?>
                
                <a class="prev">&#10094;</a>
                <a class="next">&#10095;</a>
                
                <div class= "checkers abs">
                    <?php
                        $kappa = 1;
                        for($iota=1; $iota<22; $iota++){
                            echo str_repeat("<span class='dot point $iota'></span>", $kappa);
                        }
                    ?>
                </div>
            </div>
            <br>
        </div>
        <div class="lightbox none center column fix grid10 h10 z4" id="img3">
            <a href="javascript:void(0)" class="closebtn auto" onclick="closeNav3()">&times;</a>
            <div class="slideshow-container flex rel center auto">
            <?php
                    $zeta = 1;
                    for($epsilon=44, $xi=1; $epsilon<64, $xi<22; $epsilon++, $xi++){
                        echo str_repeat("<div class='mySlides none fade'>
                        <div class='numbertext abs'>$xi / 21</div>
                        <img src='./uploads/$epsilon' style='width:100%'>
                    </div>", $zeta);
                    }
                ?>
                
                <a class="prev">&#10094;</a>
                <a class="next">&#10095;</a>
                
                <div class="checkers abs">
                    <?php
                        $mu= 1;
                        for($lambda=1; $lambda<22; $lambda++){
                            echo str_repeat("<span class='dot point $lambda'></span>", $mu);
                        }
                    ?>
                </div>
            </div>
            <br>
        </div>

        <div class="reel-wrap flex column between grid10">
            <div class="reel-video flex column a-center grid10">
                <div class="video-holder2">
                    <h3 class="roman">Story Board</h3>
                    <p>-----------------------------------instert description here------------------------------</p>
                <div class="video-wrap flex">
                    <div id="gear-state2" class="video-block2 video-wrapper abs z1">
                        <video class="video-element" preload="metadata">
                            <source src="./uploads/vid2" type="video/ogg">
                            <source src="./uploads/vid2" type="video/mp4">
                        </video>
                        <div class="video-controls abs">
                            <button class="btn btn-backward"><span class="fa fa-backward"></span></button>
                        
                            <button class="btn btn-play"><span class="fa fa-play"></span></button>
                        
                            <button class="btn btn-forward"><span class="fa fa-forward"></span></button>
                        
                            <button class="btn btn-stop"><span class="fa fa-stop"></span></button>
                        
                            <button class="btn btn-reset" hidden><span class="fa fa-undo"></span></button>
                        
                            <button class="btn btn-mute"><span class="fa fa-volume-off"></span></button>
                        
                            <button class="btn btn-expand"><span class="fa fa-expand"></span></button>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-bar-fill"></div>
                        </div>
                    </div>
                    <div id="gear-follow2" class="gear-follow flex center a-center rel z1m"></div> 
                </div>
                </div>
            <div class="reel-empty grid10"></div>
        </div>
        <footer class="flex center">
        <a href="something.php" style="z-index: 4;">something</a>
            <div class="foot flex center rel grid7">
                <p class="flex column roman"> Like this website? See more at 
                    <a href="#">Thomas Grasso Pages</a>
                </p>
            </div>
        </footer>
        <script src="./js/script.js"></script>
    </body>
</html>