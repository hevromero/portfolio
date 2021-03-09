// Lightbox feature by Ricky Romero
// https://rickyromero.com/
// I was mainly responsible for JavaScript on Heather's site, but she wrote
// all of the HTML and Sass.
// Lowest common denominator: IE 11

(function (undefined) {
  function initLightbox () {
    if (/^#\//.test(window.location.hash)) {
      // Resuming from a previous session...
      let restoredHref = window.location.hash.substr(1)
      startLoadingLightbox(restoredHref)
      history.replaceState({href: restoredHref}, '', restoredHref)
    }

    let galleryLinks = document.querySelectorAll('div.gallery-work > a')

    galleryLinks.forEach(function (el) {
      el.addEventListener('click', openLightboxLink, false)
    })
  }

  function openLightboxLink (event) {
    event.preventDefault()
    startLoadingLightbox(this.pathname)
    history.pushState({href: this.pathname}, '', this.pathname)
  }

  function startLoadingLightbox (obj) {
    let href
    if (obj.constructor === PopStateEvent) {
      if (obj.state !== null) {
        href = obj.state.href
      }
    } else {
      href = obj
    }

    if (href !== undefined && href !== '/') {
      lightbox = new Lightbox(href)
    } else if (lightbox !== null) {
      lightbox.dismiss()
    }
  }

  function Lightbox (href) {
    let html = document.querySelector('html')
    let body = document.querySelector('body')

    this.href = href

    this.keyboardDismissListener = this.requestDismissalUsingKeyboard.bind(this)

    this.domXhr = new XMLHttpRequest()
    this.domXhr.addEventListener('load', this.contentLoaded.bind(this), false)
    this.domXhr.open('GET', href, true)
    this.domXhr.send()

    this.focus = document.createElement('div')
    this.focus.classList.add('focus')
    this.focus.addEventListener('click', this.requestDismissalUsingMouse.bind(this), false)

    this.slickInitialized = false

    body.appendChild(this.focus)
    html.classList.add('lightbox')
  }

  Lightbox.prototype.slickOptions = {
    mobileFirst: true,
    dots: false,
    infinite: true,
    swipeToSlide: true,
    adaptiveHeight: true,
    prevArrow: '<button type="button" class="slick-prev"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#chevron-down"></use></svg></button>',
    nextArrow: '<button type="button" class="slick-next"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#chevron-down"></use></svg></button>',

    responsive: [{
      breakpoint: 768,
      settings: 'unslick'
    }]
  }

  // Init Slick
  // mobile carousel for detailed work view.
  Lightbox.prototype.initSlick = function () {
    if (!this.slickInitialized) {
      let $windowWidth = $(window).width()

      if ($windowWidth < 768) {
        $('.works-images').slick(this.slickOptions)
        $('.works-images').on('destroy', (function () {
          this.slickInitialized = false
        }).bind(this))

        this.slickInitialized = true
      }
    }
  }

  Lightbox.prototype.contentLoaded = function () {
    let body = document.querySelector('body')
    let parser = new DOMParser()
    let subDocument = parser.parseFromString(this.domXhr.response, 'text/html')
    let eventTrigger
    let eventTarget

    window.addEventListener('keydown', this.keyboardDismissListener, false)

    body.classList.add('in')

    this.contents = subDocument.querySelector('.works-display')
    this.contents.addEventListener('click', this.requestDismissalUsingMouse.bind(this), false)
    subDocument.querySelector('a.close').addEventListener('click', this.requestDismissalUsingMouse.bind(this), false)


    if (subDocument.querySelector('video')) {
      eventTrigger = 'canplay'
      eventTarget = subDocument.querySelector('video')
    } else {
      eventTrigger = 'load'
      eventTarget = subDocument.querySelector('img')
    }
    eventTarget.addEventListener(eventTrigger, (function () {
      // HACK: Firefox starts animating before it really can.
      // Give it a couple milliseconds to catch up...
      window.setTimeout((function () {
        body.classList.remove('in')

        // Only init Slick when lightbox is visible, so it can get the height of its contents
        this.initSlick()
        this.slickResizeHandler = this.initSlick.bind(this)
        $(window).on('resize', this.slickResizeHandler)
      }).bind(this), 10)
    }).bind(this), false)

    body.appendChild(this.contents)
  }

  Lightbox.prototype.requestDismissalUsingMouse = function (event) {
    if (event.target === event.currentTarget) {
      event.preventDefault()

      history.pushState({href: '/'}, '', '/')
      this.dismiss()
    }
  }

  Lightbox.prototype.requestDismissalUsingKeyboard = function (event) {
    if (event.key === 'Escape') {
      event.preventDefault()

      history.pushState({href: '/'}, '', '/')
      this.dismiss()
    }
  }

  Lightbox.prototype.dismiss = function () {
    var html = document.querySelector('html')
    var body = document.querySelector('body')

    this.focus.addEventListener('transitionend', (function () {
      if (this.slickInitialized) {
        $('.works-images').slick('unslick')
      }
      $(window).off('resize', this.slickResizeHandler)

      body.removeChild(this.contents)
      body.removeChild(this.focus)
      body.classList.remove('out')
      html.classList.remove('lightbox')

      lightbox = null
    }).bind(this), false)
    body.classList.add('out')

    window.removeEventListener('keydown', this.keyboardDismissListener, false)
  }



  var lightbox = null

  window.addEventListener('popstate', startLoadingLightbox, false)  

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initLightbox, false)
  } else {
    initLightbox()
  }
})()
