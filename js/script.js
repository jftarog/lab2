function onClick() {
    document.getElementById("profile").style.display = "block";
    document.getElementById("myHeader").style.display = "none";
    // document.getElementsByClassName("flip")[0].style.display = "none";
    document.getElementsByClassName("button")[1].style.visibility = "visible";
    // --- Was testing some code, I am leaving this here as a reference for the future: ---
    // for (let i = 0; i< flipElement.length; ++i){
    //     flipElement[i].style.display = "none";
    // };
    let flipElement = document.getElementsByClassName("flip");
    for (let i of flipElement) {
        try {
            i.style.display = "none";
        } catch (err) {
            console.log("This is from a try-catch");
            console.log(i);
        };
    }; 
};

function testFunction() {
    let flipElement = document.getElementsByClassName("flip");
    for(let i of flipElement) {
        console.log(i);
    };
};

function displayDate(someID) {
    document.getElementById(someID).innerHTML = Date();
};


class Person {
    constructor (first,last,year,language) {
        this.firstName = first;
        this.lastname = last,
        this.language = language;
    };
    age() {
        let date = new Date();
        return date.getFullYear() - this.year;
    };
};
const jaycee = new Person("James Christian", "Tarog", 2003, "Filipino");
jaycee.fullname = function() {
    return this.firstName + " " + this.lastName;
};
jaycee.lang = function() {
    return this.language;
};