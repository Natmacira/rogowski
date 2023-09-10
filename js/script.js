
window.addEventListener('load', function () {

       // Random home

    var img = ["img/Americana_light/a2.jpg", "img/film/2_argentina.jpg", "img/film/1_california.jpg", "img/Granddad/1_granddad.jpg", "img/Travels_in_reality/3_travels.jpg", "img/Wapien/5_wapien.jpg"]
    var link = ["/americana-light.php", "/film.php", "/film.php", "/grandpa.php", "/travels-in-reality.php", "/wapien.php"]
    function imgRandom(imgArr) {
        var randomIndex = Math.floor(Math.random() * imgArr.length);
        return {
            img: imgArr[randomIndex],
            link: link[randomIndex]
        };
    }
    console.log('hola2');

    var randomImage = imgRandom(img);
    document.getElementById("random-image").src = randomImage.img.toString();
    document.getElementById("random-image-link").href = randomImage.link.toString();



});




