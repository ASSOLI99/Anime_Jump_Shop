//drop down menu
let userMenu=document.querySelector("#user-menu-button");
let dropMenu=document.querySelector("#dropdown");
let toggle=document.querySelector("#phone-drop");
let mobileMenu=document.querySelector("#mobile-menu-2");
userMenu.addEventListener("click",()=>{
    dropMenu.classList.toggle("hidden");
    dropMenu.classList.toggle("absolute");
    if(!mobileMenu.classList.contains("hidden")){
        mobileMenu.classList.toggle("hidden");
    }
})
toggle.addEventListener("click",()=>{
    mobileMenu.classList.toggle("hidden");
    if(!dropMenu.classList.contains("hidden")){
        dropMenu.classList.toggle("hidden");
        dropMenu.classList.toggle("absolute");
    }
})