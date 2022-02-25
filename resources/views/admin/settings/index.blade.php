@extends('layouts.admin')
@section('content')
            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Réglages</strong></h2>
                        </div>
                        <div class="body">
                            <form action="{{route('settings.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="email_address">Logo</label>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="logo">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email_address">Nom du site</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="sitename" value="{{$gs->sitename}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email_address">Telephone</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" value="{{$gs->phone}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email_address">Email</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" value="{{$gs->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email_address">Adresse</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address" value="{{$gs->address}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email_address">Facebook</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="facebook" value="{{$gs->facebook}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email_address">Instagram</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="instagram" value="{{$gs->instagram}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email_address">Temps</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="time" value="{{$gs->time}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email_address">Remise</label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="discount" value="{{$gs->discount}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email_address">Texte de pied de page</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="footer_text" value="{{$gs->footer_text}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email_address">Logo de pied de page</label>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="footer_logo" value="{{$gs->footer_logo}}">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Sauvegarder</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->

@endsection
