$(document).ready(function () {

    for (let i = 0; i < sessionStorage.length; i++) {
        console.log(sessionStorage.getItem(sessionStorage.key(i)));

        if(document.getElementById("produkt" + sessionStorage.getItem(sessionStorage.key(i)))) {
            $('#produkt' + sessionStorage.getItem(sessionStorage.key(i))).removeAttr('onclick').attr('onclick', 'removeFromShoppingCartOverview(' + sessionStorage.getItem(sessionStorage.key(i)) + ')').html("Aus Warenkorb entfernen");
        }
    }
});
