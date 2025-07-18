<!doctype html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      SupplyNest - Penyedia Barang Terpercaya untuk Kebutuhan Anda
    </title>
    <link
      rel="shortcut icon"
      href="assets/images/css/logo/logo-transparent.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="/css/tailwind.css">
    <!-- ==== WOW JS ==== -->
    <script src="assets/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </head>

  <body>
    
<!-- ====== Header Section Start -->
@include('layout.web.navbar')

<div
  id="home"
  class="relative overflow-hidden bg-primary min-h-screen flex items-center justify-center"
  style="background-image: url('assets/images/hero/company.jpg'); background-position: center; padding-bottom: 50px;"
>
  <div class="container px-4 mx-auto">
    <div class="flex flex-wrap items-center justify-center text-center">
      <div class="w-full px-4">
        <div
          class="hero-content wow fadeInUp mx-auto max-w-[780px] pt-20"
          data-wow-delay=".2s"
        >
          <h1
            class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]"
          >
            Penyedia Barang Terpercaya untuk Kebutuhan Anda
          </h1>
          <p
            class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]"
          >
            Kami menyediakan berbagai barang berkualitas untuk memenuhi kebutuhan bisnis dan pribadi Anda.
          </p>
          <ul class="flex flex-wrap items-center justify-center gap-5 mb-10">
            <li>
              <a
                href="{{ route('supplier') }}"
                class="inline-flex items-center justify-center rounded-md bg-blue-500 px
                -7 py-[14px] px-[10px] text-center text-base font-medium text-dark shadow-1 transition duration-300 ease-in-out hover:bg-gray-2 hover:text-body-color"
              >
                Daftar Sebagai Supplier
              </a>
            </li>
            <li>
              <a
                href="#"
                class="flex items-center gap-4 rounded-md bg-white/[0.12] px-6 py-[14px] text-base font-medium text-white transition duration-300 ease-in-out hover:bg-white hover:text-dark"
              >
                
                Hubungi Kami
              </a>
            </li>
          </ul>
          <p class="text-base font-medium text-white">
            Dapatkan barang berkualitas dengan harga terbaik
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ====== Header Section End -->

    <!-- ====== Features Section Start -->
    <section class="pb-8 pt-20  lg:pb-[70px] lg:pt-[120px]">
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
              <span class="block mb-2 text-lg font-semibold text-primary">
                Fitur Utama
              </span>
              <h2
                class="mb-3 text-3xl font-bold text-dark sm:text-4xl md:text-[40px] md:leading-[1.2]"
              >
                Apa Saja Yang Kami Tawarkan
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                Kami menyediakan berbagai fitur unggulan untuk menunjang kebutuhan Anda dalam satu platform yang mudah digunakan dan fleksibel.
              </p>
            </div>
          </div>
        </div>
       <div class="flex flex-wrap -mx-4">
  <!-- Fitur Supplier 1 -->
  <div class="w-full px-4 md:w-1/2 lg:w-1/4">
    <div class="mb-12 wow fadeInUp group" data-wow-delay=".1s">
      <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
        <span class="absolute left-0 top-0 -z-1 mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"></span>
        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M4 3a2 2 0 00-2 2v1h16V5a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v6a2 2 0 002 2h12a2 2 0 002-2V9z" clip-rule="evenodd"></path></svg>
      </div>
      <h4 class="mb-3 text-xl font-bold text-dark text-black">Manajemen Etalase Barang</h4>
      <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
        Supplier dapat mengelola data barang dan menonaktifkan produk dari etalase dengan mudah.
      </p>
    </div>
  </div>

  <!-- Fitur Supplier 2 -->
  <div class="w-full px-4 md:w-1/2 lg:w-1/4">
    <div class="mb-12 wow fadeInUp group" data-wow-delay=".15s">
      <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
        <span class="absolute left-0 top-0 -z-1 mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"></span>
        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M13 7H7v6h6V7z"></path><path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v10H5V5z" clip-rule="evenodd"></path></svg>
      </div>
      <h4 class="mb-3 text-xl font-bold text-dark text-black">Validasi Transaksi</h4>
      <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
        Validasi transaksi secara dua arah antara supplier dan klien memastikan proses pembelian yang aman.
      </p>
    </div>
  </div>

  <!-- Fitur Klien 1 -->
  <div class="w-full px-4 md:w-1/2 lg:w-1/4">
    <div class="mb-12 wow fadeInUp group" data-wow-delay=".2s">
      <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
        <span class="absolute left-0 top-0 -z-1 mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"></span>
        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M3 3h14a1 1 0 011 1v1H2V4a1 1 0 011-1zM2 7h16v9a1 1 0 01-1 1H3a1 1 0 01-1-1V7z"></path></svg>
      </div>
      <h4 class="mb-3 text-xl font-bold text-black">Pencarian & Pembelian</h4>
      <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
        Klien dapat mencari produk dengan filter dan langsung melakukan pembelian dari supplier.
      </p>
    </div>
  </div>

  <!-- Fitur Klien 2 -->
  <div class="w-full px-4 md:w-1/2 lg:w-1/4">
    <div class="mb-12 wow fadeInUp group" data-wow-delay=".25s">
      <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
        <span class="absolute left-0 top-0 -z-1 mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"></span>
        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M4 3a1 1 0 000 2h2l.4 2H15a1 1 0 00.96-.73l1.5-5.5A1 1 0 0016.5 0H5.21l-.4-2H2a1 1 0 000 2h1.21l1.5 6.5H4a1 1 0 000 2h1.3l.9 4.5A1 1 0 007.2 16h9a1 1 0 001-.99V13a1 1 0 00-1-1h-1V9a1 1 0 00-1-1H7.61l-.2-1H15a1 1 0 000-2H6.61l-.6-3H4z"></path></svg>
      </div>
      <h4 class="mb-3 text-xl font-bold text-dark text-black">Ulasan Produk</h4>
      <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
        Klien dapat memberikan ulasan langsung terhadap produk yang dibeli untuk membantu pembeli lain.
      </p>
    </div>
  </div>
