

const urlField = document.querySelector('.field input')

previewArea = document.querySelector('.preview-area')
imgTag = previewArea.querySelector('.thumbnail')

urlField.onkeyup = ()=>{
    let imgUrl = urlField.value 
    previewArea.classList.add('active')

    if (imgUrl.indexOf("https://www.youtube.com/watch?v=") != -1) {

    } else if (imgUrl.indexOf("https://www.youtu.be/") != -1) {

    } else if (imgUrl.match(/\.(jpe?g|png|gif|bmp|webp)$/i)) {

    }
}