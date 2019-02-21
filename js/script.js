/*console.log(window.innerWidth > 1000);

window.

window.onscroll = function() {
    if (window.innerWidth > 1115) {  
        document.getElementById("mySidenav").style.display = "none"
        document.getElementById("mySidenav2").style.display = "none"
        document.getElementById("navWrap").style.position ="inherit"
        document.getElementById("navTitle").style.position ="relative";

        if (window.pageYOffset > 98) {
            document.getElementById("nav2").style.display = "block";
        } 

            
        else {
            document.getElementById("nav2").style.display = "none"
            document.getElementById("navBar").style.top ="98px";
        }
    }


    else {
        document.getElementById("mySidenav").style.display = "flex"
        document.getElementById("mySidenav2").style.display = "flex";

        if (window.pageYOffset > 70) {
            document.getElementById("navWrap").style.position = "fixed"
            document.getElementById("navWrap").style.top = "0"
            document.getElementById("navTitle").style.position = "relative"
            document.getElementById("navBar").style.top = "98px"
            document.getElementById("mySidenav").style.position = "inherit";

            if (window.pageYOffset > 300) {
                document.getElementById("mySidenav2").style.display = "flex"
                document.getElementById("mySidenav").style.height = "0%"
                document.getElementById("mySidenav").style.padding = "0px"
                document.getElementById("navWrap").style.position ="absolute"
                document.getElementById("navWrap").style.top = "300px"
                document.getElementById("navTitle").style.position = "relative";
                
                if (window.pageYOffset > 398) {
                    document.getElementById("nav2").style.display = "flex";
                    document.getElementById("mySidenav2").style.right = "12%";
                }
                else {
                    document.getElementById("nav2").style.display = "none";
                }
            }
            else {
                document.getElementById("nav2").style.display ="none"
                document.getElementById("mySidenav2").style.display = "none"
                document.getElementById("mySidenav").style.top = "168px";
            }
        
        } 
            
        else {  
            document.getElementById("navWrap").style.position = "inherit"
            document.getElementById("navBar").style.top = "168px"
            document.getElementById("mySidenav").style.position = "absolute"
            document.getElementById("navTitle").style.position = "absolute"
            document.getElementById("navTitle").style.width = "100%"
            document.getElementById("mySidenav2").style.display = "none";
        }
    }
}
*/

function togNav() {
var nav = document.getElementById("mySidenav");
    if (nav.style.height === "0%") {
        nav.style.height = "30%"
        nav.style.padding = "60px 0px 40px"
    } else{
        nav.style.height = "0%";
        nav.style.padding = "0px";
    }
}

function togNav2() {
var nav = document.getElementById("mySidenav2");
    if (nav.style.height === "0%") {
        nav.style.height = "30%";
        nav.style.padding = "60px 0px 40px";
    } else{
        nav.style.height = "0%";
        nav.style.padding = "0px";
    }
}

const btnBackward = document.querySelector('.btn-backward');
const btnExpand = document.querySelector('.btn-expand');
const btnMute = document.querySelector('.btn-mute');
const btnMuteIcon = btnMute.querySelector('.fa');
const btnPlay = document.querySelector('.btn-play');
const btnPlayIcon = btnPlay.querySelector('.fa');
const btnForward = document.querySelector('.btn-forward');
const btnReset = document.querySelector('.btn-reset');
const btnStop = document.querySelector('.btn-stop');
const progressBar = document.querySelector('.progress-bar');
const progressBarFill = document.querySelector('.progress-bar-fill');
const videoElement = document.querySelector('.video-element');

// Toggle full-screen mode
const expandVideo = () => {
  if (videoElement.requestFullscreen) {
    videoElement.requestFullscreen();
  } else if (videoElement.mozRequestFullScreen) {
    // Version for Firefox
    videoElement.mozRequestFullScreen();
  } else if (videoElement.webkitRequestFullscreen) {
    // Version for Chrome and Safari
    videoElement.webkitRequestFullscreen();
  }
}

// Move the video backward for 5 seconds
const moveBackward = () => {
  videoElement.currentTime -= 5;
}

// Move the video forward for 5 seconds
const moveForward = () => {
  videoElement.currentTime += 5;
}

