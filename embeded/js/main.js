/*===============================================================
===============================================================*/
//CHECKING ELEMENTS ON THE CURRENT PAGE
const checkElms = (elm) => elm.length === 0 ? null : elm;
const checkElm = (elm) => elm !== null ?  elm : "";


/*===============================================================
===============================================================*/
//HOME GALLERY FILTER FUNCTIONS
const filterCater = elm => {
    const parElm = elm.parentElement;
    const children = document.querySelectorAll(".filt-btn");

    children.forEach(child => {
        if(elm != child){
            child.classList.remove('active');
        }else{
            child.classList.add('active');
        }
        
      });

console.log(elm)


    const allCaters = document.querySelectorAll(".column");

    const toggleClass = cls =>{
       allCaters.forEach(cat =>{
            cat.style.display = "flex";

            if(!cat.className.includes(cls)){
                cat.classList.add("hide-gallery");
                setTimeout(()=> cat.style.display = "none",1500)
            }else if(cat.className === "all"){
                cat.classList.remove("hide-gallery")
            }
            else{
                cat.classList.remove("hide-gallery");
            }
       })
    }

    if(elm.innerText === "Face"){
        toggleClass("hair");
    }
    if(elm.innerText === "Eye Lashes"){
        toggleClass("eyelashes");
    }
    if(elm.innerText === "Nails"){
        toggleClass("nails");
    }
    if(elm.innerText === "All") {
        toggleClass("all");
    }

    
    
}


//POP UP GALLERY IMAGE
$(function() {
    $("#why-choose-us").magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});
/*===============================================================
===============================================================*/
//HAMBEGER FUNCTIONALITY
const hamburger = document.querySelector("#hamburger");
const main = document.querySelector("main");

if(hamburger){
    //OPEN FUNCTIONALITY
    const openLinks = () =>{
        main.style.display = "none";

        document.querySelector("#line1").style.transform = "rotate(36deg) translate(9px, 12px)";
        document.querySelector("#line2").style.transform = " translate(2000%)";
        document.querySelector("#line3").style.transform = "rotate(-33deg) translate(5px, -12px)";
    }
    
    //RESET FUNCTIONALITY
    const resetLinks = () =>{
        main.style.display = "block" ;
        document.querySelector("#line1").style.transform = "rotate(0deg) translate(0px)";
        document.querySelector("#line2").style.transform = "translate(0%)";
        document.querySelector("#line3").style.transform = "rotate(0deg) translate(0px)";
    }

    let links = document.querySelector(".links");
    hamburger.addEventListener("click", ()=>{
        links.classList.toggle("show-slow");

       links.className === "links flex-cen show-slow" ? openLinks() : resetLinks();
    })
}
/*===============================================================
===============================================================*/

/*===============================================================
===============================================================*/
//UPDATING THE DATE ON FOOTER
(function(){
	const currentYear = document.querySelector(".year" );

	let thisYear = new Date();
	let newYear = thisYear.getFullYear();

	currentYear.textContent = newYear ;
	currentYear.innerText = newYear;
}());






