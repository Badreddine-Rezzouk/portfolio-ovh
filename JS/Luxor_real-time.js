function updateTime() {
    const dt = luxon.DateTime.now().setZone('Europe/Paris').setLocale('fr');

    const formattedTime = dt.toLocaleString(luxon.DateTime.TIME_WITH_SECONDS);

    const timeElement = document.getElementById('current-time');
    if (timeElement) {
        timeElement.textContent = formattedTime;
    } else {
        console.error("Element with ID 'current-time' not found!");
    }
}
function updateDate() {
    const dt = luxon.DateTime.now().setZone('Europe/Paris').setLocale('fr');

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