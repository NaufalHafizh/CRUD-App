@extends('templating.layout')

@section('content')
    <div id="main">
        <h2 class="pb-2 mb-4 text-light border-bottom border-light">Data Event</h2>
        @if (session()->has('berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('berhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <a href="/home/create" class="btn btn-success mb-4">Tambah Data</a>
        <table class="table table-light">
            <thead>
                <tr class="table-success">
                    <th scope="col">NO</th>
                    <th scope="col">Event</th>
                    <th scope="col">ketegori</th>
                    <th scope="col">Pelaksanaan</th>
                    <th scope="col">tanggal</th>
                    <th scope="col">seat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($event as $d)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $d->nama }}</th>
                        <th>{{ $d->Kategori->nama }}</th>
                        <th>{{ $d->pelaksanaan->nama }}</th>
                        <th>{{ $d->tanggal }}</th>
                        <th>{{ $d->seat }}</th>
                        <th class="justify-item-center">
                            <a type="button" href="/home/{{ $d->id }}/edit"
                                class="badge text-bg-warning border-0 text-decoration-none">
                                Edit
                            </a>
                            <form class="d-inline" method="POST" action="/home/{{ $d->id }}">
                                @method('delete')
                                @csrf
                                <button class="badge text-bg-danger border-0"
                                    onclick="return confirm('Are You Sure ?')">Delete</button>
                            </form>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row mt-5">
            <div class="col">
                <h2 class="pb-2 mb-4 text-light border-bottom border-light">Data Kategori</h2>
                <table class="table table-light">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">NO</th>
                            <th scope="col">Kategori</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($kategori as $d)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $d->nama }}</th>
                                </form>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col">
                <h2 class="pb-2 mb-4 text-light border-bottom border-light">Data Pelaksanaan</h2>
                <table class="table table-light">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">NO</th>
                            <th scope="col">Pelaksanaan</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($pelaksanaan as $d)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $d->nama }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
