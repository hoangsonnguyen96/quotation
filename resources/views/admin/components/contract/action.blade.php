<a class="dropdown-item"
{{-- data-action-type="{{ $actionType ?? '' }}" --}}
href="{{ $url ?? '' }}"
onclick="handleMoveStatusContract(this)"
data-contract-id="{{ $contractId ?? ''}}"
@if ($modalActive)
    data-toggle = "modal"
    data-target = "#mail"
@endif
@if($sign)
    data-toggle = "modal"
    data-target = "#uploadForm"
@endif
data-contract="{{$dataContract}}"
data-upload="{{$dataUpload}}"
>
{{ $name ?? '' }}


</a>
