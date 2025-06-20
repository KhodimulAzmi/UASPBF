              <table>
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Obat</th>
                          <th>Kategori</th>
                          <th>Stok</th>
                          <th>Harga</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($obat as $index => $obt)
                          <tr class="align-middle">
                              <td>{{ $index + 1 }}</td>
                              <td>{{ $obt['nama_obat'] }}</td>
                              <td>{{ $obt['kategori'] }}</td>
                              <td>{{ $obt['stok'] }}</td>
                              <td>{{ $obt['harga'] }}</td>
                              <td>
                                  <!-- Tombol Edit -->
                                  <a href="{{ route('editobat', ['id' => $obt['id']]) }}">
                                      Edit
                                  </a>

                                  <!-- Tombol Hapus -->
                                  <form action="{{ route('deleteobat', ['id' => $obt['id']]) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" title="Hapus"
                                          onclick="return confirm('Yakin ingin menghapus dosen ini?')">
                                          Hapus
                                      </button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
                                  <!-- Tombol Edit -->
                                  <a href="{{ route('tambahobat')}}">
                                      Tambah
                                  </a>
