const modeToggler = document.getElementById('modeToggler');

modeToggler.addEventListener('click', () => {
    toggleDarkLight();
});

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
    } else if (elem.classList.contains(darkModeClassname)) {
        elem.classList.remove(darkModeClassname)
        elem.classList.add(lighModeClassname)
    } else {
        elem.classList.add(darkModeClassname)
    }
}