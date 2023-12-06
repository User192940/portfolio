window.addEventListener('DOMContentLoaded', (event) => {
    // select navigation element
    const elNavMain = document.querySelector(".mil-top-panel");
    // construct an instance of Headroom, passing the element
    const headroom = new Headroom(elNavMain);
    // initialise
    headroom.init();
});