<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Twitter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{request()->route()->named('post.index') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('post.index')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item {{request()->route()->named('about') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item {{Request::is('posts/create') ? 'active' : ''}}">

                    <a class="nav-link" href="{{route('post.create')}}">Create post</a>

                </li>
            </ul>
        </div>
    </div>
</nav>
