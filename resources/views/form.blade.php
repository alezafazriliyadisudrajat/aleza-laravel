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
    <h1 class="text-center mb-4">Tabungan</h1>
    <div class="container">
    <form action="/insertdata" method="POST">
        @csrf
    <div class="row">
        <div class="col">
        <label for="">nis</label>
          <input type="text" class="form-control" maxlength="8" minlength="8" name="nis" placeholder="12******">
        </div>
        <div class="col">
         <label for="">nama lengkap</label>
            <input type="text" class="form-control" placeholder="aleza" name="nama">
        </div>
        <div class="col"> Rayon:
            <select class="form-control mt-2" name="rayon" id="rayon" value="">
                @for ($i = 1; $i <= 3; $i++)
                <option>Cibedug {{ $i }}</option>
                @endfor
                @for ($i = 1; $i <= 5; $i++)
                <option>Ciawi {{ $i }}</option>
                @endfor
                @for ($i = 1; $i <= 7; $i++)
                <option>Cicurug {{ $i }}</option>
                @endfor
                @for ($i = 1; $i <= 6; $i++)
                <option>Cisarua {{ $i }}</option>
                @endfor
                @for ($i = 1; $i <= 5; $i++)
                <option>Tajur {{ $i }}</option>
                @endfor
                </select>
        </div><br>
    </div>
        <input type="text" name="uang" value="0" hidden=0>
        <div class="mt-3" style="height: 20px;">
        <input class= "btn btn-primary" type="submit" value="Kirim">
        </div>
    </form>
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