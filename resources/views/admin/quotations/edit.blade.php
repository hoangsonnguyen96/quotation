@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @include('admin.components.header', [
        'title' => 'Quotations',
    ])
@stop

@section('content')
    <form action="{{ route('quotations.update') }}" enctype="multipart/form-data" method="post" class="validation" novalidate>
        <div class="row mb-3">@csrf
            <input type="hidden" name="id" id="id" value="{{$quotation->id}}" />
            <div class="col">
                <label for="">Service</label>
                <input type="text" name="service" class="form-control" placeholder="Service" value="{{$quotation->services}}" required>
            </div>
            <div class="col">
                <label for="">Unit</label>
                <input type="text" name="unit" class="form-control" value="{{$quotation->unit}}" placeholder="Unit" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Quantity</label>
                <input type="text" name="quantity" id="quantity" class="form-control" value="{{$quotation->quantity}}" placeholder="Quantity" required>
            </div>
            <div class="col">
                <label for="">Unit Price</label>
                <input type="text" name="unit_price" id="unit_price" class="form-control" value="{{$quotation->unit_price}}" placeholder="Unit Price" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Total</label>
                <input type="text" name="total" id="total" class="form-control mb-3"  value="{{$quotation->total}}" placeholder="Total" readonly required>
            </div>
            <div class="col">
                <label for="">File Demo</label>
                <input type="file" name="demo" class="form-control" required>
            </div>
        </div>
        <div class="float-right">
            <input type="submit" value="Edit" class="btn btn-primary">
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
