const modeToggler = document.getElementById('modeToggler');

modeToggler.addEventListener('click', () => {
    toggleDarkLight();
});

const darklightmode = localStorage.getItem("darklightmode");

if (darklightmode === "dark")
{
    document.getElementById('modeToggler').checked = true;
    toggleDarkLight();
}
else {
    window.localStorage.setItem("darklightmode", "light");
}

function toggleDarkLight() {
    
    const body = document.querySelector("body");

    toggleDarkLightForElement(body, 'light-mode', 'dark-mode')

    const solidBorders = document.querySelectorAll('.solid-border'); 
    
    solidBorders.forEach((solidBorder) => {
        toggleDarkLightForElement(solidBorder, 'light-mode', 'dark-mode')
    })
}

function toggleDarkLightForElement(elem, lighModeClassname, darkModeClassname) {
    if (elem.classList.contains(lighModeClassname)) {
        elem.classList.remove(lighModeClassname)
        elem.classList.add(darkModeClassname)
        window.localStorage.setItem("darklightmode", "dark");
    }
    else if (elem.classList.contains(darkModeClassname)) {
        elem.classList.remove(darkModeClassname)
        elem.classList.add(lighModeClassname)
        window.localStorage.setItem("darklightmode", "light");
    }
    else {
        elem.classList.add(darkModeClassname)
    }
}