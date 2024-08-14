<x-navbar></x-navbar>

<h1>Data Siswa</h1>
{{-- <a href="{{ url('siswa/create') }}" class="btn btn-primary">Tambah Data URL</a> --}}
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



    @foreach ($data as $item)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $item->nis }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->alamat }}</td>

        <td class="d-flex gap-1"><a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-success">Edit</a>
          <form action="{{ route('siswa.destroy', $item->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>

      </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Data</a>



<x-footer></x-footer>
