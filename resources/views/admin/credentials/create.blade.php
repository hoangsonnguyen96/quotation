@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@include('admin.components.header', [
    'title' => 'Credentials',
    'add' => 'Create Credentials',
])
@stop

@section('content')
<form action="{{route('credentials.store')}}" method="post" enctype="multipart/form-data" class="validation" novalidate>
    <div class="row mb-3">@csrf
        <div class="col">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" required>
        </div>
        <div class="col">
            <label for="">Category</label>
            <select name="category" id="category" class="form-control" required>
                @foreach ($category as $cate)
                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                @endforeach

            </select>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <label for="">Description</label>
            <textarea name="description" id="" class="form-control" cols="30" rows="10" placeholder="Description" required></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="">Image</label>
            <input type="file" name="image" id="image" class="form-control mb-3" onchange="readURL(this)" required>
            <img id="img-credentials" src="#"/>
        </div>
        <div class="col">
            <label for="">Demo</label>
            <input type="file" name="demo" class="form-control" required>
        </div>
    </div>
    <div class="float-right">
        <input type="submit" value="Add" class="btn btn-primary">
    </div>
</div>
</form>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();

    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img-credentials')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@stop
