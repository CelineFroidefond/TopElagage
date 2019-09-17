
let iconesStars = document.getElementsByClassName("fa-star");
let ratingStars = Array.from(iconesStars);

console.log(ratingStars);


function onMouseOn(){
    for(var i = this; i>=ratingStars[0]; i--){
        ratingStars[i].classList.add("gold");
    }
}

function onMouseOut(){
        this.classList.remove("gold");
}


for(var i=0; i<=ratingStars.length; i++){
    ratingStars[i].addEventListener("mouseover", onMouseOn);
    ratingStars[i].addEventListener("mouseout", onMouseOut);
}



/*function onClick(){
    this.classList.toggle("gold");
}
for(var i=0; i<=stars.length; i++){
    stars[i].addEventListener("click", onClick);
    }*/
    

console.log(stars);







