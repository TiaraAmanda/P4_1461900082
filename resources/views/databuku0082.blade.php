<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <title>Tiara Rizky Amanda Putri</title>
</head>
<body>
  <header style="    background-color: #508abb;height: 60px;">
    <div class="main"></div>
    <ul class="active">
      <li><a href="/index">Home</a>
        <li><a href="/databuku">DataBuku</li></a>
          <li><a href="/rakbuku">RakBuku</li></a>
              <li><a href="/user">User</li></a>
    </ul>
  </header>

              <div class="hero-content" style="margin-left: 100px;margin-right: 100px;">
                <br><br>
                  <h1 style="font-size: 20px;">Data Buku</h1><br> 
                  <button>TAMBAH DATA</button>
                  <br>
  <table class="data-table" style="margin-left:5px;width: 1150px;margin-top: 10px;">
    <thead>
      <tr>
        <th>ID</th>
        <th>JUDUL</th>
        <th>TAHUN TERBIT</th>
        <th>ACTION</th>
      </tr>
    </thead>
    @foreach ($item as $key => $i)
    <tbody><tr>
          <td><center>{{$key+1}}</center></td>
          <td>{{ $i->judul}}</td>
          <td>{{ $i->tahun_terbit}}</td>
          
          <td><center>
            <button>EDIT</button>
            <button>HAPUS</button>
          </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    </tfoot>
  </table>
              </div>
        </div>   
</body>
</html>