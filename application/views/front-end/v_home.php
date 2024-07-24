<!-- ======= Hero Section ======= -->
<style>
.center {
  margin: auto;
  width: 100%;
  border: 1px;
  padding: 20px;
}
</style>
<section id="hero" class="clients" style="height: 1200px; background-image: url('<?= base_url(); ?>vendor/front-end/assets/img/bg4.jpg');" >
<header class="section-header">
        <h2></h2>
        <p></p>
      </header>

    
    <div class="container">
      
    <div class="row">
      <div class="col-lg-5 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up" style="color:#461BDB;">We offer modern solutions for spatial work</h1>
        <h2 data-aos="fade-up" data-aos-delay="400" style="color:purple;">Presents a greater way to collaborate for accurate data and analysis</h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Get Started</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="500">
        <img src="<?= base_url(); ?>vendor/front-end/assets/img/gis.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>
  <header class="section-header">
        <h2></h2>
        <p></p>
      </header>

  <div class="container-fluid" data-aos="fade-up">
      <div class="testimonials-slider swiper-container" style="width: 75%; opacity:1;"  data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper">
          <?php foreach ($client as $key => $value) :
            if ($value->publish == "Publish") : ?>
              <!-- <div class="swiper-slide">
              <img src="<?= base_url(); ?>vendor/front-end/assets/img/drone.gif" style="width: 2000px;" class="img-fluid" alt="">
              <div class="text">Drone Mapping</div>
              </div>
              <div class="center">
                
                </div> -->
              
              <div class="swiper-slide">
              <div class="text" style="color:blue">Drone Mapping</div>
              <img src="<?= base_url(); ?>vendor/front-end/assets/img/wtpfix.gif" style="width: 100%;" class="img-fluid" alt="">
              </div>
              <div class="center">
                
                </div>
              
              <!-- <div class="swiper-slide">
              <img src="<?= base_url(); ?>vendor/front-end/assets/img/top.gif" style="width: 1000px;" class="img-fluid" alt="">
              <div class="text">Topography Survey</div>
              </div>
              <div class="center">
                
                </div> -->
              <div class="swiper-slide">
              <div class="text"style="color:blue">Topography Survey</div>
              <img src="<?= base_url(); ?>vendor/front-end/assets/img/gis4a.gif" style="width: 100%;" class="img-fluid" alt="">
              
              </div>
              <div class="center">
                
                </div>
              <div class="swiper-slide">
              <div class="text"style="color:blue">Architecture Modeling</div>
              <img src="<?= base_url(); ?>vendor/front-end/assets/img/IPLT.gif" style="width: 100%;" class="img-fluid" alt="">
              
              </div>
              <div class="center">
                
                </div>
              <div class="swiper-slide">
              <div class="text"style="color:blue">Urban Planning</div>
              <img src="<?= base_url(); ?>vendor/front-end/assets/img/jayapura1.gif" style="width: 100%;" class="img-fluid" alt="">
              
              </div>
              <div class="center">
                
                </div>
              <!-- <div class="swiper-slide">
              <div class="text"style="color:blue">3D Modeling from Technical Design</div>
              <img src="<?= base_url(); ?>vendor/front-end/assets/img/IPA1.gif" style="width: 6000px;" class="img-fluid" alt="">
              
              </div>
              <div class="center">
                
                </div> -->
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
       
      </div>
    </div>
