@extends('layouts.Main')

@section('content')
    <main class="main">

    <!-- home Section -->
    <section id="home" class="hero section dark-background">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1>Himpunan Mahasiswa Teknik Informasi</h1>
                    <p>Menjadikan Himpunan Mahasiswa Informatika ITATS Sebagai Organisasi Profesional
                        Kami berkomitmen untuk mengarahkan mahasiswa menuju profesi di bidang Teknologi Informasi</p>
                    <div class="d-flex">
                        <a href="#about" class="btn-get-started">Tentang Kami</a>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center">
                            <i class="bi bi-play-circle"></i><span>Tonton Video</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/hima.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

        <div class="container" data-aos="zoom-in">

            <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                "loop": true,
                "speed": 600,
                "autoplay": {
                    "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "breakpoints": {
                    "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                    },
                    "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                    },
                    "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                    },
                    "992": {
                    "slidesPerView": 5,
                    "spaceBetween": 120
                    },
                    "1200": {
                    "slidesPerView": 6,
                    "spaceBetween": 120
                    }
                }
                }
            </script>
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="assets/img/itats.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/itats1.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/informatika.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            </div>
            </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- Tentang Kami -->
    <section id="about" class="about section">
        <!-- Judul Bagian -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Tentang Himpunan Teknik Informatika</h2>
        </div>

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Himpunan Teknik Informatika adalah organisasi mahasiswa yang bertujuan untuk mengembangkan minat, bakat, dan kemampuan mahasiswa dalam bidang teknik informatika.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> <span>Menjadi wadah untuk mengasah keterampilan di bidang teknologi informasi.</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Mendukung kegiatan akademis dan non-akademis yang bermanfaat bagi mahasiswa.</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Berperan aktif dalam memajukan komunitas teknik informatika di kampus.</span></li>
                    </ul>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <p>Himpunan ini berkomitmen untuk menciptakan lingkungan yang kondusif bagi mahasiswa dalam belajar, berinovasi, dan berkolaborasi di bidang teknik informatika. Kami berfokus pada pengembangan keahlian yang relevan dengan kebutuhan industri serta mendukung mahasiswa dalam meraih prestasi baik di tingkat nasional maupun internasional.</p>
                    <a href="#" class="read-more"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                </div>

            </div>

        </div>

    </section><!-- Tentang Kami -->

    <!-- visi Section -->
    <section id="why-us" class="section why-us light-background" data-builder="section">
        
        <div class="container-fluid">
            <div class="row gy-4">
                <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                    <img src="assets/img/visi.png" class="img-fluid" alt="Visi Himpunan" data-aos="zoom-in" data-aos-delay="100">
                </div>
                <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
                    <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                        <h3><strong>Visi Himpunan Mahasiswa Teknik Informatika</strong></h3>
                    </div>
                    <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="faq-item faq-active">
                            <div class="faq-content">
                                <p>Menjadikan Himpunan Mahasiswa Informatika ITATS sebagai organisasi yang mengarah pada profesi dalam bidang teknologi informasi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Misi Section -->
    <section id="why-us" class="section why-us light-background" data-builder="section">

        <div class="container-fluid">
            <div class="row gy-4">
                <div class="col-lg-5 order-1 why-us-img">
                    <img src="assets/img/misi.png" class="img-fluid" alt="Visi Himpunan" data-aos="zoom-in" data-aos-delay="100">
                </div>
                <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-2">
                    <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                        <h3><strong>Misi Himpunan Mahasiswa Teknik Informatika</strong></h3>
                    </div>
                    <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="faq-item faq-active">
                            <div class="faq-content">
                                <p>Pengoptimalan kinerja lembaga penelitian dan pengembangan Himpunan Mahasiswa Informatika ITATS.</p>
                            </div>
                        </div>
                        <div class="faq-item faq-active">
                            <div class="faq-content">
                                <p>Membuat kegiatan-kegiatan yang bertujuan memberikan pengetahuan dan wawasan tentang teknologi informasi.</p>
                            </div>
                        </div>
                        <div class="faq-item faq-active">
                            <div class="faq-content">
                                <p>Membuat kerjasama dengan institut lain baik dalam maupun luar lingkungan kampus ITATS.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

    </section><!-- Misi Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="assets/img/kampus.jpg" alt="">

        <div class="container">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-9 text-center text-xl-start">
                    <h3>Bergabunglah dengan Kami!</h3>
                    <p>Bersama-sama, kita dapat mengembangkan kompetensi di bidang teknologi informasi, berinovasi, dan membangun jaringan yang kuat untuk masa depan yang lebih cerah. Ayo, jadi bagian dari Himpunan Mahasiswa Teknik Informatika ITATS dan wujudkan potensi Anda!</p>
                </div>
                <div class="col-xl-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Bergabung Sekarang</a>
                </div>
            </div>

        </div>

    </section><!-- /Call To Action Section -->

    <!-- Pengurus Section -->
    <section id="hero" class="hero d-flex align-items-center">
    <div class="container text-center">
        <h1 data-aos="fade-up">Selamat Datang di Himpunan Kami</h1>
        <h2 data-aos="fade-up" data-aos-delay="100">Bersama Mewujudkan Impian Bersama</h2>
        <p data-aos="fade-up" data-aos-delay="200">Temui tim pengurus yang berdedikasi untuk menciptakan perubahan positif.</p>
        <a href="" class="btn btn-primary" data-aos="fade-up" data-aos-delay="300">Kenali Tim Kami</a>
    </div>
