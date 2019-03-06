<!DOCTYPE html>
<html>
    <head>
        <title> Morreale Portfolio </title>
        <link href="./css/styles.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    </head>
    <body>
        <header id="HEAD" class="flex between z4">
            <div id ="navWrap"class="nav-wrap grid10 flex column">
                <div id="navTitle" class="nav-title flex center z2 grid4">
                    <h1 class="roman">Morreale Animations</h1>
                </div>
                <div class= "navbar-wrap end flex">
                    <div id="sidenav-wrapper" class="sidenav-wrapper abs flex center grid10">
                        <ul id="mySidenav" class="sidenav center rel grid8 column z1">
                            <li class="flex center">
                                <a class="roman point" href="#">Home</a>
                            </li>
                            <li class="flex center">
                                <a class="roman point" href="#">About</a>
                            </li>
                            <li class="flex center" >
                                <a class="roman point" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <nav id="navBar" class="navbar abs grid10 rel">
                        <div class="flex">
                            <button class="open-nav point none flex abs" onclick="togNav(); myFunction(this);">
                                <p>Portfolio</p>
                                <nav class="flex column between">
                                    <div class="bar1"></div>
                                    <div class="bar2"></div>
                                    <div class="bar3"></div>
                                </nav>
                            </button>
                        </div>
                        <ul class="even flex z3 grid5 width-switch">
                            <li class="flex">
                                <a class="point" href="home.html" class="z4">Home</a>
                            </li>
                            <div></div>
                            <li class="flex">
                                <a class="point" href="#">About</a>
                            </li>
                            <div></div>
                            <li class="flex">
                                <a class="point" href="#">Contact</a>
                            </li>
                            <div></div>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="reel-wrap flex column between grid10">
            <div id="reelEmpty" class="reel-empty grid10 zm2"></div>
            <div class="reel-video auto flex column a-center grid5">
            <div class="video-holder flex abs column">
                <h3 class="roman">Demo Reel</h3>
                <div class="text-hold flex auto">
                    <p class= "auto">sde molean itae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque </p>
                </div>
               <div class="video-wrap z1 flex center">
                   <div id="gear-state1" class="video-block1 video-wrapper abs z0">
                        <div class = "vid-display">
                            <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" poster="http://video-js.zencoder.com/oceans-clip.png" data-setup="{}">
                                <source src="uploads/64" type='video/mp4' />
                                <track kind="captions" src="captions.vtt" srclang="en" label="English" />
                            </video>
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
                        echo str_repeat("<div class='myslides none fade' name='slider0'>
                        <div class='numbertext abs'>$alpha / 21</div>
                        <img src='./uploads/$alpha' style='width:100%'>
                    </div>", $beta);
                    }
                ?>
                
                <a class="prev point" onclick="plusSlides(-1,0)">&#10094;</a>
                <a class="next point" onclick="plusSlides(1,0)">&#10095;</a>
                
                <div class= "checkers abs">
                    <?php
                        $theta= 1;
                        for($eta=1; $eta<22; $eta++){
                            echo str_repeat("<span class='dot point $eta' name='dot0' onclick='currentSlide($eta)'></span>", $theta);
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
                        echo str_repeat("<div class='myslides none fade' name='slider1'>
                        <div class='numbertext abs'>$nu / 21</div>
                        <img src='./uploads/$gamma' style='width:100%'>
                    </div>", $delta);
                    }
                ?>
                
                <a class="prev point" onclick="plusSlides(-1,1)">&#10094;</a>
                <a class="next point" onclick="plusSlides(1,1)">&#10095;</a>
                
                <div class= "checkers abs">
                    <?php
                        $kappa = 1;
                        for($iota=1; $iota<22; $iota++){
                            echo str_repeat("<span class='dot point $iota' name='dot1' onclick='currentSlide($iota)'></span>", $kappa);
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
                    for($epsilon=43, $xi=1; $epsilon<64, $xi<22; $epsilon++, $xi++){
                        echo str_repeat("<div class='myslides none fade' name='slider2'>
                        <div class='numbertext abs'>$xi / 21</div>
                        <img src='./uploads/$epsilon' style='width:100%'>
                    </div>", $zeta);
                    }
                ?>
                
                <a class="prev point" onclick="plusSlides(-1,2)">&#10094;</a>
                <a class="next point" onclick="plusSlides(1,2)">&#10095;</a>
                
                <div class="checkers abs">
                    <?php
                        $mu= 1;
                        for($lambda=1; $lambda<22; $lambda++){
                            echo str_repeat("<span class='dot point $lambda' name='dot2' onclick='currentSlide($lambda)'></span>", $mu);
                        }
                    ?>
                </div>
            </div>
            <br>
        </div>

        <div class="reel-wrap flex column between grid10">
            <div class="reel-video auto flex column a-center grid10">
                <div class="video-holder2 flex abs column">
                    <h3 class="roman">Story Board</h3>
                    <div class="text-hold flex auto">
                        <p class= "auto">eo, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque </p>
                    </div>
                    <div class="video-wrap z1 center flex">
                    <div id="gear-state2" class="video-block2 video-wrapper abs z1">
                        <div class = "vid-display">
                            <video id="example_video_2" class="video-js vjs-default-skin" controls preload="none" poster="http://video-js.zencoder.com/oceans-clip.png" data-setup="{}">
                                <source src="uploads/65" type='video/mp4' />
                                <track kind="captions" src="captions.vtt" srclang="en" label="English" />
                            </video>
                        </div>
                    </div>
                    <div id="gear-follow2" class="gear-follow flex center a-center rel z1m"></div> 
                </div>
                </div>
            <div id ="reelEmpty2" class="reel-empty zm2 grid10"></div>
        </div>
        <footer class="flex grid10">
            <div class="foot flex column rel grid10">
                <p class="flex column roman auto"> Like this website? See more at 
                    <a href="#">Thomas Grasso Pages</a>
                </p>
                <div class="signin auto">
                    <ul>
                        <li>
                            <a href="something.php">
                                <button class="point signin-btn">Morreale Login</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <script src="./js/script.js"></script>
    </body>
</html>
