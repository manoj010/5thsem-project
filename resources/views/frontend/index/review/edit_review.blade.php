@extends('frontend.master')
@section('main')
<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action"
    style="background-image: url({{asset($models->model_thumbnail) }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br />
                    <br />
                    <br>
                    <br>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->


<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card">

                        <div class="card-header">
                            <h4 class="text-center"> You can Edit a Review for
                                <strong>{{$models->model_name}}</strong>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('update.review')}}" method="post">
                                @csrf

                                <input type="hidden" name="review_id" value="{{$review->id}}">


                                <textarea class="form-control" name="user_review" rows="5"
                                    placeholder="{{$review->user_review}}"></textarea>

                                <input type="submit" class="btn btn-primary mt-4" value="Submit Review">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection