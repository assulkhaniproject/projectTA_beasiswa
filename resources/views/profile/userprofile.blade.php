@extends('layouts.master')



@section('content')

<div class="content">
        <!-- menampilkan pesan -->
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
    <title>
    Beasiswa PHB | Data User Profile
    </title>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                  <!-- btn tambah data -->
              <div class="float-right">
                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data
                    </button>
               </div>
               <!-- table data user profile -->
                <h4 class="card-title"> Data User Profile </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Nama</th>
                      <th>Program Study</th>
                    </thead>
                    <tbody>
                        <!-- menampilkan data -->
                        @foreach($data_userprofile as $userprofile)
                        <tr>
                            <td>{{$userprofile -> nama}}</td>
                            <td>{{$userprofile -> program_study}}</td>
                            <td><a href="/userprofile/{{$userprofile->id}}/edit" class="btn btn-outline-warning btn-sm">Edit</td>
                            <td><a href="/userprofile/{{$userprofile->id}}/delete" class="btn btn-outline-danger btn-sm"
                            onClick="return confirm('Apakah Yakin Akan DiHapus ?')">Delete</td>
                        </tr>
                        @endforeach
                        <!-- end menampilkan data -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- end table datauser profile -->
          <!-- Modal Tambah Data Profile -->
             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="/userprofile/create" method="POST">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Admin</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Program Study</label>
                                <select name="program_study" class="form-control" id="exampleFormControlSelect1">
                                <option>DIII Teknik Elektro</option>
                                <option>DIII Teknik Mesin</option>
                                <option>DIII Teknik Design Komunikasi Visual</option>
                                <option>DIII Akuntansi</option>
                                <option>DIII Teknik Komputer</option>
                                <option>DIII Kebidanan</option>
                                <option>DIII Farmasi</option>
                                <option>DIII Perhotelan</option>
                                <option>DIV Teknik Informatika</option>
                                <option>DIV Akuntansi Sektor Publik</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-warning btn-sm" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-outline-primary btn-sm">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end modal tambah data -->
@endsection

@section('content1')

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
            <div class="row">
                <div class="col-6">
                    <h2>Data User Profile</h2>
                </div>
                <div class="col-6">
                    <!-- Button trigger modal -->
                    <div class="float-right">
                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data
                    </button>
                    </div>
                    </div>
                    <table class="table table-hover">
                        <tr>
                            <th>Nama</th>
                            <th>Program Study</th>
                            <th>Aksi</th>
                        </tr>

                        <!-- Menampilkan data pada table -->
                        @foreach($data_userprofile as $userprofile)
                        <tr>
                            <td>{{$userprofile -> nama}}</td>
                            <td>{{$userprofile -> program_study}}</td>
                            <td><a href="/userprofile/{{$userprofile->id}}/edit" class="btn btn-outline-warning btn-sm">Edit</td>
                            <td><a href="/userprofile/{{$userprofile->id}}/delete" class="btn btn-outline-danger btn-sm"
                            onClick="return confirm('Apakah Yakin Akan DiHapus ?')">Delete</td>
                        </tr>
                        @endforeach
                    </table>        
            </div>
        </div>
        <!-- Modal Tambah Data Profile -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="/userprofile/create" method="POST">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Admin</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Program Study</label>
                                <select name="program_study" class="form-control" id="exampleFormControlSelect1">
                                <option>DIV Teknik Informatika</option>
                                <option>DIII Teknik Komputer</option>
                                <option>DIII Akuntansi</option>
                                <option>DIII Kebidanan</option>
                                <option>DIII Farmasi</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-outline-primary btn-sm">Save</button>
                        </form>
                        </div>
                        </div>
                    </div>
@endsection