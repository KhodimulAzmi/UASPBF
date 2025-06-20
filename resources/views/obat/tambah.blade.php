<div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0 text-dark">Tambah obat</h1>
        </div>
    </div>

    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">📝 Form Tambah obat</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('saveobat') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nidn" class="form-label">Nama Obat</label>
                        <input type="text" class="form-control" id="nidn" name="nama_obat" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nidn" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="nidn" name="kategori" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama_obat" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="nama_obat" name="nama_obat"
                             required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="telp_obat" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="telp_obat" name="harga"
                             required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="/obat" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                    </div>
            </form>
        </div>
    </div>
