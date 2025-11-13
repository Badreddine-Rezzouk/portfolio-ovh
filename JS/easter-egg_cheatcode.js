let bufferArray = [];
let lastKeystrokeTime = Date.now();
var topURL = document.getElementById('topURL').value;

const cheatcode = "anisdoggo";

function clearContent() {
    document.getElementById("video-spot").innerHTML = "";
}

function lockViewport(duration) {
    // Scroll to top
    window.scrollTo(0, 0);

    document.body.style.overflow = "hidden";
    document.documentElement.style.overflow = "hidden";

    setTimeout(() => {
        document.body.style.overflow = "";
        document.documentElement.style.overflow = "";
    }, duration);
}

window.addEventListener("keyup", e => {
    const key = e.key.toLowerCase();
    const latestKeystrokeTime = Date.now();

    if (latestKeystrokeTime - lastKeystrokeTime > 1500) {
        bufferArray = [];
    }

    lastKeystrokeTime = latestKeystrokeTime;
    bufferArray.push(key);

    const word = bufferArray.join("");

    if (word === cheatcode) {
        lockViewport(5000);
        document.getElementById("video-spot").innerHTML = `
                <video autoplay>
                    <source src="${topURL}Images/videos/anis-wan.mp4" type="video/mp4">
                </video>
            `;
        setTimeout(clearContent, 5000);
    }
});