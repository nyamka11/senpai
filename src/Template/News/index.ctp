
<?php
    $newsData = ['Дэлхийд','Эрүүл мэнд'];
    foreach($news as $item)  {
        if($item->category == "Дэлхийд")  {
            $newsData['Дэлхийд'] = array($item);
        }

        if($item->category == "Эрүүл мэнд")  {
            $newsData['Эрүүл мэнд'] = array($item);
        }

        if($item->category == "Улс төр")  {
            $newsData['Улс төр'] = array($item);
        }

        if($item->category == "Нийгэм")  {
            $newsData['Нийгэм'] = array($item);
        }
    }
?>

<!-- News Slider Area Start Here -->
<section class="bg-accent section-space-less2">
    <div class="container">
        <div class="row tab-space1">
            <div class="col-lg-6 col-md-12">
                <div class="img-overlay-70 img-scale-animate mb-2">
                    <img  alt="news" class="img-fluid width-100" src=<?= $newsData['Дэлхийд'][0]->newsImg =="" ? "img/news/news1.jpg" : $newsData['Дэлхийд'][0]->newsImg ?> />
                    <div class="mask-content-lg">
                        <div class="topic-box-sm color-cinnabar mb-20">Дэлхийд</div>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                    <span>by</span>
                                    <a href="single-news-1.html">Nyamka</a>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span><?= $newsData['Дэлхийд'][0]->date ?></li>
                            </ul>
                        </div>
                        <h1 class="title-medium-light">
                            <a href="news/view/<?= $newsData['Дэлхийд'][0]->id ?>" ><?= $newsData['Дэлхийд'][0]->title ?></a>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row tab-space1">
                    <div class="col-12">
                        <div class="img-overlay-70 img-scale-animate mb-2">
                            <div class="mask-content-sm">
                                <div class="topic-box-sm color-azure-radiance mb-10">Эрүүл мэнд</div>
                                <h2 class="title-medium-light">
                                    <a href="news/view/<?= $newsData['Эрүүл мэнд'][0]->id ?>" ><?= $newsData['Эрүүл мэнд'][0]->title ?></a>
                                </h2>
                            </div>
                            <img src=<?= $newsData['Эрүүл мэнд'][0]->newsImg =="" ? "img/news/news2.jpg" : $newsData['Эрүүл мэнд'][0]->newsImg ?> alt="news" class="img-fluid width-100">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="img-overlay-70 img-scale-animate mb-2">
                            <div class="mask-content-sm">
                                <div class="topic-box-sm color-apple mb-10">Улс төр</div>
                                <h3 class="title-medium-light">
                                    <a href="news/view/<?= $newsData['Улс төр'][0]->id ?>" ><?= $newsData['Улс төр'][0]->title ?></a>
                                </h3>
                            </div>
                            <img src=<?= $newsData['Улс төр'][0]->newsImg =="" ? "img/news/news3.jpg" : $newsData['Улс төр'][0]->newsImg ?> alt="news" class="img-fluid width-100">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="img-overlay-70 img-scale-animate mb-2">
                            <div class="mask-content-sm">
                                <div class="topic-box-sm color-razzmatazz mb-10">Нийгэм</div>
                                <h3 class="title-medium-light">
                                    <a href="news/view/<?= $newsData['Нийгэм'][0]->id ?>" ><?= $newsData['Нийгэм'][0]->title ?></a>
                                </h3>
                            </div>
                            <img src=<?= $newsData['Нийгэм'][0]->newsImg =="" ? "img/news/news4.jpg" : $newsData['Нийгэм'][0]->newsImg ?> alt="news" class="img-fluid width-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Slider Area End Here -->


