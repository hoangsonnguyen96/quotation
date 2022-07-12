@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@include('admin.components.header', [
    'title' => 'Cedentials',
    'add' => 'Create Credentials',
])
@stop

@section('content')
<form action="{{route('credentials.store')}}" method="post" enctype="multipart/form-data" class="validation" novalidate>
    <div class="col-12">@csrf
        <div class="form-group">
            <label for="">Images</label>
            <input type="file" name="file" id="file" class="form-control" onchange="readURL(this)" required>
            <div class="invalid-feedback">
              Please add File.
            </div>
            <img id="img-credentials" src="#"/>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10" required></textarea>
            <div class="invalid-feedback">
              Please add Description.
            </div>
        </div>
    </div>
</div>
<div class="float-right">
    <input type="submit" value="Add" class="btn btn-primary" >
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
