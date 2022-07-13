@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@include('admin.components.header', [
    'title' => 'Credentials',
    'add' => 'Add Credentials',
    'url' => route('credentials.create'),
])
@stop

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col" class="w-0">Images</th>
        <th scope="col">Description</th>
        <th scope="col">Created By</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse($credentials as $key=>$credential)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td><img class="img-credentials" src="{{asset('img/credentials')}}/{{$credential->images}}" alt=""></td>
        <td class="width-desc"><p class="cut-text">{{$credential->description}}</p></td>
        <td>{{$credential->user()->first()->name}}</td>
        <td scope="col">
            <div class="d-flex">
                <a class="text-success mr-3" href="{{route('credentials.edit',['id'=>$credential->id])}}">
                    <i class="fas fa-edit"></i>
                </a>
                <a class="text-danger" href="#" data-credential="{{$credential->id}}" data-toggle="modal" data-target="#destroyCredential">
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
  @include('admin.credentials.components._modal_destroyCredential')
@stop
@section('js')
    <script>
        $('#destroyCredential').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var data = button.data('credential')
            var modal = $(this)
            modal.find('#credential-id').val(data)
        })
    </script>
@endsection
