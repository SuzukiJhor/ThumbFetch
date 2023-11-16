

const urlField = document.querySelector('.field input')

previewArea = document.querySelector('.preview-area')
imgTag = previewArea.querySelector('.thumbnail')
hiddenInput = document.querySelector('.hidden-input')

urlField.onkeyup = () => {
    let imgUrl = urlField.value
    previewArea.classList.add('active')

    if (imgUrl.indexOf("https://www.youtube.com/watch?v=") != -1) {
        let videoId = imgUrl.split("v=")[1].substring(0, 11)
        let thumbUrl = `https://img.youtube.com/vi/${videoId}/maxresdefault.jpg`
        imgTag.src = thumbUrl

    } else if (imgUrl.indexOf("https://www.youtu.be/") != -1) {
        let videoId = imgUrl.split("be/")[1].substring(0, 11)
        let thumbUrl = `https://img.youtube.com/vi/${videoId}/maxresdefault.jpg`
        imgTag.src = thumbUrl

    } else if (imgUrl.match(/\.(jpe?g|png|gif|bmp|webp)$/i)) {
        imgTag.src = imgUrl;

    } else {
        imgTag.src = ""
        previewArea.classList.remove('active')
    }

    hiddenInput.value = imgTag.src

}

