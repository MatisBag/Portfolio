const darklightmode = localStorage.getItem("darklightmode");

if (darklightmode === "dark")
{
        const body = document.querySelector("body");
    
        toggleDarkLightForElement(body, 'light-mode', 'dark-mode')
    
        const solidBorders = document.querySelectorAll('.solid-border'); 
        
        solidBorders.forEach((solidBorder) => {
            toggleDarkLightForElement(solidBorder, 'light-mode', 'dark-mode')
        })
    
    function toggleDarkLightForElement(elem, lighModeClassname, darkModeClassname) {
        elem.classList.add(darkModeClassname)
    }
}