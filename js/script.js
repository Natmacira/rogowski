
// window.addEventListener('load', function () {

//        // Random home

//     var img = ["img/Americana_light/a2.jpg", "img/film/argentina-home.jpg", "img/film/california-home.jpg", "img/Granddad/1_granddad.jpg", "img/Travels_in_reality/3_travels.jpg", "img/Wapien/wapien-home.jpg"]
//     var link = ["/americana-light.php", "/film.php", "/film.php", "/grandpa.php", "/travels-in-reality.php", "/wapien.php"]
//     function imgRandom(imgArr) {
//         var randomIndex = Math.floor(Math.random() * imgArr.length);
//         return {
//             img: imgArr[randomIndex],
//             link: link[randomIndex]
//         };
//     }
//     console.log('hola2');

//     var randomImage = imgRandom(img);
//     document.getElementById("random-image").src = randomImage.img.toString();
//     document.getElementById("random-image-link").href = randomImage.link.toString();



// });



window.addEventListener('load', function () {
    var img = ["img/Americana_light/americana-home.jpg", "img/film/argentina-home.jpg", "img/film/california-home.jpg", "img/Granddad/granddad-home.JPG", "img/Travels_in_reality/travels-home.jpg", "img/Wapien/wapien-home.jpg"];
    var link = ["/americana-light.php", "/film.php", "/film.php", "/grandpa.php", "/travels-in-reality.php", "/wapien.php"];

    function imgRandom(imgArr) {
        var randomIndex = Math.floor(Math.random() * imgArr.length);
        return {
            img: imgArr[randomIndex],
            link: link[randomIndex]
        };
    }

    var randomImage = imgRandom(img);
    var randomImageElement = document.getElementById("random-image");
    randomImageElement.src = randomImage.img.toString();
    
    // Elimina todas las clases actuales del elemento img
    randomImageElement.removeAttribute('class');
    
    // Agrega la nueva clase con el nombre de la imagen
    randomImageElement.classList.add(getImageClassName(randomImage.img));
    document.getElementById("random-image-link").href = randomImage.link.toString();
});

function getImageClassName(imageUrl) {
    var filename = imageUrl.split('/').pop();
    var imageName = filename.replace(/\.[^/.]+$/, "");
    return imageName;
}


