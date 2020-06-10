@extends('welcome')

@section('content')
    <form action="{{ route('shipping') }}" method="GET">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card borderform">
                        <div class="card-header">{{ __('Rechnungsadresse') }}</div>

                        <div class="card-body">
                                <div class="form-group row col-md-10 col-lg-6">
                                    <fieldset>
                                        <input id="frau" type="radio"  placeholder="Frau" name="geschlecht" value="Frau" required>
                                        <label for="frau">Frau</label>
                                        <input id="mann" type="radio"  placeholder="Mann" name="geschlecht" value="Mann">
                                        <label for="mann">Mann</label>
                                    </fieldset>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-10 col-lg-6">

                                        <input id="name" type="text" modifier="transparent" placeholder="Vorname*" float @error('vorname') is-invalid @enderror name="name" required autocomplete="name" autofocus />

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10 col-lg-6">

                                        <input id="nachname" type="text" modifier="transparent" placeholder="Nachname*" float @error('nachname') is-invalid @enderror name="nachname"  required autocomplete="name" autofocus />

                                        @error('nachname')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10 col-lg-6">
                                        <input id="adresse" type="text" modifier="transparent" placeholder="Adresse*" float @error('adresse') is-invalid @enderror type="text" name="adresse" required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10 col-lg-6">
                                        <input id="hausnummer" type="text" modifier="transparent" placeholder="Hausnummer*" float @error('hausnummer') is-invalid @enderror type="text" name="hausnummer" required />
                                    </div>
                                </div>

                                <div class="form-group row">


                                    <div class="col-md-10 col-lg-6">
                                        <input id="adresszusatz" type="text" modifier="transparent" placeholder="Adresszusatz" float @error('adresszusatz') is-invalid @enderror type="text" name="adresszusatz" />
                                    </div>
                                </div>

                                <div class="form-group row">


                                    <div class="col-md-10 col-lg-6">
                                        <input id="plz" type="text" pattern="^[0-9]*$" modifier="transparent" placeholder="Postleitzahl*" @error('plz') is-invalid @enderror type="text" name="plz" required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10 col-lg-6">
                                        <input id="stadt" type="text" modifier="transparent" placeholder="Stadt*" float @error('stadt') is-invalid @enderror type="text" name="stadt" required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10 col-lg-6">
                                        <input id="email" type="email" modifier="transparent" placeholder="E-Mail*" float @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10 col-lg-6" style="margin-top: 10px">
                                        <div class="card__content">*Pflichtfelder</div>
                                    </div>
                                </div>

                                <input class="button button_float_right" type="submit" id="versanddetails" value="Weiter" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
