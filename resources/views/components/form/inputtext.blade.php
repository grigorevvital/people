<div class="field">
    <label class="label">{{ $label_text }}</label>
        <div class="control has-icons-left">
            <input class="input is-rounded" name="{{ $name }}" type="text" placeholder="{{ $placeholder }}" value="{{ isset($value) ? $value : ''}}">
            @if($fa_icon)
                <span class="icon is-small is-left">
                    <i class="{{ $fa_icon }}"></i>
                </span>
            @endif
    </div>
</div>
