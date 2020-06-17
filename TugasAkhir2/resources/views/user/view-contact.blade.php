@extends('FrontLayout.master')
@section('content')
    

    <div class="container-fluid" style="background-color: green">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron jumbotron-fluid" style="background-color: transparent">
                    <div class="container text-center">
                      <h1 class="display-4" style="color: white; font-family: san-serif">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.235211055624!2d106.50916221435071!3d-6.232693262770899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e42074a8f506675%3A0x65b701d0a0141bd2!2sJl.%20Padat%20Karya%2C%20Sukamulya%2C%20Kec.%20Cikupa%2C%20Tangerang%2C%20Banten%2015710!5e0!3m2!1sid!2sid!4v1592376123412!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">            
            <div class="col-md-8">
                <h2>hubungi kami</h2>
                <form action="{{ route('pesan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="pesan"></label>
                        <textarea name="pesan" id="pesan" rows="5" placeholder="Masukkan Pesan" class="form-control" {{ old('pesan') }}></textarea>
                    </div>

                   <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          {{-- untuk name disesuaikan dengan field database --}}
                          <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama" id="nama" name="nama" value="{{ old('nama') }}">
                          @error('nama')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Email</label>
                          {{-- untuk name disesuaikan dengan field database --}}
                          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" id="email" name="email" value="{{ old('email') }}">
                          @error('email')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                     </div>
                   </div>

                    <div class="form-group">
                        <label for="no_hp">No Hanpdhone</label>
                        {{-- untuk name disesuaikan dengan field database --}}
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Masukkan No Hp" id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
                        @error('no_hp')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-success mb-2">KIRIM</button>
                </form>
            </div>
            <div class="col-md-4" style="margin-top: 65px;">
                   @foreach ($contact as $contacts)    
                   <p><img src="https://img.icons8.com/office/20/000000/rectangle-stroked.png"/ class="mr-3">{{ $contacts->alamat }}</p>             
                   <p><img src="https://img.icons8.com/office/20/000000/rectangle-stroked.png"/ class="mr-3">{{ $contacts->no_hp }}</p>
                   <p><img src="https://img.icons8.com/office/20/000000/rectangle-stroked.png"/ class="mr-3">{{ $contacts->email }}</p>
                   @endforeach
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: rgb(2, 173, 2)">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron jumbotron-fluid" style="background-color: transparent">
                    <div class="container text-center mt-5">
                      <h1 class="display-4" style="color: white; font-family: san-serif">Lihat Produk Kami</h1>
                      <button type="button" class="btn btn-outline-light mt-5" style="height: 80px; width: 200px;">Lihat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2352110556335!2d106.5091622143507!3d-6.232693262770896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e42074a8f506675%3A0x65b701d0a0141bd2!2sJl.%20Padat%20Karya%2C%20Sukamulya%2C%20Kec.%20Cikupa%2C%20Tangerang%2C%20Banten%2015710!5e0!3m2!1sid!2sid!4v1592270712846!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> --}}