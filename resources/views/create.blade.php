<x-navbar></x-navbar>

<form action="{{ route('siswa.store') }}" method="post">
  @csrf
  <div class="form-group">
    <label>NIS</label>
    <input type="number" class="form-control" name="nis">
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control" name="alamat">
  </div>
  <div class="form-group">
    <label>Sekolah</label>
    <select class="form-control" name="sekolah_id">
      @foreach ($sekolah as $item)
        <option value="{{ $item->id }}">{{ $item->nama_sekolah }}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<x-footer></x-footer>
