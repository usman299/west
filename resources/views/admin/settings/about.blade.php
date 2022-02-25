@extends('layouts.admin')
@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>À propos de nous</strong></h2>
                </div>
                <div class="body">
                    <form action="{{route('about.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email_address">À propos de l'image</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="aboutimage">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($gs->aboutimage)}}" style="height: 100px" alt="">
                            </div>
                            <div class="col-md-12">
                                <label for="email_address">À propos</label>
                                <div class="form-group">
                                    <textarea name="about" id="ckeditor" cols="30" rows="10">{{$gs->about}}</textarea>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-round">Sauvegarder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->

@endsection
