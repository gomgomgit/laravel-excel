<form action="/import-users" method="POST" enctype="multipart/form-data">
    @csrf
    <label for=""> upload exel
        <input type="file" name="hasil_import" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
    </label>
    <button>Upload</button>
</form>