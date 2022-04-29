<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #a5b2b5;">
    <div class="container">
        <a class="navbar-brand" href="/">
            Foto Uploader
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto shadow" style="background-color: #bfd0ca;" id="fitur_bg">
                <div class="navbar-nav m-auto" id="fitur">
                    <a class="btn btn-grey " href="{{ url('/') }}"><i class="bi bi-house-door-fill me-1"
                            style="color: black"></i>Home</a>
                    <a href="{{ url('create-file') }}" class="btn" style="color: black"><i
                            class="bi bi-plus"></i>Post File</a>
                </div>
            </div>
        </div>
    </div>
</nav>
