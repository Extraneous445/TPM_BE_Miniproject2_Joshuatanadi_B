@extends('Template')

@section('Title', 'Welcome')


@section('body')

@foreach ($cars as $car)
<div class="m-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div class="text-center">
                    <h5 class="card-title">{{$car->Merek_Mobil}}</h5>
                </div>
                <img src="{{asset('/public/storage/images'.$car->image)}}" class="card-img-top" alt="...">
                <p class="card-text">Jenis Mobil    :   {{$car->Jenis_Mobil}}</p>
                <p class="card-text">Tahun Terbit   :   {{$car->Tahun_Terbit}}</p>
                <p class="card-text">Harga          :   RP {{$car->Harga}}</p>
                <a href="{{route('show', $car->id)}}" class="btn btn-primary">Go To Detail</a>
                <a href="{{route('edit', $car->id)}}" class="btn btn-danger">Edit</a>
                <form action="/delete-car/{{$car->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-success">Delete</a>
                </form>
            </div>
        </div>
    </div>
@endforeach

@endsection
