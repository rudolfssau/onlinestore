function getFile() {
    return $.ajax({
        dataType: "json",
        type: "GET",
        url: "res.json"
    });
}
getFile().done(function (done) {
    var Url = done;
    if (Url != null) {
        jQuery.each(Url, function (index, value) {
            $(".numbertxt").append('<img src="value.Url">)
        })
    }
});
// function getDate() {
//     return $.ajax({
//         type: "GET",
//         url: "track_date.json"
//     })
// }
// getDate().done(function (done) {
//     var date = done;
//     if (date != null) {
//         jQuery.each(date, function (index, value) {
//             $("#tBody-date").append('<td id="tBody-date-data">' + value.Date + '</td>>')
//         });
//     };
// });