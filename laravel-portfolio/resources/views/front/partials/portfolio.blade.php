<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <div class="section-title">
            <h2>{{ $titles[4]->text}}</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 portfolio-item {{$portfolios[0]->tag}}">
                <div class="portfolio-wrap">
                    <img src={{ asset("img/portfolio/".$portfolios[0]->imgpath) }} class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/portfolio/".$portfolios[0]->imgpath) }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item {{$portfolios[1]->tag}}">
                <div class="portfolio-wrap">
                    <img src={{ asset("img/portfolio/".$portfolios[1]->imgpath) }} class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/portfolio/".$portfolios[1]->imgpath) }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item {{$portfolios[2]->tag}}">
                <div class="portfolio-wrap">
                    <img src={{ asset("img/portfolio/".$portfolios[2]->imgpath) }} class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/portfolio/".$portfolios[2]->imgpath) }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item {{$portfolios[3]->tag}}">
                <div class="portfolio-wrap">
                    <img src={{ asset("img/portfolio/".$portfolios[3]->imgpath) }} class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/portfolio/".$portfolios[3]->imgpath) }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item {{$portfolios[4]->tag}}">
                <div class="portfolio-wrap">
                    <img src={{ asset("img/portfolio/".$portfolios[4]->imgpath) }} class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/portfolio/".$portfolios[4]->imgpath) }}data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item {{$portfolios[5]->tag}}">
                <div class="portfolio-wrap">
                    <img src={{ asset("img/portfolio/".$portfolios[5]->imgpath) }} class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/portfolio/".$portfolios[5]->imgpath) }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item {{$portfolios[6]->tag}}">
                <div class="portfolio-wrap">
                    <img src={{ asset("img/portfolio/".$portfolios[6]->imgpath) }} class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/portfolio/".$portfolios[6]->imgpath) }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item {{$portfolios[7]->tag}}">
                <div class="portfolio-wrap">
                    <img src={{ asset("img/portfolio/".$portfolios[7]->imgpath) }} class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/portfolio/".$portfolios[7]->imgpath) }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item {{$portfolios[8]->tag}}">
                <div class="portfolio-wrap">
                    <img src={{ asset("img/portfolio/".$portfolios[8]->imgpath) }} class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/portfolio/".$portfolios[8]->imgpath) }} data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Section -->