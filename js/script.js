
window.addEventListener('load', function () {
     // Random home

    var img = ["img/Americana_light/a3.jpg", "img/Collabs/3. Nils_Bloch.jpg", "img/film/3_genewa.jpg", "img/Granddad/3_granddad.jpg", "img/Travels_in_reality/3_travels.jpg", "img/Wapien/3_wapien.jpg"]
    var link = ["/americana-light.php",
        "/colabs.php",
        "/film.php",
        "/grandpa.php",
        "/travels-in-reality.php",
        "/wapien.php"]
    function imgRandom(imgArr) {
        var randomIndex = Math.floor(Math.random() * imgArr.length);
        return {
            img: imgArr[randomIndex],
            link: link[randomIndex]
        };
    }

    var randomImage = imgRandom(img);
    document.getElementById("random-image").src = randomImage.img.toString();
    document.getElementById("random-image-link").href = randomImage.link.toString();


});