</div>

    </section>
    <!-- ====== Features Section End -->

<section id="produk" class="overflow-hidden bg-gray-100 -2 py-10 md:py-[100px]">
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                    <span class="block mb-2 text-lg font-semibold text-primary">
                        Produk Unggulan
                    </span>
                    <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-black sm:text-4xl md:text-[40px]">
                        Temukan Produk Terbaik Kami
                    </h2>
                    <p class="text-base text-gray-600">
                        Pilihan produk unggulan kami dirancang untuk memenuhi kebutuhan Anda dengan kualitas terbaik dan harga bersaing.
                    </p>
                </div>
            </div>
        </div>
        <!-- Swiper -->
        <div class="swiper produk-carousel">
            <div class="swiper-wrapper">
                <!-- === SLIDE / CARD PRODUK START === -->
                @foreach ($products as $product)
                    <div class="swiper-slide">
                        <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                            <img class="h-50 w-full object-cover object-center"
                                 src="{{ asset('assets/images/produk/' . $product->gambar_produk) }}"
                                 alt="{{ $product->nama_produk }}"/>
                            <div class="p-4">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="mb-5 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white">
                                        {{ $product->status_produk }}
                                    </span>
                                    <span class="text-xs text-gray-500"></span>
                                </div>
                                <h3 class="text-md font-semibold text-black truncate mb-1">
                                    {{ $product->nama_produk }}
                                </h3>
                                <p class="text-black dark:text-black font-bold mb-1">
                                    Rp {{ number_format($product->harga_produk, 0, ',', '.') }}
                                    <span class="text-sm font-normal text-gray-500">/ pack</span>
                                </p>
                                <div class="flex items-center text-sm text-yellow-500 mb-3">
                                    <i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i>
                                    <i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i>
                                    <i class="far fa-star mr-2"></i>
                                    <span class="text-gray-600">34 ulasan</span>
                                </div>
                                <!-- Lihat Selengkapnya -->
                                <a href="#"
                                   class="inline-block mt-2 text-sm text-blue-600 hover:underline font-medium">
                                    Lihat Selengkapnya →
                                </a>
                            </div>
                        </div>
                    </div>
            @endforeach
                <!-- ==== SLIDE / CARD PRODUK END ==== -->
            </div>
            <!-- Navigasi Swiper -->
            <div class="swiper-button-prev text-gray-700"></div>
            <div class="swiper-button-next text-gray-700"></div>
        </div>
        <!-- End Swiper -->
    </div>

    <div class="mt-6 text-center">
        <button class="inline-block px-6 py-3 bg-primary text-white font-semibold rounded-md hover:bg-primary-dark transition mt-4"
                onclick="window.location.href='{{route('product')}}'">
            Produk Lainnya
        </button>
    </div>
</section>



    <!-- ====== About Section Start -->
    <section
    id="#about"
  class="bg-white pb-8 pt-20  lg:pb-[70px] lg:pt-[120px]"
>
  <div class="container px-4 mx-auto">
    <div class="wow fadeInUp" data-wow-delay=".2s">
      <div class="flex flex-wrap items-center -mx-4">
        <div class="w-full px-4 lg:w-1/2">
          <div class="mb-12 max-w-[540px] lg:mb-0">
            <h2
              class="mb-5 text-3xl font-bold leading-tight text-gray-900  sm:text-[40px] sm:leading-[1.2]"
            >
              Solusi Cerdas untuk Distribusi & Brand Berkualitas
            </h2>
            <p
              class="mb-10 text-base leading-relaxed text-gray-700 "
            >
              SupplyNest membantu Anda mempercepat distribusi produk, membangun kepercayaan brand, dan menjangkau pasar lebih luas melalui jaringan kami yang terintegrasi dan teknologi logistik modern.
              <br /><br />
              Dari UMKM hingga enterprise, kami memberikan layanan logistik, manajemen gudang, dan pemasaran terintegrasi untuk meningkatkan efisiensi dan pertumbuhan bisnis Anda.
            </p>

            <a
              href="#layanan"
              class="inline-flex items-center justify-center py-3 text-base font-medium text-white bg-purple-700 border border-purple-700 rounded-md px-7 hover:bg-purple-800 hover:border-purple-800 focus:ring-4 focus:ring-purple-300"
            >
              Lihat Layanan Kami
            </a>
          </div>
        </div>

        <div class="w-full px-4 lg:w-1/2">
          <div class="flex flex-wrap -mx-2 sm:-mx-4 lg:-mx-2 xl:-mx-4">
            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
              <div
                class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]"
              >
                <img
                  src="./assets/images/about/distribution.jpg"
                  alt="Distribusi SupplyNest"
                  class="object-cover object-center w-full h-full rounded-xl"
                />
              </div>
            </div>

            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
              <div
                class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]"
              >
                <img
                  src="./assets/images/about/warehouse.jpg"
                  alt="Gudang SupplyNest"
                  class="object-cover object-center w-full h-full rounded-xl"
                />
              </div>

              <div
                class="relative z-10 mb-4 flex items-center justify-center overflow-hidden bg-purple-700 px-6 py-12 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8 rounded-xl"
              >
                <div>
                  <span class="block text-5xl font-extrabold text-white">
                    09
                  </span>
                  <span class="block text-base font-semibold text-white">
                    Tahun
                  </span>
                  <span
                    class="block text-base font-medium text-white text-opacity-80"
                  >
                    Pengalaman Distribusi
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- ====== About Section End -->

  
    <!-- ====== Testimonial Section Start -->
