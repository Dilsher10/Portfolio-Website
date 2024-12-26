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
              <g clip-path="url(#clip0_3569_435)">
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
              <li class="rounded-3 bg1-color">
                <a
                  href="index.html"
                  class="d-flex align-items-center gap-2 n11-color fs-eight p-2"
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

        <!-- banner section start  -->
        <section
          class="pt-120 pb-60 br-bottom-n3 overflow-hidden mt-10 mt-lg-0"
        >
          <div class="container">
            <div
              class="d-flex flex-wrap gap-10 gap-md-15 align-items-center justify-content-between"
            >
              <div class="banner-content">
                <span class="n5-color fs-five">HI, I'M A FREELANCER</span>
                <h2 class="typing-text display-one p1-color mt-2 mb-3"></h2>
                <p class="fs-seven n5-color">
                  I'm a software engineer specializing in scalable web apps.
                  Explore my
                  <a href="blog.html" class="p1-color"> blog</a>,<a
                    href="portfolio.html"
                    class="p1-color"
                  >
                    project portfolio</a
                  >
                  and <a href="resume.html" class="p1-color">online resume</a>.
                </p>
                <div
                  class="d-flex flex-wrap align-itmes-center gap-3 gap-md-6 mt-4 mt-md-8"
                >
                  <a
                    href="portfolio.html"
                    class="primary-btn px-3 px-md-6 py-2 py-md-4 fw-medium rounded-pill d-flex align-items-center gap-2"
                  >
                    <i class="ph ph-arrow-right"></i>View Portfolio
                  </a>
                  <a
                    href="resume.html"
                    class="primary-btn2 fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2"
                  >
                    <img src="./assets/images/resume-icon.png" alt="icon" />View
                    Resume
                  </a>
                </div>
              </div>

              <div class="position-relative profile-img">
                <div class="user-bg"></div>
                <div class="bg-white">
                  <img
                    src="./assets/images/user.jpg"
                    alt="user"
                    class="user-img"
                  />
                </div>
              </div>
            </div>
            <!-- counter -->
            <div
              class="banner-counter d-flex flex-wrap flex-xl-nowrap align-items-center gap-3 gap-md-6 mt-10 mt-md-17"
            >
              <div class="d-flex align-items-center gap-2 gap-xl-4">
                <h2 class="display-two fw-semibold p1-color">
                  <span class="counter">5</span>
                </h2>
                <div class="line"></div>
                <span class="n5-color">Years of Experience</span>
              </div>
              <div class="d-flex align-items-center gap-2 gap-xl-4">
                <h2 class="display-two fw-semibold p1-color">
                  <span class="counter">110</span>
                </h2>
                <div class="line"></div>
                <span class="n5-color">Projects Completed</span>
              </div>
              <div class="d-flex align-items-center gap-2 gap-xl-4">
                <h2 class="display-two fw-semibold p1-color d-flex gap-1">
                  <span class="counter">6</span>k
                </h2>
                <div class="line"></div>
                <span class="n5-color">Clients Worldwide</span>
              </div>
            </div>
          </div>
        </section>
        <!-- banner section end -->

        <!-- What I do section start -->
        <section class="pt-120 pb-120">
          <div class="container">
            <div
              class="d-flex gap-3 flex-wrap flex-xxl-nowrap justify-content-between align-items-end pb-60"
            >
              <div data-aos="zoom-in-left" class="section-heading">
                <div class="d-flex align-items-center gap-2">
                  <div class="title-line"></div>
                  <h2 class="display-four n5-color fw-semibold">What I do</h2>
                </div>
                <p class="fs-seven n4-color mt-2 mt-md-4">
                  I have more than 10 years' experience building software for
                  clients all over the world. Below is a quick overview of my
                  main technical skill sets and technologies I use. Want to find
                  out more about my experience? Check out my 
                  <a href="resume.html" class="p1-color">online resume</a> and
                  <a href="portfolio.html" class="p1-color">project portfolio</a
                  >.
                </p>
              </div>
              <a
                href="price.html"
                data-aos="zoom-in-right"
                class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 h-100 text-nowrap"
              >
                <i class="ph ph-arrow-right"></i>Services & Pricing
              </a>
            </div>

            <div class="row g-3 g-md-6">
              <div
                data-aos="fade-up"
                data-aos-duration="500"
                class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3"
              >
                <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                  <img
                    src="./assets/images/js.png"
                    alt="js"
                    class="service-icon"
                  />
                  <h4
                    class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3"
                  >
                    Vanilla JavaScript
                  </h4>
                  <p class="fs-seven n4-color">
                    List skills and technologies here. Customize as needed.
                    Built on HTML5, Sass, and Bootstrap 5.
                  </p>
                </div>
              </div>
              <div
                data-aos="fade-up"
                data-aos-duration="600"
                class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3"
              >
                <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                  <div class="d-flex align-items-center gap-3">
                    <img
                      src="./assets/images/angular.png"
                      alt="angular"
                      class="service-icon"
                    />
                    <img
                      src="./assets/images/react.png"
                      alt="react"
                      class="service-icon"
                    />
                    <img
                      src="./assets/images/vue.png"
                      alt="vue"
                      class="service-icon"
                    />
                  </div>
                  <h4
                    class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3"
                  >
                    Angular, React & Vue
                  </h4>
                  <p class="fs-seven n4-color">
                    List skills and technologies here. Customize as needed.
                    Built on HTML5, Sass, and Bootstrap 5.
                  </p>
                </div>
              </div>
              <div
                data-aos="fade-up"
                data-aos-duration="700"
                class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3"
              >
                <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                  <img
                    src="./assets/images/node.png"
                    alt="node"
                    class="service-icon"
                  />
                  <h4
                    class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3"
                  >
                    Node.js
                  </h4>
                  <p class="fs-seven n4-color">
                    List skills and technologies here. Customize as needed.
                    Built on HTML5, Sass, and Bootstrap 5.
                  </p>
                </div>
              </div>
              <div
                data-aos="fade-up"
                data-aos-duration="800"
                class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3"
              >
                <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                  <img
                    src="./assets/images/python.png"
                    alt="python"
                    class="service-icon"
                  />
                  <h4
                    class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3"
                  >
                    Python & Django
                  </h4>
                  <p class="fs-seven n4-color">
                    List skills and technologies here. Customize as needed.
                    Built on HTML5, Sass, and Bootstrap 5.
                  </p>
                </div>
              </div>
              <div
                data-aos="fade-up"
                data-aos-duration="500"
                class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3"
              >
                <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                  <img
                    src="./assets/images/php.png"
                    alt="php"
                    class="service-icon"
                  />
                  <h4
                    class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3"
                  >
                    PHP
                  </h4>
                  <p class="fs-seven n4-color">
                    List skills and technologies here. Customize as needed.
                    Built on HTML5, Sass, and Bootstrap 5.
                  </p>
                </div>
              </div>
              <div
                data-aos="fade-up"
                data-aos-duration="600"
                class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3"
              >
                <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                  <div class="d-flex gap-3">
                    <img
                      src="./assets/images/npm.png"
                      alt="npm"
                      class="service-icon"
                    />
                    <img
                      src="./assets/images/gulp.png"
                      alt="gulp"
                      class="service-icon"
                    />
                    <img
                      src="./assets/images/grunt.png"
                      alt="grunt"
                      class="service-icon"
                    />
                  </div>
                  <h4
                    class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3"
                  >
                    npm, Gulp & Grunt
                  </h4>
                  <p class="fs-seven n4-color">
                    List skills and technologies here. Customize as needed.
                    Built on HTML5, Sass, and Bootstrap 5.
                  </p>
                </div>
              </div>
              <div
                data-aos="fade-up"
                data-aos-duration="700"
                class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3"
              >
                <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                  <div class="d-flex gap-3">
                    <img
                      src="./assets/images/html.png"
                      alt="html"
                      class="service-icon"
                    />
                    <img
                      src="./assets/images/css.png"
                      alt="css"
                      class="service-icon"
                    />
                  </div>
                  <h4
                    class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3"
                  >
                    HTML & CSS
                  </h4>
                  <p class="fs-seven n4-color">
                    List skills and technologies here. Customize as needed.
                    Built on HTML5, Sass, and Bootstrap 5.
                  </p>
                </div>
              </div>
              <div
                data-aos="fade-up"
                data-aos-duration="800"
                class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3"
              >
                <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                  <div class="d-flex gap-3">
                    <img
                      src="./assets/images/sass.png"
                      alt="sass"
                      class="service-icon"
                    />
                    <img
                      src="./assets/images/less.png"
                      alt="less"
                      class="service-icon"
                    />
                  </div>
                  <h4
                    class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3"
                  >
                    Sass & LESS
                  </h4>
                  <p class="fs-seven n4-color">
                    List skills and technologies here. Customize as needed.
                    Built on HTML5, Sass, and Bootstrap 5.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- What I do section end -->

        <!-- next project section start -->
        <section class="next-project pt-120 pb-120">
          <div
            class="container d-flex gap-3 gap-md-6 flex-wrap justify-content-between align-items-center"
          >
            <div data-aos="zoom-in-left" class="next-project-content">
              <h3 class="display-four n11-color fw-semibold mb-2 mb-md-4">
                Let’s Work together on your next Project
              </h3>
              <p class="fs-seven n11-color">
                I am available for freelance projects. Hire me and get your
                project done.
              </p>
            </div>
            <a
              data-aos="zoom-in-right"
              href="contact.html"
              class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 h-100"
            >
              <i class="ph ph-arrow-right"></i>Let’s get in touch
            </a>
          </div>
        </section>
        <!-- next project section end -->

        <!-- Featured Projects section start -->
        <section class="projects-section pt-120 pb-120 br-bottom-n3">
          <div class="container">
            <div
              class="d-flex gap-3 flex-wrap flex-xxl-nowrap justify-content-between align-items-end mb-8 mb-md-15"
            >
              <div data-aos="zoom-in-left" class="section-heading">
                <div class="d-flex align-items-center gap-2">
                  <div class="title-line"></div>
                  <h2 class="display-four n5-color fw-semibold">
                    Featured Projects
                  </h2>
                </div>
                <p class="fs-seven n4-color mt-2 mt-md-4">
                  My step-by-step guide ensures a smooth project journey, from
                  the initial consultation to the final delivery. I take care of
                  every detail, allowing you to focus on what you do best.
                </p>
              </div>
              <a
                data-aos="zoom-in-right"
                href="portfolio.html"
                class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 h-100 text-nowrap"
              >
                <i class="ph ph-arrow-right"></i>View Portfolio
              </a>
            </div>

            <div class="row g-6 g-md-8">
              <div data-aos="fade-up" data-aos-duration="800" class="col-xl-6">
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
                      <div class="d-flex flex-wrap gap-2 align-items-center">
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
              <div data-aos="fade-up" data-aos-duration="800" class="col-xl-6">
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
              <div data-aos="fade-up" data-aos-duration="700" class="col-xl-6">
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
              <div data-aos="fade-up" data-aos-duration="800" class="col-xl-6">
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
        </section>
        <!-- Featured Projects section end -->

        <!-- Testimonials section start -->
        <section class="pt-120 pb-120 br-bottom-n3">
          <div class="container">
            <div data-aos="zoom-in-up" class="section-heading">
              <div class="d-flex align-items-center gap-2">
                <div class="title-line"></div>
                <h2 class="display-four n5-color fw-semibold">Testimonials</h2>
              </div>
              <p class="fs-seven n4-color mt-2 mt-md-4">
                See how I've helped our clients succeed. IT’s a highly
                Customizable,creative, modern, visually stunning and Bootstrap5
                HTML5 Template.
              </p>
            </div>
            <div class="mt-8 mt-md-15 overflow-x-hidden">
              <div class="swiper testimonial_slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div
                      class="slide-card px-3 px-md-6 py-5 py-md-10 bgn2-color box-shadow1 br-left-p1"
                    >
                      <div class="d-flex gap-1 mb-2 mb-md-3">
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                      </div>
                      <p class="n4-color fs-six">
                        “ I highly recommend Portfolify to anyone looking for a
                        high-quality best Bootstrap theme.”
                      </p>
                      <div class="d-flex gap-3 align-items-center mt-4 mt-md-7">
                        <img
                          src="./assets/images/buyer1.png"
                          alt="testimonial"
                          class="testimonial_img"
                        />

                        <div>
                          <span class="fs-eight d-block n5-color"
                            >Esther Howard
                          </span>
                          <span class="fs-nine d-block n5-color"
                            >Australia
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="slide-card px-3 px-md-6 py-5 py-md-10 bgn2-color box-shadow1 br-left-p1"
                    >
                      <div class="d-flex gap-1 mb-2 mb-md-3">
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                      </div>
                      <p class="n4-color fs-six">
                        “Best Bootstrap template ever: easy to customize,
                        feature-rich, and meets all our needs.”
                      </p>
                      <div class="d-flex gap-3 align-items-center mt-4 mt-md-7">
                        <img
                          src="./assets/images/buyer2.png"
                          alt="testimonial"
                          class="testimonial_img"
                        />

                        <div>
                          <span class="fs-eight d-block n5-color"
                            >Cameron Williamson</span
                          >
                          <span class="fs-nine d-block n5-color">Brazil </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="slide-card px-3 px-md-6 py-5 py-md-10 bgn2-color box-shadow1 br-left-p1"
                    >
                      <div class="d-flex gap-1 mb-2 mb-md-3">
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                      </div>
                      <p class="n4-color fs-six">
                        “Portfolify is the perfect theme for businesses that
                        want to create a stylish and functional website.”
                      </p>
                      <div class="d-flex gap-3 align-items-center mt-4 mt-md-7">
                        <img
                          src="./assets/images/buyer3.png"
                          alt="testimonial"
                          class="testimonial_img"
                        />
                        <div>
                          <span class="fs-eight d-block n5-color"
                            >Robert Fox
                          </span>
                          <span class="fs-nine d-block n5-color">China </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="slide-card px-3 px-md-6 py-5 py-md-10 bgn2-color box-shadow1 br-left-p1"
                    >
                      <div class="d-flex gap-1 mb-2 mb-md-3">
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                      </div>
                      <p class="n4-color fs-six">
                        “Best Bootstrap template ever: easy to customize,
                        feature-rich, and meets all our needs.”
                      </p>
                      <div class="d-flex gap-3 align-items-center mt-4 mt-md-7">
                        <img
                          src="./assets/images/buyer4.png"
                          alt="testimonial"
                          class="testimonial_img"
                        />

                        <div>
                          <span class="fs-eight d-block n5-color"
                            >Jenny Wilson</span
                          >
                          <span class="fs-nine d-block n5-color">Russia</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="slide-card px-3 px-md-6 py-5 py-md-10 bgn2-color box-shadow1 br-left-p1"
                    >
                      <div class="d-flex gap-1 mb-2 mb-md-3">
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                      </div>
                      <p class="n4-color fs-six">
                        “ I highly recommend Portfolify to anyone looking for a
                        high-quality best Bootstrap theme.”
                      </p>
                      <div class="d-flex gap-3 align-items-center mt-4 mt-md-7">
                        <img
                          src="./assets/images/buyer1.png"
                          alt="testimonial"
                          class="testimonial_img"
                        />

                        <div>
                          <span class="fs-eight d-block n5-color"
                            >Esther Howard
                          </span>
                          <span class="fs-nine d-block n5-color"
                            >Australia
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div
                      class="slide-card px-3 px-md-6 py-5 py-md-10 bgn2-color box-shadow1 br-left-p1"
                    >
                      <div class="d-flex gap-1 mb-2 mb-md-3">
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                        <i class="ph-fill ph-star y1-color fs-six"></i>
                      </div>
                      <p class="n4-color fs-six">
                        “Portfolify is the perfect theme for businesses that
                        want to create a stylish and functional website.”
                      </p>
                      <div class="d-flex gap-3 align-items-center mt-4 mt-md-7">
                        <img
                          src="./assets/images/buyer3.png"
                          alt="testimonial"
                          class="testimonial_img"
                        />
                        <div>
                          <span class="fs-eight d-block n5-color"
                            >Robert Fox
                          </span>
                          <span class="fs-nine d-block n5-color">China </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="relative mt-15">
                  <div
                    class="swiper-pagination d-flex allign-items-center justify-content-center gap-2"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Testimonials section end -->

        <!-- Latest Blog Posts section start -->
        <section class="pt-120 pb-120">
          <div class="container">
            <div
              class="d-flex gap-3 flex-wrap flex-xxl-nowrap justify-content-between align-items-end mb-8 mb-md-15"
            >
              <div data-aos="zoom-in-left" class="section-heading">
                <div class="d-flex align-items-center gap-2">
                  <div class="title-line"></div>
                  <h2 class="display-four n5-color fw-semibold">
                    Latest Blog Posts
                  </h2>
                </div>
                <p class="fs-seven n4-color mt-2 mt-md-4">
                  More than 1500+ agencies using Portfolify
                </p>
              </div>
              <a
                data-aos="zoom-in-right"
                href="blog.html"
                class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill text-nowrap"
              >
                See All Articles
              </a>
            </div>
            <div class="row g-6">
              <div
                data-aos="fade-up"
                data-aos-duration="700"
                class="col-sm-6 col-xxl-4"
              >
                <a href="blog_details.html" class="blog-card">
                  <div class="blog-img rounded-3 overflow-hidden">
                    <img
                      src="./assets/images/blog1.png"
                      alt="blog"
                      class="rounded-3 w-100"
                    />
                  </div>
                  <div class="pt-4 pt-md-8 px-3 px-md-5">
                    <div class="d-flex align-items-center gap-3 mb-2 mb-md-3">
                      <span class="n4-color fs-eight">March 18, 2024</span>
                      <span class="p1-color fs-eight">/</span>
                      <span class="n4-color fs-eight">Articles</span>
                    </div>
                    <h4 class="blog-title fs-five n5-color fw-semibold">
                      7 Great Web Development Languages to Learn this Year
                    </h4>
                  </div>
                </a>
              </div>
              <div
                data-aos="fade-up"
                data-aos-duration="800"
                class="col-sm-6 col-xxl-4"
              >
                <a href="blog_details.html" class="blog-card">
                  <div class="blog-img rounded-3 overflow-hidden">
                    <img
                      src="./assets/images/blog2.png"
                      alt="blog"
                      class="rounded-3 w-100"
                    />
                  </div>
                  <div class="pt-4 pt-md-8 px-3 px-md-5">
                    <div class="d-flex align-items-center gap-3 mb-2 mb-md-3">
                      <span class="n4-color fs-eight">March 18, 2024</span>
                      <span class="p1-color fs-eight">/</span>
                      <span class="n4-color fs-eight">Tutorials</span>
                    </div>
                    <h4 class="blog-title fs-five n5-color fw-semibold">
                      How to Optimize your Website for Better Performance
                    </h4>
                  </div>
                </a>
              </div>
              <div
                data-aos="fade-up"
                data-aos-duration="900"
                class="col-sm-6 col-xxl-4"
              >
                <a href="blog_details.html" class="blog-card">
                  <div class="blog-img rounded-3 overflow-hidden">
                    <img
                      src="./assets/images/blog3.png"
                      alt="blog"
                      class="rounded-3 w-full"
                    />
                  </div>
                  <div class="pt-4 pt-md-8 px-3 px-md-5">
                    <div class="d-flex align-items-center gap-3 mb-2 mb-md-3">
                      <span class="n4-color fs-eight">March 18, 2024</span>
                      <span class="p1-color fs-eight">/</span>
                      <span class="n4-color fs-eight">Articles</span>
                    </div>
                    <h4 class="blog-title fs-five n5-color fw-semibold">
                      8 Tips to Improve your Web Development Skills in 2024
                    </h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- Latest Blog Posts section end -->
<?php
include 'includes/footer.php';
?>