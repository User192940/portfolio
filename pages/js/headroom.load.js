window.addEventListener('DOMContentLoaded', (event) => {
    // select navigation element
    const elNavMain = document.querySelector(".mil-top-panel");
    // construct an instance of Headroom, passing the element
    if(window.outerWidth <= 1200){
        const headroom = new Headroom(elNavMain);
        // initialise
        headroom.init();
    }
});