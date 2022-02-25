@extends('layouts.front')

@section('content')

<!-- Begin:: Account Section -->
<section class="cartPage" >
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h3 style="text-align: center">Bienvenue veuillez vous identifier pour accéder à nos produits</h3>
                <div class="authWrap authLogin">
                    <h2 class="authTitle">Connexion</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <input placeholder="Email" type="text" class="@error('email') is-invalid @enderror" name="email" required value="">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <input placeholder="Mot de passe" class="@error('password') is-invalid @enderror" type="password" required name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="woocommerce-button button woocommerce-form-login__submit mo_btn" name="login" value="Log in">
                                    <i class="icofont-unlock"></i>Connexion
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End:: Account Section -->

@endsection
