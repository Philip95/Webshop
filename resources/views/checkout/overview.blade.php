@extends('welcome')

@section('content')
    <script src="{{ mix('js/summary.js') }}"></script>

    <form action="{{ route('purchase') }}" method="POST">
        @csrf

        <div class="container wide" style="padding: 5px;">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Bestellübersicht') }}</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <p>Ihre Bestelldetails:</p>

                                <table class="table table-hover" id="warenkorb">
                                    <tr>
                                        <th>Artikelnummer</th>
                                        <th>Name</th>
                                        <th>Beschreibung</th>
                                        <th>Preis</th>
                                    </tr>
                                </table>
                            </div>

                            <div>
                                <div class="col-12">
                                    <strong>Ihre Kontaktdaten:</strong>
                                </div> <br>

                                <div class="col-12">
                                    <strong>Name:</strong><br>
                                    @if($user["geschlecht"] == "Mann")
                                        Herr {{$user["vorname"]}} {{$user["nachname"]}}
                                    @else
                                        Frau {{$user["vorname"]}} {{$user["nachname"]}}
                                    @endif
                                </div>

                                <div class="col-12">
                                    <strong>Versandadresse:</strong><br> {{$user["adresse"]}} {{$user["hausnummer"]}}
                                    {{$user["adresszusatz"]}}, {{$user["plz"]}} {{$user["stadt"]}}
                                </div>

                                <div class="col-12">
                                    <strong>E-Mail Adresse:</strong><br> {{$user["email"]}}
                                </div>

                                <div class="col-12">
                                    <strong>Zahlungsart:</strong><br>

                                    <input type="radio" checked name="payment" value="payment"> {{$user["payment"]}}

                                </div>

                            </div>

                            <div class="row justify-content">
                                <div class="center" style="text-align: center;"></div>
                                <div class="col-sm-12 col-lg-12 col-md-12">
                                    <input type="submit" class="button button_float_right" value="Jetzt zahlungspflichtig bestellen">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
