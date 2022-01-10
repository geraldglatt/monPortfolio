/**Javascript */
const target = document.getElementById("target");
let tabCompetences = ["HTML5/CSS3","PHP/POO/MVC/SYMFONY","JAVASCRIPT/NODE.JS","TYPESCRIPT/ANGULAR","ANALYSE/CONCEPTION","SQL/PDO"];
let wordINDEX = 0;
let letterIndex = 0;

const createLetter = () => {
    const letter = document.createElement("span");
    target.appendChild(letter);
    // tous les span auront la class letter
    letter.classList.add("letter");
    // 0 au debut et ce sera l'animation qui revelera les lettres
    letter.style.opacity = 0;
    // ease forwards: elle reste dans son état et ne repars pas à zéro
    letter.style.animation = "anim 15s ease forwards";
    // nous allons remplir les span
    letter.textContent = tabCompetences[wordINDEX][letterIndex];
    // pour libérer le DOM des toutes les lettres on créer un setTimeout()
    setTimeout(() => {
        letter.remove();
    }, 5000)
}

const loop = () => {
    setTimeout (() => {
        if(wordINDEX >= tabCompetences.length){
            wordINDEX = 0;
            letterIndex = 0;
            loop();
        }else if(letterIndex < tabCompetences[wordINDEX].length){
            createLetter();
            letterIndex++;
            loop();
        }else{
            letterIndex = 0;
            wordINDEX++;
            setTimeout(() => {
                loop();
            },5000);
            
        }
    }, 110);
}
loop();

/**Jquery */
$(window).scroll(function(){
    var top_of_element = $("#temoignages").offset().top;
    var bottom_of_element = $("#temoignages").offset().top + $("#temoignages").outerHeight();
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    var top_of_screen = $(window).scrollTop();
    if((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
        $(".Client1").addClass("animationClient1");
        $(".Client2").addClass("animationClient2");
        $(".Client3").addClass("animationClient3");
    }
});

