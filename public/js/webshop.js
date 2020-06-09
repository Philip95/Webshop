

function addToShoppingCart(id) {
  sessionStorage.setItem("Id"+id, id);
    $('<div>In dem Warenkorb hinzugef&uuml;gt</div>')
        .insertBefore('#produkt' + id)
        .delay(1200)
        .fadeOut(function() {
            $(this).remove();
        });

    $('#produkt' + id).removeAttr('onclick').attr('onclick', 'removeFromShoppingCartOverview(' + id + ')').html("Aus Warenkorb entfernen");
}

function removeFromShoppingCartOverview(id) {
    sessionStorage.removeItem("Id"+id);

    $('<div>Erfolgreich entfernt</div>')
        .insertBefore('#produkt' + id)
        .delay(1500)
        .fadeOut(function() {
            $(this).remove();
        });

    $('#produkt' + id).removeAttr('onclick').attr('onclick', 'addToShoppingCart(' + id + ')').html("Zum Warenkorb hinzuf&uuml;gen");
}

function removeFromShoppingCart(id) {
    sessionStorage.removeItem("Id"+id);
    location.reload();
}

