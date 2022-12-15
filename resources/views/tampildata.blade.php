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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <body style="background:'#fad2d2';">
    <div class="form-check form-switch d-flex justify-content-center mt-5">
        <input class="form-check-input" type="checkbox" role="switch" id="switch" checked="" onchange="switchMode()">
        <label class="form-check-label ms-3" style="color: rgb(255, 255, 255);" for="flexSwitchCheckChecked" id="label"></label>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script>
        function switchMode() {
            let body = document.querySelector('body');
            let switchEl = document.querySelector('#switch');
            let label = document.querySelector('#label');
            if (switchEl.checked) {
                body.style.background = '#008B8B';
                label.style.color = '#fff';
            }else {
                body.style.background = '#fff';
                label.style.color = '#fad2d2';
            }
        }
    </script>
        <li class="nav-item">
    <h1 class="text-center mb-4">Tabungan</h1>
    <div class="container">
    <form action="{{ route('updatedata', $data->id) }}" method="POST">
        @csrf
    <div class="row">
        <div class="col">
        <label for="">nis</label>
          <input type="text" class="form-control" maxlength="8" minlength="8" name="nis" placeholder="12******" value="{{ $data->nis }}">
        </div>
        <div class="col">
         <label for="">nama lengkap</label>
            <input type="text" class="form-control" placeholder="aleza" name="nama" value="{{ $data->nama }}">
        </div>
        <div class="col">Rayon:
            <select class="form-control mt-2" name="rayon" id="rayon" value="{{ $data->region }}">
                @for ($i = 1; $i <= 3; $i++)
                <option @if($data->rayon == 'Cibedug '.$i) {{ 'selected' }} @endif>Cibedug {{ $i }}</option>
                @endfor
                @for ($i = 1; $i <= 5; $i++)
                <option @if($data->rayon == 'Ciawi '.$i) {{ 'selected' }} @endif>Ciawi {{ $i }}</option>
                @endfor
                @for ($i = 1; $i <= 7; $i++)
                <option @if($data->rayon == 'Cicurug '.$i) {{ 'selected' }} @endif>Cicurug {{ $i }}</option>
                @endfor
                @for ($i = 1; $i <= 6; $i++)
                <option @if($data->rayon == 'Cisarua '.$i) {{ 'selected' }} @endif>Cisarua {{ $i }}</option>
                @endfor
                @for ($i = 1; $i <= 5; $i++)
                <option @if($data->rayon == 'tajur '.$i) {{ 'selected' }} @endif>Tajur {{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="col">
            <label for="">Uang</label>
               <input type="text" class="form-control" placeholder="your money" name="uang" value="{{ $data->uang }}">
           </div>
           <div class="col">action:
            <select class="form-control mt-2" name="action" id="action">
                <option value="add">Add Money</option>
                <option value="take">Take Money</option>
            </select>
        </div>
        <br>
        <div class="col">
            <input class= "btn btn-primary mt-4" type="submit" value="Kirim">
        </div>
    </form>

    </div>
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
