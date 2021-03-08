@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="{{route('post.create')}}" class="btn btn-outline-success">Add product</a>
                        </div>
                      
                    </div>
        
                    <div class="row">
        
               
                            
                        
                        <div class="col">
                            <table class="table">
                                <thead>
                                  <tr>
                                   
                                    <th scope="col">image</th>
                                    <th scope="col">product category</th>
                                    <th scope="col">Product name</th>
                                    <th scope="col">stock</th>
                                    <th scope="col">price</th>
                                    <th scope="col">description</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
        
                                @foreach ($products as $p)
                                    
                                
                                  <tr>
                                    
                                    <td><img src="{{asset('img/'.$p->image)}}" alt="" width="100px" height="50px"></td>
                                    <td>{{$p->category}}</td>
                                    <td>{{$p->name}}</td>
                                    <td>{{$p->stock}}</td>
                                    <td>{{$p->price}}</td>
                                    <td>{{$p->description}}</td>
                                    <td>
                                        <a href="/post/edit/{{$p->id}}" class="btn btn-primary">edit</a>
                                       
                                    </td>
                                    <td>
                                        <form action="{{url('/post/destroy',['id' => $p->id])}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger">
                                                delete
                                            </button>
                                        </form>
                                    </td>
        
                                  </tr>
        
                                  @endforeach  
                                
                              </table>
                        </div>
        
                     
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
