let fullimage

window.onscroll = function() { scroll() };
window.onload = function() {
    fullimage = document.getElementById("pln_fullimg");
    display_image();    
};

function scroll(){

    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
        document.getElementById("back_to_top").style.display = "block";
    } else {
        document.getElementById("back_to_top").style.display = "none";
    }
}

function scroll_to_top(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function display_image(){
    if(fullimage.style.display == "none"){
        fullimage.style.display = "block";
        return;
    }
    fullimage.style.display = "none";
}