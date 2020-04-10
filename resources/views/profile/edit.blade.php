@extends('layouts.master')

@section('content')
        <div class="content">
        <title>Beasiswa PHB | Edit User Profile</title>
        
        
    <div class="col-md-12">
        <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Edit Profile</h5>
              </div>
                <div class="card-body">
                    <form action="/userprofile/{{{$userprofile->id}}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                value="{{$userprofile->nama}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Program Study</label>
                                <select name="program_study" class="form-control" id="exampleFormControlSelect1">
                                <option value="DIII Teknik Elektro" @if($userprofile->program_study == 'DIII Teknik Elektro') selected @endif>DIII Teknik Elektro</option>
                                <option value="DIII Teknik Mesin" @if($userprofile->program_study == 'DIII Teknik Mesin') selected @endif>DIII Teknik Mesin</option>
                                <option value="DIII Teknik Design Komunikasi Visual" @if($userprofile->program_study == 'DIII Teknik Design Komunikasi Visual') selected @endif>DIII Teknik Design Komunikasi Visual</option>
                                <option value="DIII Akuntansi" @if($userprofile->program_study == 'DIII Akuntansi') selected @endif>DIII Akuntansi</option>
                                <option value="DIII Teknik Komputer" @if($userprofile->program_study == 'DIII Teknik Komputer') selected @endif>DIII Teknik Komputer</option>
                                <option value="DIII Kebidanan" @if($userprofile->program_study == 'DIII Kebidanan') selected @endif>DIII Kebidanan</option>
                                <option value="DIII Farmasi" @if($userprofile->program_study == 'DIII Farmasi') selected @endif>DIII Farmasi</option>
                                <option value="DIII Perhotelan" @if($userprofile->program_study == 'DIII Perhotelan') selected @endif>DIII Perhotelan</option>
                                <option value="DIV Teknik Informatika" @if($userprofile->program_study == 'DIV Teknik Informatika') selected @endif>DIV Teknik Informatika</option>
                                <option value="DIV Akuntansi Sektor Publik" @if($userprofile->program_study == 'DIV Akuntansi Sektor Publik') selected @endif>DIV Akuntansi Sektor Publik</option>    
                            </select>
                            </div>

                                <span style="float:right">
                                    <button type="submit" class="btn btn-outline-warning btn-sm">Update</button>
                                    <button type="cancel" class="btn btn-outline-secondary btn-sm">Cancel</button>
                                    </span>
                            </form>
                        </div>
                    </div>
                </div>
             </div>

@endsection