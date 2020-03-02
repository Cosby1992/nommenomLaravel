@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a new recipie</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('meals.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Meal Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>

          <div class="form-group">
              <label for="origin_country">Country of Origin:</label>
              <input type="text" class="form-control" name="origin_country"/>
          </div>
          <div class="form-group">
              <label for="category">Category:</label>
              <input type="text" class="form-control" name="category"/>
          </div>
          <div class="form-group">
              <label for="image">Image:</label>
              <input type="file" class="form-control" name="image"/>
          </div>                       
          <button type="submit" class="btn btn-primary-outline">Add recipie</button>
      </form>
  </div>
</div>
</div>
@endsection