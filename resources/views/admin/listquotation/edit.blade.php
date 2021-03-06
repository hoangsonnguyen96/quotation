@extends('adminlte::page')
@section('css')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet"/>
@endsection
@section('title', 'Dashboard')

@section('content_header')
    @include('admin.components.header', [
        'title' => 'List Quotations',
    ])
@stop

@section('content')

    <form action="{{ route('listQuotations.update') }}" enctype="multipart/form-data" method="post" class="validation" novalidate>
        <div class="row mb-3">@csrf
            <input type="hidden" name="id" id="id" value="{{$list->id}}" />
            <div class="col">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{$list->name}}" required>
            </div>
            <div class="col">
                <label for="">File</label>
                <input type="file" name="file" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <select name="category" id="" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" @if($category->id == $list->category_id) selected @endif>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="desc" id="desc" cols="30" rows="10" required>{{$list->description}}</textarea>
        </div>
        <div class="float-right mb-3">
            <input type="submit" value="Edit" class="btn btn-primary">
        </div>
    </form>

</body>
@stop
@section('js')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>$.fn.poshytip={defaults:null}</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js"></script>
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

<script type="text/javascript">
    $.fn.editable.defaults.mode = 'inline';

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        }
    });

    $('.update').editable({
           url: "{{ route('listQuotations.update') }}",
           type: 'text',
           pk: 1,
           name: 'services',
           title: 'Enter name'
    });
</script>
<script>

    CKEDITOR.replace('desc', {
        filebrowserUploadUrl: "{{route('ck.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection
</html>
