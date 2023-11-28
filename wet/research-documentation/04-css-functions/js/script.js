import { marked } from "https://esm.sh/marked";
import confetti from "https://esm.sh/canvas-confetti";

const rd1Button = document.getElementById("display-rd1");
const rd2Button = document.getElementById("display-rd2");
const rd3Button = document.getElementById("display-rd3");
const rd4Button = document.getElementById("display-rd4");
const rd5Button = document.getElementById("display-rd5");
const confettiButton = document.getElementById('confetti');

confetti({
    particleCount: 100,
    startVelocity: 30,
    spread: 360,
    origin: {
        x: Math.random(),
        y: Math.random() - 0.2,
    },
});

function fetchMarkdown(location) {
    fetch(location)
    .then((response) => {
        console.dir(response);
        if (!response.ok) {
            throw new Error(`## 🫤 HTTP error! \n* Status: ${response.status}`);
        }

        return response.text();
    })
    .then((response) => {
        let mdString = response;
        document.getElementById("markdown-output").innerHTML = marked.parse(mdString);
    })
    .catch((error) => {
        console.log(error);
        console.log(typeof error);
        document.getElementById("markdown-output").innerHTML = marked.parse(error.message);
    });
}

confettiButton.addEventListener("click", () => {
    confetti({
        particleCount: 8000,
        startVelocity: 110,
        spread: 500,
        origin: { y: 1 },
    });
})
rd1Button.addEventListener("click", () => {
    fetchMarkdown("./web-resources.md");
})

rd2Button.addEventListener("click", () => {
    fetchMarkdown("./git.md")
})

rd3Button.addEventListener("click", () => {
    fetchMarkdown("./serverless.md")
})

rd4Button.addEventListener("click", () => {
    fetchMarkdown("./css-functions.md")
})
rd5Button.addEventListener("click", () => {
    fetchMarkdown("./tools-i-use.md")
})



