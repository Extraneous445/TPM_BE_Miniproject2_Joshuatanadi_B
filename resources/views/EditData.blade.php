@extends('Template')

@section('Title', 'Edit Car')

@section('body')
<div class= "m-5">
    <form action="/update-car/{{$car->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Merek Mobil</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          name="Merek_Mobil" value="{{$car->Merek_Mobil}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Jenis Mobil</label>
          <input type="text" class="form-control" id="exampleInputPassword1"
          name="Jenis_Mobil" value="{{$car->Jenis_Mobil}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="Tahun_Terbit" value="{{$car->Tahun_Terbit}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input type="text" class="form-control" id="exampleInputPassword1"
            name="Harga" value="{{$car->Harga}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">image</label>
            <input type="file" class="form-control" id="exampleInputPassword1"
            name="image" value="{{$car->image}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
