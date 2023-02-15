@extends('admin.admin_dashboard')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-1">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li><a href="{{route('all.model')}}">All Model</a></li>
                            <li class="active">Add Model</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Vehicle</strong> Model
                </div>
                <div class="card-body p-4">
                    <form id="myForm" method="post" action="{{route('update.model')}}">
                        @csrf


                        <input type="hidden" name="id" value="{{$models->id}}">

                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="form-group mb-3">
                                            <label for="model_name" class="form-label">Model Name</label>
                                            <input type="text" name="model_name" class="form-control" id="model_name"
                                                value="{{$models->model_name}}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="engine_type" class="form-label">Engine Type</label>
                                            <input type="text" name="engine_type" class="form-control" id="engine_type"
                                                value="{{$models->engine_type}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="displacement" class="form-label">Displacement</label>
                                            <input type="text" name="displacement" class="form-control"
                                                id="displacement" value="{{$models->displacement}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="mileage" class="form-label">Mileage</label>
                                            <input type="text" name="mileage" class="form-control" id="mileage"
                                                value="{{$models->mileage}}">
                                        </div>




                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <label for="brand" class="form-label">Brand Name</label>
                                                <select name="brand_id" class="form-control mb-3" id="brand">
                                                    <option> Select Brand</option>
                                                    @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}"
                                                        {{$brand->id ==$models->brand_id ? 'selected' : '' }}>
                                                        {{$brand->brand_name}}
                                                    </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="vehicle" class="form-label">Vehicle Name</label>
                                                <select name="vehicle_id" class="form-control mb-3" id="vehicle">
                                                    <option>Select Vehicle</option>
                                                    @foreach($vehicles as $vehicle)
                                                    <option value="{{$vehicle->id}}"
                                                        {{$vehicle->id ==$models->vehicle_id ? 'selected' : ''}}>
                                                        {{$vehicle->vehicle_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="category_id" class="form-label">Category Name</label>
                                                <select name="category_id" class="form-control mb-3" id="category_id">
                                                    <option>Select Category</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}"
                                                        {{$category->id ==$models->category_id ? 'selected' : ''}}>
                                                        {{$category->category_name}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="weight" class="form-label">weight</label>
                                                <input name="weight" type="text" class="form-control mb-3" id="weight"
                                                    value="{{$models->weight}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="max_power" class="form-label">Power</label>
                                                <input type="text" name="max_power" class="form-control mb-3"
                                                    id="max_power" value="{{$models->max_power}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="max_torque" class="form-label">Torque</label>
                                                <input type="text" name="max_torque" class="form-control mb-3"
                                                    id="max_torque" value="{{$models->max_torque}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="emission_type" class="form-label">Emission Type</label>
                                                <input type="text" name="emission_type" class="form-control"
                                                    id="emission_type" value="{{$models->emission_type}}">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="price" class="form-label">Price</label>
                                                <input name="price" type="text" class="form-control mb-3" id="price"
                                                    value="{{$models->price}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Braking Type</label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio1" class="form-check-label ">
                                                                <input type="radio" id="radio1" name="braking_type"
                                                                    value="ABS" class="form-check-input">ABS
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label mb-3">
                                                                <input type="radio" id="radio2" name="braking_type"
                                                                    value="Non ABS" class="form-check-input ">Non
                                                                ABS
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="braking" class="form-label">Fuel Supply </label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio1" class="form-check-label ">
                                                                <input type="radio" id="radio1" name="fuel_supply"
                                                                    value="{{$models->fuel_supply}}"
                                                                    class="form-check-input">Fuel
                                                                Injection
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label mb-3">
                                                                <input type="radio" id="radio2" name="fuel_supply"
                                                                    value="{{$models->fuel_supply}}"
                                                                    class="form-check-input">Carboretor
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6">
                                                <label for="braking" class="form-label">Starting
                                                </label>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio1" class="form-check-label ">
                                                                <input type="radio" id="radio1" name="starting"
                                                                    value="Self Start" class="form-check-input">Self
                                                                Start

                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label mb-3">
                                                                <input type="radio" id="radio2" name="starting"
                                                                    value="Kick and Self Start"
                                                                    class="form-check-input">Kick and
                                                                Self Start
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-12">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea name="description" class="form-control mb-3" id="description"
                                                    rows="3">{{$models->description}}</textarea>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Submit" />
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Main Image</strong>
        </div>
        <div class="card-body">
            <form id="myForm" method="post" action="{{route('update.model.img')}}" enctype="multipart/form-data">
                @csrf


                <input type="hidden" name="id" value="{{$models->id}}">
                <input type="hidden" name="old_img" value="{{$models->model_thumbnail}}">

                <div class="mb-3">
                    <label for="formFile" class="form-label">Update Main Image </label>
                    <input class="form-control" name="model_thumbnail" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <img src="{{asset($models->model_thumbnail)}}" style="height:100px; width:100px">
                </div>

                <div class="col-sm-6 text-secondary">
                    <input type="submit" class="btn btn-primary px-4" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</div>
<div class="content">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Multi Image Update</strong>
        </div>
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                        <th class="serial">SN</th>
                        <th>Image</th>
                        <th>Change Image</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <form id="myForm" method="post" action="{{route('update.model.multiimg')}}"
                        enctype="multipart/form-data">
                        @csrf

                        @foreach($multiImg as $key => $imgs)
                        <tr>
                            <td scope="row">{{$key+1}}</td>

                            <td>
                                <img src="{{asset($imgs->photo_name)}}" style="height:80; width:60px">
                            </td>
                            <td>
                                <input type="file" class="form-group" name="multi_img[{{$imgs->id}}]">
                            </td>
                            <td>
                                <input type="submit" class="btn btn-success" value="update">
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                        @endforeach

                    </form>

                </tbody>
            </table>
        </div> <!-- /.table-stats -->
    </div>
</div>
<!--/.col-->

<script type="text/javascript">
$(document).ready(function() {
    $('#myForm').validate({
        rules: {
            model_name: {
                required: true,
            },
            engine_type: {
                required: true,
            },

        },
        messages: {
            model_name: {
                required: 'Please Enter Product Name',
            },
            engine_type: {
                required: 'Please Enter Short Description',
            },

        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
    });
});
</script>

<script type="text/javascript">
function mainThamUrl(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#mainThmb').attr('src', e.target.result).width(80).height(80);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

<script>
$(document).ready(function() {
    $('#multiImg').on('change', function() { //on file input change
        if (window.File && window.FileReader && window.FileList && window
            .Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file) { //loop though each file
                if (/(\.|\/)(gif|jpeg|jpg|png)$/i.test(file
                        .type)) { //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file) { //trigger function on successful read
                        return function(e) {
                            var img = $('<img/>').addClass('thumb').attr('src', e
                                    .target.result).width(100)
                                .height(80); //create image element 
                            $('#preview_img').append(
                                img); //append image to output element
                        };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        } else {
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });
});
</script>

@endsection