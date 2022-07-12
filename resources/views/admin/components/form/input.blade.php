@php
    $var = get_name_from_array($name);
@endphp
<div>
    <div class="form-group">
      <label for="">{{ $label ?? '' }}</label>
      @if ($required)
      <label class="text-danger">*</label>
      @endif
      <input 
      type="{{ $type ?? '' }}"
      name="{{ $name ?? ''}}"
      id="{{ $id ?? '' }}" 
      {{ $required ? 'required' : '' }}
      {{ $disabled ?? '' ? 'disabled' : '' }}
      {{ $readonly ?? '' ? 'readonly' : '' }}
      
      value="{{ $value ?? ''}}"
      class="form-control {{ $errors->has($var) ? 'border border-danger' : '' }}" placeholder=""
      >
      @if ($errors->has($var))
    <small class="text-small text-danger">{{ $errors->first($var) }}</small>
    @endif
    </div>
</div>