@extends('layouts.admin')
@section('content')
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Tous les Clients</strong>
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Site Internet</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->fname}}</td>
                                    <td>{{$row->lname}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->website}}</td>
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
