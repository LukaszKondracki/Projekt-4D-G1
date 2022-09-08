const button = document.getElementById('theme-swap');

const elements = document.getElementsByTagName('html');
const html = elements[0];

changeTheme();

button.addEventListener('click', () => {

    
    changeTheme();
});

function changeTheme() {
    const theme = getTheme();

    let isThemeLight = theme === 'light';

    if (isThemeLight) {
        html.classList.remove('light');
        button.innerText = "🌞";
        setTheme('dark');
    } else {
        html.classList.add('light');
        button.innerText = "🌚";
        setTheme('light');
    }
}

function getTheme() {
    const theme = localStorage.getItem('theme');
    
    if ('theme' === 'light') {
        return 'light';
    } 

    return 'dark';
}

function setTheme(theme) {
    localStorage.setItem('theme', theme);
}