@extends('layouts.master') @section('tittle', 'Hi-Laundry') @section('content')
<!-- Member Table -->
<div class="card card-table-border-none" id="recent-orders">
    <div class="card-header justify-content-between">
        <h2>Daftar Member</h2>
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
            <i class="fa fa-plus"></i>Tambah Member</a>
        <table
            class="table card-table table-responsive table-responsive-large"
            style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Member</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telepon</th>
                    <th class="d-none d-md-table-cell">Updated Date</th>
                    <th>Status</th>
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
                        <a class="text-dark" href="">{{ $item->alamat }}</a>
                    </td>
                    <td >
                        <a class="text-dark" href="">{{ $item->jenis_kelamin }}</a>
                    </td>
                    <td >
                        <a class="text-dark" href="">{{ $item->tlp }}</a>
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
                            <form action="/member/update" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Member</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="nama" class="form-control-label">
                                            Nama Member
                                        </label>
                                        <input
                                            type="text"
                                            name="nama"
                                            value="{{ old('nama') ? old('nama') : $item->nama }}"
                                            class="form-control @error('nama') is-invalid @enderror">
                                        @error('nama')
                                        <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat" class="form-control-label">
                                            Alamat
                                        </label>
                                        <input
                                            type="text"
                                            name="alamat"
                                            value="{{ $item->alamat }}"
                                            class="form-control @error('alamat') is-invalid @enderror">
                                        @error('alamat')
                                        <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin" class="form-control-label">
                                            Jenis Kelamin
                                        </label>
                                        <select
                                            name="jenis_kelamin"
                                            class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                            <option value="L">L</option>
                                            <option value="P">P</option>
                                        </select>
                                        @error('jenis_kelamin')
                                        <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tlp" class="form-control-label">
                                            Telepon
                                        </label>
                                        <input
                                            type="text"
                                            name="tlp"
                                            value="{{ $item->tlp }}"
                                            class="form-control @error('tlp') is-invalid @enderror">
                                        @error('tlp')
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
                            action="/member/destroy/{{ $item->id }}"
                            method="POST"
                            enctype="multipart/form-data"
                            class="d-inline">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Member</h5>
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
            <form action="{{ route('member.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Member</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama" class="form-control-label">
                            Nama Member
                        </label>
                        <input
                            type="text"
                            name="nama"
                            value="{{ old('nama') }}"
                            class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                        <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="form-control-label">
                            Alamat
                        </label>
                        <input
                            type="text"
                            name="alamat"
                            value="{{ old('alamat') }}"
                            class="form-control @error('alamat') is-invalid @enderror">
                        @error('alamat')
                        <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin" class="form-control-label">
                            Jenis Kelamin
                        </label>
                        <select
                            name="jenis_kelamin"
                            class="form-control @error('jenis_kelamin') is-invalid @enderror">
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                        @error('jenis_kelamin')
                        <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tlp" class="form-control-label">
                            Telepon
                        </label>
                        <input
                            type="text"
                            name="tlp"
                            value="{{ old('tlp') }}"
                            class="form-control @error('tlp') is-invalid @enderror">
                        @error('tlp')
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