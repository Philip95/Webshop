@extends('welcome')

@section('content')
    <form action="{{ route('insert') }}" method="POST">
        @csrf

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card borderform">
                        <div class="card-header">{{ __('Produkt anlegen') }}</div>

                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-10 col-lg-6">

                                    <input id="name" type="text" modifier="transparent" placeholder="Name" float @error('vorname') is-invalid @enderror name="name" required autocomplete="name" autofocus />

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10 col-lg-6">

                                        <input id="item_number" type="number" modifier="transparent" placeholder="Artikelnummer"  @error('item_number') is-invalid @enderror name="item_number"  required autocomplete="item_number" autofocus />

                                        @error('item_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10 col-lg-6">

                                        <input id="description" type="text" modifier="transparent" placeholder="Beschreibung"  @error('description') is-invalid @enderror name="description"  required autocomplete="description" autofocus />

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10 col-lg-6">

                                        <input id="price" type="number" step="0.01" modifier="transparent" placeholder="Preis"  @error('price') is-invalid @enderror name="price"  required autocomplete="price" autofocus />

                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div>
                                        <div>
                                            <input class="button" type="submit" id="insert_product" value="Produkt anlegen" />
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection
