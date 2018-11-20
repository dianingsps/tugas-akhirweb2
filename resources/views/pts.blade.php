@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>DATA UJIAN PTS</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
					<th>Instansi</th>
                    <th>Jalur</th>
					<th>Biaya</th>
                    <th>Registrasi</th>
                    <th>Penutupan</th>
                    <th>Tes</th>
                    <th>Pengumuman</th>
                    <th>Daftar Ulang</th>
                  </tr>
                </thead>
                <tbody id="myTable">
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
						<td>{{ $d->instansi }}</td>
                        <td>{{ $d->jalur }}</td>
						<td>{{ $d->biaya }}</td>
                        <td>{{ $d->pendaftaran }}</td>
                        <td>{{ $d->penutupan }}</td>
                        <td>{{ $d->tes }}</td>
                        <td>{{ $d->pengumuman }}</td>
                        <td>{{ $d->daftarulang }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection