<div class="field">
    <div class="control">
        <label class="label">{{ $label_text }}</label>
        <textarea class="textarea" placeholder="{{ $placeholder }}" name="{{ $name }}">
                {{ isset($value) ? $value : ''}}
        </textarea>
    </div>
</div>
