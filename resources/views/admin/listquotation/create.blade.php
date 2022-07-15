@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @include('admin.components.header', [
        'title' => 'List Quotations',
    ])
@stop

@section('content')
<form action="{{ route('listQuotations.store') }}" enctype="multipart/form-data" method="post" class="validation" novalidate>
    <div class="row mb-3">@csrf
        <input type="hidden" name="id" id="id">
        <div class="col">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name"required>
        </div>
        <div class="col">
            <label for="">File</label>
            <input type="file" name="file" class="form-control" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <select name="category" id="" class="form-control">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="desc" id="" cols="30" rows="10" required></textarea>
    </div>
    <div class="float-right mb-3">
        <input type="submit" value="Add" class="btn btn-primary">
    </div>
</form>
@stop
@section('js')
    <script>
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
        $("#quantity,#unit_price").keyup(function(){
            $('#total').val($('#quantity').val() * $('#unit_price').val());
        })

    </script>
<script>

    CKEDITOR.replace('desc', {
        filebrowserUploadUrl: "{{route('ck.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection
