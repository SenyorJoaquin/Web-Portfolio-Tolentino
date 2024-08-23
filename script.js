const toggleSwitch = document.getElementById('darkmode-toggle');
const themeLink = document.getElementById('theme-link');
const githubIcon = document.getElementById('github-icon');


function switchTheme() {
    if (toggleSwitch.checked) {
        themeLink.href='index-dark.css';
        githubIcon.src = './assets/github_logo_inverted.png'; 
    } else {
        themeLink.href='index.css';
        githubIcon.src = './assets/github_logo.png';  
    } 
    
}

toggleSwitch.addEventListener('change', switchTheme);

function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open")
    icon.classList.toggle("open")
}
