function onClick() {
    document.getElementById("profile").style.display = "block";
    document.getElementById("myHeader").style.display = "none";
    // document.getElementsByClassName("flip")[0].style.display = "none";
    document.getElementsByClassName("button")[1].style.visibility = "visible";
    // --- Was testing some code, I am leaving this here as a reference for the future: ---
    let flipElement = document.getElementsByClassName("flip");
    for (var i = 0; i< flipElement.length; ++i){
        flipElement[i].style.display = "none";
    };
};


function testFunction() {
    let flipElement = document.getElementsByClassName("flip");
    for(var i = 0; i < flipElement.length; ++i) {
        console.log(flipElement[i])
    };
};