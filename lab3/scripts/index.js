window.onscroll = function() { scroll() };

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

function open_menu(){
    
}