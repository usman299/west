@extends('layouts.admin')
@section('content')
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Tous les produits</strong>
                        <a href="{{route('product.create')}}" class="btn btn-primary" >Ajouter un nouveau
                        </a>
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Sku</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Photo</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $row)
                                <tr>
                                    <td>{{$row->sku}}</td>
                                    <td>
                                        <a target="_blank" href="{{route('front.product', ['id' => $row->id])}}">
                                            {{$row->title}}
                                        </a>
                                    </td>
                                    <td>{{$row->price}} €</td>
                                    <td><img src="{{asset($row->photo)}}" height="50px" alt=""></td>
                                    <td>{{$row->category->name}}</td>
                                    <td>
                                        <a href="{{route('product.edit' , ['id'=>$row->id])}}" class="btn btn-sm btn-success" data-toggle="tooltip" title="edit">
                                            <i class="material-icons">brush</i>
                                        </a>
                                        <a href="{{route('product.delete' , ['id'=>$row->id])}}" id="delete" class="btn btn-sm btn-danger" data-toggle="tooltip" title="edit">
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
