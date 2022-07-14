@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@include('admin.components.header', [
    'title' => 'List Quotations',
    'add' => 'Add List Quotations',
    'url' => route('listQuotations.create'),
])
@stop

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">File</th>
        <th scope="col">Category</th>
        <th scope="col">Created by</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse($listQuotation as $key=>$quotation)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$quotation->name}}</td>
        <td>{{$quotation->file}}</td>
        <td>{{$quotation->category()->first()->name}}</td>
        <td>{{$quotation->user()->first()->name}}</td>
        <td scope="col">
            <div class="d-flex">
                <a class="text-success mr-3" href="{{route('listQuotations.edit',['id'=>$quotation->id])}}">
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
        <td colspan="6" class="text-center">No Data</td>
      </tr>
      @endforelse
    </tbody>
  </table>
  @include('admin.listquotation.components._modal_destroyListQuotation')
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
