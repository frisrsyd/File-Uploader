@extends('app')
@section('content')
    <div class="banner mb-3">
    </div>
    <!-- card post -->
    <div class="container">
        @if (session('status'))
            <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
        @endif
        <div class="row justify-content-center">
            @forelse ($fotouploader as $item)
                <div class="col-md-12 card card-post shadow">
                    {{-- <small class="card-text post-caption mb-1 mt-1">name of file</small> --}}
                    <img src="post_images/{{ $item->image }}" class="card-img-top">
                    <div class="card-body">
                        <p class="mb-2 profile">
                        <div class="row">
                            <div class="post-nav mb-2 text-end col">
                                <a href="delete-post/{{ $item->id }}" class="btn btn-outline-danger"
                                    onclick="return confirm('Are you sure want to delete this photo?')"><i
                                        class="bi bi-trash"></i> Hapus</a>
                                <a href="edit-post/{{ $item->id }}" class="btn btn-outline-primary"><i
                                        class="bi bi-pencil-fill"></i> Edit</a>
                            </div>
                        </div>
                        <div class="row" id="detailTable">
                            <div class="">
                                <table class="table table-bordered details-table">
                                    <tr>
                                        <td colspan="2"><b>Details</b></td>
                                    </tr>
                                    <tr>
                                        <td>Nama file:</td>
                                        <td>{{ $item->image }}</td>
                                    </tr>
                                    <tr>
                                        <td>Caption:</td>
                                        <td>{{ $item->caption }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
                <div class="w-100 d-none d-md-block"></div>
            @empty
            @endforelse
        </div>
    </div>
@endsection
