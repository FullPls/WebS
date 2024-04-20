
const imageList = [
  'https://w7.pngwing.com/pngs/630/871/png-transparent-heart-eyes-emoji-emoji-heart-iphone-love-emoji-smiley-sticker-emoticon-thumbnail.png',
  'https://w7.pngwing.com/pngs/407/764/png-transparent-yellow-smiley-emoji-emoji-computer-icons-emoticon-sunglasses-emoji-smiley-sticker-glasses.png',
  'https://www.pngfind.com/pngs/m/238-2383371_sad-emoticon-png-new-iphone-emojis-transparent-png.png'
]
const img = document.querySelector('.img')
const next = document.getElementById('next')
var numImage = 0
img.src = imageList[numImage]

next.addEventListener('click', () => {
  numImage++
  if (numImage >= imageList.length) {
    numImage = 0
  }
  console.log(numImage >= imageList.length)
  console.log(numImage)
  img.src = imageList[numImage]
})