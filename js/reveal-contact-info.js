// Reveal Contact Info by Ricky Romero
// https://rickyromero.com/
// I was mainly responsible for JavaScript on Heather's site, but she wrote
// all of the HTML and Sass.



(function (undefined) {
  function transform () {
    let s = 'rGV5qJEaMzcxLmIkLmV5qF5dp29h'

    let loc = window.atob(s.replace(/[A-Za-z]/g, function (c) {
      return 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.charAt(
             'NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm'.indexOf(c)
      )
    }))

    $.ajax(loc, {dataType: 'json'}).done(function (data) {
      $('.email-link, .phone-link').each(function () {
        let key = ($(this).hasClass('email-link') ? 'email' : 'phone')
        $(this).attr('href', data[key].href)
        if (!$(this).hasClass('href-only')) {
          $(this).text(data[key].text)
        }
      })
    })
  }

  if (document.readyState === 'loading') {
    // Delay until load event so we don't bog down with image preloads
    window.addEventListener('DOMContentLoaded', transform, false)
  } else {
    transform()
  }
})()
