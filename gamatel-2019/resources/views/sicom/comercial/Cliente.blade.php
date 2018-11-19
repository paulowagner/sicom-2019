<form target="_blank" action="{{route('sicom.Cliente.get')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="file-field input-field">
        <div class="btn">
            <span>File</span>
            <input type="file" name="imagem" multiple>
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload one or more files">
        </div>
    </div>
    <button>submit</button>
</form>
<script type="text/javascript">
    $(document).ready(function() {
        M.updateTextFields();
    });
</script>