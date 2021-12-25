@extends('Rafly_app')
@section('content')
    <div class="container">
        <h3 class="text-center">Edit Vaccine</h3>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/vaccine/{{ $vaccine -> id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method ('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Vaccine Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $vaccine -> name }}">
                    </div>

                    <label for="price">Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $vaccine -> price }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea class="form-control" id="desc" rows="3" id="Description" name="description" value="{{ $vaccine -> description }}"></textarea>
                    </div>

                    <label class="custom-file-input" for="customFile">Choose IMG</label>
                    <div class="custom-file" style="margin-top:5px; margin-bottom:30px">    
                        <input type="file" class="custom-file-input" id="img_path" name="img_path">
                    </div>
                    
                    <div style="margin-top:30px">
                        <button type="subtmi" class="btn btn-primary"> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection