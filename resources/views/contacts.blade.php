@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Contact Us</h2>
</div>

<form>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputname" placeholders="Nama">
    <label for="inputname">Nama</label>
  </div>
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="inputemail" placeholders="Email">
    <label for="inputemail">Email</label>
  </div>
  <div class="form-floating mb-3">
    <textarea class="form-control" placeholders="Tinggalkan pesan di sini!" id="floatingTextArea2" style="height: 100px"></textarea>
    <label for="floatingTextArea2">Pesan</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection