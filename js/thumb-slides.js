// Thumbnail Slides by Ricky Romero
// https://rickyromero.com/
// Provides a simple hover feature to show more than one thumbnail on mouseover.
// I was mainly responsible for JavaScript on Heather's site, but she wrote
// all of the HTML and Sass.
// Lowest common denominator: IE 11

(function (undefined) {
  function initSlides () {
    // Avoid doing this if we detect a touchscreen - this is for mice only.
    // Reason being, touchscreens emulate mouse events and we don't want the
    // image to flash onscreen when the modal comes up.
    // Yes I know this isn't a best practice, shut up
    // Also I just realized the irony in calling this file "thumb-slides.js"
    if ('ontouchstart' in window || navigator.maxTouchPoints) {
      return false
    }

    document.querySelectorAll('img[data-slides]').forEach(function (el) {
      // Preload the images so they'll be ready to go on hover.
      // We don't need to know when these finish, thankfully...
      // The browser's cache will handle this for us.
      el.dataset.slides.split(',').forEach(function (src) {
        let img = new Image()
        img.src = src
      })

      el.originalSrc = el.src

      el.addEventListener('mousemove', swapImages, false)
      el.addEventListener('mouseleave', restoreImage, false)
    })
  }

  function swapImages (event) {
    let images = this.dataset.slides.split(',')
    let width = this.offsetWidth
    let increment = width / images.length

    // Possible to get negative values here
    let clampedOffset = Math.max(Math.min(event.offsetX, width - 1), 0)

    this.src = images[Math.floor(clampedOffset / increment)]
  }

  function restoreImage () {
    this.src = this.originalSrc
  }

  if (document.readyState === 'loading') {
    // Delay until load event so we don't bog down with image preloads
    window.addEventListener('load', initSlides, false)
  } else {
    initSlides()
  }
})()
