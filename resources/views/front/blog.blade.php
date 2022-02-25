@extends('layouts.front')
@section('content')

    <!-- Begin:: Single Blog Section -->
    <section class="singleBlog">
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-8">
                    <div class="postThumb">
                        <img src="{{asset($blog->image)}}" alt=""/>
                    </div>
                    <div class="sic_details clearfix">
                        <span class="bpdate">{{$blog->created_at->format('d m, Y')}}</span>
                        <h3>{{$blog->title}}</h3>
                        <div class="sic_the_content clearfix">
                            <p>
                               {{$blog->description}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </section>
    <!-- End:: Single Blog Section -->
    @endsection
