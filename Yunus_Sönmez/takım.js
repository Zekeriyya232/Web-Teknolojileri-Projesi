var sirala = document.getElementById("takimlar")
var sira = 0
let data = fetch("https://fly.sportsdata.io/v3/nba/scores/json/teams?key=b0595dc9d5684725a07cd3115e20ac05")
.then(Response => Response.json())
.then(veri => {

    veri.forEach(element => {
        if(sira<30) {
            var isim = element["Name"]
            takimlar.innerHTML += `<li>${isim}</li>`
        }
        sira++
    });
})