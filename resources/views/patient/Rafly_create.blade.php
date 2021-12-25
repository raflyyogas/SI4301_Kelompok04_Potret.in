@extends('Rafly_app')
@section('content')
    <div class="container">
        <h3 class="text-center">Input {{ $vaccine->name }}</h3>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/patient" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3" >
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control" id="vaksin_id" name="vaksin_id" value="{{ $vaccine->id }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Patient Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Alamat</label>
                        <input type="alamat" class="form-control" id="alamat" name="alamat">
                    </div>

                    <label class="custom-file-input mb-2" for="customFile">Choose IMG</label>
                    <div class="custom-file" style="margin-top:5px; margin-bottom:30px">    
                        <input type="file" class="custom-file-input" id="img_path" name="img_path">
                    </div>
                    
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No. Hp</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp">
                    </div>
                    
                    <div style="margin-top:30px">
                        <button type="subtmi" class="btn btn-primary"> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection