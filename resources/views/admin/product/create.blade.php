@extends('layouts.admin')
@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Ajouter un nouveau produit</strong></h2>
                </div>
                <div class="body">
                    <form action="{{route('product.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Titre</label>
                                        <input type="text" name="title" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Catégorie</label>
                                        <select onchange="categorychange(this)" name="category"  class="form-control category show-tick" required>
                                            <option value="">Choisir une catégorie</option>
                                            @foreach($categories as $cat)
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                           {{--     <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Sous-catégorie</label>
                                        <select name="subcategory"  class="form-control subcategory show-tick" required>
                                            <option value="">Sélectionnez une sous-catégorie</option>
                                        </select>
                                    </div>
                                </div>--}}
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Prix</label>
                                        <input type="number" name="price" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Ancien prix</label>
                                        <input type="number" name="oldprice"  class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">SKU</label>
                                        <input type="number" name="sku" readonly value="{{rand(100000, 900000)}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Quantité</label>
                                        <input type="number" name="quantity"  class="form-control">
                                    </div>
                                </div>
                              {{--  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Rubrique</label>
                                        <select name="type"  class="form-control show-tick" id="" required>
                                            <option value="1">PROMOTIONS</option>
                                            <option value="2">LES PLUS VENDUS</option>
                                        </select>
                                    </div>
                                </div>--}}
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Photo vedette</label>
                                        <input type="file" name="photo" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Galerie</label>
                                        <input type="file" multiple name="gallery[]" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">La description</label>
                                        <textarea class="form-control" name="description" id="summernote" cols="30" rows="10" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->

@endsection
