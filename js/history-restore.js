// Lightbox restore feature by Ricky Romero
// https://rickyromero.com/
// Passes state to the homepage, which handles restoring the lightbox.
// I was mainly responsible for JavaScript on Heather's site, but she wrote
// all of the HTML and Sass.

if (history.state) {
  window.location.href = '/#' + history.state.href
}
