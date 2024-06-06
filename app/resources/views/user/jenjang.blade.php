
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/jenjang.css') }}" />
    <title>Document</title>
</head>
<body>
    <header>Simpulilmu</header>
    <div class="content">
        <h2>Welcome</h2>
        <p>Pilih Jenjang Sekolah</p>
    <div class="Jenjang">
        <div class="X">
            
              <a href="{{ route('pelajaran.index', 'kelas10') }}" class="btn-X" style="font-weight:700; text-decoration: none;">X</a>
        </div>
        <div class="XI">
            
              <a href="{{ route('pelajaran.index', 'kelas11') }}" class="btn-XI" style="font-weight:700; text-decoration: none;">XI</a>
        </div>
        <div class="XII">
            
              <a href="{{ route('pelajaran.index', 'kelas12') }}" class="btn-XII" style="font-weight:700; text-decoration: none;">XII</a>
        </div>
       
    </div>
    </div> 
</body> 
</html>
