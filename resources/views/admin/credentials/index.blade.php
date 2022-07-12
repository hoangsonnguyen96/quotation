@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@include('admin.components.header', [
    'title' => 'Cedentials',
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
                <a class="text-danger" href="#">
                    <i class="fas fa-minus"></i>
                </a>
            </div>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="4">No Data</td>
      </tr>
      @endforelse
    </tbody>
  </table>
@stop
