@extends('layouts.admin')
@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Des Villes</strong></h2>
                </div>
                <div class="body">
                    <form action="{{route('option.update',['id'=>$option->id])}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="row" >
                            <div class="col-md-6" >
                                <label for="email_address"><b> Nom</b></label>
                                <div class="form-group">
                                    <input type="text" value="{{$option->name}}" placeholder=" Nom"  class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <label for="email_address"><b>Prix</b></label>
                                <div class="form-group">
                                    <input type="text" value="{{$option->price}}" placeholder="Prix"  class="form-control" name="price">
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

