let joueur1 = "X";
let joueur2= "O";
let isPlaying=joueur1;
let plateau = document.getElementsByClassName("cell");
let victoire = Victoire(plateau,isPlaying);
let resultat = document.getElementById("resultat");
resultat.style.visibility = "hidden";
    
Jouer(plateau,isPlaying,joueur1,joueur2);


function Jouer(plateau,isPlaying,joueur1,joueur2) {
    document.addEventListener("click", function (event) {
        if (event.target.innerHTML === "" && isPlaying===joueur1 && !victoire) {
            event.target.innerHTML = joueur1;
            victoire = Victoire(plateau,isPlaying);
            if(victoire){
                    resultat.style.visibility = "visible";
            }
            isPlaying = joueur2;
        }else if (event.target.innerHTML === "" && isPlaying===joueur2 && !victoire) {
            event.target.innerHTML = joueur2;
            victoire = Victoire(plateau,isPlaying);
            if(victoire){
                resultat.style.visibility = "visible";
            }
            isPlaying = joueur1;
        }
    });
}

function Victoire(plateau,isPlaying){ 
    for(i=0;i<plateau.length;i++){
        if(i===0){
            //verifie diagonale
            if(plateau[i].innerHTML===isPlaying && plateau[i+4].innerHTML===isPlaying && plateau[i+8].innerHTML==isPlaying){
                console.log("diagonale 1-8 "+ isPlaying);
                return true
            }
        }

        if(i===0 || i===1 || i===2){
        //verifie colonnes
            if(plateau[i].innerHTML===isPlaying && plateau[i+3].innerHTML===isPlaying && plateau[i+6].innerHTML===isPlaying){
                console.log("colone joueur : "+ isPlaying);
                return true;
            }
        }
        
        if (i===0 || i===3 || i===6){
        //ferifie lignes
            if(plateau[i].innerHTML===isPlaying && plateau[i+1].innerHTML===isPlaying && plateau[i+2].innerHTML===isPlaying){
                console.log("ligne "+ isPlaying);
                return true;
            }
        } 
        
        if(i===2){
            //verif diagonale
            if(plateau[i].innerHTML===isPlaying && plateau[i+2].innerHTML===isPlaying && plateau[i+4].innerHTML===isPlaying){
                console.log("diagonale 2-6 "+ isPlaying);
                return true;
            }
        }
    }

    return false;
}