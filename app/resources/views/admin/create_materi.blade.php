<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/create_materi.css') }}" />
    
    <title>Document</title>
</head>
<body>
    <header>Simpulilmu</header>
    <div class="content">
        <h2>Menambahkan Materi</h2>
        <form action="{{ route('admin.store_materi') }}" method="POST">
        @csrf 
        <div class="email">
        <label>Pelajaran:</label>
            <select name="pelajaran_id" required>
                @foreach ($pelajaran as $p)
                    <option value="{{ $p->id }}">{{ $p->nama_pelajaran }}</option>
                @endforeach
            </select>
        </div>
        <div class="password">
        <label>judul materi:</label>
            <input type="text" name="judul_materi" required>
        </div>
        <div class="password">
        <label>Isi materi:</label>
            <input type="text" name="isi_materi" required>
        </div>
        <button  class="btn-login" type="submit" fdprocessedid="zxe53" style="font-weight:700;">
                Simpan
              </button>
        </form>
    
    
    </div>
    
    
</body>
</html>