<section 
    id="testimonials"
  class="overflow-hidden bg-gray-1 py-20  md:py-[120px]"
>
  <div class="container px-4 mx-auto">
    <div class="flex flex-wrap justify-center -mx-4">
      <div class="w-full px-4">
        <div class="mx-auto mb-[60px] max-w-[485px] text-center">
          <span class="block mb-2 text-lg font-semibold text-primary">
            Testimoni
          </span>
          <h2
            class="mb-3 text-3xl font-bold leading-[1.2] text-dark text-blacksm:text-4xl md:text-[40px]"
          >
            Apa Kata Klien Kami
          </h2>
          <p class="text-base text-body-color dark:text-dark-6">
            Kami dipercaya oleh berbagai perusahaan untuk menyediakan barang kebutuhan mereka dengan cepat dan terpercaya.
          </p>
        </div>
      </div>
    </div>

        <div class="-m-5">
          <div class="p-5 swiper testimonial-carousel common-carousel">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial  sm:px-[30px]"
                >
                  <div class="mb-[18px] flex items-center gap-[2px]">
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                  </div>

                  <p class="mb-6 text-base text-body-color dark:text-dark-6">
                    “Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community.’’
                  </p>

                  <a href="#" class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                      <img
                        src="./assets/images/testimonials/author-01.jpg"
                        alt="author"
                        class="h-[50px] w-[50px] overflow-hidden rounded-full"
                      />
                    </div>

                    <div>
                      <h3
                        class="text-sm font-semibold text-dark text-black"
                      >
                        Sabo Masties
                      </h3>
                      <p class="text-xs text-body-secondary">Founder @ Rolex</p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial  sm:px-[30px]"
                >
                  <div class="mb-[18px] flex items-center gap-[2px]">
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                  </div>

                  <p class="mb-6 text-base text-body-color dark:text-dark-6">
                    “Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community.’’
                  </p>

                  <a href="#" class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                      <img
                        src="./assets/images/testimonials/author-02.jpg"
                        alt="author"
                        class="h-[50px] w-[50px] overflow-hidden rounded-full"
                      />
                    </div>

                    <div>
                      <h3
                        class="text-sm font-semibold text-dark text-black"
                      >
                        Musharof Chowdhury
                      </h3>
                      <p class="text-xs text-body-secondary">
                        Founder @ Ayro UI
                      </p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial  sm:px-[30px]"
                >
                  <div class="mb-[18px] flex items-center gap-[2px]">
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                  </div>

                  <p class="mb-6 text-base text-body-color dark:text-dark-6">
                    “Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community.’’
                  </p>

                  <a href="#" class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                      <img
                        src="./assets/images/testimonials/author-03.jpg"
                        alt="author"
                        class="h-[50px] w-[50px] overflow-hidden rounded-full"
                      />
                    </div>

                    <div>
                      <h3
                        class="text-sm font-semibold text-dark text-black"
                      >
                        William Smith
                      </h3>
                      <p class="text-xs text-body-secondary">
                        Founder @ Trorex
                      </p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial  sm:px-[30px]"
                >
                  <div class="mb-[18px] flex items-center gap-[2px]">
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                  </div>

                  <p class="mb-6 text-base text-body-color dark:text-dark-6">
                    “Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community.’’
                  </p>

                  <a href="#" class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                      <img
                        src="./assets/images/testimonials/author-01.jpg"
                        alt="author"
                        class="h-[50px] w-[50px] overflow-hidden rounded-full"
                      />
                    </div>

                    <div>
                      <h3
                        class="text-sm font-semibold text-dark text-black"
                      >
                        Sabo Masties
                      </h3>
                      <p class="text-xs text-body-secondary">Founder @ Rolex</p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial  sm:px-[30px]"
                >
                  <div class="mb-[18px] flex items-center gap-[2px]">
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                  </div>

                  <p class="mb-6 text-base text-body-color dark:text-dark-6">
                    “Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community.’’
                  </p>

                  <a href="#" class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                      <img
                        src="./assets/images/testimonials/author-02.jpg"
                        alt="author"
                        class="h-[50px] w-[50px] overflow-hidden rounded-full"
                      />
                    </div>

                    <div>
                      <h3
                        class="text-sm font-semibold text-dark text-black"
                      >
                        Musharof Chowdhury
                      </h3>
                      <p class="text-xs text-body-secondary">
                        Founder @ Ayro UI
                      </p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial  sm:px-[30px]"
                >
                  <div class="mb-[18px] flex items-center gap-[2px]">
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                    <img
                      src="./assets/images/testimonials/icon-star.svg"
                      alt="star icon"
                    />
                  </div>

                  <p class="mb-6 text-base text-body-color dark:text-dark-6">
                    “Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community.’’
                  </p>

                  <a href="#" class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                      <img
                        src="./assets/images/testimonials/author-03.jpg"
                        alt="author"
                        class="h-[50px] w-[50px] overflow-hidden rounded-full"
                      />
                    </div>

                    <div>
                      <h3
                        class="text-sm font-semibold text-dark text-black"
                      >
                        William Smith
                      </h3>
                      <p class="text-xs text-body-secondary">
                        Founder @ Trorex
                      </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <div class="mt-[60px] flex items-center justify-center gap-1">
              <div class="swiper-button-prev">
                <svg
                  class="fill-current"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.25 10.2437H4.57187L10.4156 4.29687C10.725 3.9875 10.725 3.50625 10.4156 3.19687C10.1062 2.8875 9.625 2.8875 9.31562 3.19687L2.2 10.4156C1.89062 10.725 1.89062 11.2063 2.2 11.5156L9.31562 18.7344C9.45312 18.8719 9.65937 18.975 9.86562 18.975C10.0719 18.975 10.2437 18.9062 10.4156 18.7687C10.725 18.4594 10.725 17.9781 10.4156 17.6688L4.60625 11.7906H19.25C19.6625 11.7906 20.0063 11.4469 20.0063 11.0344C20.0063 10.5875 19.6625 10.2437 19.25 10.2437Z"
                  />
                </svg>
              </div>

              <div class="swiper-button-next">
                <svg
                  class="fill-current"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.8 10.45L12.6844 3.2313C12.375 2.92192 11.8938 2.92192 11.5844 3.2313C11.275 3.54067 11.275 4.02192 11.5844 4.3313L17.3594 10.2094H2.75C2.3375 10.2094 1.99375 10.5532 1.99375 10.9657C1.99375 11.3782 2.3375 11.7563 2.75 11.7563H17.4281L11.5844 17.7032C11.275 18.0126 11.275 18.4938 11.5844 18.8032C11.7219 18.9407 11.9281 19.0094 12.1344 19.0094C12.3406 19.0094 12.5469 18.9407 12.6844 18.7688L19.8 11.55C20.1094 11.2407 20.1094 10.7594 19.8 10.45Z"
                  />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Testimonial Section End -->

    <!-- ====== Team Section Start -->
    <section
      id="team"
      class="overflow-hidden bg-gray-1 pb-12 pt-20 -2 lg:pb-[90px] lg:pt-[120px]"
    >
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[485px] text-center">
              <span class="block mb-2 text-lg font-semibold text-primary">
                Our Team Members
              </span>
              <h2
                class="mb-3 text-3xl font-bold leading-[1.2] text-dark text-blacksm:text-4xl md:text-[40px]"
              >
                Our Creative Team
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
            <div
              class="px-5 pt-12 pb-10 mb-8 bg-white group rounded-xl shadow-testimonial  dark:shadow-none"
            >
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img
                  src="./assets/images/team/"
                  alt="team image"
                  class="h-[120px] w-[120px] rounded-full"
                />
                <span
                  class="absolute bottom-0 left-0 w-10 h-10 transition-all rounded-full opacity-0 -z-10 bg-secondary group-hover:opacity-100"
                ></span>
                <span
                  class="absolute top-0 right-0 transition-all opacity-0 -z-10 group-hover:opacity-100"
                >
                  <svg
                    width="55"
                    height="53"
                    viewBox="0 0 55 53"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.5118 3.1009C13.3681 3.1009 14.0622 2.40674 14.0622 1.55045C14.0622 0.69416 13.3681 0 12.5118 0C11.6555 0 10.9613 0.69416 10.9613 1.55045C10.9613 2.40674 11.6555 3.1009 12.5118 3.1009Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.5038 3.1009C23.3601 3.1009 24.0543 2.40674 24.0543 1.55045C24.0543 0.69416 23.3601 0 22.5038 0C21.6475 0 20.9534 0.69416 20.9534 1.55045C20.9534 2.40674 21.6475 3.1009 22.5038 3.1009Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.4958 3.1009C33.3521 3.1009 34.0463 2.40674 34.0463 1.55045C34.0463 0.69416 33.3521 0 32.4958 0C31.6395 0 30.9454 0.69416 30.9454 1.55045C30.9454 2.40674 31.6395 3.1009 32.4958 3.1009Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.4875 3.1009C43.3438 3.1009 44.038 2.40674 44.038 1.55045C44.038 0.69416 43.3438 0 42.4875 0C41.6312 0 40.9371 0.69416 40.9371 1.55045C40.9371 2.40674 41.6312 3.1009 42.4875 3.1009Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M52.4795 3.1009C53.3358 3.1009 54.03 2.40674 54.03 1.55045C54.03 0.69416 53.3358 0 52.4795 0C51.6233 0 50.9291 0.69416 50.9291 1.55045C50.9291 2.40674 51.6233 3.1009 52.4795 3.1009Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M2.52045 13.0804C3.37674 13.0804 4.0709 12.3862 4.0709 11.5299C4.0709 10.6737 3.37674 9.97949 2.52045 9.97949C1.66416 9.97949 0.970001 10.6737 0.970001 11.5299C0.970001 12.3862 1.66416 13.0804 2.52045 13.0804Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.5118 13.0804C13.3681 13.0804 14.0622 12.3862 14.0622 11.5299C14.0622 10.6737 13.3681 9.97949 12.5118 9.97949C11.6555 9.97949 10.9613 10.6737 10.9613 11.5299C10.9613 12.3862 11.6555 13.0804 12.5118 13.0804Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.5038 13.0804C23.3601 13.0804 24.0543 12.3862 24.0543 11.5299C24.0543 10.6737 23.3601 9.97949 22.5038 9.97949C21.6475 9.97949 20.9534 10.6737 20.9534 11.5299C20.9534 12.3862 21.6475 13.0804 22.5038 13.0804Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.4958 13.0804C33.3521 13.0804 34.0463 12.3862 34.0463 11.5299C34.0463 10.6737 33.3521 9.97949 32.4958 9.97949C31.6395 9.97949 30.9454 10.6737 30.9454 11.5299C30.9454 12.3862 31.6395 13.0804 32.4958 13.0804Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.4875 13.0804C43.3438 13.0804 44.038 12.3862 44.038 11.5299C44.038 10.6737 43.3438 9.97949 42.4875 9.97949C41.6312 9.97949 40.9371 10.6737 40.9371 11.5299C40.9371 12.3862 41.6312 13.0804 42.4875 13.0804Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M52.4795 13.0804C53.3358 13.0804 54.03 12.3862 54.03 11.5299C54.03 10.6737 53.3358 9.97949 52.4795 9.97949C51.6233 9.97949 50.9291 10.6737 50.9291 11.5299C50.9291 12.3862 51.6233 13.0804 52.4795 13.0804Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M2.52045 23.0604C3.37674 23.0604 4.0709 22.3662 4.0709 21.5099C4.0709 20.6536 3.37674 19.9595 2.52045 19.9595C1.66416 19.9595 0.970001 20.6536 0.970001 21.5099C0.970001 22.3662 1.66416 23.0604 2.52045 23.0604Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.5118 23.0604C13.3681 23.0604 14.0622 22.3662 14.0622 21.5099C14.0622 20.6536 13.3681 19.9595 12.5118 19.9595C11.6555 19.9595 10.9613 20.6536 10.9613 21.5099C10.9613 22.3662 11.6555 23.0604 12.5118 23.0604Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.5038 23.0604C23.3601 23.0604 24.0543 22.3662 24.0543 21.5099C24.0543 20.6536 23.3601 19.9595 22.5038 19.9595C21.6475 19.9595 20.9534 20.6536 20.9534 21.5099C20.9534 22.3662 21.6475 23.0604 22.5038 23.0604Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.4958 23.0604C33.3521 23.0604 34.0463 22.3662 34.0463 21.5099C34.0463 20.6536 33.3521 19.9595 32.4958 19.9595C31.6395 19.9595 30.9454 20.6536 30.9454 21.5099C30.9454 22.3662 31.6395 23.0604 32.4958 23.0604Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.4875 23.0604C43.3438 23.0604 44.038 22.3662 44.038 21.5099C44.038 20.6536 43.3438 19.9595 42.4875 19.9595C41.6312 19.9595 40.9371 20.6536 40.9371 21.5099C40.9371 22.3662 41.6312 23.0604 42.4875 23.0604Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M52.4795 23.0604C53.3358 23.0604 54.03 22.3662 54.03 21.5099C54.03 20.6536 53.3358 19.9595 52.4795 19.9595C51.6233 19.9595 50.9291 20.6536 50.9291 21.5099C50.9291 22.3662 51.6233 23.0604 52.4795 23.0604Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M2.52045 33.0404C3.37674 33.0404 4.0709 32.3462 4.0709 31.4899C4.0709 30.6336 3.37674 29.9395 2.52045 29.9395C1.66416 29.9395 0.970001 30.6336 0.970001 31.4899C0.970001 32.3462 1.66416 33.0404 2.52045 33.0404Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.5118 33.0404C13.3681 33.0404 14.0622 32.3462 14.0622 31.4899C14.0622 30.6336 13.3681 29.9395 12.5118 29.9395C11.6555 29.9395 10.9613 30.6336 10.9613 31.4899C10.9613 32.3462 11.6555 33.0404 12.5118 33.0404Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.5038 33.0404C23.3601 33.0404 24.0543 32.3462 24.0543 31.4899C24.0543 30.6336 23.3601 29.9395 22.5038 29.9395C21.6475 29.9395 20.9534 30.6336 20.9534 31.4899C20.9534 32.3462 21.6475 33.0404 22.5038 33.0404Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.4958 33.0404C33.3521 33.0404 34.0463 32.3462 34.0463 31.4899C34.0463 30.6336 33.3521 29.9395 32.4958 29.9395C31.6395 29.9395 30.9454 30.6336 30.9454 31.4899C30.9454 32.3462 31.6395 33.0404 32.4958 33.0404Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.4875 33.0404C43.3438 33.0404 44.038 32.3462 44.038 31.4899C44.038 30.6336 43.3438 29.9395 42.4875 29.9395C41.6312 29.9395 40.9371 30.6336 40.9371 31.4899C40.9371 32.3462 41.6312 33.0404 42.4875 33.0404Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M52.4795 33.0404C53.3358 33.0404 54.03 32.3462 54.03 31.4899C54.03 30.6336 53.3358 29.9395 52.4795 29.9395C51.6233 29.9395 50.9291 30.6336 50.9291 31.4899C50.9291 32.3462 51.6233 33.0404 52.4795 33.0404Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M2.52045 43.0203C3.37674 43.0203 4.0709 42.3262 4.0709 41.4699C4.0709 40.6136 3.37674 39.9194 2.52045 39.9194C1.66416 39.9194 0.970001 40.6136 0.970001 41.4699C0.970001 42.3262 1.66416 43.0203 2.52045 43.0203Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.5118 43.0203C13.3681 43.0203 14.0622 42.3262 14.0622 41.4699C14.0622 40.6136 13.3681 39.9194 12.5118 39.9194C11.6555 39.9194 10.9613 40.6136 10.9613 41.4699C10.9613 42.3262 11.6555 43.0203 12.5118 43.0203Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.5038 43.0203C23.3601 43.0203 24.0543 42.3262 24.0543 41.4699C24.0543 40.6136 23.3601 39.9194 22.5038 39.9194C21.6475 39.9194 20.9534 40.6136 20.9534 41.4699C20.9534 42.3262 21.6475 43.0203 22.5038 43.0203Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.4958 43.0203C33.3521 43.0203 34.0463 42.3262 34.0463 41.4699C34.0463 40.6136 33.3521 39.9194 32.4958 39.9194C31.6395 39.9194 30.9454 40.6136 30.9454 41.4699C30.9454 42.3262 31.6395 43.0203 32.4958 43.0203Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.4875 43.0203C43.3438 43.0203 44.038 42.3262 44.038 41.4699C44.038 40.6136 43.3438 39.9194 42.4875 39.9194C41.6312 39.9194 40.9371 40.6136 40.9371 41.4699C40.9371 42.3262 41.6312 43.0203 42.4875 43.0203Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M52.4795 43.0203C53.3358 43.0203 54.03 42.3262 54.03 41.4699C54.03 40.6136 53.3358 39.9194 52.4795 39.9194C51.6233 39.9194 50.9291 40.6136 50.9291 41.4699C50.9291 42.3262 51.6233 43.0203 52.4795 43.0203Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M2.52045 53.0001C3.37674 53.0001 4.0709 52.3059 4.0709 51.4496C4.0709 50.5933 3.37674 49.8992 2.52045 49.8992C1.66416 49.8992 0.970001 50.5933 0.970001 51.4496C0.970001 52.3059 1.66416 53.0001 2.52045 53.0001Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.5118 53.0001C13.3681 53.0001 14.0622 52.3059 14.0622 51.4496C14.0622 50.5933 13.3681 49.8992 12.5118 49.8992C11.6555 49.8992 10.9613 50.5933 10.9613 51.4496C10.9613 52.3059 11.6555 53.0001 12.5118 53.0001Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.5038 53.0001C23.3601 53.0001 24.0543 52.3059 24.0543 51.4496C24.0543 50.5933 23.3601 49.8992 22.5038 49.8992C21.6475 49.8992 20.9534 50.5933 20.9534 51.4496C20.9534 52.3059 21.6475 53.0001 22.5038 53.0001Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.4958 53.0001C33.3521 53.0001 34.0463 52.3059 34.0463 51.4496C34.0463 50.5933 33.3521 49.8992 32.4958 49.8992C31.6395 49.8992 30.9454 50.5933 30.9454 51.4496C30.9454 52.3059 31.6395 53.0001 32.4958 53.0001Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.4875 53.0001C43.3438 53.0001 44.038 52.3059 44.038 51.4496C44.038 50.5933 43.3438 49.8992 42.4875 49.8992C41.6312 49.8992 40.9371 50.5933 40.9371 51.4496C40.9371 52.3059 41.6312 53.0001 42.4875 53.0001Z"
                      fill="#3758F9"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M52.4795 53.0001C53.3358 53.0001 54.03 52.3059 54.03 51.4496C54.03 50.5933 53.3358 49.8992 52.4795 49.8992C51.6233 49.8992 50.9291 50.5933 50.9291 51.4496C50.9291 52.3059 51.6233 53.0001 52.4795 53.0001Z"
                      fill="#3758F9"
                    />
                  </svg>
                </span>
              </div>
              <div class="text-center">
                <h4
                  class="mb-1 text-lg font-semibold text-dark text-black"
                >
                  Rizky Ismail Sidik
                </h4>
                <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                  Project Manager
                </p>
                <div class="flex items-center justify-center gap-5">
                  <a
                    href="javascript:void(0)"
                    class="text-dark-6 hover:text-primary"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="fill-current"
                    >
                      <path
                        d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                        fill=""
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="text-dark-6 hover:text-primary"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="fill-current"
                    >
                      <path
                        d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                        fill=""
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="text-dark-6 hover:text-primary"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="fill-current"
                    >
                      <path
                        d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                        fill=""
                      />
                      <path
                        d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                        fill=""
                      />
                      <path
                        d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                        fill=""
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
            <div
              class="px-5 pt-12 pb-10 mb-8 bg-white group rounded-xl shadow-testimonial  dark:shadow-none"
            >
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img
                  src="https://cdn.tailgrids.com/1.0/assets/images/team/image-07/"
                  alt="team image"
                  class="h-[120px] w-[120px] rounded-full"
                />
                <span
                  class="absolute bottom-0 left-0 w-10 h-10 transition-all rounded-full opacity-0 -z-10 bg-secondary group-hover:opacity-100"
                ></span>
                <span
                  class="absolute top-0 right-0 transition-all opacity-0 -z-10 group-hover:opacity-100"
                >
                  <svg
                    width="45"
                    height="53"
                    viewBox="0 0 45 53"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                      fill="#3056D3"
                    />
                  </svg>
                </span>
              </div>
              <div class="text-center">
                <h4
                  class="mb-1 text-lg font-semibold text-dark text-black"
                >
                  Chandra M Reiga
                </h4>
                <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                  Backend Developer
                </p>
                <div class="flex items-center justify-center gap-5">
                  <a
                    href="javascript:void(0)"
                    class="text-dark-6 hover:text-primary"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="fill-current"
                    >
                      <path
                        d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                        fill=""
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="text-dark-6 hover:text-primary"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="fill-current"
                    >
                      <path
                        d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                        fill=""
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="text-dark-6 hover:text-primary"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="fill-current"
                    >
                      <path
                        d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                        fill=""
                      />
                      <path
                        d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                        fill=""
                      />
                      <path
                        d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                        fill=""
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
            <div
              class="px-5 pt-12 pb-10 mb-8 bg-white group rounded-xl shadow-testimonial  dark:shadow-none"
            >
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img
                  src="https://cdn.tailgrids.com/1.0/assets/images/team/image-07/"
                  alt="team image"
                  class="h-[120px] w-[120px] rounded-full"
                />
                <span
                  class="absolute bottom-0 left-0 w-10 h-10 transition-all rounded-full opacity-0 -z-10 bg-secondary group-hover:opacity-100"
                ></span>
                <span
                  class="absolute top-0 right-0 transition-all opacity-0 -z-10 group-hover:opacity-100"
                >
                  <svg
                    width="45"
                    height="53"
                    viewBox="0 0 45 53"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                      fill="#3056D3"
                    />
                  </svg>
                </span>
              </div>
              <div class="text-center">
                <h4
                  class="mb-1 text-lg font-semibold text-dark text-black"
                >
                  muhammad Haikal
                </h4>
                <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                  Tester
                </p>
                <div class="flex items-center justify-center gap-5">
                  <a
                    href="javascript:void(0)"
                    class="text-dark-6 hover:text-primary"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="fill-current"
                    >
                      <path
                        d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                        fill=""
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="text-dark-6 hover:text-primary"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="fill-current"
                    >
                      <path
                        d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                        fill=""
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="text-dark-6 hover:text-primary"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="fill-current"
                    >
                      <path
                        d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                        fill=""
                      />
                      <path
                        d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                        fill=""
                      />
                      <path
                        d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                        fill=""
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
            <div
              class="px-5 pt-12 pb-10 mb-8 bg-white group rounded-xl shadow-testimonial  dark:shadow-none"
            >
              <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                <img
                  src="https://cdn.tailgrids.com/1.0/assets/images/team/image-07/"
                  alt="team image"
                  class="h-[120px] w-[120px] rounded-full"
                />
                <span
                  class="absolute bottom-0 left-0 w-10 h-10 transition-all rounded-full opacity-0 -z-10 bg-secondary group-hover:opacity-100"
                ></span>
                <span
                  class="absolute top-0 right-0 transition-all opacity-0 -z-10 group-hover:opacity-100"
                >
                  <svg
                    width="45"
                    height="53"
                    viewBox="0 0 45 53"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                      fill="#3056D3"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                      fill="#3056D3"
                    />
                  </svg>
                </span>
              </div>
              <div class="text-center">
                <h4
                  class="mb-1 text-lg font-semibold text-dark text-black"
                >
                  ZiddanFarrel
                </h4>
                <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                  Frontend Developer
                </p>
                <div class="flex items-center justify-center gap-5">
                  <a
                    href="javascript:void(0)"
                    class="text-dark-6 hover:text-primary"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="fill-current"
                    >
                      <path
                        d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                        fill=""
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="text-dark-6 hover:text-primary"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="fill-current"
                    >
                      <path
                        d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                        fill=""
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="text-dark-6 hover:text-primary"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="fill-current"
                    >
                      <path
                        d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                        fill=""
                      />
                      <path
                        d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                        fill=""
                      />
                      <path
                        d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                        fill=""
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Team Section End -->

    <!-- ====== Blog Section Start -->
    <section class="bg-white pb-10 pt-20  lg:pb-20 lg:pt-[120px]" id="blog">
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[485px] text-center">
              <span class="block mb-2 text-lg font-semibold text-primary">
                Our Blogs
              </span>
              <h2
                class="mb-4 text-3xl font-bold text-dark text-blacksm:text-4xl md:text-[40px] md:leading-[1.2]"
              >
                Our Recent News
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
              <div class="mb-8 overflow-hidden rounded-[5px]">
                <a href="blog-details.html" class="block">
                  <img
                    src="./assets/images/blog/blog-01.jpg"
                    alt="image"
                    class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                  />
                </a>
              </div>
              <div>
                <span
                  class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"
                >
                  Dec 22, 2023
                </span>
                <h3>
                  <a
                    href="javascript:void(0)"
                    class="inline-block mb-4 text-xl font-semibold text-dark hover:text-primary text-blackdark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    Meet AutoManage, the best AI management tools
                  </a>
                </h3>
                <p
                  class="max-w-[370px] text-base text-body-color dark:text-dark-6"
                >
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="mb-10 wow fadeInUp group" data-wow-delay=".15s">
              <div class="mb-8 overflow-hidden rounded-[5px]">
                <a href="blog-details.html" class="block">
                  <img
                    src="./assets/images/blog/blog-02.jpg"
                    alt="image"
                    class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                  />
                </a>
              </div>
              <div>
                <span
                  class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"
                >
                  Mar 15, 2023
                </span>
                <h3>
                  <a
                    href="javascript:void(0)"
                    class="inline-block mb-4 text-xl font-semibold text-dark hover:text-primary text-blackdark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    How to earn more money as a wellness coach
                  </a>
                </h3>
                <p
                  class="max-w-[370px] text-base text-body-color dark:text-dark-6"
                >
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="mb-10 wow fadeInUp group" data-wow-delay=".2s">
              <div class="mb-8 overflow-hidden rounded-[5px]">
                <a href="blog-details.html" class="block">
                  <img
                    src="./assets/images/blog/blog-03.jpg"
                    alt="image"
                    class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                  />
                </a>
              </div>
              <div>
                <span
                  class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"
                >
                  Jan 05, 2023
                </span>
                <h3>
                  <a
                    href="javascript:void(0)"
                    class="inline-block mb-4 text-xl font-semibold text-dark hover:text-primary text-blackdark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    The no-fuss guide to upselling and cross selling
                  </a>
                </h3>
                <p
                  class="max-w-[370px] text-base text-body-color dark:text-dark-6"
                >
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Blog Section End -->

    <!-- ====== Contact Start ====== -->
    <section id="contact" class="relative py-20 md:py-[120px]">
      <div class="absolute top-0 left-0 w-full h-full -z-1 "></div>
      <div
        class="absolute left-0 top-0 -z-1 h-1/2 w-full bg-[#E9F9FF] -700 lg:h-[45%] xl:h-1/2"
      ></div>
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
            <div class="ud-contact-content-wrapper">
              <div class="ud-contact-title mb-12 lg:mb-[150px]">
                <span
                  class="block mb-6 text-base font-medium text-dark text-black"
                >
                  CONTACT US
                </span>
                <h2
                  class="max-w-[260px] text-[35px] font-semibold leading-[1.14] text-dark text-black"
                >
                  Let's talk about your problem.
                </h2>
              </div>
              <div class="flex flex-wrap justify-between mb-12 lg:mb-0">
                <div class="mb-8 flex w-[330px] max-w-full">
                  <div class="mr-6 text-[32px] text-primary">
                    <svg
                      width="29"
                      height="35"
                      viewBox="0 0 29 35"
                      class="fill-current"
                    >
                      <path
                        d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z"
                      />
                      <path
                        d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z"
                      />
                    </svg>
                  </div>
                  <div>
                    <h5
                      class="mb-[18px] text-lg font-semibold text-dark text-black"
                    >
                      Our Location
                    </h5>
                    <p class="text-base text-body-color dark:text-dark-6">
                      401 Broadway, 24th Floor, Orchard Cloud View, London
                    </p>
                  </div>
                </div>
                <div class="mb-8 flex w-[330px] max-w-full">
                  <div class="mr-6 text-[32px] text-primary">
                    <svg
                      width="34"
                      height="25"
                      viewBox="0 0 34 25"
                      class="fill-current"
                    >
                      <path
                        d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z"
                      />
                    </svg>
                  </div>
                  <div>
                    <h5
                      class="mb-[18px] text-lg font-semibold text-dark text-black"
                    >
                      How Can We Help?
                    </h5>
                    <p class="text-base text-body-color dark:text-dark-6">
                      info@yourdomain.com
                    </p>
                    <p class="mt-1 text-base text-body-color dark:text-dark-6">
                      contact@yourdomain.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
            <div
              class="wow fadeInUp rounded-lg bg-white px-8 py-10 shadow-testimonial -2 dark:shadow-none sm:px-10 sm:py-12 md:p-[60px] lg:p-10 lg:px-10 lg:py-12 2xl:p-[60px]"
              data-wow-delay=".2s
              "
            >
              <h3
                class="mb-8 text-2xl font-semibold text-dark text-blackmd:text-[28px] md:leading-[1.42]"
              >
                Send us a Message
              </h3>
              <form>
                <div class="mb-[22px]">
                  <label
                    for="fullName"
                    class="block mb-4 text-sm text-body-color dark:text-dark-6"
                    >Full Name*</label
                  >
                  <input
                    type="text"
                    name="fullName"
                    placeholder="Adam Gelius"
                    class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-hidden dark:border-dark-3 dark:text-dark-6"
                  />
                </div>
                <div class="mb-[22px]">
                  <label
                    for="email"
                    class="block mb-4 text-sm text-body-color dark:text-dark-6"
                    >Email*</label
                  >
                  <input
                    type="email"
                    name="email"
                    placeholder="example@yourmail.com"
                    class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-hidden dark:border-dark-3 dark:text-dark-6"
                  />
                </div>
                <div class="mb-[22px]">
                  <label
                    for="phone"
                    class="block mb-4 text-sm text-body-color dark:text-dark-6"
                    >Phone*</label
                  >
                  <input
                    type="text"
                    name="phone"
                    placeholder="+885 1254 5211 552"
                    class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-hidden dark:border-dark-3 dark:text-dark-6"
                  />
                </div>
                <div class="mb-[30px]">
                  <label
                    for="message"
                    class="block mb-4 text-sm text-body-color dark:text-dark-6"
                    >Message*</label
                  >
                  <textarea
                    name="message"
                    rows="1"
                    placeholder="type your message here"
                    class="w-full resize-none border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-hidden dark:border-dark-3 dark:text-dark-6"
                  ></textarea>
                </div>
                <div class="mb-0">
                  <button
                    type="submit"
                    class="inline-flex items-center justify-center px-10 py-3 text-base font-medium text-white transition duration-300 ease-in-out rounded-md bg-primary hover:bg-blue-dark"
                  >
                    Send
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Contact End ====== -->

    <!-- ====== Brands Section Start -->
    
    <!-- ====== Brands Section End -->

    @include('layout.web.footer')
    
     <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script> 
    <script>
  // Dropdown JS
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('profileDropdownBtn');
    const menu = document.getElementById('profileDropdownMenu');
    if (!btn || !menu) return;
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      menu.classList.toggle('hidden');
    });
    document.addEventListener('click', function (e) {
      if (!menu.classList.contains('hidden') && !menu.contains(e.target) && !btn.contains(e.target)) {
        menu.classList.add('hidden');
      }
    });
  });
</script>
  </body>
</html>