</section><!-- End Hero -->

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about" style="height: 100%; background-image: url('<?= base_url(); ?>vendor/front-end/assets/img/bcf.jpg');" >

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content card">
            <h3>Who We Are</h3>
            <p>
              <?= $setting->profile; ?>
            </p>
            <div class="text-center text-lg-start">
              <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Read More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>vendor/front-end/assets/img/legal.jpg" class="img-fluid" style="height: 100%" alt="">
          <!-- <img src="<?= base_url(); ?>vendor/front-end/assets/img/KBLI.jpeg" class="img-fluid" style="height: 100%" alt=""> -->
        </div>

      </div>
    </div>

  </section><!-- End About Section -->

  <!-- ======= Values Section ======= -->
  <section id="values" class="values" style="height: 100%; background-image: url('<?= base_url(); ?>vendor/front-end/assets/img/g.jpg');">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Our Values</h2>
        <hr>
        <p>Trust And Product !</p>
      </header>

      <div class="row">

        <div class="col-lg-3">
          <div class="box" data-aos="fade-up" data-aos-delay="200">
            <img src="<?= base_url(); ?>vendor/front-end/assets/img/v1.png" class="img-fluid" alt="" style="height: 200px; width:220px;">
            <h3>Mengutamakan iman dan takwa dalam setiap pekerjaan.</h3>
            </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="400">
            <img src="<?= base_url(); ?>vendor/front-end/assets/img/v2.png" class="img-fluid" alt="" style="height: 200px; width:220px;">
            <h3>Menjaga kepercayaan klien dengan menghasilkan Produk yang berkualitas.</h3>
            </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="<?= base_url(); ?>vendor/front-end/assets/img/v3.png" class="img-fluid" alt="" style="height: 200px; width:220px;">
            <h3>Komunikatif sehingga menciptakan kesepahaman bersama.</h3>
            </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="<?= base_url(); ?>vendor/front-end/assets/img/v4.png" class="img-fluid" alt="" style="height: 200px; width:220px;">
            <h3>Informatif.</h3>
            </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="<?= base_url(); ?>vendor/front-end/assets/img/v5.png" class="img-fluid" alt="" style="height: 200px; width:220px;">
            <h3>Pekerjaan sesuai jadwal yang telah disepakati.</h3>
            </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="<?= base_url(); ?>vendor/front-end/assets/img/v6.png" class="img-fluid" alt="" style="height: 200px; width:220px;">
            <h3>Usaha perbaikan pelayanan secara berkesinambungan.</h3>
            </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="<?= base_url(); ?>vendor/front-end/assets/img/v7.png" class="img-fluid" alt="" style="height: 200px; width:220px;">
            <h3>Meningkatkan penguasaan teknologi dan inovasi.</h3>
            </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="<?= base_url(); ?>vendor/front-end/assets/img/v8.png" class="img-fluid" alt="" style="height: 200px; width:220px;">
            <h3>Setiap pelayanan harus memberikan manfaat bagi pengguna jasa, lingkungan sekitar dan negara.</h3>
            </div>
        </div>

      </div>

    </div>

  </section><!-- End Values Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $this->M_dashboard->client()->total; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="38" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-headset" style="color: #15be56;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="1296" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $this->M_dashboard->staff()->total; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Features Section ======= -->
  /

      <!-- Feature Icons -->
      <!-- <div class="row feature-icons" data-aos="fade-up">
        <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3>

        <div class="row">

          <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
            <img src="<?= base_url(); ?>vendor/front-end/assets/img/features-3.png" class="img-fluid p-4" alt="">
          </div>

          <div class="col-xl-8 d-flex content">
            <div class="row align-self-center gy-4">

              <div class="col-md-6 icon-box" data-aos="fade-up">
                <i class="ri-line-chart-line"></i>
                <div>
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="ri-stack-line"></i>
                <div>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="ri-brush-4-line"></i>
                <div>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="ri-magic-line"></i>
                <div>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class="ri-command-line"></i>
                <div>
                  <h4>Molestiae dolor</h4>
                  <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <i class="ri-radar-line"></i>
                <div>
                  <h4>Explicabo consectetur</h4>
                  <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div> -->
      <!-- End Feature Icons -->

    </div>

  </section>
  <!-- End Features Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Services</h2>
        <p>Bidang-bidang Layanan Kami</p>
      </header>

      <div class="row gy-4">
        <?php foreach ($layanan as $key => $value) :

          if ($value->status_layanan == "Publish") : ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-box blue">
                <div class="post-img"> <img src="<?= base_url('assets/img/layanan/') . $value->gambar_layanan; ?>" alt="" class="img-fluid rounded " style="height: 200px; width:220px;">
                </div>
                <h3><?= $value->judul_layanan; ?></h3>
                <a href="<?= base_url('home/v_layanan_detail/' . $value->slug_layanan); ?>" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

      </div>

    </div>

  </section><!-- End Services Section -->

  <!-- ======= F.A.Q Section ======= -->
  
  <!-- End F.A.Q Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Portfolio</h2>
        <p>Check our latest work</p>
      </header>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-1">GIS</li>
            <li data-filter=".filter-2">TOPO BATHIMETRI</li>
            <li data-filter=".filter-3">Aerial Mapping</li>
            <li data-filter=".filter-4">TATA RUANG</li>
            <li data-filter=".filter-5">WEB Development</li>
            <li data-filter=".filter-6">ARSITEK DESIGN TEKNIS</li>
            <li data-filter=".filter-7">ANALISIS</li>
          </ul>
        </div>
      </div>

      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == "GIS" && $value->status_portfolio == "Publish") : ?>
            <div class="col-lg-2 col-md-6 portfolio-item filter-1">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                <div class="portfolio-info" >
                  <h6><?= $value->judul_portfolio; ?></h6>
                  <p><?= $value->testimoni; ?></p>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="img-fluid" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == "TOPO BATHIMETRI" && $value->status_portfolio == "Publish") : ?>
            <div class="col-lg-2 col-md-6 portfolio-item filter-2">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h6><?= $value->judul_portfolio; ?></h6>
                  <p><?= $value->testimoni; ?></p>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == "Aerial Mapping" && $value->status_portfolio == "Publish") : ?>
            <div class="col-lg-2 col-md-6 portfolio-item filter-3">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h6><?= $value->judul_portfolio; ?></h6>
                  <p><?= $value->testimoni; ?></p>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == "TATA RUANG" && $value->status_portfolio == "Publish") : ?>
            <div class="col-lg-2 col-md-6 portfolio-item filter-4">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h6><?= $value->judul_portfolio; ?></h6>
                  <p><?= $value->testimoni; ?></p>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == "WEB" && $value->status_portfolio == "Publish") : ?>
            <div class="col-lg-2 col-md-6 portfolio-item filter-5">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h6><?= $value->judul_portfolio; ?></h6>
                  <p><?= $value->testimoni; ?></p>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == "ARSITEK DESIGN TEKNIS" && $value->status_portfolio == "Publish") : ?>
            <div class="col-lg-2 col-md-6 portfolio-item filter-6">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h6><?= $value->judul_portfolio; ?></h6>
                  <p><?= $value->testimoni; ?></p>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == "ANALISIS" && $value->status_portfolio == "Publish") : ?>
            <div class="col-lg-2 col-md-6 portfolio-item filter-7">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h8><?= $value->judul_portfolio; ?></h8>
                  <p><?= $value->testimoni; ?></p>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="img-fluid" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

      </div>

    </div>

  </section>
  <!-- End Portfolio Section -->

  <!-- ======= Testimonials Section ======= -->
  <!-- <section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">

    
      <header class="section-header">
        <h2>Testimoni</h2>
        <p>Pekerjaan Yang Telah dan Sedang Kami Lakukan</p>
      </header>

      <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper ">
          <?php foreach ($portfolio as $key => $value) :
            // strip tags to avoid breaking any html
            $isi = strip_tags($value->testimoni);
            if (strlen($isi) > 200) {

              // truncate isi
              $isiCut = substr($isi, 0, 200);
              $endPoint = strrpos($isiCut, ' ');

              //if the isi doesn't contain any space then it will cut without word basis.
              $isi = $endPoint ? substr($isiCut, 0, $endPoint) : substr($isiCut, 0);
            }
            if ($value->status_portfolio == "Publish") : ?>
              <div class="swiper-slide">
                <div class="card testimonial-item ">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <?= $isi; ?>
                  </p>
                  <div class="profile mt-auto">
                    <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="testimonial-img" alt="">
                    <h3><?= $value->judul_portfolio; ?></h3>
                    <h4><?= $value->nama_layanan; ?></h4>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?> -->
          <!-- End testimonial item -->

        <!-- </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section> -->
  <!-- End Testimonials Section -->

  <!-- ======= Team Section ======= -->
  <!-- <section id="team" class="team">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Team</h2>
        <p>Our hard working team</p>
      </header>
      <div class="row gy-4 d-flex justify-content-center">
        <?php foreach ($staff as $key => $value) :
          if ($value->publish == "Publish") : ?>

            <div class="col-lg-2 col-md-2 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="<?= base_url('assets/img/staff/') . $value->gambar_staff; ?>" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4><?= $value->nama_staff; ?></h4>
                  <span><?= $value->nama_kategori; ?></span>
                  <p><?= $value->no_telepon; ?></p>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

    </div>

  </section> -->
  <!-- End Team Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Our Clients</h2>
        <p>Mitra Kami</p>
      </header>

      <div class="clients-slider swiper-container">
        <div class="swiper-wrapper align-items-center">
          <?php foreach ($client as $key => $value) :
            if ($value->publish == "Publish") : ?>
              <div class="swiper-slide">
                <img src="<?= base_url('assets/img/client/') . $value->gambar_client; ?>" class="img-fluid" alt="">
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

  </section><!-- End Clients Section -->

  <!-- ======= Recent Blog Posts Section ======= -->
  <!-- <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Blog</h2>
        <p>Recent posts form our Blog</p>
      </header>

      <div class="row">
        <?php foreach ($berita as $key => $value) :
          // strip tags to avoid breaking any html
          $isi = strip_tags($value->isi_berita);
          if (strlen($isi) > 200) {

            // truncate isi
            $isiCut = substr($isi, 0, 200);
            $endPoint = strrpos($isiCut, ' ');

            //if the isi doesn't contain any space then it will cut without word basis.
            $isi = $endPoint ? substr($isiCut, 0, $endPoint) : substr($isiCut, 0);
          }
          if ($value->status_berita == "Publish") : ?>
            <div class="col-lg-4 mb-2">
              <div class="post-box">
                <div class="post-img"><img src="<?= base_url('assets/img/berita/') . $value->gambar_berita; ?>" class="img-fluid" alt=""></div>
                <span class="post-date"><?= date('d-M-Y', strtotime($value->date_cretated)); ?></span>
                <h3 class="post-title"><?= $value->judul_berita; ?></h3>
                <a href="<?= base_url('home/detail/' . $value->slug_berita); ?>" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

      </div>

    </div>

  </section> -->
  <!-- End Recent Blog Posts Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p><?= $setting->alamat; ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p><?= $setting->no_telepon; ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p><?= $setting->email; ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>

        </div>

      </div>

    </div>

  </section><!-- End Contact Section -->

</main><!-- End #main -->
