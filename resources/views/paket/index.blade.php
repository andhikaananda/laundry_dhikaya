@extends('layouts.master')
@section('tittle', 'Hi-Laundry')
@section('content')
<!-- Paket Table -->
<div class = "card card-table-border-none" id = "recent-orders">
    <div class="card-header justify-content-between">
   <h2>Daftar Paket</h2>
   <div class="date-range-report ">
       <span></span>
   </div>
</div>
<div class="card-body pt-0 pb-5">
   <a
       type="button"
       class="btn btn-primary btn-sm mb-3 text-white text-weight-bold"
       data-bs-toggle="modal"
       data-bs-target="#modalinput">
       <i class="fa fa-plus"></i>Tambah Paket</a>
   <table
       class="table card-table table-responsive table-responsive-large"
       style="width:100%">
       <thead>
           <tr>
               <th>No</th>
               <th>Nama Outlet</th>
               <th>Jenis</th>
               <th>Nama Paket</th>
               <th>Harga</th>
               <th class="d-none d-md-table-cell">Updated Date</th>
               <th>Status</th>
               <th></th>
           </tr>
       </thead>
       <tbody>
           <?php $no = 0 ;?>
           @foreach ($items as $item)
           <?php $no++ ;?>
           <tr>
               <td >{{ $no }}</td>
               <td >
                   <a class="text-dark" href="">{{ $item->nama }}</a>
               </td>
               <td >
                   <a class="text-dark" href="">{{ $item->jenis }}</a>
               </td>
               <td >
                   <a class="text-dark" href="">{{ $item->nama_paket }}</a>
               </td>
               <td >
                   <a class="text-dark" href="">{{ $item->harga }}</a>
               </td>
               <td class="d-none d-md-table-cell">{{ $item->updated_at }}</td>
               <td >
                   <span class="badge badge-success">Completed</span>
               </td>
               <td class="text-right">
                   <div class="dropdown show d-inline-block widget-dropdown">
                       <a
                           class="dropdown-toggle icon-burger-mini"
                           href=""
                           role="button"
                           id="dropdown-recent-order1"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false"
                           data-display="static"></a>
                       <ul
                           class="dropdown-menu dropdown-menu-right"
                           aria-labelledby="dropdown-recent-order1">
                           <li class="dropdown-item">
                               <a href="">View</a>
                           </li>
                           <li class="dropdown-item">
                               <a class="" data-bs-toggle="modal" data-bs-target="#modalupdate{{ $item->id}}">Updated</a>
                           </li>
                           <li class="dropdown-item">
                               <a class="" data-bs-toggle="modal" data-bs-target="#modaldelete{{ $item->id}}">Remove</a>
                           </li>
                       </ul>
                   </div>
               </td>
           </tr>
                <!-- Modal Update -->
<div
class="modal fade"
id="modalupdate{{ $item->id }}"
tabindex="-1"
aria-labelledby="modalupdatelabel"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <form action="/paket/update" method="POST" class="d-inline">
            @csrf
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Paket</h5>
        </div>
            <input type="hidden" name="id" value="{{ old('id') ? old('id') : $item->id }}">
            <input type="hidden" name="id_outlet" value="{{ old('id_outlet') ? old('id_outlet') : $item->id_outlet }}">
            <div class="modal-body">
                <div class="form-group">
                    <label for="jenis" class="form-control-label">
                        Jenis
                    </label>
                    <select name="jenis" class="form-control @error('jenis') is-invalid @enderror">
                        <option selected="selected" value="{{ old('jenis') ? old('jenis') : $item->jenis }}"> {{ $item->jenis }} </option>
                        <option value="kiloan">Kiloan</option>
                        <option value="selimut">Selimut</option>
                        <option value="bed_cover">Bed Cover</option>
                        <option value="kaos">Kaos</option>
                        <option value="lain">Lain</option>
                    </select>
                    @error('jenis')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_paket" class="form-control-label">
                        Nama Paket
                    </label>
                    <input
                        type="text"
                        name="nama_paket"
                        value="{{ old('nama_paket') ? old('nama_paket') : $item->nama_paket }}"
                        class="form-control @error('nama_paket') is-invalid @enderror">
                    @error('nama_paket')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga" class="form-control-label">
                        Harga
                    </label>
                    <input
                        type="text"
                        name="harga"
                        value="{{ old('harga') ? old('harga') : $item->harga }}"
                        class="form-control @error('harga') is-invalid @enderror">
                    @error('harga')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
{{-- end modal --}}
<!-- Modal Delete -->
<div
class="modal fade"
id="modaldelete{{ $item->id }}"
tabindex="-1"
aria-labelledby="modaldeletelabel"
aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <form
        action="/paket/destroy/{{ $item->id }}"
        method="POST"
        enctype="multipart/form-data"
        class="d-inline">
        @csrf
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Paket</h5>
        </div>
        <div class="modal-body">
            Apakah yakin menghapus data
            {{ $item->nama }}?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-danger">Delete</button>
        </div>
    </form>
</div>
</div>
</div>
</div>
{{-- end modal --}}
@endforeach
    </tbody>
</table>
<!-- Modal Insert -->
<div
class="modal fade"
id="modalinput"
tabindex="-1"
aria-labelledby="modaldeletelabel"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <form action="{{ route('paket.store') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Paket</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="id_outlet" class="form-control-label">
                        Paket
                    </label>
                    <select
                        name="id_outlet"
                        id="js-example-basic-single"
                        class="form-control @error('type') is-invalid @enderror">
                        <option selected="selected" disabled="disabled" value="value">Pilih Jenis</option>
                        @foreach ($items as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}
                            -
                            {{ $item->tlp }}</option>
                        @endforeach
                    </select>
                    @error('id_outlet')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis" class="form-control-label">
                        Jenis
                    </label>
                    <select name="jenis" class="form-control @error('jenis') is-invalid @enderror">
                        <option selected="selected" disabled="disabled" value="value">Pilih Jenis</option>
                        <option value="kiloan">Kiloan</option>
                        <option value="selimut">Selimut</option>
                        <option value="bed_cover">Bed Cover</option>
                        <option value="kaos">Kaos</option>
                        <option value="lain">Lain</option>
                    </select>
                    @error('jenis')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_paket" class="form-control-label">
                        Nama Paket
                    </label>
                    <input
                        type="text"
                        name="nama_paket"
                        value="{{ old('nama_paket') }}"
                        class="form-control @error('nama_paket') is-invalid @enderror">
                    @error('nama_paket')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga" class="form-control-label">
                        Harga
                    </label>
                    <input
                        type="text"
                        name="harga"
                        value="{{ old('harga') }}"
                        class="form-control @error('harga') is-invalid @enderror">
                    @error('harga')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</div>
</div>
{{-- end modal --}}
</div>
</div>
@endsection