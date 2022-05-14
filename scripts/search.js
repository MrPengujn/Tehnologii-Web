const sForm = document.getElementById("s_frm");
planetData = JSON.parse(planetData_JSON);

var toMod = document.getElementById('test');

function footemp(type){
    for(let i in planetData){
        if(planetData[i].info[type] == sForm.s_frm.value){
            const ttmp = document.createElement("a");
            ttmp.setAttribute('href', planetData[i].info.link);

            ttmp.innerHTML = "Link to " + i + "(click me)";

            toMod.innerHTML = "<p>Name:" + i + "</p><p>" + type + ": " + planetData[i].info[type] + "</p>";
            toMod.appendChild(ttmp);

            break;
        }else{
            toMod.textContent = "No results!";
        }
    }
}

function findItem(event) { 
    event.preventDefault(); 

    if(sForm.diameter.checked == true){
        footemp("diameter");
    }
    if(sForm.radius.checked == true){
        footemp("radius");
    }
    if(sForm.mass.checked == true){
        footemp("mass");
    }
    if(sForm.volume.checked == true){
        footemp("volume");
    }
    if(sForm.surf_gravity.checked == true){
        footemp("surface_gravity");
    }
    if(sForm.orb_period.checked == true){
        footemp("orbital_period");
    }
    if(sForm.orb_speed.checked == true){
        footemp("orbital_speed");
    }

} 

sForm.addEventListener('submit', findItem);
