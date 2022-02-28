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
                    <form action="{{route('admin.offers.update',['id'=>$offers->id])}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="row" >
                            <div class="col-md-6" >
                                <label for="email_address"><b>Titre</b></label>
                                <div class="form-group">
                                    <input type="text" value="{{$offers->title1}}" placeholder="Titre"  class="form-control" name="title1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="email_address"><b>Image</b></label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="photo">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <img src="{{asset($offers->image)}}" style="height: 100px" alt="">
                            </div>
                            <div class="col-md-8" style="margin-top: 15px;">
                                <div class="form-group">

                                    <div class="sizequantity">
                                        <div class="row">
                                            <div class="col-md-6">
                                                @foreach(json_decode($offers->title) as $item)
                                                <input type="text" name="title[]" placeholder="Titre" value="{{$item}}" required class="form-control">
                                                @endforeach
                                            </div>
                                            <div class="col-md-6">
                                                @foreach(json_decode($offers->price) as $item)
                                                <input  type="text" name="price[]" placeholder="Prix" value="{{$item}}" required class="form-control">
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top: 15px;">
                                <div class="form-group">

                                    <a  onclick="addmorerow()" class=" btn-primary btn-sm " style="color: white" >Ajouter</a>
                                    <a  onclick="removerow()" class=" btn-danger btn-sm" style="color: white"  >Supprimer</a>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <label for="email_address" style="margin-top: 10px;"><b>La description</b></label>
                                <div class="form-group">
                                    <textarea name="description" class="form-control" cols="30" rows="10">{{$offers->description}}</textarea>
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

    <script>
        function addmorerow(){
            $('.sizequantity').append('<div class="row">\n' +
                '                                                <div class="col-md-6">\n' +
                '                                                    <input type="text" name="title[]" required placeholder="Titre" class="form-control">\n' +
                '                                                </div>\n' +
                '                                                <div class="col-md-6">\n' +
                '                                                    <input  type="text" name="price[]" placeholder="Prix" required  class="form-control">\n' +
                '                                                </div>\n' +
                '                                            </div>');
        }
        function removerow(){
            $('.sizequantity .row:last').remove();
        }
    </script>

@endsection
