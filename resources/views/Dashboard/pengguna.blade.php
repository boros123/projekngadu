@extends('Layouts.Dashboard')
@section('konten')

<table class="table table-striped table-hovers">
    <thead>
      <tr>
        <th>Role</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No.telp</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      <tr>
        <td>Otto</td>
        <td>Otto</td>
        <td>Adzra</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa-sharp fa-solid fa-eye"></i>
          <button type="button" class="btn btn-danger ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-sharp fa-solid fa-trash"></i>
        </td>
      </tr>
      <tr>
        <td>Otto</td>
        <td>Otto</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Thornton</td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa-sharp fa-solid fa-eye"></i>
          <button type="button" class="btn btn-danger ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-sharp fa-solid fa-trash"></i>
        </td>
      </tr>
      <tr>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Larry the Bird</td>
        <td>Thornton</td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa-sharp fa-solid fa-eye"></i>
          <button type="button" class="btn btn-danger ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-sharp fa-solid fa-trash"></i>
        </button></td>
      </tr>
    </tbody>
  </table>

  
  @include('Layouts.modal')



@endsection
 
