@extends("admin.master");

@include("admin.navbar");

<div id="layoutSidenav_content">
    <main>
        <div class="card bg-light">
        <div class="card-body">
            <h3 class="card-title">Add Product</h3>
        </div>
        </div>
    <br>
    <div class="card bg-light">
      <div class="card-body">

        <form method="POST" action="{{route('product/store')}}" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label class="form-label" for="name">Name Item: </label>
            <input class="form-control" type="text" name="name">
            @error('name')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
            @enderror
          </div>

          <div class="form-group">
            <label class="form-label" for="image">Image Item: </label>
            <input class="form-control" type="file" name="image" >
            @error('image')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
            @enderror
          </div>

          <div class="form-group">
            <label class="form-label" for="harga">Price: </label>
            <input class="form-control" type="number" name="price" id="harga" value="1000">
          </div>
          <div class="form-group">
            <label class="form-label" for="stok">Stock: </label>
            <input class="form-control" type="number" name="stock" id="stok" value="1">
          </div>
          <br>
          <div class="form-group">
            <label class="form-label" for="category">Category Product</label>
            <select name="category">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label class="form-label" for="harga">Description: </label>
            <input class="form-control" type="text" name="description" id="decription">
            @error('description')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
            @enderror
          </div>
          <br>
          <div class="form-group">
            <button type="submit" style="text-align: center;" class="btn btn-primary" name="databutton">Add</button>
          </div>
        </form>
      </div>
    </div>
    </main>
  </div>
