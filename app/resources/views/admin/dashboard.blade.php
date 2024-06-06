
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/dashboard.css') }}" />
    <title>Document</title>
</head>
<body>
    <header>Simpulilmu</header>
    <div class="content">
        <h2>Welcome</h2>
        <p>Admin Dashboard</p>
    <div class="Jenjang">
        <div class="X">
            
              <a href="{{ route('admin.create_pelajaran') }}" class="btn-X" style="font-weight:700; text-decoration: none;">Tambah Pelajaran</a>
        </div>
        <div class="XI">
            
              <a href="{{ route('admin.create_materi') }}" class="btn-XI" style="font-weight:700; text-decoration: none;">Tambah Materi</a>
        </div>
       
       
    </div>
    </div> 
</body> 
</html>


