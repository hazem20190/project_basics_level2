<label for="{{ $name }}">{{ ucfirst($name) }}</label>

@if ($type == 'textarea')
    <textarea id="{{ $name }}" class="form-control" rows="{{ $rows }}" name="{{ $name }}"
        {{ $read }}>{{ old($name, $value) }}</textarea>
@elseif ($type == 'text')
    <input type="text" id="{{ $name }}" class="form-control" name="{{ $name }}"
        value="{{ old($name, $value) }}" {{ $read }}>
@elseif ($type == 'email')
    <input type="email" id="{{ $name }}" class="form-control" name="{{ $name }}"
        value="{{ old($name, $value) }}" {{ $read }}>
@elseif ($type == 'url')
    <input type="url" id="{{ $name }}" class="form-control" name="{{ $name }}"
        value="{{ old($name, $value) }}" {{ $read }}>
@elseif ($type == 'file')
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="{{ $name }}" name="{{ $name }}"
            {{ $read }}>
        <label class="custom-file-label" for="{{ $name }}">Choose file</label>
    </div>
@endif

@error($name)
    <div class="invalid-feedback d-block">{{ $message }}</div>
@enderror
