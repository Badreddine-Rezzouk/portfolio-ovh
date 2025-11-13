function getChosenLanguage() {
    const url = new URL(window.location.href);
    const segments = url.pathname.split('/').filter(Boolean); // removes empty strings

    // If the site lives under a folder like /portfolio-ovh/FR-fr/…
    if (segments[0] === 'portfolio-ovh') {
        return segments[1] || null; // second segment holds the locale
    }
    // Otherwise the first segment is the locale
    return segments[0] || null;
}

const availableLanguage = new Map([
    ['FR-fr', 'fr'],
    ['US-en', 'en'],
    ['CN-zh', 'zh']
]);

const rawChoice = getChosenLanguage();
const userlanguage = availableLanguage.get(rawChoice) || 'en';
function updateTime() {
    const dt = luxon.DateTime.now().setZone('Europe/Paris').setLocale(userlanguage);

    const formattedTime = dt.toLocaleString(luxon.DateTime.TIME_WITH_SECONDS);

    const timeElement = document.getElementById('current-time');
    if (timeElement) {
        timeElement.textContent = formattedTime;
    } else {
        console.error("Element with ID 'current-time' not found!");
    }
}
function updateDate() {
    const dt = luxon.DateTime.now().setZone('Europe/Paris').setLocale(userlanguage);

    const formattedDate = dt.toLocaleString(luxon.DateTime.DATE_FULL);

    const dateElement = document.getElementById('current-date');
    if (dateElement) {
        dateElement.textContent = formattedDate;
    } else {
        console.error("Element with ID 'current-date' not found!");
    }
}
document.addEventListener("DOMContentLoaded", function () {
    updateTime();
    updateDate();
    setInterval(updateTime, 1000);
    setInterval(updateDate, 1000);
});