@extends('layouts.admin')
@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Video</strong></h2>
                </div>
                <div class="body">
                    <form action="{{route('video.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label for="email_address">Video Viemo URL</label>
                                <div class="form-group">
                                    <input type="text" name="video" class="form-control" id="" value="{{$gs->video}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email_address">Video Bannière</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="vimage">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($gs->vimage)}}" style="height: 100px" alt="">
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
