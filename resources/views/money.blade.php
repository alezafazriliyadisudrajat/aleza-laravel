<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Tabungan</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Data Money</h1>
    <div class="container">
        
        @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
        @endif
    
        <table class="table">
    <thead>
        
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nis</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Rayon</th>
            <th scope="col">Money</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no =1;
        @endphp
        
        <?php $no = 1;?>
        @foreach ($data as $row)
        <tr class="table-info">
            <th scope="row">{{ $no++ }}</th>
            <td class="table-info">{{ $row->nis }}</td>
            <td class="table-info">{{ $row->nama }}</td>
            <td class="table-info">{{ $row->rayon }}</td>
            <td class="table-info">Rp. {{ number_format($row->uang,2,",",".") }}</td>
            <td>
                <form action="{{ route('hapusdata', $row->id) }}" method="POST">
                    @csrf
                    <a href="/tampildata/{{ $row->id }}" type="button" class="btn btn-outline-success">Edit</a>
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </td>
        </tr>  
        @endforeach
    </div>

    <footer class="mb-3">
        <a href="{{ route('form') }}" class="btn btn-success">Add now</a>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>