let overallItems = 0;
let preis = 0;
let counter = 0;

for(let i = 0; i < sessionStorage.length; i++) {
    let key = sessionStorage.key(i);
    let value = sessionStorage.getItem(key);

    $.ajax({
        url: "/warenkorb/produkt",
        data: {
            id: value
        },
        dataType: 'JSON',
        success: function(result){
            overallItems++;
            preis = preis + parseFloat(result.price);

            let methode = 'removeFromShoppingCart(' + result.p_id + ')';
            let id = result.p_id;

            let $tr = $('<tr class="result">').append(
                $('<td>').text(result.item_number),
                $('<td>').text(result.name),
                $('<td>').text(result.description),
                $('<td>').text(result.price + " €")
            ).appendTo('#warenkorb');

            if(counter === (sessionStorage.length - 1)) {
                let tr_last_line = $('<tr>').append(
                    $('<td>').text(""),
                    $('<td>').text(""),
                    $('<td style="text-align: right;">').text("Gesamtpreis:"),
                    $('<td>').text(preis.toFixed(2) + " €").
                    append('<input type=hidden value="'+ preis +'" name="gesamtpreis"/>')
                ).appendTo('#warenkorb');
            } else {
                counter++;
            }
        }
    });
}

$(function () {

    $('#home').on('click', function(e) {
        if ($(this).hasClass('post-page') == false)
            clear();
    });

    function clear() {
        sessionStorage.clear();
    }
});

