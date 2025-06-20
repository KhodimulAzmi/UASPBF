              <table>
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pasien</th>
                  <th>Alamat</th>
                  <th>Tanggal Lahir</th>
                  <th>Kelamin</th>
                </tr>
              </thead>
              <tbody>
                            @foreach($pasien as $index => $psn)
                  <tr class="align-middle">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $psn['nama'] }}</td>
                    <td>{{ $psn['alamat'] }}</td> 
                    <td>{{ $psn['tanggal_lahir'] }}</td>
                    <td>{{ $psn['jenis_kelamin'] }}</td>
                    <td>
                      <!-- Tombol Edit -->
                      <a href="{{ route('editpasien', ['id' => $psn['id']]) }}">
                        Edit
                      </a>

                      <!-- Tombol Hapus -->
                      <form action="{{ route('deletepasien', ['id' => $psn['id']]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Hapus" onclick="return confirm('Yakin ingin menghapus dosen ini?')">
                          Hapus
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
                                              <!-- Tombol Edit -->
                                  <a href="{{ route('tambahpasien')}}">
                                      Tambah
                                  </a>