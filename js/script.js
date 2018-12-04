console.log(window.innerWidth > 1000);

window.onscroll = function() {
    if (window.innerWidth > 1075) {  
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
