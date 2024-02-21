<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Guru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $item)
                        <li>
                            {{$item}}
                        </li>
                    @endforeach
                </ul>
            @endif

            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('pengajar.store') }}" method="POST" enctype="multipart/form-data">
                        <a href="{{ route('pengajar.index') }}" class="btn btn-md btn-info mb-3">Kembali</a>
                    <table class="table table-bordered">
                        <thead>
                          <tr>

                            @csrf
                            <div class="form-group mb-3">
                                <label class="font-weight-bold form-label">Guru</label>
                                <select class="from-select col-md-12" name="id_guru" id="guru_id">
                                    <option class="col-md-12" value ="">Select Nama Guru</option>
                                    @foreach ($guru as $item)
                                    <option value="{{$item->id}}">{{$item->nama}} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold form-label">Mapel</label>
                                <select class="from-select col-md-12" name="id_mapel" id="id_mapel">
                                    <option class="col-md-12" value ="">Select Nama Mapel</option>
                                    @foreach ($mapel as $item)
                                    <option value="{{$item->id}}">{{$item->nama_mapel}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">KELAS</label>
                                <div class="mb-3">
                                      <select name="kelas" class="form-select col-md-12" id="exampleDropdown">
                                        <option value=""></option>
                                        <option value="XII-REKAYASA PERANGKAT LUNAK">XII-REKAYASA PERANGKAT LUNAK</option>
                                        <option value="XII-LISTRIK">XII-LISTRIK</option>
                                        <option value="XII-MULTIMEDIA">XII-MULTIMEDIA</option>
                                        <option value="XII-TEKNIK KOMPUTER JARINGAN">XII-TEKNIK KOMPUTER JARINGAN</option>
                                        <option value="XII-MEKATRONIKA">XII-MEKATRONIKA</option>
                                        <option value="XII-TATA BUSANA">XII-TATA BUSANA</option>
                                        <option value="XII-ELEKTRONIKA">XII-ELEKTRONIKA</option>
                                        <option value="XII-OTOTRONIKA">XII-OTOTRONIKA</option>

                                    </select>
                                </div>
                                @error('kelas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jam Pelajaran</label>
                                <div class="mb-3">
                                      <select name="jam_pelajaran" class="form-select col-md-12" id="exampleDropdown">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>

                                    </select>
                                </div>
                                @error('jam_pelajaran')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>




                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>

</script>
</body>
</html>
