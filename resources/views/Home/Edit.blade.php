@extends('templating.layout')

@section('content')
    <div id="main" class="row justify-content-center">
        <div class="col-5">
            <form method="POST" action="/home/{{ $edit->id }}">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Nama Event</label>
                            <input type="text" value="{{ old('nama', $edit->nama) }}"
                                class="form-control @error('nama') is-invalid @enderror" name="nama">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Seat</label>
                            <input type="number" class="form-control @error('seat') is-invalid @enderror"
                                value="{{ old('seat', $edit->seat) }}" name="seat">
                            @error('seat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Pelaksanaan</label>
                            <select class="form-select" name="pelaksanaan_id">
                                @foreach ($pelaksanaan as $p)
                                    @if (old('pelaksanaan_id', $edit->pelaksanaan_id) == $p->id)
                                        <option selected value="{{ $p->id }}">{{ $p->nama }}</option>
                                    @else
                                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" name="kategori_id">
                                @foreach ($kategori as $k)
                                    @if (old('kategori_id', $edit->kategori_id) == $k->id)
                                        <option selected value="{{ $k->id }}">{{ $k->nama }}</option>
                                    @else
                                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                        value="{{ old('tanggal', $edit->tanggal) }}" name="tanggal">
                    @error('tanggal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning">Submit</button>
            </form>
        </div>
    </div>
@endsection
