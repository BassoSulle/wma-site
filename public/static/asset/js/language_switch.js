// static/js/language_switch.js

function switchLanguage(language) {
    var currentPath = window.location.pathname;
    var newPath = currentPath.replace(/\/[a-z]{2}\//, '/' + language + '/');
    window.location.href = newPath;
}

document.getElementById('english-link').addEventListener('click', function(e) {
    e.preventDefault();
    switchLanguage('en');
});

document.getElementById('swahili-link').addEventListener('click', function(e) {
    e.preventDefault();
    switchLanguage('sw');
});
