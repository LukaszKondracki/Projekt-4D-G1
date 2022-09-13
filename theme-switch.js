const button = document.getElementById('theme-swap');

const elements = document.getElementsByTagName('html');
const html = elements[0];
const store = window.localStorage;

html.className = store.getItem('theme') || 'dark';

button.addEventListener('click', () => {

    let isThemeLight = html.className === 'light';

    if (isThemeLight) {
        html.className = 'dark';
        button.innerText = "🌞";
        store.setItem('theme', 'dark');
    } else {
        html.className = 'light';
        button.innerText = "🌚";
        store.setItem('theme', 'light');
    }

});