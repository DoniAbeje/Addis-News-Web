<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">ADDIS News</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class={!!$slot == 'Home' ? '"nav-item active"' : '"nav-item"'!!}>
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Subscription</a>
                </li>
                <li class={!!$slot == 'About' ? '"nav-item active"' : '"nav-item"'!!}>
                    <a class="nav-link"  href="#">About</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 " placeholder="Search" type="text">
                <button class="btn btn-outline-secondary text-white my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<!-- / Header -->