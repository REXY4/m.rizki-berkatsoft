@extends('layouts.post')

@section('content')
    
        <div class="container mt-5">
          <div class="row">
      
      <form class="m-3" action="{{ route('post.store')}}" method="post" enctype="multipart/form-data" >
            @csrf

       
            <div class="mb-3">
                <label for="formFile" class="form-label">Insert image..</label>
                <input name="image" class="form-control" type="file" id="formFile">
            </div>
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
           
            <select name="category" class="form-select mb-3" aria-label="Default select example">
                <option selected>Category</option>
                <option value="Software">Sofware</option>
                <option value="Books">Books</option>
                <option value="Electronik">Electronik</option>
              </select>
              @error('category')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Name Product</span>
                <input name="name"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>

              @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Stock</span>
                <input name="stock"  type="text" class="form-control" aria-label="Sizing example input" placeholder="0" aria-describedby="inputGroup-sizing-sm">
              </div>
              @error('stock')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Price</span>
                <span class="input-group-text" id="inputGroup-sizing-sm">Rp.</span>
                <input name="price"  type="text" class="form-control" aria-label="Sizing example input" placeholder="0" aria-describedby="inputGroup-sizing-sm">
              </div>

              @error('price')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

              <div class="input-group">
                <span class="input-group-text">Description</span>
                <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
              </div>

              @error('description')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              
              <div class="input-groub m-3">
                    <button type="submit" class="btn btn-info">Add</button>
              </div>

        </form>
    </div>

</div>




@endsection