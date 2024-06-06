<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/create_pelajaran.css') }}" />
   
    <title>Document</title>
</head>
<body>
    <header>Simpulilmu</header>
    <div class="content">
        <h2>Menambahkan Pelajaran</h2>
        <form action="{{ route('admin.store_pelajaran') }}" method="POST" enctype="multipart/form-data">
        @csrf  
        <div class="email">
        <label>Jenjang:</label>
            <select name="jenjang_id" required>
                @foreach ($jenjang as $j)
                    <option value="{{ $j->id }}">{{ $j->kelas }}</option> 
                @endforeach
            </select>
        </div>
        <div class="password">
        <label>Nama Pelajaran:</label>
            <input type="text" name="nama_pelajaran" required>
        </div>
        <div class="password">
        <label>Gambar Pelajaran:</label>
            <input type="file" name="gambar" required>
        </div>
        <button  class="btn-login" type="submit" fdprocessedid="zxe53" style="font-weight:700;">
                Simpan
              </button>
        </form>
    
    
    </div>
    
    
</body>
</html>

