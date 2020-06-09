@extends('welcome')

@section('content')

<script src=" {{ mix('js/shoppingcart.js') }}"></script>

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

<a class="btn  button_float_right" href=" {{ route('rechnungsadresse') }}" > Weiter</a>
@endsection
