@extends('Template')

@section('Title', 'Input Data')

@section('body')
<div class="m-5">
    <h3 class="text-center">Input Data Mobil</h3>
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Merek Mobil</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          name="Merek_Mobil">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Jenis Mobil</label>
          <input type="text" class="form-control" id="exampleInputPassword1"
          name="Jenis_Mobil">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="Tahun_Terbit">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input type="text" class="form-control" id="exampleInputPassword1"
            name="Harga">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">image</label>
            <input type="file" class="form-control" id="exampleInputPassword1"
            name="image" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection

