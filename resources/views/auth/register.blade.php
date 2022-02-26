@extends('layouts.front')

@section('content')

    <!-- Begin:: Account Section -->
    <section class="cartPage" >
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h3 style="text-align: center">Bienvenue veuillez vous inscrire</h3>
                    <div class="authWrap authLogin">
                        <h2 class="authTitle">Inscrire</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <input placeholder="Prénom" type="text" class="@error('fname') is-invalid @enderror" name="fname" required value="">
                                    @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input placeholder="Nom de famille" type="text" class="@error('lname') is-invalid @enderror" name="lname" required value="">
                                    @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <input placeholder="Email" type="text" class="@error('email') is-invalid @enderror" name="email" required value="">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <input placeholder="Telephone" type="text" class="@error('phone') is-invalid @enderror" name="phone" required value="">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input placeholder="Mot de passe" class="@error('password') is-invalid @enderror" type="password" required name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input placeholder="Confirmez le mot de passe" class="@error('confirm_password') is-invalid @enderror" type="password" required name="password_confirmation" >
                                </div>
                                <div class="col-lg-12">
                                    <textarea class="required" name="address" placeholder="Votre adresse" required></textarea>
                                </div>
                                <div class="col-sm-12" style="margin-top: 10px;">
                                    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit mo_btn" name="login" value="Log in">
                                        <i class="icofont-unlock"></i>Inscrire
                                    </button><br>
                                    <div style="margin-top: 10px; text-align: center;">Vous avez déjà un compte?<a href="{{route('login')}}" style="font-size: 15px; color: blue;">Connexion</a></div>
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
