// Tumblr feed by Ricky Romero
// https://rickyromero.com/
// I was mainly responsible for JavaScript on Heather's site, but she wrote
// all of the HTML and Sass.
// Lowest common denominator: IE 11

(function (undefined) {
  var tumblrDiv
  var request

  function initTumblr () {
    request = new XMLHttpRequest()
    request.addEventListener('load', transferComplete, false)
    request.open('GET', 'tumblr-feed', true)
    request.send(null)

    tumblrDiv = document.querySelector('.tumblr-feed')
  }

  function transferComplete(ev)
  {
    if (request.status === 200)
    {
      try {
        buildPostList(JSON.parse(request.responseText))
      }
      catch (e)
      {
        tumblrDiv.appendChild(renderError())
      }
    }
  }

  function buildPostList(tumblrFeed)
  {
    if (tumblrFeed.error || tumblrFeed.meta.status !== 200)
    {
      tumblrDiv.appendChild(renderError())
    }
    else
    {
      tumblrFeed.response.posts.forEach((post) => {
        tumblrDiv.appendChild(renderPost(post))
      })
    }
    console.dir(tumblrFeed)
  }

  function renderPost(post)
  {
    var link, image, text, caption, timestamp, notes

    image = document.createElement('img')
    image.classList.add('thumbnail')
    image.setAttribute('src', post.photos[0].alt_sizes.filter(findMediumImage)[0].url)

    caption = document.createElement('p')
    caption.classList.add('caption')
    caption.innerText = post.summary

    timestamp = document.createElement('span')
    timestamp.classList.add('timestamp')
    timestamp.innerText = String(new Date(post.timestamp * 1000))

    notes = document.createElement('span')
    notes.classList.add('notes')
    notes.innerText = `${post.note_count} note` + (post.note_count !== 1 ? 's' : '')

    imageContainer = document.createElement('div')
    imageContainer.classList.add('image')
    imageContainer.appendChild(image)

    text = document.createElement('div')
    text.classList.add('text')
    text.appendChild(caption)
    text.appendChild(timestamp)
    text.appendChild(notes)

    link = document.createElement('a')
    link.classList.add('post')
    link.setAttribute('href', post.post_url)

    link.appendChild(imageContainer)
    link.appendChild(text)

    return link

    function findMediumImage(img)
    {
      return (img.width >= 400 || img.height >= 400)
    }
  }

  function renderError()
  {
    var errorDiv = document.createElement('div')
      errorDiv.classList.add('tumblr-error')
      errorDiv.innerHTML = 'Couldn\'t fetch latest posts. Check out <a href="//hevromero.tumblr.com/">hevromero.tumblr.com</a> for the latest.';

    return errorDiv
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initTumblr, false)
  } else {
    initTumblr()
  }
})()
