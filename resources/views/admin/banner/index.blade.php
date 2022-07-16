@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@include('admin.components.header', [
    'title' => 'Banner',
    'add' => 'Add Banner',
    'modal' => 'modal',
    'target' => '#addBanner',
])
@stop

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Images</th>
        <th scope="col">Link</th>
        <th scope="col">Created By</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse($banners as $key=>$banner)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td><img class="img-credentials" src="{{asset('img/banner')}}/{{$banner?->images}}" alt=""></td>
        <td>{{$banner?->link}}</td>
        <td>{{$banner?->user()->first()->name}}</td>
        <td scope="col">
            <div class="d-flex">
                <a class="text-success mr-3" href="#" data-banner="{{$banner?->id}}" data-toggle="modal"
                    data-target="#editBanner">
                    <i class="fas fa-edit"></i>
                </a>
                <a class="text-danger" href="#" data-toggle="modal" data-banner="{{$banner?->id}}"
                    data-target="#destroyBanner">
                    <i class="fas fa-minus"></i>
                </a>
            </div>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="5" class="text-center">No Data</td>
      </tr>
      @endforelse
    </tbody>
  </table>
  @include('admin.banner.components._modal_addBanner')
  @include('admin.banner.components._modal_editBanner')
  @include('admin.banner.components._modal_destroyBanner')
@stop
@section('js')
<script>
    $('#editBanner').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var data = button.data('banner')
    var modal = $(this)
    modal.find('#banner-id').val(data)
    })
    $('#destroyBanner').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var data = button.data('banner')
    var modal = $(this)
    modal.find('#banner-id').val(data)
    })
</script>
@endsection
