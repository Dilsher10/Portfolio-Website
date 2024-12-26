<?php
include 'includes/header.php';
?>

      <div class="main-content w-100">
        <!-- top header  -->
        <div
          class="w-100 bgn1-color p-3 position-fixed z-3 top-0 d-lg-none d-flex align-items-center justify-content-between br-bottom-n5 box-shadow1"
        >
          <a href="index.html" class="side-icon bgn2-color brn4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="11"
              height="15"
              viewBox="0 0 11 15"
              fill="none"
            >
              <g clip-path="url(#clip0_3569_434)">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M5.69145 8.43063L1.72801 5.49387L5.69145 2.54023V0L0 4.21303V6.75919L5.69145 10.9887V8.43063Z"
                  fill="rgba(var(--p1))"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M1.72801 5.49387L5.69145 2.54023V0L0 4.21303V6.75919L1.72801 5.49387Z"
                  fill="rgba(var(--p1))"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.86328 6.5702L8.82672 9.5065L4.86328 12.4606V15.0004L10.5552 10.7864V8.24163L4.86328 4.01172V6.5702Z"
                  fill="rgba(var(--p1))"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.86328 6.5702L8.82672 9.5065L10.5552 10.7864V8.24163L4.86328 4.01172V6.5702Z"
                  fill="rgba(var(--p1))"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M8.72466 2.00391C9.52091 2.00391 10.1657 2.64912 10.1657 3.44491C10.1657 4.24115 9.52091 4.88591 8.72466 4.88591C7.92841 4.88591 7.2832 4.2407 7.2832 3.44491C7.2832 2.64912 7.92841 2.00391 8.72466 2.00391Z"
                  fill="rgba(var(--p1))"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M1.83013 12.9972C1.03388 12.9972 0.388672 12.352 0.388672 11.5562C0.388672 10.7604 1.03388 10.1152 1.82967 10.1152C2.62546 10.1152 3.27067 10.76 3.27067 11.5562C3.27067 12.3525 2.62592 12.9972 1.82967 12.9972H1.83013Z"
                  fill="rgba(var(--p1))"
                />
              </g>
              <defs>
                <clipPath>
                  <rect width="10.5561" height="15" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>

          <div class="d-flex gap-3 align-items-center">
            <a href="checkout.html" class="position-relative">
              <div class="side-icon bg1-color">
                <i class="ph ph-shopping-cart n11-color"></i>
              </div>
              <div class="cart-counter-header">
                <span class="n1-color">02</span>
              </div>
            </a>
            <button class="side-icon bg1-color mood_toggle">
              <i class="mood_icon ph-fill ph-moon fs-six n11-color"></i>
            </button>
          </div>
        </div>

        <!-- bottom header  -->
        <div
          class="w-100 bgn1-color p-3 position-fixed z-3 bottom-0 d-block d-lg-none br-top-n5 box-shadow1"
        >
          <div class="header-bottom-menu w-full">
            <ul class="d-flex gap-1 align-items-center justify-content-between">
              <li>
                <a
                  href="index.html"
                  class="d-flex align-items-center gap-2 n5-color fs-eight p-2"
                >
                  <span
                    class="fs-five d-flex align-items-center justify-content-center"
                  >
                    <i class="ph-fill ph-user"></i>
                  </span>
                  <span class="d-none d-md-block">About Me</span></a
                >
              </li>
              <li>
                <a
                  href="portfolio.html"
                  class="d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex align-items-center gap-2 n5-color fs-eight p-2"
                  >
                    <span
                      class="fs-five d-flex align-items-center justify-content-center"
                    >
                      <i class="ph-fill ph-code-block"></i>
                    </span>
                    <span class="d-none d-md-block">Portfolio</span>
                  </div>
                  <span
                    class="n5-color bg2-color fs-ten px-1 pt-1 rounded-2 me-3 d-none d-md-block"
                    >16</span
                  >
                </a>
              </li>
              <li>
                <a
                  href="price.html"
                  class="d-flex align-items-center gap-2 n5-color fs-eight p-2"
                >
                  <span
                    class="fs-five d-flex align-items-center justify-content-center"
                  >
                    <i class="ph-fill ph-briefcase"></i>
                  </span>
                  <span class="d-none d-md-block">Pricing</span>
                </a>
              </li>
              <li>
                <a
                  href="resume.html"
                  class="d-flex align-items-center gap-2 n5-color fs-eight p-2"
                >
                  <span
                    class="fs-five d-flex align-items-center justify-content-center"
                    ><i class="ph-fill ph-notebook fs-six"></i
                  ></span>
                  <span class="d-none d-md-block">Resume</span>
                </a>
              </li>
              <li class="rounded-3 bg1-color">
                <a
                  href="products.html"
                  class="d-flex align-items-center gap-2 n11-color fs-eight p-2"
                >
                  <span
                    class="fs-five d-flex align-items-center justify-content-center"
                    ><i class="ph-fill ph-shopping-bag fs-six"></i
                  ></span>
                  <span class="d-none d-md-block">Products</span>
                </a>
              </li>
              <li>
                <a
                  href="blog.html"
                  class="d-flex align-items-center gap-2 n5-color fs-eight p-2"
                >
                  <span
                    class="fs-five d-flex align-items-center justify-content-center"
                  >
                    <i class="ph-fill ph-newspaper-clipping"></i>
                  </span>
                  <span class="d-none d-md-block">Blog</span>
                </a>
              </li>
              <li>
                <a
                  href="contact.html"
                  class="d-flex align-items-center gap-2 n5-color fs-eight p-2"
                >
                  <span
                    class="fs-five d-flex align-items-center justify-content-center"
                    ><i class="ph-fill ph-envelope"></i
                  ></span>
                  <span class="d-none d-md-block">Contact</span>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- color palettes btns -->
        <div class="color-switcher">
          <button class="switcher-btn">
            <i class="ph ph-gear-six"></i>
          </button>
          <div class="pallates box-shadow2 brn4">
            <div class="d-flex gap-2">
              <button
                class="color-btn bg-color1"
                data-color="120, 171, 168"
              ></button>
              <button
                class="color-btn bg-color2"
                data-color="255, 145, 251"
              ></button>
              <button
                class="color-btn bg-color3"
                data-color="253, 187, 46"
              ></button>
            </div>
            <div class="d-flex gap-2 mt-2">
              <button
                class="color-btn bg-color4"
                data-color="82, 113, 255"
              ></button>
              <button
                class="color-btn bg-color5"
                data-color=" 0, 255, 255"
              ></button>
              <button
                class="color-btn bg-color6"
                data-color="84, 182, 137"
              ></button>
            </div>
          </div>
        </div>

        <!-- best project section start -->
        <section class="pt-120 pb-120 mt-10 mt-lg-0">
          <div class="pb-60 br-bottom-n3">
            <div data-aos="zoom-in" class="page-heading">
              <h3
                class="page-title n5-color fs-onefw-semibold n5-color mb-2 mb-md-3 text-center"
              >
                Check Out What I've Created for You
              </h3>
              <p class="fs-seven n5-color mb-4 mb-md-8 text-center">
                Explore a collection of projects where creativity meets code.
                From sleek, responsive designs to intuitive user experiences,
                each project represents a unique solution tailored to meet
                client needs. Dive in to see how ideas transform into digital
                realities.
              </p>
              <a
                href="contact.html"
                class="w-max primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto"
              >
                <i class="ph ph-paper-plane-tilt"></i>Hire Me
              </a>
            </div>
          </div>
          <div class="container mt-8 mt-md-15">
            <!-- tab -->
            <div>
              <ul
                data-aos="zoom-in"
                data-aos-duration="800"
                class="tabs d-flex gap-5 gap-md-10 justify-content-center flex-wrap p-2 pb-5 pb-md-10"
              >
                <li
                  data-tab-target="#all"
                  class="active fs-seven fw-medium cursor-pointer n3-color pb-1 tab"
                >
                  All
                </li>
                <li
                  data-tab-target="#e-books"
                  class="fs-seven fw-medium cursor-pointer n3-color pb-1 tab"
                >
                  E-books
                </li>
                <li
                  data-tab-target="#courses"
                  class="fs-seven fw-medium cursor-pointer n3-color pb-1 tab"
                >
                  Courses
                </li>
                <li
                  data-tab-target="#assets"
                  class="fs-seven fw-medium cursor-pointer n3-color pb-1 tab"
                >
                  Assets
                </li>
              </ul>

              <div class="tab-content position-relative overflow-hidden">
                <div id="all" data-tab-content class="active">
                  <div class="row g-6 g-md-8">
                    <div
                      data-aos="fade-up"
                      data-aos-duration="800"
                      class="col-sm-6 col-xxl-4"
                    >
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/react-dashboard.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/react-dashboard.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            React Dashboard Template
                          </a>
                          <p class="fs-six n3-color">
                            Develop modern, beautiful, and responsive
                            applications in half the time.
                          </p>

                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $120 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      data-aos="fade-up"
                      data-aos-duration="800"
                      class="col-sm-6 col-xxl-4"
                    >
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/ui-kit.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/ui-kit.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            React UI Kit
                          </a>
                          <p class="fs-six n3-color">
                            A professional React Kit that comes with plenty of
                            ready-to-use Material UI components.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $110 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      data-aos="fade-up"
                      data-aos-duration="800"
                      class="col-sm-6 col-xxl-4"
                    >
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/angular-dashboard.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/angular-dashboard.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            Angular Dashboard Template
                          </a>
                          <p class="fs-six n3-color">
                            CoreUI PRO Angular Admin Template makes app
                            development lightning fast.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $100 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      data-aos="fade-up"
                      data-aos-duration="800"
                      class="col-sm-6 col-xxl-4"
                    >
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog4.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog4.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            Unleashing Creativity in Code
                          </a>
                          <p class="fs-six n3-color">
                            Embark on a journey through the ever-evolving
                            landscape of software development.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $120 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      data-aos="fade-up"
                      data-aos-duration="800"
                      class="col-sm-6 col-xxl-4"
                    >
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog3.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog3.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            Mastering Modern Development
                          </a>
                          <p class="fs-six n3-color">
                            Learn the latest techniques and tools for mastering
                            modern development.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $100 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      data-aos="fade-up"
                      data-aos-duration="800"
                      class="col-sm-6 col-xxl-4"
                    >
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog5.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog5.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            Beyond the Basics
                          </a>
                          <p class="fs-six n3-color">
                            Learn how to prepare yourself for the next
                            generation of software development.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $120 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="e-books" data-tab-content>
                  <div class="row g-6 g-md-8">
                    <div class="col-sm-6 col-xxl-4">
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog4.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog4.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            Unleashing Creativity in Code
                          </a>
                          <p class="fs-six n3-color">
                            Embark on a journey through the ever-evolving
                            landscape of software development.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $120 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xxl-4">
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog3.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog3.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            Mastering Modern Development
                          </a>
                          <p class="fs-six n3-color">
                            Learn the latest techniques and tools for mastering
                            modern development.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $100 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xxl-4">
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog5.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog5.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            Beyond the Basics
                          </a>
                          <p class="fs-six n3-color">
                            Learn how to prepare yourself for the next
                            generation of software development.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $120 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xxl-4">
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/react-dashboard.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/react-dashboard.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            React Dashboard Template
                          </a>
                          <p class="fs-six n3-color">
                            Develop modern, beautiful, and responsive
                            applications in half the time.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $120 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="courses" data-tab-content>
                  <div class="row g-6 g-md-8">
                    <div class="col-sm-6 col-xxl-4">
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/react-dashboard.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/react-dashboard.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            React Dashboard Template
                          </a>
                          <p class="fs-six n3-color">
                            Develop modern, beautiful, and responsive
                            applications in half the time.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $120 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xxl-4">
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/ui-kit.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/ui-kit.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            React UI Kit
                          </a>
                          <p class="fs-six n3-color">
                            A professional React Kit that comes with plenty of
                            ready-to-use Material UI components.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $120 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-xxl-4">
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog4.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog4.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            Unleashing Creativity in Code
                          </a>
                          <p class="fs-six n3-color">
                            Embark on a journey through the ever-evolving
                            landscape of software development.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $120 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xxl-4">
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog3.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog3.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            Mastering Modern Development
                          </a>
                          <p class="fs-six n3-color">
                            Learn the latest techniques and tools for mastering
                            modern development.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $100 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="assets" data-tab-content>
                  <div class="row g-6 g-md-8">
                    <div class="col-sm-6 col-xxl-4">
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog5.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog5.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            Beyond the Basics
                          </a>
                          <p class="fs-six n3-color">
                            Learn how to prepare yourself for the next
                            generation of software development.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $120 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xxl-4">
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/react-dashboard.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/react-dashboard.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            React Dashboard Template
                          </a>
                          <p class="fs-six n3-color">
                            Develop modern, beautiful, and responsive
                            applications in half the time.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $120 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 col-xxl-4">
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog4.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog4.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            Unleashing Creativity in Code
                          </a>
                          <p class="fs-six n3-color">
                            Embark on a journey through the ever-evolving
                            landscape of software development.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $120 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xxl-4">
                      <div class="product-card">
                        <a href="products-details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog3.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/blog3.png"
                                alt="..."
                                class="product-img w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>
                        <div class="px-2">
                          <a
                            href="products-details.html"
                            class="project-title fs-six fw-semibold n5-color mt-3 mt-md-5 mb-2 d-block"
                          >
                            Mastering Modern Development
                          </a>
                          <p class="fs-six n3-color">
                            Learn the latest techniques and tools for mastering
                            modern development.
                          </p>
                          <span class="n5-color fs-seven fw-medium mt-2 mt-md-3"
                            >Price: $100 USD</span
                          >
                          <div
                            class="d-flex gap-3 gap-md-4 align-items-center mt-3 mt-md-5"
                          >
                            <button
                              type="button"
                              class="primary-btn px-3 py-2 rounded n11-color"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal"
                            >
                              Add to Cart
                            </button>
                            <a
                              href="products-details.html"
                              class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                            >
                              <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- best project section end -->

        <!-- The Modal start -->
        <div
          class="modal fade"
          id="exampleModal"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bgn1-color">
              <div class="modal-header bg1-color br-bottom-n5">
                <h1
                  class="modal-title n11-color fs-five fw-medium"
                  id="exampleModalLabel"
                >
                  Your Cart
                </h1>
                <button
                  type="button"
                  class="btn-close btn-close-white"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body p-3 p-md-5">
                <div
                  class="d-flex gap-2 align-items-center justify-content-between mb-3 mb-md-4"
                >
                  <div class="d-flex gap-4 align-items-center">
                    <img
                      src="./assets/images/blog4.png"
                      alt="..."
                      class="add-cart-img"
                    />
                    <div>
                      <h5 class="fs-seven fw-medium n5-color mb-1">
                        Unleashing Creativity in Code
                      </h5>
                      <span class="fs-eight p1-color d-block mb-1"
                        >$120.00 USD</span
                      >
                      <button class="text-danger">Remove</button>
                    </div>
                  </div>
                  <div class="d-flex gap-1 align-items-center">
                    <span class="discrement fs-six n5-color cursor-pointer">
                      <i class="ph-bold ph-minus"></i>
                    </span>
                    <span
                      class="product-count fs-six fw-semibold n5-color py-1 px-2 brn4"
                      >1</span
                    >
                    <span class="increment fs-six n5-color cursor-pointer">
                      <i class="ph-bold ph-plus"></i>
                    </span>
                  </div>
                </div>
                <div
                  class="d-flex gap-2 align-items-center justify-content-between"
                >
                  <div class="d-flex gap-4 align-items-start">
                    <img
                      src="./assets/images/blog5.png"
                      alt="..."
                      class="add-cart-img"
                    />
                    <div>
                      <h5 class="fs-seven fw-medium n5-color mb-1">
                        Mastering Modern Development
                      </h5>
                      <span class="fs-eight p1-color d-block mb-1"
                        >$100.00 USD</span
                      >
                      <button class="text-danger">Remove</button>
                    </div>
                  </div>
                  <div class="d-flex gap-1 align-items-center">
                    <span class="discrement fs-six n5-color cursor-pointer">
                      <i class="ph-bold ph-minus"></i>
                    </span>
                    <span
                      class="product-count fs-six fw-semibold n5-color py-1 px-2 brn4"
                      >1</span
                    >
                    <span class="increment fs-six n5-color cursor-pointer">
                      <i class="ph-bold ph-plus"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="modal-footer br-top-n5">
                <div
                  class="w-full d-flex gap-2 align-items-center justify-content-between mb-2 mb-md-3"
                >
                  <h5 class="fs-seven fw-medium n5-color">Sub-total:</h5>
                  <span class="fs-six n5-color">$220.00 USD</span>
                </div>
                <a
                  href="checkout.html"
                  class="primary-btn w-100 py-3 rounded-pill text-center n11-color fw-medium"
                  >Continu to Checkout</a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- The Modal end -->
<?php
include 'includes/footer.php';
?>