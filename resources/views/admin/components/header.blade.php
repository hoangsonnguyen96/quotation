<div class="row mb-2 p-x-0 {{ $class ?? '' }}">
    <div class="col-sm-6">
        <h3>{{ $title ?? '' }}</h3>
    </div>
    @if (isset($add))
    <div class="col-sm-6 justify-content-end" style="display: flex">
        @if(isset($sign))
            <button type="button" class=" btn btn-outline-dark"><i data-feather="download"></i></button>
            <button type="button" class="sign-action btn btn-outline-warning" style="margin:0 10px">Decline</button>
            <button type="button" class="sign-action btn btn-primary" style="margin:0 10px" onclick="submitSign()">Sign</button>
        @endif
        <a href="{{ $url ?? '' }}" class="btn btn-primary sign-action" data-toggle="{{$modal??''}}" data-target="{{$target??''}}">
            <i class="fas fa-pen"></i>
            {{$add ?? '' }}
        </a>
    </div>
    @else

    @endif
</div>
