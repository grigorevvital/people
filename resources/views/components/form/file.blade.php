<div class="field">
    <div class="file has-name is-fullwidth is-info">
        <label class="file-label">
        <input class="file-input is-rounded" type="file" name="{{ $name }}" id="{{ $name }}">
          <span class="file-cta">
            <span class="file-icon">
              <i class="fas fa-upload"></i>
            </span>
            <span class="file-label">
               {{ $label }}
            </span>
          </span>
          <span class="file-name is-rounded" id="{{ $name.'_file' }}">

          </span>
        </label>
    </div>
</div>
<script>
    var file = document.getElementById("{{ $name  }}");
    file.onchange = function(){
        if(file.files.length > 0) {
            document.getElementById("{{ $name.'_file' }}").innerHTML = file.files[0].name;
        }
    };
</script>
