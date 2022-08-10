<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <style>
        @page {
            size: A4;
            margin: 20px 1.5cm;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            /* ... the rest of the rules ... */
        }
        </style>
<header>
    <div class="d-flex justify-content-center py-3" style="border-bottom: 1px solid">
        <div class="" style="margin: 0 20px" >
            <img src="{{ asset('darulihsan.png') }}" height="90px" alt="">
        </div>
        <div class=" d-flex justify-content-center" >
            <div class="align-self-center" style="width: 100%" >
                <h4 style="font-family: Times New Roman, Times, serif;">
                    <b>YAYASAN DARUL IHSAN TGK. H. HASAN KRUENG KALEE</b>
                </h4>
               
                <h4 >
                    DAYAH DARUL IHSAN TGK. H. HASAN KRUENG KALEE</h4>
                <h5>

                </h5>
            </div>
        </div>
    </div>
</header>
<div class="mt-5">
    <h5>Daftar Siswa yg Lulus Seleksi </h5>
    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>No. Pendaftaran</th>
                <th>Nama Lengkap</th>
                <th>Nama Ayah</th>
                <th style="max-width: 100px">Alamat</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($siswas as $siswa)
                <tr>
                    <td>{{ $nomor++ }}</td>
                    <td style="width: 120px">{{ "SB-".str_pad($siswa->siswas->id ,3,0,STR_PAD_LEFT)}}</td>
                    <td>{{ $siswa->siswas->NamaLengkap }}</td>
                    <td>{{ $siswa->siswas->NamaAyah }}</td>
                    <td style="max-width: 100px ;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">{{ $siswa->siswas->Alamat }}</td>
                </tr>
            @empty
                
            @endforelse
        </tbody>
    </table>
</div>
    
</body>
</html>