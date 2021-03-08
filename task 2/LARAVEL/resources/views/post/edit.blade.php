<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add product
        </h2>
    </x-slot>

<div class="col">
    <div class="card">
        <form action="{{url('post-update',$products->id)}}" method="post" enctype="multipart/form-data" >
            @csrf

            
            <div class="mb-3">
                <label for="formFile" class="form-label">Insert image..</label>
                <input name="image" class="form-control" type="file" id="formFile" value="{{$products->image}}">
            </div>
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
           
            <select name="category" class="form-select" aria-label="Default select example">
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
                <input name="name" value="{{$products->name}}"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>

              @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Stock</span>
                <input name="stock"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              @error('stock')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Price</span>
                <input name="price"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
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
              
              <div class="input-groub">
                    <button type="submit" class="btn btn-info">Add</button>
              </div>

        </form>
    </div>

</div>

</x-app-layout>