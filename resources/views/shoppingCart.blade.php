@extends('welcome')

@section('content')

<script>

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

                   let $tr = $('<tr class="result">').append(
                       $('<td>').text(result.item_number),
                       $('<td>').text(result.name),
                       $('<td>').text(result.description),
                       $('<td>').text(result.price + "€"),
                   ).appendTo('#warenkorb');

                   if(counter === (sessionStorage.length - 1)) {
                       let tr_last_line = $('<tr>').append(
                           $('<td>').text(""),
                           $('<td>').text(""),
                           $('<td style="text-align: right;">').text("Gesamtpreis:"),
                           $('<td>').text(preis.toFixed(2) + "€"),
                       ).appendTo('#warenkorb');
                       console.log(tr_last_line);
                   } else {
                       counter++;
                   }
               }
           });
       }
</script>
<div class="card-header">
    <div class="card-body">
        <table class="table table-hover" id="warenkorb">
            <tr>
                <th>Artikelnummer</th>
                <th>Name</th>
                <th>Beschreibung</th>
                <th>Preis</th>
            </tr>
        </table>
    </div>
</div>
@endsection