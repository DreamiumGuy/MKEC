<header>

    <div class="bg-top navbar-light">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center align-items-stretch">
                <div class="col-md-4 d-flex align-items-center py-4">
                    <a class="navbar-brand" href="index.html">MKEC <span>Mairaj Khalid Education Complex</span></a>
                </div>
                <div class="col-lg-8 d-block">
                    <div class="row d-flex">
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container nav2 d-flex align-items-center px-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <form action="#" class="searchform order-lg-last">
                <div class="form-group d-flex">
                    <input type="text" class="form-control pl-3" placeholder="Search">
                    <button type="submit" placeholder="" class="form-control search"><span
                            class="ion-ios-search"></span></button>
                </div>
            </form>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href={{ route('home')}} class="nav-link pl-0">Home</a></li>
                    <li class="nav-item"><a href={{route('projects')}} class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href={{route('news')}} class="nav-link">News</a></li>
                    <li class="nav-item"><a href={{route('about')}} class="nav-link">About Ikhwan e Islam</a></li>
                    <li class="nav-item"><a href={{route('contact')}} class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

</header>