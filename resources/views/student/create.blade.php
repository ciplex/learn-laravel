@extends('layouts.default')

@section('title', 'Tambah Siswa')

@section('content')


<form class="container" method="POST" action="{{ route('student.store') }}">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="input">Nama</label>
    <input type="text" class="form-control"  name="name" placeholder="Enter Name">
        @if($errors->first('name'))
          <p style="color: red">{{ $errors->first('name') }}</p>
        @endif
  </div>
  <div class="form-group">
    <label for="input">Alamat</label>
    <textarea class="form-control" name="address"  rows="3" placeholder="Enter Address"></textarea>
    @if($errors->first('address'))
          <p style="color: red">{{ $errors->first('address') }}</p>
        @endif
  </div>
  <div class="form-group">
    <label for="input">Umur</label>
    <input type="text" class="form-control"  name="age" placeholder="Enter Age">
  </div>
  @if($errors->first('age'))
          <p style="color: red">{{ $errors->first('age') }}</p>
        @endif
  <div class="form-group">
    <label for="input">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Enter Email">
  </div>
  @if($errors->first('email'))
          <p style="color: red">{{ $errors->first('email') }}</p>
        @endif
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</br>
    @if($errors->any())
      <div class="alert alert-danger mt-3 ml-3">
    <ul>
      @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
      @endforeach
</ul>

</div>

@endif

@stop
