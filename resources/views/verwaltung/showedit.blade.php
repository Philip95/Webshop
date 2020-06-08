@extends('welcome')

@section('content')
    <form action="{{ route('update') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $product->p_id }}" name="p_id">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card borderform">
                        <div class="card-header">{{ __('Produkt anlegen') }}</div>

                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-10 col-lg-6">

                                    <input id="name" type="text" modifier="transparent" value="{{ $product->name }}" float @error('vorname') is-invalid @enderror name="name" required autocomplete="name" autofocus />

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-10 col-lg-6">

                                    <input id="item_number" type="number" modifier="transparent" value="{{ $product->item_number }}"  @error('item_number') is-invalid @enderror name="item_number"  required autocomplete="item_number" autofocus />

                                    @error('item_number')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-10 col-lg-6">

                                    <input id="description" type="text" modifier="transparent" value="{{ $product->description }}"  @error('description') is-invalid @enderror name="description"  required autocomplete="description" autofocus />

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-10 col-lg-6">

                                    <input id="price" type="number" step="0.01" modifier="transparent" value="{{ $product->price }}"  @error('price') is-invalid @enderror name="price"  required autocomplete="price" autofocus />

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
                                        <input class="button" type="submit" id="insert_product" value="Produkt updaten" />
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
