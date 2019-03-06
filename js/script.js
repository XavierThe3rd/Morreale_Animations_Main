console.log(window.innerWidth > 1000);

window.onscroll = function(){
  if (window.innerWidth > 1115) {  
    document.getElementById("navTitle").style.margin ="0";

    if (window.pageYOffset > 146) {
        document.getElementById("navBar").style.position = "fixed"
        document.getElementById("navBar").style.top = "0"
        document.getElementById("reelEmpty").style.height = "780px";
    }  else {
        document.getElementById("navBar").style.position ="static"
        document.getElementById("reelEmpty").style.height = "740px";
    }
}else{
  if (window.pageYOffset > 70){
      document.getElementById("HEAD").style.position = "fixed"
      document.getElementById("navWrap").style.position = "fixed"
      document.getElementById("navTitle").style.margin = "0"
      document.getElementById("reelEmpty").style.height = "975px"
      document.getElementById("mySidenav").style.top = "44px";
      document.getElementById("mySidenav").style.margin = "0";

        if (window.pageYOffset > 320){
              document.getElementById("HEAD").style.position = "relative"
              document.getElementById("navWrap").style.position = "relative"
              document.getElementById("navTitle").style.margin = "320px 0 0"
              document.getElementById("reelEmpty").style.height = "545px"
              document.getElementById("mySidenav").style.top = "44px"; 
              
            if (window.pageYOffset > 430){
              document.getElementById("navBar").style.position = "fixed"
              document.getElementById("navBar").style.top = "0px";
              document.getElementById("reelEmpty2").style.height = "545px"
              document.getElementById("mySidenav").style.position = "fixed"; 
              

            } else{
              document.getElementById("navBar").style.position = "absolute"
              document.getElementById("navBar").style.top = "430px";
              document.getElementById("mySidenav").style.position = "relative";
            }
        } else{
          document.getElementById("navBar").style.position = "relative"
          document.getElementById("navBar").style.top = "0px";
        } 
  } else{
        document.getElementById("navBar").style.top = "180px"
        document.getElementById("mySidenav").style.margin = "84px 0 0";
        document.getElementById("mySidenav").style.top = "-40px"
        document.getElementById("navTitle").style.margin = "70px 0 0"
        document.getElementById("navBar").style.position = "absolute"
        document.getElementById("HEAD").style.position = "relative"
        document.getElementById("reelEmpty").style.height = "800px"
        document.getElementById("navWrap").style.position = "relative";
        }
    }
}

function togNav(){
  document.getElementById("mySidenav").classList.toggle("hidden-a1"); 
}
function myFunction(x) {
  x.classList.toggle("change");
}

(function(){
  var resizeVideoJs = function(player, aspectRatio){
    var width = document.getElementById(player.id).parentElement.offsetWidth;
    player.width(width).height( width * aspectRatio );    
  }

  var videos = document.getElementsByTagName('video'); 
  
  for(i=0;i<videos.length;i++) {
    
    var video = videos[i];
    
    if(video.className.indexOf('video-js') > -1) { 
      
      _V_(video.id).ready(function(){
    
        var player = this;

        var aspectRatio = player.height()/player.width();  
      
        resizeVideoJs(player, aspectRatio); 
  
        if (window.addEventListener) {
          window.addEventListener('resize', function(){
            resizeVideoJs(player, aspectRatio);
          }, false); 
        } else if (window.attachEvent)  {
          window.attachEvent('onresize', function(){
            resizeVideoJs(player, aspectRatio);
          })
        }
      })
    }
  }
})



function openNav1() {
  document.getElementById("img1").style.display = "flex";
}

function closeNav1() {
  document.getElementById("img1").style.display = "none";
}

function openNav2() {
  document.getElementById("img2").style.display = "flex";
}

function closeNav2() {
  document.getElementById("img2").style.display = "none";
}

function openNav3() {
  document.getElementById("img3").style.display = "flex";
}

function closeNav3() {
  document.getElementById("img3").style.display = "none";
}

var slideIndex = new Array(3);
slideIndex[0]=1;
slideIndex[1]=1;
slideIndex[2]=1;

showSlides(1, 0);  
showSlides(1, 1);
showSlides(1, 2);


function plusSlides(n, slideshownumber) 
{
  slideIndex[slideshownumber] = slideIndex[slideshownumber] + n; 
  showSlides( slideIndex[slideshownumber], slideshownumber );
}

function currentSlide(n, slideshownumber) 
{
  slideIndex[slideshownumber] = n;
  showSlides(slideIndex[slideshownumber], slideshownumber);
}

function showSlides(n, slideshownumber) 
{
  var i;
  var slideshowname = "slider" + slideshownumber;
  var slides = document.getElementsByName(slideshowname);
  var dotname = "dot" + slideshownumber;
  var dots = document.getElementsByName(dotname);

  if (n > slides.length) 
  {
      slideIndex[slideshownumber] = 1;
  }

  if (n < 1) 
  {
      slideIndex[slideshownumber] = slides.length;
  }

  for (i = 0; i < slides.length; i++) 
  {
      slides[i].style.display = "none";
  }

  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[slideIndex[slideshownumber]-1].style.display = "flex";
  dots[slideIndex[slideshownumber]-1].className += " active";
} 