</section>
<!-- /Pengurus Section -->

    <!-- kegiatan Section -->
    <section id="kegiatan" class="kegiatan section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>kegiatan</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Card</li>
            <li data-filter=".filter-branding">Web</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-5">

                <div class="info-wrap">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                    <h3>Alamat</h3>
                    <p>Jl. Arief Rahman Hakim No.100, Klampis Ngasem, Kec. Sukolilo, Surabaya, Jawa Timur 60117</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                    <h3>Email</h3>
                    <p>hmifitats1991@gmail.com</p>
                    </div>
                </div><!-- End Info Item -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.55873199195!2d112.77634647476073!3d-7.290940242716499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa469f2b37b5%3A0x8d971ebe4e20a0d5!2sInstitut%20Teknologi%20Adhi%20Tama%20Surabaya!5e0!3m2!1sid!2sid!4v1725289185141!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-7">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                    <div class="col-md-6">
                    <label for="name-field" class="pb-2">Your Name</label>
                    <input type="text" name="name" id="name-field" class="form-control" required="">
                    </div>

                    <div class="col-md-6">
                    <label for="email-field" class="pb-2">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email-field" required="">
                    </div>

                    <div class="col-md-12">
                    <label for="subject-field" class="pb-2">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject-field" required="">
                    </div>

                    <div class="col-md-12">
                    <label for="message-field" class="pb-2">Message</label>
                    <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit">Send Message</button>
                    </div>

                </div>
                </form>
            </div><!-- End Contact Form -->
        </div>

    </div>

    </section><!-- /Contact Section -->

    </main>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelector('.slides');
    const slideCount = document.querySelectorAll('.slide').length;
    const slidesToShow = 4;
    let index = 0;

    function updateSlider() {
        const offset = -index * (100 / slidesToShow);
        slides.style.transform = `translateX(${offset}%)`;
    }

    document.querySelector('.prev').addEventListener('click', function() {
        index = (index > 0) ? index - 1 : Math.ceil(slideCount / slidesToShow) - 1;
        updateSlider();
    });

    document.querySelector('.next').addEventListener('click', function() {
        index = (index < Math.ceil(slideCount / slidesToShow) - 1) ? index + 1 : 0;
        updateSlider();
    });
});


</script>
