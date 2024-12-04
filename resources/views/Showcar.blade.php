@extends('Template')

@section('Title', 'Show Car')

@section('body')
<div class=m-5>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Jenis Mobil    : {{$car->Jenis_Mobil}}</h5>
            <p class="card-text">Merek Mobil      : {{$car->Merek_Mobil}}</p>
            <p class="card-text">Tahun_Terbit     : {{$car->Tahun_Terbit}}</p>
            <p class="card-text">Harga            : {{$car->Harga}}</p>
        </div>
    </div>
</div>
@endsection
