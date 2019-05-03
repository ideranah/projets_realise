let bruit = true;
let horaire = 1;

function perroquet(bruit, horaire){
    if(bruit && horaire < 7 || horaire > 22){
        console.log("Perroquet");
    }else{
        console.log("Le perroquet pas");
    }
}


perroquet(true,6);
perroquet(true,8);
perroquet(false, 6);
perroquet(false,8);