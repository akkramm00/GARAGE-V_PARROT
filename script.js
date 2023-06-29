let MenuBtn = document.querySelector("#MenuBtn");
let Navbar = document.querySelector(".navbar");

MenuBtn.onclick = () => {
    MenuBtn.classList.toggle("fa-times");
    Navbar.classList.toggle("active");
};

// LOGIN FORM
document.querySelector("#LoginBtn").onclick = () => {
document.querySelector(".loginFormContainer").classList.toggle("active");
};
document.querySelector("#CloseLoginForm").onclick = () =>{
    document.querySelector(".loginFormContainer").classList.remove("active");
};
//homeParalexEffect
//homeParalex

document.querySelector(".home").onmousemove = (e) => {
    document.querySelectorAll(".homeParalexEffect").forEach((el) => {
        let Speed = el.getAttribute("data-speed")
        let X = (window.innerWidth - e.pageX * Speed)/60;
        let Y = (window.innerHeight - e.pageY * Speed)/60;

        el .style.transform =  `translateX(${Y}px) translateY(${X}px)`;
    });
};
document.querySelector(".home").onmouseleave = (e) => {
    document.querySelectorAll(".homeParalexEffect").forEach((el) => {
        el .style.transform =  `translateX(0px) translateY(0px)`;
    });
};
