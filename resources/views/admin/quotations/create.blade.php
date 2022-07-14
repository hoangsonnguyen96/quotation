@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @include('admin.components.header', [
        'title' => 'Quotations',
    ])
@stop

@section('content')
    <form action="{{ route('quotations.store') }}" enctype="multipart/form-data" method="post" class="validation" novalidate>
        <div class="row mb-3">@csrf
            <div class="col">
                <label for="">Service</label>
                <input type="text" name="service" class="form-control" placeholder="Service" required>
            </div>
            <div class="col">
                <label for="">Unit</label>
                <input type="text" name="unit" class="form-control" placeholder="Unit" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Quantity</label>
                <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Quantity" required>
            </div>
            <div class="col">
                <label for="">Unit Price</label>
                <input type="text" name="unit_price" id="unit_price" class="form-control" placeholder="Unit Price" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Total</label>
                <input type="text" name="total" id="total" class="form-control mb-3" placeholder="Total" readonly required>
            </div>
            <div class="col">
                <label for="">List</label>
                <select name="list" id="list" class="form-control">
                    @foreach($listQuotations as $list)
                        <option value="{{$list->id}}">{{$list->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <label for="">Link Demo</label>
                <input type="text" name="link" class="form-control" required>
            </div>
        </div>
        <div class="float-right">
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
@endsection
