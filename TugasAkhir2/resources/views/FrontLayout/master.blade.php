<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>

    <div class="container-fluid" style="background-color: green">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#"><img src="/img/WebABP.png" style="height: 50px" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      @foreach ($contact as $contacts)    
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link" style="color: white" href="#">{{ $contacts->home }}<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" style="color: white" href="#">{{ $contacts->produk }}</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" style="color: white" href="#">{{ $contacts->client }}</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" style="color: white" href="/HalamanContact">{{ $contacts->contact }}</a>
                        </li>
                      </ul>
                      @endforeach
                    </div>
                </nav>
            </div>
        </div>
    </div>

      @yield('content')

    <div class="container-fluid" style="background-color: green"><br><br>
        <div class="row">
            <div class="col-md-3">
                <img src="/img/WebABP.png" alt="" style="height: 150px">
            </div>
            <div class="col-md-3" style="color: white">
                <h2>Address</h2>
                @foreach ($contact as $contacts)    
                <p>{{ $contacts->alamat }}</p>
                <p>{{ $contacts->no_hp }}</p>
                @endforeach
            </div>
            <div class="col-md-3" style="color: white">
                <h2>Menu Utama</h2>
                @foreach ($contact as $contacts)    
                <p>{{ $contacts->produk }}</p>
                <p>{{ $contacts->client }}</p>
                <p>{{ $contacts->contact }}</p>
                @endforeach
            </div>
            <div class="col-md-3" style="color: white">
                <h2>Follow Us</h2>
                <p>Instagram</p>
                <p>Facebook</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center" style="color: white; margin-top: 100px">
                <p>Copyright by Team 1 2020</p>
            </div>
        </div>
    </div>

<script src="{{ asset('bootstrap/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>