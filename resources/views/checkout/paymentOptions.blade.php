@extends('welcome')

@section('content')
    <form action="{{ route('shipping') }}" method="GET">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card borderform">
                        <div class="card-header">{{ __('Zahlungart wählen') }}</div>

                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
