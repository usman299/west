@extends('layouts.admin')
@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Mission</strong></h2>
                </div>
                <div class="body">
                    <form action="{{route('mission.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email_address">Titre 1</label>
                                <div class="form-group">
                                    <input type="text" name="mtitle1" class="form-control" id="" value="{{$gs->mtitle1}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Titre 2</label>
                                <div class="form-group">
                                    <input type="text" name="mtitle2" class="form-control" id="" value="{{$gs->mtitle2}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="email_address">Mission</label>
                                <div class="form-group">
                                    <input type="text" name="mission" class="form-control" id="" value="{{$gs->mission}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Image 1</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="mimage1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($gs->mimage1)}}" style="height: 100px" alt="">
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Image 2</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="mimage2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($gs->mimage2)}}" style="height: 100px" alt="">
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
