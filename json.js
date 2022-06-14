function getFile() {
    return $.ajax({
        type: "GET",
        url: "res.json"
    });
}
getFile().done(function (done) {
    var url = done;
    if (url != null) {
        jQuery.each(url, function (index, value) {
            $("#tBody-date").append('<td id="tBody-date-data">' + value.Url + '</td>')
        })
    }
});