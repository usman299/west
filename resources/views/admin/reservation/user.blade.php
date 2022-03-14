@extends('layouts.admin')
@section('content')
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Réservation Utilisatrice</strong>

                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Prénom</th>
                                <th>Nom de famille</th>
                                <th>E-mail</th>
                                <th>Téléphoner</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key=> $row)
                                <?php $user = \App\User::where('id','=',$row)->first();?>
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$user->fname}}</td>
                                    <td>{{$user->lname}}</td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        {{$user->phone}}
                                    </td>


                                    <td>

                                            <a href="{{route('view.reservation.detials' , ['id'=>$row])}}" class="btn btn-sm btn-primary" data-toggle="tooltip" >
                                                <i class="zmdi zmdi-eye"></i>
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

