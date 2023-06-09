var cantidad_kanjis = 0

for (i = 1; i < 9; i++) {
    if (i != 7) {
        $.ajax({
            url: "https://kanjiapi.dev/v1/kanji/grade-" + i,
            method: "GET",
            datatype: "JSON",
            success: function (data) {
                console.log(data)
                cantidad_kanjis += data.length
                $.ajax({
                    url: "php/selectdata.php",
                    method: "POST",
                    data: { "info": data },
                    datatype: "JSON",
                    success: function (responsse) {
                        preventdefault;
                    }
                });
            }
        })
    }
}
console.log(cantidad_kanjis)
console.log(cantidad_kanjis / 5)
//$.ajax({
//   url: "https://kanjiapi.dev/v1/kanji/all",
//   method: "GET",
// datatype: "JSON",
//  success: function (data) {
//     console.log(data)

//}
//})

a = document.getElementsByClassName("navbar_links")//.addEventListener("click", (link) =>{
//})
for (i = 0; i < a.length; i++) {
    a[i].addEventListener("click", function () {
        link.preventdefault
        console.log(link.href)
    });
}

e.preventdefault