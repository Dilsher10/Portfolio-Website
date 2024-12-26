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
              <li class="rounded-3 bg1-color">
                <a
                  href="price.html"
                  class="d-flex align-items-center gap-2 n11-color fs-eight p-2"
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

        <!-- Services & Pricing section start -->
        <section class="pt-120 pb-120 br-bottom-n3 mt-10 mt-lg-0">
          <div class="pb-60 br-bottom-n3">
            <div data-aos="zoom-in" class="page-heading">
              <h3
                class="page-title fs-onefw-semibold n5-color mb-2 mb-md-3 text-center"
              >
                Services & Pricing
              </h3>
              <p class="fs-seven n5-color mb-4 mb-md-8 text-center">
                I have 10+ years of development experience building software for
                the web and mobile devices. You can take a look at my
                <a href="resume.html" class="p1-color">online resume</a> and
                <a href="portfolio.html" class="p1-color">project portfolio</a>
                to find out more about my skills and experiences.
              </p>

              <a
                href="contact.html"
                class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto w-max"
              >
                <i class="ph ph-paper-plane-tilt"></i>Hire Me
              </a>
            </div>
          </div>

          <div class="container mt-8 mt-md-15">
            <div data-aos="zoom-in" class="section-heading">
              <div class="d-flex align-items-center gap-2">
                <div class="title-line"></div>
                <h2 class="display-four n5-color fw-semibold">
                  Service Packages
                </h2>
              </div>
              <p class="fs-seven n4-color mt-2 mt-md-4">
                Explore the range of services I provide to help bring your
                projects to life. From initial concept to final delivery, I am
                committed to delivering high-quality results tailored to your
                needs.
              </p>
            </div>

            <div class="mt-8 mt-md-15">
              <div class="row g-6">
                <div
                  data-aos="fade-up"
                  data-aos-delay="700"
                  class="col-sm-6 col-xl-4"
                >
                  <div
                    class="pricing-card bgn2-color brn4 px-3 px-md-6 py-4 py-md-8 text-center"
                  >
                    <span class="fs-eight n5-color">Basic</span>
                    <h3 class="p1-color fs-two">$900</h3>
                    <span class="fs-eight n5-color">Per Month</span>
                    <div class="line-divider my-4 my-md-7"></div>
                    <ul>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >Web Development
                      </li>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >UI/UX Design
                      </li>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >Webflow Development
                      </li>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >Website Optimization
                      </li>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >24/7 Support
                      </li>
                    </ul>

                    <a
                      href="javascript:void(0)"
                      class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto mt-5 mt-md-10 w-max"
                    >
                      <i class="ph ph-arrow-right"></i>Choose Basic
                    </a>
                  </div>
                </div>
                <div
                  data-aos="fade-up"
                  data-aos-delay="800"
                  class="col-sm-6 col-xl-4"
                >
                  <div
                    class="pricing-card bgn2-color brn4 px-3 px-md-6 py-4 py-md-8 text-center overflow-hidden position-relative"
                  >
                    <div
                      class="popular-price px-2 px-md-5 py-1 py-md-3 py-xl-2 py-xxl-3"
                    >
                      <span class="fs-seven n1-color">Most popular</span>
                    </div>

                    <span class="fs-eight n5-color">Standard</span>
                    <h3 class="p1-color fs-two">$2500</h3>
                    <span class="fs-eight n5-color">Per Month</span>
                    <div class="line-divider my-4 my-md-7"></div>
                    <ul>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >Web Development
                      </li>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >UI/UX Design
                      </li>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >Webflow Development
                      </li>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >Website Optimization
                      </li>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >24/7 Support
                      </li>
                    </ul>

                    <a
                      href="javascript:void(0)"
                      class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto mt-5 mt-md-10 w-max"
                    >
                      <i class="ph ph-arrow-right"></i>Choose Standard
                    </a>
                  </div>
                </div>
                <div
                  data-aos="fade-up"
                  data-aos-delay="900"
                  class="col-sm-6 col-xl-4"
                >
                  <div
                    class="pricing-card bgn2-color brn4 px-3 px-md-6 py-4 py-md-8 text-center"
                  >
                    <span class="fs-eight n5-color">Premium</span>
                    <h3 class="p1-color fs-two">$5000</h3>
                    <span class="fs-eight n5-color">Per Month</span>
                    <div class="line-divider my-4 my-md-7"></div>
                    <ul>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >Web Development
                      </li>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >UI/UX Design
                      </li>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >Webflow Development
                      </li>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >Website Optimization
                      </li>
                      <li
                        class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3"
                      >
                        <i class="ph-fill ph-check-circle fs-six p1-color"></i
                        >24/7 Support
                      </li>
                    </ul>

                    <a
                      href="javascript:void(0)"
                      class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto mt-5 mt-md-10 w-max"
                    >
                      <i class="ph ph-arrow-right"></i>Choose Premium
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div data-aos="zoom-in" class="hire-content mt-8 mt-md-15">
              <h4
                class="n5-color fs-three fw-semibold text-center mb-2 mb-md-4"
              >
                Want to hire me for custom package?
              </h4>
              <p class="fs-seven n5-color mb-4 mb-md-8 text-center">
                Lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                eiusmod tempor incididunt ut labore et dolore.
              </p>
              <a
                href="contact.html"
                class="w-max primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto"
              >
                <i class="ph ph-paper-plane-tilt"></i>Hire Me
              </a>
            </div>
          </div>
        </section>
        <!-- Services & Pricing section end -->

        <!-- Have any questions section start -->
        <section class="pt-120 pb-120">
          <div class="container">
            <div data-aos="zoom-in" class="section-heading">
              <div class="d-flex align-items-center gap-2">
                <div class="title-line"></div>
                <h2 class="display-four n5-color fw-semibold">
                  Have any questions?
                </h2>
              </div>
              <p class="fs-seven n4-color mt-2 mt-md-4">
                You can use this section to address any queries your potential
                clients may have.
              </p>
            </div>
            <div class="row mt-8 mt-md-15 justify-content-between g-6">
              <div class="col-12 col-md-12 col-xl-6">
                <div class="accordion-section d-grid gap-2 gap-md-4">
                  <div class="accordion-single" data-aos="fade-up">
                    <h5 class="header-area p-2 p-sm-4 p-md-8">
                      <button
                        class="accordion-btn n4-color d-flex gap-2 align-items-center position-relative w-100 fs-six fw-medium"
                        type="button"
                      >
                        <span
                          class="faq_icon_width d-flex flex-shrink-0 align-items-center justify-content-between n2-color"
                        >
                          <i class="ph ph-arrow-right"></i>
                        </span>
                        What is Portfolify
                      </button>
                    </h5>
                    <div class="content-area overflow-hidden">
                      <p
                        class="content-body n5-color px-4 px-md-8 pb-4 pb-md-8 fs-six"
                      >
                        This is the first item's accordion body. It is hidden by
                        default, until the collapse plugin adds the appropriate
                        classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing
                        and hiding via CSS transitions. You can modify any of
                        this with custom CSS or overriding our default
                        variables. It's also worth noting that just about any
                        HTML can go within the .accordion-body, though the
                        transition does limit overflow.
                      </p>
                    </div>
                  </div>
                  <div class="accordion-single" data-aos="fade-up">
                    <h5 class="header-area p-2 p-sm-4 p-md-8">
                      <button
                        class="accordion-btn n4-color d-flex gap-2 align-items-center position-relative w-100 fs-six fw-medium"
                        type="button"
                      >
                        <span
                          class="faq_icon_width d-flex flex-shrink-0 align-items-center justify-content-between n2-color"
                        >
                          <i class="ph ph-arrow-right"></i>
                        </span>
                        How Can I Help You?
                      </button>
                    </h5>
                    <div class="content-area overflow-hidden">
                      <p
                        class="content-body n5-color px-4 px-md-8 pb-4 pb-md-8 fs-six"
                      >
                        This is the first item's accordion body. It is hidden by
                        default, until the collapse plugin adds the appropriate
                        classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing
                        and hiding via CSS transitions. You can modify any of
                        this with custom CSS or overriding our default
                        variables. It's also worth noting that just about any
                        HTML can go within the .accordion-body, though the
                        transition does limit overflow.
                      </p>
                    </div>
                  </div>
                  <div class="accordion-single" data-aos="fade-up">
                    <h5 class="header-area p-2 p-sm-4 p-md-8">
                      <button
                        class="accordion-btn n4-color d-flex gap-1 gap-sm-2 align-items-center position-relative w-100 fs-six fw-medium"
                        type="button"
                      >
                        <span
                          class="faq_icon_width d-flex flex-shrink-0 align-items-center justify-content-between n2-color"
                        >
                          <i class="ph ph-arrow-right"></i>
                        </span>
                        Simple process for workflow?
                      </button>
                    </h5>
                    <div class="content-area overflow-hidden">
                      <p
                        class="content-body n5-color px-4 px-md-8 pb-4 pb-md-8 fs-six"
                      >
                        This is the first item's accordion body. It is hidden by
                        default, until the collapse plugin adds the appropriate
                        classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing
                        and hiding via CSS transitions. You can modify any of
                        this with custom CSS or overriding our default
                        variables. It's also worth noting that just about any
                        HTML can go within the .accordion-body, though the
                        transition does limit overflow.
                      </p>
                    </div>
                  </div>
                  <div class="accordion-single" data-aos="fade-up">
                    <h5 class="header-area p-2 p-sm-4 p-md-8">
                      <button
                        class="accordion-btn n4-color d-flex gap-2 align-items-center position-relative w-100 fs-six fw-medium"
                        type="button"
                      >
                        <span
                          class="faq_icon_width d-flex flex-shrink-0 align-items-center justify-content-between n2-color"
                        >
                          <i class="ph ph-arrow-right"></i>
                        </span>
                        Is Portfolify a Multi-purpose template?
                      </button>
                    </h5>
                    <div class="content-area overflow-hidden">
                      <p
                        class="content-body n5-color px-4 px-md-8 pb-4 pb-md-8 fs-six"
                      >
                        This is the first item's accordion body. It is hidden by
                        default, until the collapse plugin adds the appropriate
                        classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing
                        and hiding via CSS transitions. You can modify any of
                        this with custom CSS or overriding our default
                        variables. It's also worth noting that just about any
                        HTML can go within the .accordion-body, though the
                        transition does limit overflow.
                      </p>
                    </div>
                  </div>
                  <div class="accordion-single" data-aos="fade-up">
                    <h5 class="header-area p-2 p-sm-4 p-md-8">
                      <button
                        class="accordion-btn n4-color d-flex gap-2 align-items-center position-relative w-100 fs-six fw-medium"
                        type="button"
                      >
                        <span
                          class="faq_icon_width d-flex flex-shrink-0 align-items-center justify-content-between n2-color"
                        >
                          <i class="ph ph-arrow-right"></i>
                        </span>
                        Why responsive multi page template?
                      </button>
                    </h5>
                    <div class="content-area overflow-hidden">
                      <p
                        class="content-body n5-color px-4 px-md-8 pb-4 pb-md-8 fs-six"
                      >
                        This is the first item's accordion body. It is hidden by
                        default, until the collapse plugin adds the appropriate
                        classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing
                        and hiding via CSS transitions. You can modify any of
                        this with custom CSS or overriding our default
                        variables. It's also worth noting that just about any
                        HTML can go within the .accordion-body, though the
                        transition does limit overflow.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-xl-6">
                <div
                  class="overflow-hidden d-flex justify-content-center align-items-center"
                >
                  <img
                    src="./assets/images/light.png"
                    alt="light"
                    class="faq-light"
                  />
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Have any questions section end -->

        <?php
include 'includes/footer.php';
?>