// Mute the video
const muteVideo = () => {
  if (videoElement.muted) {
    videoElement.muted = false;

    btnMuteIcon.classList.remove('fa-volume-up');
    btnMuteIcon.classList.add('fa-volume-off');
  } else {
    videoElement.muted = true;

    btnMuteIcon.classList.remove('fa-volume-off');
    btnMuteIcon.classList.add('fa-volume-up');
  }
}

// Play / Pause the video
const playPauseVideo = () => {
  if (videoElement.paused) {
    videoElement.play();

    btnPlayIcon.classList.remove('fa-play');
    btnPlayIcon.classList.add('fa-pause');
  } else {
    videoElement.pause();

    btnPlayIcon.classList.remove('fa-pause');
    btnPlayIcon.classList.add('fa-play');
  }
}

// Restart the video
const restartVideo = () => {
  videoElement.currentTime = 0;

  btnPlay.removeAttribute('hidden');
  btnReset.setAttribute('hidden', 'true');
}

// Stop the video
const stopVideo = () => {
  videoElement.pause();
  videoElement.currentTime = 0;
  btnPlayIcon.classList.remove('fa-pause');
  btnPlayIcon.classList.add('fa-play');
}

// Update progress bar as the video plays
const updateProgress = () => {
  // Calculate current progress
  let value = (100 / videoElement.duration) * videoElement.currentTime;

  // Update the slider value
  progressBarFill.style.width = value + '%';
}

// Event listeners
btnBackward.addEventListener('click', moveBackward, false);
btnExpand.addEventListener('click', expandVideo, false);
btnMute.addEventListener('click', muteVideo, false);
btnPlay.addEventListener('click', playPauseVideo, false);
btnForward.addEventListener('click', moveForward, false);
btnReset.addEventListener('click', restartVideo, false);
btnStop.addEventListener('click', stopVideo, false);
videoElement.addEventListener('ended', () => {
  btnPlay.setAttribute('hidden', 'true');
  btnReset.removeAttribute('hidden');
}, false);
videoElement.addEventListener('timeupdate', updateProgress, false);



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



(function() {

init(); //on page load - show first slide, hidethe rest

function init() {

parents = document.getElementsByClassName('slideshow-container');

for (j = 0; j < parents.length; j++) {
  var slides = parents[j].getElementsByClassName("mySlides");
  var dots = parents[j].getElementsByClassName("dot");
  slides[0].classList.add('active-slide');
  dots[0].classList.add('active');
}
}

dots = document.getElementsByClassName('dot'); //dots functionality

for (i = 0; i < dots.length; i++) {

dots[i].onclick = function() {

  slides = this.parentNode.parentNode.getElementsByClassName("mySlides");

  for (j = 0; j < this.parentNode.children.length; j++) {
  this.parentNode.children[j].classList.remove('active');
  slides[j].classList.remove('active-slide');
  if (this.parentNode.children[j] == this) {
      index = j;
  }
  }
  this.classList.add('active');
  slides[index].classList.add('active-slide');

}
}
//prev/next functionality
links = document.querySelectorAll('.slideshow-container a');

for (i = 0; i < links.length; i++) {
links[i].onclick = function() {
  current = this.parentNode;

  var slides = current.getElementsByClassName("mySlides");
  var dots = current.getElementsByClassName("dot");
  curr_slide = current.getElementsByClassName('active-slide')[0];
  curr_dot = current.getElementsByClassName('active')[0];
  curr_slide.classList.remove('active-slide');
  curr_dot.classList.remove('active');

  if (this.className == 'next') {

    if (curr_slide.nextElementSibling.classList.contains('mySlides')) {
        curr_slide.nextElementSibling.classList.add('active-slide');
        curr_dot.nextElementSibling.classList.add('active');
    } else {
        slides[0].classList.add('active-slide');
        dots[0].classList.add('active');
    }
  }
  if (this.className == 'prev') {
    if (curr_slide.previousElementSibling) {
        curr_slide.previousElementSibling.classList.add('active-slide');
        curr_dot.previousElementSibling.classList.add('active');
    } else {
        slides[slides.length - 1].classList.add('active-slide');
        dots[slides.length - 1].classList.add('active');
    }
  }
}
}
})();