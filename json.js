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
            $("#product-newnow").append("<a href='redirect.php'><img id='product-newnow-img' src='"+ value.Url + "'></a>")
        })
    }
});