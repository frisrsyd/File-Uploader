@extends('app')

@section('content')
    <div class="container mt-5 pt-5">
        @if (session('status'))
            <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form enctype="multipart/form-data" method="POST" action="{{ url('posts') }}">
                    @csrf
                    <div class="mb-3">
                        <small for="image" class="keterangan">Upload gambar</small>
                        <input id="image" name="image" type="file" class="form-control mt-2" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <textarea id="caption" placeholder="Masukkan Caption" class="form-control" name="caption" cols="30"
                            rows="10"></textarea>
                    </div>

                    <button class="btn btnSignIn mb-md-5" type="submit">Create Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
