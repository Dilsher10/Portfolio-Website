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
              <li class="rounded-3 bg1-color">
                <a
                  href="portfolio.html"
                  class="d-flex justify-content-between align-items-center"
                >
                  <div
                    class="d-flex align-items-center gap-2 n11-color fs-eight p-2"
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
              <li>
                <a
                  href="products.html"
                  class="d-flex align-items-center gap-2 n5-color fs-eight p-2"
                >
                  <span
                    class="fs-five d-flex align-items-center justify-content-center"
                  >
                    <i class="ph-fill ph-shopping-bag"></i>
                  </span>
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
                data-color=" 82, 113, 255"
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
                A collection of my best projects
              </h3>
              <p class="fs-seven n5-color mb-4 mb-md-8 text-center">
                With many years in web development, I acquired extensive
                experience working on projects across multiple industries and
                technologies. Let me show you my best creations.
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
                class="tabs d-flex gap-3 gap-md-6 justify-content-center flex-wrap p-2 pb-5 pb-md-10"
              >
                <li
                  data-tab-target="#all"
                  class="active fs-seven fw-medium cursor-pointer n3-color pb-1 tab"
                >
                  All
                </li>
                <li
                  data-tab-target="#web"
                  class="fs-seven fw-medium cursor-pointer n3-color pb-1 tab"
                >
                  Web App
                </li>
                <li
                  data-tab-target="#mobile"
                  class="fs-seven fw-medium cursor-pointer n3-color pb-1 tab"
                >
                  Mobile App
                </li>
                <li
                  data-tab-target="#frontend"
                  class="fs-seven fw-medium cursor-pointer n3-color pb-1 tab"
                >
                  Frontend
                </li>
                <li
                  data-tab-target="#backend"
                  class="fs-seven fw-medium cursor-pointer n3-color pb-1 tab"
                >
                  Backend
                </li>
              </ul>

              <div class="tab-content position-relative overflow-hidden">
                <div id="all" data-tab-content class="active">
                  <div class="row g-6 g-md-8">
                    <div
                      data-aos="fade-up"
                      data-aos-duration="800"
                      class="col-xl-6"
                    >
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project1.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project1.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Crypto Website Development for DeFi X
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div
                      data-aos="fade-up"
                      data-aos-duration="800"
                      class="col-xl-6"
                    >
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project2.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project2.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Salesforce CRM - Invoice Management
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div
                      data-aos="fade-up"
                      data-aos-duration="700"
                      class="col-xl-6"
                    >
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project3.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project3.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Car Rental App
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div
                      data-aos="fade-up"
                      data-aos-duration="800"
                      class="col-xl-6"
                    >
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project4.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project4.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Financial management
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div
                      data-aos="fade-up"
                      data-aos-duration="800"
                      class="col-xl-6"
                    >
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project1.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project1.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Crypto Website Development for DeFi X
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div
                      data-aos="fade-up"
                      data-aos-duration="800"
                      class="col-xl-6"
                    >
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project2.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project2.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Salesforce CRM - Invoice Management
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div
                      data-aos="fade-up"
                      data-aos-duration="700"
                      class="col-xl-6"
                    >
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project3.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project3.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Car Rental App
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div
                      data-aos="fade-up"
                      data-aos-duration="800"
                      class="col-xl-6"
                    >
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project4.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project4.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Financial management
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="web" data-tab-content>
                  <div class="row g-6 g-md-8">
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project2.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project2.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Salesforce CRM - Invoice Management
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project1.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project1.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Crypto Website Development for DeFi X
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project3.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project3.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Car Rental App
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project4.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project4.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Financial management
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="mobile" data-tab-content>
                  <div class="row g-6 g-md-8">
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project4.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project4.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Financial management
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project1.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project1.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Crypto Website Development for DeFi X
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project2.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project2.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Salesforce CRM - Invoice Management
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project3.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project3.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Car Rental App
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="frontend" data-tab-content>
                  <div class="row g-6 g-md-8">
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project3.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project3.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Car Rental App
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project1.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project1.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Crypto Website Development for DeFi X
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project2.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project2.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Salesforce CRM - Invoice Management
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project4.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project4.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Financial management
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="backend" data-tab-content>
                  <div class="row g-6 g-md-8">
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project2.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project2.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Salesforce CRM - Invoice Management
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project3.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project3.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Car Rental App
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
                            class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                          >
                            <i class="ph-bold ph-arrow-up-right n5-color"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project4.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                          <div class="post-thumb">
                            <div class="post-thumb-inner">
                              <img
                                src="./assets/images/project4.png"
                                alt="..."
                                class="w-100 p-2"
                              />
                            </div>
                          </div>
                        </a>

                        <div
                          class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6"
                        >
                          <div>
                            <div class="d-flex gap-2 align-items-center">
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >React JS</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >gsap</a
                              >
                              <a
                                href="javascript:void(0)"
                                class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                >Web Development</a
                              >
                            </div>
                            <a
                              href="portfolio_details.html"
                              class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                            >
                              Financial management
                            </a>
                          </div>
                          <a
                            href="portfolio_details.html"
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
        </section>
        <!-- best project section end -->
<?php
include 'includes/footer.php';
?>