@extends('layouts.admin')
@section('content')
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Sous-catégorie</strong>
                        <a href="#defaultModal" class="btn btn-primary"  data-toggle="modal" data-target="#defaultModal">Ajouter un nouveau
                        </a>
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Catégorie principale</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subcategories as $cat)
                                <tr>
                                    <td>{{$cat->id}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>{{$cat->category->name}}</td>
                                    <td>
                                        <a id="delete" href="{{route('subcategory.delete', ['id' => $cat->id])}}"> <button  type="button" class="btn btn-danger btn-sm">
                                                <i class="material-icons">clear</i>
                                            </button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('modal')
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="defaultModalLabel">Ajouter une nouvelle Sous-catégorie</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('subcategory.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="col-md-12">
                            <div class="">
                                <label for="title"><b>Catégorie Pricipal</b><span class="text-danger">*</span></label>
                                <select name="category_id" class="form-control">
                                    <option value="">Select Catégorie Pricipal</option>
                                    @foreach($categories  as $ca)
                                        <option value="{{$ca->id}}">{{$ca->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Nom de catégorie</b><span class="text-danger">*</span></label>
                                <br>
                                <input type="text"  name="name" required placeholder="Nom de catégorie" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 pull-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round waves-effect">Sauvegarder</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">PROCHE</button>
                </div>
            </div>
        </div>
    </div>
@endsection
