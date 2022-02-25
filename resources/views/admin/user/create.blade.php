@extends('layouts.admin')
@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Ajouter un nouveau Praticien</strong></h2>
                    @error('email')
                    <strong>Le couriel a déja été pris en compte.</strong>
                    @enderror
                </div>
                <div class="body">
                    <form action="{{route('user.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputLastName1" class="form-label">Prénom</label>
                            <div class="input-group">
                                <input type="text" name="fname" class="form-control border-start-0" required id="inputLastName1" placeholder="Prénom" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputLastName2" class="form-label">Nom</label>
                            <div class="input-group">
                                <input type="text" name="lname" class="form-control border-start-0" required id="inputLastName2" placeholder="Nom" />
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputPhoneNo" class="form-label">Telephone</label>
                            <div class="input-group">
                                <input type="text" name="phone" class="form-control border-start-0" required id="inputPhoneNo" placeholder="Telephone" />
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Email</label>
                            <div class="input-group">
                                <input type="email" name="email" class="form-control border-start-0"  required id="inputEmailAddress" placeholder="Email" />
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Mot de passe</label>
                            <div class="input-group">
                                <input type="text" name="password" class="form-control border-start-0" required id="inputChoosePassword" value="12345678" />
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="inputAddress3" class="form-label">Adresse</label>
                            <textarea required name="address" class="form-control" id="inputAddress3" placeholder="Adresse" rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-danger px-5">Sauvegarder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->

@endsection
