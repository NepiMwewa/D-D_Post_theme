var menuToggle = false, isMobile = false;
 
//toggle menu open or closed
function toggleMenu(){
  let menuDiv = document.getElementById("menu-nav");
  let headerId = document.getElementById("header-id");
  let hamburgerMenu = document.getElementById("menu-toggle");
  if(!menuToggle){
    menuDiv.classList.add("menu-view");
    headerId.classList.remove("header-content");
    hamburgerMenu.ariaExpanded = true;
    menuToggle = true;
  }else{
    menuDiv.classList.remove("menu-view");
    headerId.classList.add("header-content");
    hamburgerMenu.ariaExpanded = false;
    menuToggle = false;
  }
}


function escapeFromMenu(event){
  if(event.key === "Escape" && menuToggle == true)
    {
      toggleMenu();
  }
}

window.addEventListener("resize", windowChangedSize);


function windowChangedSize(){
  if(window.innerWidth <= 1000){
    isMobile = true;
   
  }else{
    if(menuToggle){
      toggleMenu();
    }
    isMobile = false;
    
  }
}


window.onload = init;

// onload function
function init() {
  let hamburgerMenu = document.getElementById("menu-toggle");
  let mainMenu = document.getElementById("main-menu");
  
  hamburgerMenu.addEventListener('keydown', (event) => escapeFromMenu(event));
  mainMenu.addEventListener('keydown', (event) => escapeFromMenu(event));

  windowChangedSize();

  let navLinks = document.getElementsByClassName("closeTab");
  for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener('click', addEventToLink, false);
  }

  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
        content.style.marginTop = 0 + "px";
        content.style.marginBottom = 0 + "px";
      } else {
        content.style.marginTop = 60 + "px";
        content.style.marginBottom = 60 + "px";
        content.style.maxHeight = content.scrollHeight + "px";
        
      }
    });
  }
}

