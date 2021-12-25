@extends('Rafly_app')

@section('content')
    <div class="mt-5">
        @if (count($vaccine) >= 1)
            <h3 class="text-center mb-3">List Vaccine</h3>
            <a class="btn btn-primary mb-3" href="/vaccine/create" role="button">Add Vaccine</a>
            <table class="table table-bordered table-responsive-lg" style="background-color: #6b8bff">
                <tr>
                    <th class="text-center">#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($vaccine as $vaccine)
                <?php $i = 0 ?>
                <tr>
                    <td class="text-center"><?= $i++?></td>
                    <td>{{ $vaccine->name }}</td>
                    <td>Rp {{ $vaccine->price }}</td>
                    <td class="row g-3">
                        <div class="col-auto">
                            <a class="btn btn-warning" href="/vaccine/{{ $vaccine-> id }}/edit">Edit</a>
                        </div>
                        <div class="col-auto">
                            <form action="/vaccine/{{ $vaccine->id }}" method="POST">        
                            @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            
                            </form>
                        </div
                    </td>
                </tr>
                @endforeach
            </table>            
        @else
            <div class="text-center">
                <div class="text-secondary">There is no data....</div>
                <a class="btn btn-primary mt-3" href="/vaccine/create" role="button">Add Vaccine</a>
            </div>           
        @endif
    </div>
@endsection