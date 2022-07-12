@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@include('admin.components.header', [
    'title' => 'Categories',
    'add' => 'Add Category',
    'modal' => 'modal',
    'target' => '#addCategory',
])
@stop

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Categories Name</th>
        <th scope="col">Created By</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse($categories as $key=>$category)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$category->name}}</td>
        <td>{{$category->user()->first()->name}}</td>
        <td scope="col">
            <div class="d-flex">
                <a class="text-success mr-3" href="#" data-category="{{$category->id}}" data-toggle="modal"
                    data-target="#editCategory">
                    <i class="fas fa-edit"></i>
                </a>
                <a class="text-danger" href="#" data-toggle="modal" data-category="{{$category->id}}"
                    data-target="#destroyCategory">
                    <i class="fas fa-minus"></i>
                </a>
            </div>
        </td>
      </tr>
      @empty

      @endforelse
    </tbody>
  </table>
  @include('admin.categories.components._modal_addCategory')
  @include('admin.categories.components._modal_editCategory')
  @include('admin.categories.components._modal_destroyCategory')
@stop
@section('js')
<script>
    $('#editCategory').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var data = button.data('category')
    var modal = $(this)
    modal.find('#category-id').val(data)
    })
    $('#destroyCategory').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var data = button.data('category')
    var modal = $(this)
    modal.find('#category-id').val(data)
    })
</script>
@endsection
