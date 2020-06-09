@extends('welcome')

@section('content')
    <form action=" {{ route('payment') }}" method="get">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card borderform">
                        <div class="card-header">{{ __('Versandart wählen') }}</div>

                        <div class="card-body">
                            <input id="versand" type="radio" name="versand" value="Versand" required> Versand <br>
                            <input type="submit" value="Weiter" class="button_float_right">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </form>
@endsection
