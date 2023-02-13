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

                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="model_name" class="form-label">Model Name</label>
                                        <input type="text" name="model_name" class="form-control" id="model_name"
                                            placeholder="Enter Model Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="engine_type" class="form-label">Engine Type</label>
                                        <input type="text" name="engine_type" class="form-control" id="engine_type"
                                            placeholder="Enter Engine Type">
                                    </div>
                                    <div class="mb-3">
                                        <label for="displacement" class="form-label">Displacement</label>
                                        <input type="text" name="displacement" class="form-control" id="displacement"
                                            placeholder="Enter Displacement">
                                    </div>
                                    <div class="mb-3">
                                        <label for="mileage" class="form-label">Mileage</label>
                                        <input type="text" name="mileage" class="form-control" id="mileage"
                                            placeholder="Enter Mileage">
                                    </div>
                                    <div class="mb-3">
                                        <label for="file-multiple-input" class="form-label">Main Thumbnail</label>
                                        <input type="file" name="model_thumbnail" id="file-multiple-input"
                                            name="file-multiple-input" multiple="" class="form-control-file"
                                            onChange="mainThamUrl(this)">
                                        <img src="" id="mainThmb">
                                    </div>
                                    <div class="mb-3">
                                        <label for="file-multiple-input" class="form-label">Multiple Image</label>
                                        <input type="file" id="multiImg" name="multi_img[]" multiple=""
                                            class="form-control-file">
                                        <div class="row" id="preview_img">

                                        </div>
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
                                                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label for="vehicle" class="form-label">Vehicle Name</label>
                                            <select name="vehicle_id" class="form-control mb-3" id="vehicle">
                                                <option>Select Vehicle</option>
                                                @foreach($vehicles as $vehicle)
                                                <option value="{{$vehicle->id}}">{{$vehicle->vehicle_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label for="category_id" class="form-label">Category Name</label>
                                            <select name="category_id" class="form-control mb-3" id="category_id">
                                                <option>Select Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="weight" class="form-label">weight</label>
                                            <input name="weight" type="text" class="form-control mb-3" id="weight"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="max_power" class="form-label">Power</label>
                                            <input type="text" name="max_power" class="form-control mb-3" id="max_power"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="max_torque" class="form-label">Torque</label>
                                            <input name="max_torque" type="text" name="max_torque"
                                                class="form-control mb-3" id="max_torque" placeholder="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="emission_type" class="form-label">Emission Type</label>
                                            <input type="text" name="emission_type" class="form-control"
                                                id="emission_type" placeholder="Enter Mileage">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="price" class="form-label">Price</label>
                                            <input name="price" type="text" class="form-control mb-3" id="price"
                                                placeholder="">
                                        </div>

                                        <div class="col-12">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" class="form-control mb-3" id="description"
                                                rows="3"></textarea>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="d-grid m-4">
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.col-->

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
                if (/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)) { //check supported file type
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