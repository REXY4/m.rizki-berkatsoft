@extends('layouts.user')

@section('content')
        <div class="container">
            
        <div class="container-fluid">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('slide1.png')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            
        </div>

        <div class="container">
              
            <div class="row mt-5">
                <h1>Product</h1>


                @foreach ($product as $item)
             
                <div class="col-md-3 m-3">
                  <div class="card" style="width: 18rem;">
                      <img src="{{asset('img/'.$item->image)}}" class="card-img-top" width="150px" height="150px">
                      <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <h5 class="card-title">stock :{{$item->stock}}</h5>
                        <h5 class="card-title">price :{{$item->price}}</h5>
                        <p class="card-text">{{$item->description}}</p>
                        
                     
                          <a href="/sale/sales/{{$item->id}}"  type="submit" class="btn btn-primary">Buy</a>
                        
                      </div>
                    </div>
                           
               
                </div>
                @endforeach
             
            </div>
        </div>
        </div>
@endsection
