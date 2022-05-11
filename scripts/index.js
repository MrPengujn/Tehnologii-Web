window.onscroll = function() { scroll() };
window.onload = function() {
    display_image('pln_fullimg'); 
    planetCarousel(1);
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

function display_image(objectId){

    let obj = document.getElementById(objectId);
    if(obj){
        if(obj.style.display == "none"){
            obj.style.display = "block";
            return;
        }
        obj.style.display = "none";
    }
}