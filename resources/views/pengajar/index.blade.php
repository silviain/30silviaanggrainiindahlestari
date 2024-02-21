<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengajar - Tryout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('guru.index') }}">GURU</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('mapel.index') }}">MAPEL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('pengajar.index') }}">PENGAJAR</a>
              </li>
          </div>
        </div>
      </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('pengajar.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PENGAJAR</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">GURU</th>
                                <th scope="col">MAPEL</th>
                                <th scope="col">KELAS</th>
                                <th scope="col">JAM PELAJARAN</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($pengajar as $index => $pengajar)
                                <tr>
                                    <td>{{ $pengajar->guru->nama }}</td>
                                    <td>{{ $pengajar->mapel->nama_mapel}}</td>
                                    <td>{{ $pengajar->kelas }}</td>
                                    <td>{{ $pengajar->jam_pelajaran }}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pengajar.destroy', $pengajar->id) }}" method="POST">
                                            <a href="{{ route('pengajar.edit', $pengajar->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Pengajar belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>

</body>
</html>
