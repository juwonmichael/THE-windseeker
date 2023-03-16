const hamburger = document.querySelector('.hamburger');
const line1 = document.querySelector('.line1');
const line2 = document.querySelector('.line2');
const sideNav = document.querySelector(".sidenav");


hamburger.addEventListener('click', () => {

    if(line1.style.width == "20px"){
        console.log("WETIN DEY HAPPEN")
        line1.style.transform = "rotate(180deg)";
        line2.style.transform = "rotate(180deg)";
        line1.style.width = "40px";
        line2.style.width = "30px";
        line2.style.top = "10%";
        // line2.style.left = "0"
        line1.style.height = "2px";
        line2.style.height = "2px";
        sideNav.style.transform = "translateX(100%)";      
    }
    else{
        console.log("NOT WORKING")
        line1.style.transform = "rotate(135deg)";
        line2.style.transform = "rotate(45deg)";
        line1.style.width = "20px";
        line2.style.width = "20px";
        line2.style.top = "-10%";
        line2.style.left = "0";
        line1.style.height = "2px";
        line2.style.height = "2px";
        sideNav.style.transform = "translateX(0)";
    }

})

