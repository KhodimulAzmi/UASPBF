<div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0 text-dark">Tambah pasien</h1>
        </div>
    </div>

    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">📝 Form Tambah pasien</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('savepasien') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nidn" class="form-label">Nama pasien</label>
                        <input type="text" class="form-control" id="nidn" name="nama" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nidn" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="nidn" name="alamat" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama_pasien" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="nama_pasien" name="tanggal_lahir"
                             required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="telp_pasien" class="form-label">Jenis Kelamin</label>
          <select name="jenis_kelamin" id="id_user" class="form-control" required>
            <option value="">-- Pilih Kelamin --</option>
              <option value="P">Perempuan</option>
              <option value="L">Laki-Laki</option>
          </select>

                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="/pasien" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                    </div>
            </form>
        </div>
    </div>
