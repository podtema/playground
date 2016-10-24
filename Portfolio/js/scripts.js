a.addEventListener('click', function () {
    animatedScrollTo(
        document.body, // element to scroll with (most of times you want to scroll with whole <body>)
        0, // target scrollY (0 means top of the page)
        10000, // duration in ms
        function() { // callback function that runs after the animation (optional)
          console.log('done!')
        }
    );
});