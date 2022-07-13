@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@include('admin.components.header', [
    'title' => 'Quotations',
    'add' => 'Add Quotations',
    'url' => route('quotations.create'),
])
@stop

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Services</th>
        <th scope="col">Unit</th>
        <th scope="col">Quantity</th>
        <th scope="col">Unit Price</th>
        <th scope="col">Total</th>
        <th scope="col">Category</th>
        <th scope="col">Created By</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse($quotations as $key=>$quotation)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$quotation->services}}</td>
        <td>{{$quotation->unit}}</td>
        <td>{{$quotation->quantity}}</td>
        <td>{{$quotation->unit_price}}</td>
        <td>{{$quotation->total}}</td>
        <td>{{$quotation->categories()->first()->name}}</td>
        <td>{{$quotation->user()->first()->name}}</td>
        <td scope="col">
            <div class="d-flex">
                <a class="text-success mr-3" href="{{route('quotations.edit',['id'=>$quotation->id])}}">
                    <i class="fas fa-edit"></i>
                </a>
                <a class="text-danger" href="#" data-quotation="{{$quotation->id}}" data-toggle="modal" data-target="#destroyQuotation">
                    <i class="fas fa-minus"></i>
                </a>
            </div>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="5">No Data</td>
      </tr>
      @endforelse
    </tbody>
  </table>
  @include('admin.quotations.components._modal_destroyQuotation')
@stop
@section('js')
    <script>
        $('#destroyQuotation').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var data = button.data('quotation')
            var modal = $(this)
            modal.find('#quotation-id').val(data)
        })
    </script>
@endsection
