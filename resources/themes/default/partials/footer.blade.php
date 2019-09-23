<footer class="container-fluid px-0 mt-3">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{route('home')}}">
                    {{env('APP_NAME', 'Knowledgebase')}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">First</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Second</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Third</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Fourth</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</footer>
