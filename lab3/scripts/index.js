window.onscroll = function() { scrollFoo() };

function scrollFoo(){

    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
        document.getElementById("back_to_top").style.display = "block";
    } else {
        document.getElementById("back_to_top").style.display = "none";
    }
}

function scrollToTopFoo(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}