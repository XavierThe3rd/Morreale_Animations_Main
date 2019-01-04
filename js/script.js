console.log(window.innerWidth > 1000);

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

document.getElementById("gear-state1").addEventListener("mouseover", mouseOver);
document.getElementById("gear-state1").addEventListener("mouseout", mouseOut);
document.getElementById("gear-state2").addEventListener("mouseover", mouseOver);
document.getElementById("gear-state2").addEventListener("mouseout", mouseOut);

function mouseOver() {
    document.getElementById("gear-follow1").style.animationPlayState = "running";
    document.getElementById("gear-drive1").style.animationPlayState = "running";
    document.getElementById("gear-follow2").style.animationPlayState = "running";
    document.getElementById("gear-drive2").style.animationPlayState = "running";
}

function mouseOut() {
    document.getElementById("gear-follow1").style.animationPlayState = "paused";
    document.getElementById("gear-drive1").style.animationPlayState = "paused";
    document.getElementById("gear-follow2").style.animationPlayState = "paused";
    document.getElementById("gear-drive2").style.animationPlayState = "paused";
}


function togNav() {
var nav = document.getElementById("mySidenav");
    if (nav.style.height === "0%") {
        nav.style.height = "30%"
        nav.style.padding = "60px 0px 40px"
        nav.style.zIndex = "2";
    } else{
        nav.style.height = "0%";
        nav.style.padding = "0px";
        nav.style.zIndex = "-1";
    }
}

function togNav2() {
var nav = document.getElementById("mySidenav2");
    if (nav.style.height === "0%") {
        nav.style.height = "30%";
        nav.style.padding = "60px 0px 40px";
        nav.style.zIndex = "2";
    } else{
        nav.style.height = "0%";
        nav.style.padding = "0px";
        nav.style.zIndex = "-1";
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