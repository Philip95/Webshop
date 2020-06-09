@extends('welcome')

@section('content')
    <script src=" {{ mix('js/summary.js') }}"></script>
    <div class="container wide" style="padding: 5px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Kaufbestätigung') }}</div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <p>Vielen Dank f&uuml;r Ihre Bestellung. Sie erhalten in K&uuml;rze eine Best&auml;tigung per
                                Mail.
                            </p>
                        </div>

                        <div class="row justify-content-center">
                            <p>Ihre Bestelldetails zusammengefasst:</p>

                            <table class="table table-hover" id="warenkorb">
                                <tr>
                                    <th>Artikelnummer</th>
                                    <th>Name</th>
                                    <th>Beschreibung</th>
                                    <th>Preis</th>
                                </tr>
                            </table>
                        </div>

                        <p class="row justify-content-center"> Um zur Startseite zur&uuml;ckzukommen, dr&uuml;cken Sie bitte folgenden Link:</p>

                        <div class="row justify-content-center">
                            <a href="{{ route('home') }}" class="button_float_right btn btn-info" id="home" >Zur&uuml;ck zur Startseite</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


