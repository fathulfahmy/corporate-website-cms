function hideNavbar() {
    if (window.innerWidth >= 1024) {
        console.log("desktop");
        var prevScrollpos = window.scrollY;

        window.onscroll = function () {
            var currentScrollPos = window.scrollY;

            if (prevScrollpos > currentScrollPos) {
                navbar.style.top = "0";
            } else {
                navbar.style.top = "-" + navbar.offsetHeight + "px";
            }
            prevScrollpos = currentScrollPos;
        };
    } else {
        // reset onscroll listener
        window.onscroll = function () {};
    }
}

hideNavbar();

window.onresize = hideNavbar;
