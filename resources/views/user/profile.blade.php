@extends('base')
@section('content')

    <div class="container ms-5 mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="{{ asset('images/profile.jpg') }}">
                    <span class="font-weight-bold">{{ $cust -> nama }}</span><span class="text-black-50">{{ $cust -> email }}</span><span> </span>
                    <a href="{{ route('Logout') }}" class="btn btn-danger" type="button">Keluar</a>
                </div>
            </div>
            <div class="col-md-7 ">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    @if (session('BerhasilUpdate'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ (session('BerhasilUpdate')) }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                
                    @if (session('WrongPass'))
                        <div class="alert alert-failed alert-dismissible fade show" role="alert">
                        {{ (session('WrongPass')) }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                
                    @if (session('NotSame'))
                        <div class="alert alert-failed alert-dismissible fade show" role="alert">
                        {{ (session('WrongPass')) }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form action="/profile" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="col-md-6" hidden>
                            <label class="labels">ID</label>
                            <input type="text" class="form-control" placeholder="ID" name="id" value="{{ $cust->id }}" readonly>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Nama</label><input type="text" class="form-control" placeholder="Nama" name="name" value="{{ $cust->nama }}" required></div>
                            <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" placeholder="Username" name="username" value="{{ $cust->username }}" ></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Email</label>
                                <input type="text" class="form-control mb-3" placeholder="Email" name="email" value="{{ $cust->email }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">No HP</label>
                                <input type="number" class="form-control mb-3" placeholder="No Handphone" name="nomor" value="{{ $cust->noHp }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Alamat</label>
                                <input type="text" class="form-control mb-3" placeholder="Alamat Anda" name="alamat" value="{{ $cust->alamat }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name ="password">
                            </div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Update Profile</button></div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

@endsection