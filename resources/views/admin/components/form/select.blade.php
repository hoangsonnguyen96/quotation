<div>
    <div class="form-group">
        <label for="">{{ $label ?? '' }}</label>
        @if ($required ?? '')
        <label class="text-danger">*</label>
        @endif
        <select class="form-control" name="{{ $name ?? '' }}" id="{{ $id ??  '' }}" 
        {{ $multiple ?? '' ? 'multiple' : '' }}
        {{ $disabled ?? '' ? 'disabled' : '' }}
        {{ $required ?? '' ? 'required' : '' }}
        >
        <option></option>
            @forelse ($dataOption ?? [] as $item)
                <option value="{{ $item?->id }}" {{ in_array($item?->id, (array)($value ?? [])) ? 'selected' : '' }}>{{ $item->name }}</option>
            @empty
                <option>No record</option>
            @endforelse
        </select>
    </div>
</div>