@extends('Rafly_app')

@section('content')
    <div class="mt-5">
        @if (count($patient) >=1 )
            <h3 class="text-center mb-3">List Patient</h3>
            <a class="btn btn-primary mb-3" href="/patient/listVaccine" role="button">Add patient</a>
            <table class="table table-bordered table-responsive-lg" style="background-color: #6b8bff">
                <tr>
                    <th class="text-center">#</th>
                    <th>Vaccine</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th width="350px">Alamat</th>
                    <th>No Hp</th>
                    <th>Action</th>
                </tr>
                @foreach ($patient as $patient)
                <?php $i = 0 ?>
                <tr>
                    <td class="text-center"><?=++$i?></td>
                    <td>{{ $patient->vaccine_id }}</td>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->nik }}</td>
                    <td>{{ $patient->alamat }}</td>
                    <td>{{ $patient->no_hp }}</td>
                    <td class="row g-3">
                        <div class="col-auto">
                            <a class="btn btn-warning" href="/patient/{{ $patient->id }}/edit">Edit</a>
                        </div>
                        <div class="col-auto">
                            <form action="/patient/{{ $patient->id }}" method="POST">        
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
                <a class="btn btn-primary mt-3" href="/patient/listVaccine" role="button">Add Pantient</a>
            </div> 
        @endif
    </div>
@endsection