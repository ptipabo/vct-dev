const darkModeToggle = document.querySelector('#darkMode');
const container = document.body;

// This event is used to switch between the light and the dark modes
darkModeToggle.addEventListener('click', () => {
    if(!darkModeToggle.checked){
        container.classList.add("lightMode");
    }else{
        container.classList.remove("lightMode");
    }
});