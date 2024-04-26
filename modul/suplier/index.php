<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>
<body>
    <h2>suplier</h2>
</body>
</html>
<div class="card mb-3">
  <div class="card-body">
    <div class="row">
      <div class="mb-3 col-md-6">
        <label for="nama_suplier" class="form-label">Nama Supplier</label>
        <input type="text" class="form-control" id="nama_suplier" name="nama_suplier">
      </div>
      <div class="mb-3 col-md-6">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat">
      </div>
    </div>
    <div class="row">
      <div class="mb-3 col-md-6">
        <label for="telp" class="form-label">Telp</label>
        <input type="text" class="form-control" id="telp" name="telp">
      </div>
      <div class="mb-3 col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email">
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col text-end">
        <button class="btn btn-secondary" type="reset">Reset</button>
        <button class="btn btn-primary" type="submit">Simpan</button>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3>Data Supplier</h3>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Supplier</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Email</th>
            <th><i class="bi bi-gear-fill"></i></th>
          </tr>
        </thead>
        <tbody>
          <!-- Data supplier akan ditampilkan di sini -->
        </tbody>
      </table>
    </div>
  </div>
</div>
