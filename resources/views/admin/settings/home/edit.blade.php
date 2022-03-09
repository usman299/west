@extends('layouts.admin')
@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Accueil</strong></h2>
                </div>
                <div class="body">
                    <form action="{{route('home.update',['id'=>$place->id])}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="row" >
                            <div class="col-md-6" >
                                <label for="email_address"><b>Villes </b></label>
                                <div class="form-group">
                                    <select class="form-control select2"  name="place_id" required>
                                        <option value="">Sélectionnez une ville</option>
                                        @foreach($city as $row)
                                            <option value="{{$row->id}}" {{ $row->id == $place->place_id ? 'selected' : '' }}>{{$row->place}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <label for="email_address"><b>Prix</b></label>
                                <div class="form-group">
                                    <input type="text" value="{{$place->price}}" placeholder="Prix"  class="form-control" name="price">
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

