@extends('layouts.admin')
@section('content')
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Des Villes</strong>
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
                                <th>Villes</th>
                                <th>Prix</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($place as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>
                                        {{$row->place}}
                                    </td>
                                    <td>
                                        {{$row->price}}€
                                    </td>

                                    <td>
                                        <a href="{{route('place.edit' , ['id'=>$row->id])}}" class="btn btn-sm btn-success" data-toggle="tooltip" title="edit">
                                             <i class="material-icons">brush</i>
                                         </a>
                                        <a href="{{route('place.delete' , ['id'=>$row->id])}}" id="delete" class="btn btn-sm btn-danger" data-toggle="tooltip" title="edit">
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
                    <h4 class="title" id="defaultModalLabel">Ajouter une nouvelle  Villes</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('place.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b> Villes Nom</b><span class="text-danger">*</span></label>
                                <br>
                                <input type="text"  name="place" required placeholder="Villes Nom" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Prix</b><span class="text-danger">*</span></label>
                                <br>
                                <input type="number"  name="price" required placeholder="Prix" class="form-control">
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
