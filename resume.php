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
            <button id="toggle" class="side-icon bg1-color mood_toggle">
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
              <li class="rounded-3 bg1-color">
                <a
                  href="resume.html"
                  class="d-flex align-items-center gap-2 n11-color fs-eight p-2"
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

        <!-- Resume section start -->
        <section class="pt-120 pb-120 mt-10 mt-lg-0">
          <div class="pb-60 br-bottom-n3">
            <div data-aos="zoom-in" class="page-heading">
              <h3
                class="page-title fs-onefw-semibold n5-color mb-2 mb-md-3 text-center"
              >
                Online Resume
              </h3>

              <a
                href="./assets/images/resume.pdf"
                class="w-max primary-btn bg1-color fw-medium n1-color px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto"
                download
              >
                <i class="ph ph-file-pdf"></i>Download PDF Version
              </a>
            </div>
          </div>

          <div class="container mt-8 mt-md-15">
            <div
              data-aos="fade-up"
              class="bgn2-color p-4 p-sm-8 p-md-15 rounded-5 brn4"
            >
              <div
                class="d-flex flex-wrap justify-content-between align-items-center gap-3 br-bottom-n3 pb-3 pb-md-6"
              >
                <div>
                  <h2 class="display-three p1-color fw-semibold">
                    Chris Evans
                  </h2>
                  <span class="n4-color fs-six fw-medium"
                    >Senior Software Engineer</span
                  >
                </div>
                <div class="ps-5 br-left-n3">
                  <ul class="d-flex flex-column gap-3">
                    <li>
                      <a
                        href="tel:+6494461709"
                        class="d-flex gap-2 align-items-center n4-color"
                      >
                        <i class="ph ph-phone"></i> 0123 4567 890</a
                      >
                    </li>
                    <li>
                      <a
                        href="mailto:someone@example.com"
                        class="d-flex gap-2 align-items-center n4-color"
                      >
                        <i class="ph ph-envelope-simple"></i
                        >Evans@yourwebsite.com</a
                      >
                    </li>
                    <li class="d-flex gap-2 align-items-center n4-color">
                      <i class="ph ph-globe"></i> www.yourwebsite.com
                    </li>
                    <li class="d-flex gap-2 align-items-center n4-color">
                      <i class="ph ph-map-pin"></i> New York
                    </li>
                  </ul>
                </div>
              </div>

              <div
                class="d-flex flex-wrap flex-md-nowrap align-items-center gap-5 gap-md-10 pb-4 pb-md-8 br-bottom-n3 pt-60"
              >
                <div class="resume-profile flex-shrink-0">
                  <img
                    src="./assets/images/profile.png"
                    alt="profile"
                    class="object-fit-cover"
                    width="127"
                    height="159"
                  />
                </div>
                <p class="n42-color fs-seven">
                  Summarise your career here. You can make a PDF version of your
                  resume using our free Sketch template here. Donec quam felis,
                  ultricies nec, pellentesque eu. Lorem ipsum dolor sit amet,
                  consectetuer adipiscing elit. Aenean commodo ligula eget
                  dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                  dis parturient montes, nascetur ridiculus mus. Donec quam
                  felis, ultricies nec, pellentesque eu, pretium quis, sem.
                  Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien
                  ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet
                  orci eget eros faucibus tincidunt. Duis leo. Sed fringilla
                  mauris sit amet nibh.
                </p>
              </div>

              <div class="resume-section row g-6 pt-60 pb-60 br-bottom-n3">
                <div class="col-md-8 col-lg-12 col-xl-8 col-xxl-9">
                  <div class="d-flex align-items-center gap-2 mb-5 mb-md-10">
                    <div class="title-line2"></div>
                    <h2 class="fs-three p1-color fw-semibold">
                      Work Experiences
                    </h2>
                  </div>

                  <div class="mb-4 mb-md-6">
                    <div
                      class="d-flex flex-wrap gap-1 gap-sm-3 justify-content-between align-items-center"
                    >
                      <span class="n5-color fs-six fw-medium"
                        >Senior Software Engineer</span
                      >
                      <span class="n4-color fs-eight"
                        >Google | 2023 - Present</span
                      >
                    </div>
                    <p class="n42-color fs-seven my-2 my-md-5">
                      Role description goes here ipsum dolor sit amet,
                      consectetuer adipiscing elit. Aenean commodo ligula eget
                      dolor. Aenean massa. Cum sociis natoque penatibus et
                      magnis dis parturient montes, nascetur ridiculus mus.
                      Donec quam felis, ultricies nec, pellentesque eu, pretium
                      quis, sem. Donec pede justo, fringilla vel. Lorem ipsum
                      dolor sit amet, consectetuer adipiscing elit. Aenean
                      commodo ligula eget dolor. Aenean massa. Cum sociis
                      natoque penatibus et magnis dis parturient montes,
                      nascetur ridiculus mus. Donec quam felis.
                    </p>
                    <ul class="d-flex flex-column gap-3 ms-6 ms-lg-10">
                      <li class="n42-color fs-seven">
                        Lorem ipsum dolor sit amet, consectetuer.
                      </li>
                      <li class="n42-color fs-seven">
                        Aenean commodo ligula eget dolor.
                      </li>
                      <li class="n42-color fs-seven">
                        Etiam ultricies nisi vel augue.
                      </li>
                    </ul>
                  </div>
                  <div class="mb-4 mb-md-6">
                    <div
                      class="d-flex flex-wrap gap-1 gap-sm-3 justify-content-between align-items-center"
                    >
                      <span class="n5-color fs-six fw-medium"
                        >Lead Software Developer</span
                      >
                      <span class="n4-color fs-eight">Apple | 2016 - 2019</span>
                    </div>
                    <p class="n42-color fs-seven my-2 my-md-5">
                      Role description goes here ipsum dolor sit amet,
                      consectetuer adipiscing elit. Aenean commodo ligula eget
                      dolor. Aenean massa. Cum sociis natoque penatibus et
                      magnis dis parturient montes, nascetur ridiculus mus.
                      Donec quam felis, ultricies nec, pellentesque eu, pretium
                      quis, sem. Donec pede justo, fringilla vel. Lorem ipsum
                      dolor sit amet, consectetuer adipiscing elit. Aenean
                      commodo ligula eget dolor. Aenean massa. Cum sociis
                      natoque penatibus et magnis dis parturient montes,
                      nascetur ridiculus mus. Donec quam felis.
                    </p>
                    <ul class="d-flex flex-column gap-3 ms-6 ms-lg-10">
                      <li class="n42-color fs-seven">
                        Lorem ipsum dolor sit amet, consectetuer.
                      </li>
                      <li class="n42-color fs-seven">
                        Aenean commodo ligula eget dolor.
                      </li>
                      <li class="n42-color fs-seven">
                        Etiam ultricies nisi vel augue.
                      </li>
                    </ul>
                  </div>
                  <div class="mb-4 mb-md-6">
                    <div
                      class="d-flex flex-wrap gap-1 gap-sm-3 justify-content-between align-items-center"
                    >
                      <span class="n5-color fs-six fw-medium"
                        >Senior Software Developer</span
                      >
                      <span class="n4-color fs-eight"
                        >Dropbox | 2014 - 2016</span
                      >
                    </div>
                    <p class="n42-color fs-seven my-2 my-md-5">
                      Role description goes here ipsum dolor sit amet,
                      consectetuer adipiscing elit. Aenean commodo ligula eget
                      dolor. Aenean massa. Cum sociis natoque penatibus et
                      magnis dis parturient montes, nascetur ridiculus mus.
                      Donec quam felis, ultricies nec, pellentesque eu, pretium
                      quis, sem. Donec pede justo, fringilla vel. Lorem ipsum
                      dolor sit amet, consectetuer adipiscing elit. Aenean
                      commodo ligula eget dolor. Aenean massa. Cum sociis
                      natoque penatibus et magnis dis parturient montes,
                      nascetur ridiculus mus. Donec quam felis.
                    </p>
                    <ul class="d-flex flex-column gap-3 ms-6 ms-lg-10">
                      <li class="n42-color fs-seven">
                        Lorem ipsum dolor sit amet, consectetuer.
                      </li>
                      <li class="n42-color fs-seven">
                        Aenean commodo ligula eget dolor.
                      </li>
                    </ul>
                  </div>
                  <div class="mb-4 mb-md-6">
                    <div
                      class="d-flex flex-wrap gap-1 gap-sm-3 justify-content-between align-items-center mb-2 mb-md-4"
                    >
                      <span class="n5-color fs-six fw-medium"
                        >Senior Developer</span
                      >
                      <span class="n42-color fs-eight">Uber | 2013 - 2014</span>
                    </div>
                    <p class="n42-color fs-seven">
                      Role description goes here ipsum dolor sit amet,
                      consectetuer adipiscing elit. Aenean commodo ligula eget
                      dolor. Aenean massa. Cum sociis natoque penatibus et
                      magnis dis parturient montes, nascetur ridiculus mus.
                      Donec quam felis, ultricies nec, pellentesque eu, pretium
                      quis, sem. Donec pede justo, fringilla vel.
                    </p>
                  </div>
                  <div class="mb-4 mb-md-6">
                    <div
                      class="d-flex flex-wrap gap-1 gap-sm-3 justify-content-between align-items-center mb-2 mb-md-4"
                    >
                      <span class="n5-color fs-six fw-medium"
                        >Backend Developer</span
                      >
                      <span class="n42-color fs-eight"
                        >Amazon | 2014 - 2016</span
                      >
                    </div>
                    <p class="n42-color fs-seven">
                      Role description goes here ipsum dolor sit amet,
                      consectetuer adipiscing elit. Aenean commodo ligula eget
                      dolor. Aenean massa. Cum sociis natoque penatibus et
                      magnis dis parturient montes, nascetur ridiculus mus.
                      Donec quam felis, ultricies nec, pellentesque eu, pretium
                      quis, sem. Donec pede justo, fringilla vel.
                    </p>
                  </div>
                  <div class="mb-5 mb-md-10">
                    <div
                      class="d-flex flex-wrap gap-1 gap-sm-3 justify-content-between align-items-center mb-2 mb-md-4"
                    >
                      <span class="n5-color fs-six fw-medium"
                        >Frontend Developer</span
                      >
                      <span class="n42-color fs-eight"
                        >Startup | 2013 - 2014</span
                      >
                    </div>
                    <p class="n42-color fs-seven">
                      Role description goes here ipsum dolor sit amet,
                      consectetuer adipiscing elit. Aenean commodo ligula eget
                      dolor. Aenean massa. Cum sociis natoque penatibus et
                      magnis dis parturient montes, nascetur ridiculus mus.
                      Donec quam felis, ultricies nec, pellentesque eu, pretium
                      quis, sem. Donec pede justo, fringilla vel.
                    </p>
                  </div>

                  <div class="d-flex align-items-center gap-2 mb-5 mb-md-10">
                    <div class="title-line2"></div>
                    <h2 class="fs-three p1-color fw-semibold">Projects</h2>
                  </div>
                  <div class="mb-4 mb-md-6">
                    <div
                      class="d-flex flex-wrap gap-1 gap-sm-3 justify-content-between align-items-center mb-2 mb-md-4"
                    >
                      <span class="n5-color fs-six fw-medium"
                        >Project Lorem Ipsum</span
                      >
                      <span class="n42-color fs-eight">Open Source</span>
                    </div>
                    <p class="n42-color fs-seven">
                      You can use this section for your side projects. You
                      can provide a project link here as well. Lorem ipsum dolor
                      sit amet, consectetuer adipiscing elit. Aenean commodo
                      ligula eget dolor. Aenean massa. Cum sociis natoque
                      penatibus et magnis dis parturient montes, nascetur
                      ridiculus mus.
                    </p>
                  </div>
                  <div class="mb-4 mb-md-6">
                    <div
                      class="d-flex flex-wrap gap-1 gap-sm-3 justify-content-between align-items-center mb-2 mb-md-4"
                    >
                      <span class="n5-color fs-six fw-medium"
                        >Project Sed Fringilla</span
                      >
                      <span class="n42-color fs-eight">Open Source</span>
                    </div>
                    <p class="n42-color fs-seven">
                      You can use this section for your side projects. Cras
                      dapibus. Vivamus elementum semper nisi. Aenean vulputate
                      eleifend tellus. Aenean leo ligula, porttitor eu,
                      consequat vitae, eleifend ac, enim.
                    </p>
                  </div>
                  <div>
                    <div
                      class="d-flex flex-wrap gap-2 gap-sm-3 justify-content-between align-items-center mb-2 mb-md-4"
                    >
                      <span class="n5-color fs-six fw-medium"
                        >Project Praesent</span
                      >
                      <span class="n42-color fs-eight">Open Source</span>
                    </div>
                    <p class="n42-color fs-seven">
                      You can use this section for your side projects. Cras
                      dapibus. Vivamus elementum semper nisi. Aenean vulputate
                      eleifend tellus. Aenean leo ligula, porttitor eu,
                      consequat vitae, eleifend ac, enim.
                    </p>
                  </div>
                </div>

                <!-- right side  -->
                <div class="col-md-4 col-lg-12 col-xl-4 col-xxl-3">
                  <div
                    class="ps-4 ps-xxl-7 br-left-n3 d-flex flex-column gap-8 gap-md-15"
                  >
                    <!-- skills  -->
                    <div>
                      <div
                        class="d-flex align-items-center gap-2 mb-5 mb-md-10"
                      >
                        <div class="title-line2"></div>
                        <h2 class="fs-three p1-color fw-semibold">Skills</h2>
                      </div>

                      <div class="mb-3 mb-md-6">
                        <h5 class="fs-six n5-color fw-medium mb-2 mb-md-4">
                          Technical
                        </h5>
                        <ul class="d-flex flex-column gap-3 ms-6 ms-lg-10">
                          <li class="n4-color fs-seven">
                            JavaScript/React/Vue
                          </li>
                          <li class="n4-color fs-seven">Python/Ruby/PHP</li>
                          <li class="n4-color fs-seven">Node.js/ASP.NET</li>
                          <li class="n4-color fs-seven">PostgreSQL/MySQL</li>
                          <li class="n4-color fs-seven">
                            Object-oriented design
                          </li>
                          <li class="n4-color fs-seven">
                            Design and implement database structures
                          </li>
                          <li class="n4-color fs-seven">
                            Lead and deliver complex software systems
                          </li>
                        </ul>
                      </div>

                      <div>
                        <h5 class="fs-six n5-color fw-medium mb-2 mb-md-4">
                          Professional
                        </h5>
                        <ul class="d-flex flex-column gap-3 ms-6 ms-lg-10">
                          <li class="n4-color fs-seven">
                            Effective communication
                          </li>
                          <li class="n4-color fs-seven">Team player</li>
                          <li class="n4-color fs-seven">
                            Strong problem solver
                          </li>
                          <li class="n4-color fs-seven">
                            Good time management
                          </li>
                        </ul>
                      </div>
                    </div>

                    <!-- education  -->
                    <div>
                      <div class="d-flex align-items-center gap-2 mb-3 mb-md-6">
                        <div class="title-line2"></div>
                        <h2 class="fs-three p1-color fw-semibold">Education</h2>
                      </div>
                      <div class="d-flex gap-2 mb-3 mb-md-5">
                        <i class="ph ph-graduation-cap fs-six p1-color"></i>
                        <div>
                          <span class="n4-color fs-seven"
                            >MSc in Computer Science University College
                            London</span
                          >
                          <span class="n4-color fs-eleven">2010 - 2011</span>
                        </div>
                      </div>
                      <div class="d-flex gap-2">
                        <i class="ph ph-graduation-cap fs-six p1-color"></i>
                        <div>
                          <span class="n4-color fs-seven"
                            >BSc Maths and Physics Imperial College London</span
                          >
                          <span class="n4-color fs-eleven">2007 - 2010</span>
                        </div>
                      </div>
                    </div>
                    <!-- awards  -->
                    <div>
                      <div class="d-flex align-items-center gap-2 mb-3 mb-md-6">
                        <div class="title-line2"></div>
                        <h2 class="fs-three p1-color fw-semibold">Awards</h2>
                      </div>
                      <div class="d-flex gap-2 mb-3 mb-md-5">
                        <i class="ph ph-trophy fs-six p1-color"></i>
                        <div>
                          <span class="n4-color fs-seven"
                            >Award Lorem Ipsum Microsoft lorem ipsum</span
                          >
                          <span class="n4-color fs-eleven">2019</span>
                        </div>
                      </div>
                      <div class="d-flex gap-2">
                        <i class="ph ph-trophy fs-six p1-color"></i>
                        <div>
                          <span class="n4-color fs-seven"
                            >Award Donec Sodales Oracle Aenean</span
                          >
                          <span class="n4-color fs-eleven">2017</span>
                        </div>
                      </div>
                    </div>
                    <!-- Languages  -->
                    <div>
                      <div class="d-flex align-items-center gap-2 mb-3 mb-md-6">
                        <div class="title-line2"></div>
                        <h2 class="fs-three p1-color fw-semibold">Languages</h2>
                      </div>
                      <ul class="d-flex flex-column gap-3 ms-6 ms-lg-10">
                        <li class="n4-color fs-seven">English(Native)</li>
                        <li class="n4-color fs-seven">
                          Spanish (Professional)
                        </li>
                      </ul>
                    </div>
                    <!-- Interests  -->
                    <div>
                      <div class="d-flex align-items-center gap-2 mb-3 mb-md-6">
                        <div class="title-line2"></div>
                        <h2 class="fs-three p1-color fw-semibold">Interests</h2>
                      </div>
                      <ul class="d-flex flex-column gap-3 ms-6 ms-lg-10">
                        <li class="n4-color fs-seven">Climbing</li>
                        <li class="n4-color fs-seven">Snowboarding</li>
                        <li class="n4-color fs-seven">Photography</li>
                        <li class="n4-color fs-seven">Travelling</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="d-flex flex-wrap gap-2 gap-md-3 gap-md-5 align-items-center justify-content-center mt-4 mt-md-8"
              >
                <a
                  href="javascript:void(0)"
                  class="d-flex gap-1 align-items-center resume-icon"
                >
                  <div class="social-icon">
                    <i class="ph ph-github-logo p1-color"></i>
                  </div>
                  <span class="fs-nine n4-color">github.com/username</span>
                </a>
                <a
                  href="javascript:void(0)"
                  class="d-flex gap-1 align-items-center resume-icon"
                >
                  <div class="social-icon">
                    <i class="ph ph-linkedin-logo p1-color"></i>
                  </div>
                  <span class="fs-nine n4-color">linkedin.com/in/username</span>
                </a>
                <a
                  href="javascript:void(0)"
                  class="d-flex gap-1 align-items-center resume-icon"
                >
                  <div class="social-icon">
                    <i class="ph ph-x-logo p1-color"></i>
                  </div>
                  <span class="fs-nine n4-color">@twittername</span>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- Resume section end -->

        <?php
include 'includes/footer.php';
?>