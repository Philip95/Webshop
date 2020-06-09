@extends('welcome')

@section('content')
    <form action="{{ route('summary') }}" method="GET">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card borderform">
                        <div class="card-header">{{ __('Zahlungart wählen') }}</div>

                        <div class="card-body">
                            <input id="klarna" type="radio" name="payment" value="klarna" required> Klarna <br>
                            <input id="fake" type="radio" name="payment" value="fake" required> Fake <br>
                            <input type="submit" value="Weiter" class="button_float_right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
