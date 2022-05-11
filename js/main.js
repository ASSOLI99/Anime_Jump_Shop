//drop down menu
let userMenu=document.querySelector("#user-menu-button");
let dropMenu=document.querySelector("#dropdown");
let toggle=document.querySelector("#phone-drop");
let mobileMenu=document.querySelector("#mobile-menu-2");
let categoryDrop=document.querySelector("#dropCategory")
let categorys=document.querySelector("#categorys")
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
categoryDrop.addEventListener("click",()=>{
    if(categorys.classList.contains("hidden")){
        categorys.classList.toggle("hidden");
        categorys.classList.toggle("absolute");
    }else{
        categorys.classList.toggle("hidden");
        categorys.classList.toggle("absolute");
    }
});

categorys.addEventListener("click",()=>{
    categorys.classList.toggle("hidden");
        categorys.classList.toggle("absolute");
})
//catagories
let cCharacters=document.querySelectorAll(".c-characters");
let cItems=document.querySelectorAll(".c-items");
let cCosplay=document.querySelectorAll(".c-cosplay");
let cManga=document.querySelectorAll(".c-manga");
let characters=document.querySelector(".characters");
let items=document.querySelector(".items");
let cosplay=document.querySelector(".cosplay");
let manga=document.querySelector(".manga");
cCharacters.forEach(el=>el.addEventListener("click",()=>{
    cCosplay[1].classList.remove("border")
    cItems[1].classList.remove("border")
    cCharacters[1].classList.add("border")
    cManga[1].classList.remove("border")
    if(!characters.classList.contains("flex")){
        characters.classList.add("flex");
        characters.classList.remove("hidden");
    }
     if(items.classList.contains("flex")){
        items.classList.remove("flex");
        items.classList.add("hidden");
    }
    if(cosplay.classList.contains("flex")){
        cosplay.classList.remove("flex");
        cosplay.classList.add("hidden");
    }
    if(manga.classList.contains("flex")){
        manga.classList.remove("flex");
        manga.classList.add("hidden");
    }
}))
cItems.forEach(el=>el.addEventListener("click",()=>{
    cItems[1].classList.add("border")
    cCosplay[1].classList.remove("border")
    cCharacters[1].classList.remove("border")
    cManga[1].classList.remove("border")
    if(!items.classList.contains("flex")){
        items.classList.add("flex");
        items.classList.remove("hidden");
    }
     if(characters.classList.contains("flex")){
        characters.classList.remove("flex");
        characters.classList.add("hidden");
    }
    if(cosplay.classList.contains("flex")){
        cosplay.classList.remove("flex");
        cosplay.classList.add("hidden");
    }
    if(manga.classList.contains("flex")){
        manga.classList.remove("flex");
        manga.classList.add("hidden");
    }
}))
cCosplay.forEach(el=>el.addEventListener("click",()=>{
    cCosplay[1].classList.add("border")
    cItems[1].classList.remove("border")
    cCharacters[1].classList.remove("border")
    cManga[1].classList.remove("border")
    if(!cosplay.classList.contains("flex")){
        cosplay.classList.add("flex");
        cosplay.classList.remove("hidden");
        
    }
     if(items.classList.contains("flex")){
        items.classList.remove("flex");
        items.classList.add("hidden");
    }
    if(characters.classList.contains("flex")){
        characters.classList.remove("flex");
        characters.classList.add("hidden");
    }
    if(manga.classList.contains("flex")){
        manga.classList.remove("flex");
        manga.classList.add("hidden");
    }
}))
cManga.forEach(el=>el.addEventListener("click",()=>{
    cCosplay[1].classList.remove("border")
    cItems[1].classList.remove("border")
    cCharacters[1].classList.remove("border")
    cManga[1].classList.add("border")
    if(!manga.classList.contains("flex")){
        manga.classList.add("flex");
        manga.classList.remove("hidden");
    }
     if(items.classList.contains("flex")){
        items.classList.remove("flex");
        items.classList.add("hidden");
    }
    if(cosplay.classList.contains("flex")){
        cosplay.classList.remove("flex");
        cosplay.classList.add("hidden");
    }
    if(characters.classList.contains("flex")){
        characters.classList.remove("flex");
        characters.classList.add("hidden");
    }
}))
