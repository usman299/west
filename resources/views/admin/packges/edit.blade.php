@extends('layouts.admin')
@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Des offres</strong></h2>
                </div>
                <div class="body">
                    <form action="{{route('admin.packges.update',['id'=>$pkg->id])}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="row" >
                            <div class="col-md-6" >
                                <label for="email_address"><b>Titre</b></label>
                                <div class="form-group">
                                    <input type="text" value="{{$pkg->title}}" placeholder="Titre"  class="form-control" name="title">
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <label for="email_address"><b>Prix</b></label>
                                <div class="form-group">
                                    <input type="text" value="{{$pkg->price}}" placeholder="Prix"  class="form-control" name="price">
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <label for="email_address"><b>Remise</b></label>
                                <div class="form-group">
                                    <input type="text" value="{{$pkg->discount}}" placeholder="Remise"  class="form-control" name="discount">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="email_address"><b>Image</b></label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <img src="{{asset($pkg->image)}}" style="height: 100px" alt="">
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