<!-- More News Area Start Here -->
<section class="bg-body section-space-default">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="ne-isotope">
                    <div class="topic-border color-scampi mb-30">
                        <div class="topic-box-lg color-scampi">More News</div>
                        <div class="isotope-classes-tab isotop-btn">
                            <a href="#" data-filter=".politics" class="current">Politics</a>
                            <a href="#" data-filter=".fashion">Fashion</a>
                            <a href="#" data-filter=".health">Health &amp; Fitness</a>
                            <a href="#" data-filter=".travel">Travel</a>
                            <a href="#" data-filter=".gadget">Gadget</a>
                        </div>
                        <div class="more-info-link">
                            <a href="post-style-1.html">More
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="featuredContainer">
                        <div class="row politics">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">Erik Jones has day he won’t soon forget as Denny backup at Bristol</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-2.html" class="img-opacity-hover">
                                            <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-web-orange mb-20">Food</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-2.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-3.html" class="img-opacity-hover">
                                            <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-azure-radiance mb-20">Sports</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-3.html">A taste of what we like this week at CookA like this current week</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-apple mb-20">Life Style</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row fashion">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-2.html" class="img-opacity-hover">
                                            <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-web-orange mb-20">Food</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-2.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-3.html" class="img-opacity-hover">
                                            <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-azure-radiance mb-20">Sports</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-3.html">A taste of what we like this week at CookA like this current week</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">Erik Jones has day he won’t soon forget as Denny backup at Bristol</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-apple mb-20">Life Style</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row health">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-3.html" class="img-opacity-hover">
                                            <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-azure-radiance mb-20">Sports</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-3.html">A taste of what we like this week at CookA like this current week</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-apple mb-20">Life Style</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">Erik Jones has day he won’t soon forget as Denny backup at Bristol</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-2.html" class="img-opacity-hover">
                                            <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-web-orange mb-20">Food</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-2.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row travel">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-3.html" class="img-opacity-hover">
                                            <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-azure-radiance mb-20">Sports</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-3.html">A taste of what we like this week at CookA like this current week</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">Erik Jones has day he won’t soon forget as Denny backup at Bristol</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-2.html" class="img-opacity-hover">
                                            <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-web-orange mb-20">Food</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-2.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-apple mb-20">Life Style</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gadget">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news41.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-apple mb-20">Life Style</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-1.html" class="img-opacity-hover">
                                            <img src="img/news/news38.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cinnabar mb-20">Politics</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-1.html">Erik Jones has day he won’t soon forget as Denny backup at Bristol</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-2.html" class="img-opacity-hover">
                                            <img src="img/news/news39.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-web-orange mb-20">Food</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-2.html">TG G6 will have 13-mgpx cameras on the back Separated theytics.</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <a href="single-news-3.html" class="img-opacity-hover">
                                            <img src="img/news/news40.jpg" alt="news" class="img-fluid">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-azure-radiance mb-20">Sports</div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>by</span>
                                                    <a href="single-news-1.html">Makr Willy</a>
                                                </li>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>May 30, 2017</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="single-news-3.html">A taste of what we like this week at CookA like this current week</a>
                                        </h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics,
                                            a large ocean. A small river named Duden flows by their place and
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                <div class="sidebar-box">
                    <div class="topic-border color-cod-gray mb-5">
                        <div class="topic-box-lg color-cod-gray">Сурталчилгаа</div>
                    </div>
                    <div class="ne-banner-layout1 text-center">
                        <a href="#">
                            <img src="https://www.tysonfoodservice.com/sites/default/files/2019-08/TYS-29403-NACS-images-resizes-370x278.jpg" alt="ad" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="sidebar-box">
                    <div class="topic-border color-cod-gray mb-30">
                        <div class="topic-box-lg color-cod-gray">Newsletter</div>
                    </div>
                    <div class="newsletter-area bg-primary">
                        <h2 class="title-medium-light size-xl">Subscribe to our mailing list to get the new updates!</h2>
                        <img src="img/banner/newsletter.png" alt="newsletter" class="img-fluid mb-40">
                        <p>Subscribe our newsletter to stay updated every moment</p>
                        <div class="input-group stylish-input-group">
                            <input type="text" placeholder="Enter your mail" class="form-control">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="breadcrumbs-area" style="background-image: url(https://davidfrenchoriginals.com/wp-content/uploads/2019/02/central-as-jpg-cleaned-cropped-best-1920x134.jpg);">
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="breadcrumbs-content">
                <h1>Сурталчилгаа байршуулах 1920x134 &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i> 070-7520-1328</h1>
            </div>
            </div>
           
        </div>
    </div>
</section>



<!-- More News Area End Here -->
<!-- Category Area Start Here -->
<section class="bg-body section-space-less2">
    <div class="container">
        <div class="row tab-space1">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                    <img src="img/category/ctg1.jpg" alt="news" class="img-fluid width-100">
                    <div class="content p-30-r">
                        <div class="ctg-title-xs">Music</div>
                        <h3 class="title-regular-light size-lg">
                            <a href="post-style-1.html">Microsoft and Autodesk help industrial designers…</a>
                        </h3>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>March 22, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                    <img src="img/category/ctg2.jpg" alt="news" class="img-fluid width-100">
                    <div class="content p-30-r">
                        <div class="ctg-title-xs">Education</div>
                        <h3 class="title-regular-light size-lg">
                            <a href="post-style-2.html">Apple’s new AirPods are feature rich but fugly</a>
                        </h3>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>April 20, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                    <img src="img/category/ctg3.jpg" alt="news" class="img-fluid width-100">
                    <div class="content p-30-r">
                        <div class="ctg-title-xs">Travel</div>
                        <h3 class="title-regular-light size-lg">
                            <a href="post-style-3.html">All People Gather Strategic Supplies of Vegetables</a>
                        </h3>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>May 03, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                    <img src="img/category/ctg4.jpg" alt="news" class="img-fluid width-100">
                    <div class="content p-30-r">
                        <div class="ctg-title-xs">Sprts</div>
                        <h3 class="title-regular-light size-lg">
                            <a href="post-style-4.html">The Whole World is Expecting the Best iPhone Ever Created</a>
                        </h3>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>July 09, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                    <img src="img/category/ctg5.jpg" alt="news" class="img-fluid width-100">
                    <div class="content p-30-r">
                        <div class="ctg-title-xs">Food</div>
                        <h3 class="title-regular-light size-lg">
                            <a href="post-style-1.html">Gym Fitness area coverded Governed this in 2017</a>
                        </h3>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>October 28, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                    <img src="img/category/ctg6.jpg" alt="news" class="img-fluid width-100">
                    <div class="content p-30-r">
                        <div class="ctg-title-xs">Education</div>
                        <h3 class="title-regular-light size-lg">
                            <a href="post-style-2.html">What To Avoid When Planning Your Honeymoon</a>
                        </h3>
                        <div class="post-date-light">
                            <ul>
                                <li>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>December 19, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category Area End Here -->
