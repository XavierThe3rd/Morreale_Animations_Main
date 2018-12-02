console.log(window.innerWidth > 1000);

window.onscroll = function() {
    if (window.innerWidth > 1075) {   

        if (window.pageYOffset > 98) {
            document.getElementById("nav2").style.display = "block";
            document.getElementById("nav1").style.display = "none";
        } 
        else {
            document.getElementById("nav2").style.display = "none";
            document.getElementById("nav1").style.display = "block";
        }
    } 

    else {

        if (window.pageYOffset > 168) {
            document.getElementById("nav2").style.display = "block";
            document.getElementById("nav1").style.display = "none";
        } 
        else {
            document.getElementById("nav2").style.display = "none";
            document.getElementById("nav1").style.display = "block";
        }
    }
}


document.getElementById("gear-state").addEventListener("mouseover", mouseOver);
document.getElementById("gear-state").addEventListener("mouseout", mouseOut);

function mouseOver() {
    document.getElementById("gear-follow").style.animationPlayState = "running";
    document.getElementById("gear-follow").style.mozAnimationPlayState = "running";
    document.getElementById("gear-drive").style.animationPlayState = "running";
    document.getElementById("gear-drive").style.mozAnimationPlayState = "running";
}

function mouseOut() {
    document.getElementById("gear-follow").style.animationPlayState = "paused";
    document.getElementById("gear-drive").style.animationPlayState = "paused";
}
