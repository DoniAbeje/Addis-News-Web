<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Addis News: Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.css">
    <style>
        .nav-link-white {
            color: white;
        }

        .nav-tabs .nav-link {

            border-radius: 0px;
        }

        a.news-card {
            text-decoration: none;
            color: unset;
            transition: all .7s;
        }

        a.news-card:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        }
    </style>
</head>

<body>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Subscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
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



    <!-- Main container -->
    <div class="container my-5">
        <!-- Row -->
        <div class="row bg-primary shadow-sm">
            <!-- Category Tabs -->
            <ul class="nav nav-tabs border-bottom-0">
                <li class="nav-item">
                    <a class="nav-link active nav-link-white" data-toggle="tab" href="#home">Recent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-white" data-toggle="tab" href="#profile">Entertainment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-white" data-toggle="tab" href="#profile">Politics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-white" data-toggle="tab" href="#profile">Sport</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-white" data-toggle="tab" href="#profile">Business</a>
                </li>

            </ul>
        </div>
        <!-- / Row -->

        <div id="myTabContent" class="tab-content  my-5">
            <div class="tab-pane fade show active" id="home">
                <div class="row my-3 ">

                    <div class="col-lg-4 mb-3 " style="display: grid">
                        <div class="card border-light h-100">
                            <a href="#" class="news-card">
                                <img style="height: 200px; width: 100%; display: block;"
                                    src="https://loremflickr.com/320/240?random=1" alt="Card image">

                                <div class="card-body">
                                    <p class="card-text">ሬክጃቪክ ኩባንያ በ4 ነጥብ 4 ቢሊየን ዶላር በኢትዮጵያ የሚያካሂደውን የታዳሽ ሃይል ልማት…</p>
                                </div>
                            </a>

                            <div class="card-footer" style="font-size: 12px">
                                    <span class="badge badge-warning">Sport</span> | <span>Published 2 days ago</span> | <a href="#">Reporter</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3 " style="display: grid">
                        <div class="card border-light h-100">
                            <a href="#" class="news-card">
                                <img style="height: 200px; width: 100%; display: block;"
                                    src="https://loremflickr.com/320/240?random=2" alt="Card image">

                                <div class="card-body">
                                    <p class="card-text">በቂሊንጦ ፋርማሲዩቲካል ኢንዱስትሪ ፓርክ ውስጥ ለመግባት ከ10 ኩባንያዎች ጋር የመግባቢያ…</p>
                                </div>
                                <div class="card-footer" style="font-size: 12px">
                                        <span class="badge badge-danger">Entertainment</span> | <span>Published 2 days ago</span> | <a href="#">Reporter</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3" style="display: grid">
                        <div class="card border-light h-100" style="height: 1500px">
                            <a href="#" class="news-card h-100">
                                <img style="height: 200px; width: 100%; display: block;"
                                    src="https://loremflickr.com/520/240?random=3" alt="Card image">

                                <div class="card-body">
                                    <p class="card-text">የዒድ ኤግዚቢሽንና ባዛር በዛሬው ዕለት ተከፈተ </p>
                                </div>
                                <div class="card-footer" style="font-size: 12px">
                                        <span class="badge badge-info">Politics</span> | <span>Published 2 days ago</span> | <a href="#">Reporter</a>
                                </div>
                            </a>
                        </div>
                    </div>


                </div>

                <div class="row my-3">

                    <div class="col-lg-4  mb-3" style="display: grid">
                        <div class="card border-light h-100">
                            <img style="height: 200px; width: 100%; display: block;"
                                src="https://loremflickr.com/320/240?random=4" alt="Card image">

                            <div class="card-body">
                                <h6 class="card-title">Some Kind of News title here</h6>
                                <p class="card-text">ሬክጃቪክ ኩባንያ በ4 ነጥብ 4 ቢሊየን ዶላር በኢትዮጵያ የሚያካሂደውን የታዳሽ ሃይል ልማት…</p>
                            </div>
                            <div class="card-footer" style="font-size: 12px">
                                    <span>Published 2 days ago</span> | <a href="#">Reporter</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3" style="display: grid">
                        <div class="card border-light h-100">
                            <img style="height: 200px; width: 100%; display: block;"
                                src="https://loremflickr.com/320/240?random=5" alt="Card image">

                            <div class="card-body">
                                <h6 class="card-title">Some Kind of News title here</h6>
                                <p class="card-text">በቂሊንጦ ፋርማሲዩቲካል ኢንዱስትሪ ፓርክ ውስጥ ለመግባት ከ10 ኩባንያዎች ጋር የመግባቢያ…</p>
                            </div>
                            <div class="card-footer" style="font-size: 12px">
                                <span>Published 2 days ago</span> | <a href="#">Reporter</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3" style="display: grid">
                        <div class="card border-light h-100" style="height: 1500px">
                            <img style="height: 200px; width: 100%; display: block;"
                                src="https://loremflickr.com/520/240?random=6" alt="Card image">

                            <div class="card-body">
                                <h6 class="card-title">Some Kind of News title here</h6>
                                <p class="card-text">የዒድ ኤግዚቢሽንና ባዛር በዛሬው ዕለት ተከፈተ </p>
                            </div>
                            <div class="card-footer" style="font-size: 12px">
                                <span>Published 2 days ago</span> | <a href="#">Reporter</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="tab-pane fade" id="profile">
                <p>Food truck fixie locavore, accusamus mcsweeney's
                    marfa nulla single-origin coffee squid. Exercitation +1 labore velit,
                    blog sartorial PBR leggings next level wes anderson artisan four loko
                    farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim
                    craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo
                    nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
            </div>
        </div>
        <!-- /Category Tabs -->
        <div class="row">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#">&laquo;</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">&raquo;</a>
                </li>
            </ul>
        </div>

    </div>
    <!-- / Main container -->

    <!-- Footer -->
    <footer>

    </footer>
    <!-- / Footer -->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
</body>

</html>