var lgoutB = document.getElementById("lgout");
var lginB = document.getElementById("lgin");

session_check();

function session_check(){
    lgoutB.style.display = "none";
    lginB.style.display = "none";
    if(localStorage.getItem('loggedin') == 'true'){
        lgoutB.style.display = "block";
    }else{
        lginB.style.display = "block";
    }
}

function log_out(){
    localStorage.setItem('uname','');
    localStorage.setItem('loggedin','false');    
    location.reload();
}