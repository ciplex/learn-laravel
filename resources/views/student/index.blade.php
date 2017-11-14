@extends('layouts.default')

@section('title', 'Student')

@section('content')

<h1>Data Siswa</h1>
<form class="form-inline my-2 my-lg-0 ml-auto">
      <a href="{{route('student.create')}}" class="btn btn-outline-primary my-2 my-sm-0">Tambah Data</a>
    </form>
<table class="table table-hover table-striped table-dark">
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Nama</th>
    <th scope="col">Alamat</th>
    <th scope="col">Umur</th>
    <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->address }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->email }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop