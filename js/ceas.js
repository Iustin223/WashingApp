let ore = document.getElementById("ore1");
let min = document.getElementById("min1");
let sec = document.getElementById("sec1");

setInterval(() => {
    let timp_curent = new Date();

    // Add leading zeros if minutes or seconds are less than 10
    let minuteString = (timp_curent.getMinutes() < 10 ? '0' : '') + timp_curent.getMinutes();
    let secundaString = (timp_curent.getSeconds() < 10 ? '0' : '') + timp_curent.getSeconds();

    ore.innerHTML = timp_curent.getHours();
    min.innerHTML = minuteString;
    sec.innerHTML = secundaString;

}, 1000);
    