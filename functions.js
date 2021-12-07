function igrackeAjaxx() {
    var sortiraj = $("#cena").val();
    var kategorijesel = $("#kategorija").val();

    $("#igracke").html("");


    $.post("ucitajIgracke.php", { cena: sortiraj, kategorija: kategorijesel }, function (data) {
        $("#igracke").html(data);
    });
    $('html, body').animate({
        scrollTop: $("#igracke").offset().top
    }, 2000);


}
function izmeniIgrackuu(id) {
    $(".igracke").html("");
    $.post("izmeniIgracku.php", { id: id }, function (data) {
        $(".igracke").html(data);
    });
    $('html, body').animate({
        scrollTop: $(".igracke").offset().top
    }, 2000);



}
function izbrisiIgrackuu(id) {
    $(".igracke").html("");

    $.post("izbrisiIgracke.php", { id: id }, function (data) {
        $(".igracke").html(data);
    });
    $('html, body').animate({
        scrollTop: $(".igracke").offset().top
    }, 2000);



}