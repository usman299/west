@extends('layouts.admin')
@section('content')
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Tous les Blogs</strong>
                        <a href="#defaultModal" class="btn btn-primary"  data-toggle="modal" data-target="#defaultModal">Ajouter un nouveau
                        </a>
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blog as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>
                                            {{$row->title}}
                                    </td>
                                    <td><img src="{{asset($row->image)}}" height="50px" alt=""></td>
                                    <td>
                                       {{-- <a href="{{route('product.edit' , ['id'=>$row->id])}}" class="btn btn-sm btn-success" data-toggle="tooltip" title="edit">
                                            <i class="material-icons">brush</i>
                                        </a>--}}
                                        <a href="{{route('blog.delete' , ['id'=>$row->id])}}" id="delete" class="btn btn-sm btn-danger" data-toggle="tooltip" title="edit">
                                            <i class="material-icons">clear</i>
                                        </a>
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
                    <h4 class="title" id="defaultModalLabel">Ajouter une nouvelle Blog</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Titre</b><span class="text-danger">*</span></label>
                                <br>
                                <input type="text"  name="title" required placeholder="Titre" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Image</b><span class="text-danger">*</span></label>
                                <br>
                                <input type="file"  name="photo" required placeholder="Nom de catégorie" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Description</b><span class="text-danger">*</span></label>
                                <br>
                                <textarea required class="form-control" name="description" id="" cols="30" rows="10"></textarea>
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
