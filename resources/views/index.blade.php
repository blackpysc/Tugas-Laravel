<x-navbar></x-navbar>

<h1>Data Siswa</h1>
{{-- <a href="{{ url('siswa/create') }}" class="btn btn-primary">Tambah Data URL</a> --}}
{{-- <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Data</a> --}}
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>

    {{-- @dd($data); --}}

    {{-- @foreach ($data as $item)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $item->nis }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->alamat }}</td>
      </tr>
    @endforeach --}}
  </tbody>
</table>


<x-footer></x-footer>
