console.log(window.innerWidth > 1000);
       
window.onscroll = function() {myFunction()};

function isWindowBig(){
    if (window.innerWidth > 1025) return true;
    else return (isWindowSmall());
}

function isWindowSmall(){
    if (window.innerWidth < 1025) return true;
    else return (isWindowBig());

}

function myFunction() {
    if(isWindowBig()){

        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {

            document.getElementById("nav2").style.display = "block";
            document.getElementById("nav1").style.display = "none";

        } else {
            document.getElementById("nav2").style.display = "none";
            document.getElementById("nav1").style.display = "block";
        }
    }
}

function myFunction() {
   if(isWindowSmall()){

       if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {

            document.getElementById("nav2").style.display = "block";
            document.getElementById("nav1").style.display = "none";

        } else {
            document.getElementById("nav2").style.display = "none";
            document.getElementById("nav1").style.display = "block";
        }
    }
}

