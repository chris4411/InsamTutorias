@extends('layout-frontend.mainlayout')
@section('content')
    <!-- Demos section-->
<section class="container pt-5 pb-3 pb-lg-5" id="demos">
    <div class="text-center pt-md-4 pb-2">
      <h2><span class='fw-light'>Explore</span> Cartzilla Demos</h2>
      <p class="text-muted">Explore the collection of carefully built homepages. More to come soon!</p>
    </div>
    <div class="row pt-4">
      <div class="col-sm-6 mb-4">
        <div class="card product-card-alt">
          <div class="product-thumb border">
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-nft.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-nft.html"></a><img src="{{ asset('assets-frontend/img/home/preview/08.jpg') }}" alt="NFT Marketplace">
          </div>
          <div class="card-body text-center">
            <h3 class="product-title fs-lg pt-2"><a href="home-nft.html">NFT Marketplace</a></h3>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-4">
        <div class="card product-card-alt">
          <div class="product-thumb border">
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-fashion-store-v1.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-fashion-store-v1.html"></a><img src="{{ asset('assets-frontend/img/home/preview/01.jpg') }}" alt="Fashion Store v.1">
          </div>
          <div class="card-body text-center">
            <h3 class="product-title fs-lg pt-2"><a href="home-fashion-store-v1.html">Fashion Store v.1</a></h3>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-4">
        <div class="card product-card-alt">
          <div class="product-thumb border">
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-electronics-store.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-electronics-store.html"></a><img src="{{ asset('assets-frontend/img/home/preview/03.jpg') }}" alt="Electronics Store">
          </div>
          <div class="card-body text-center">
            <h3 class="product-title fs-lg pt-2"><a href="home-electronics-store.html">Electronics Store</a></h3>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-4">
        <div class="card product-card-alt">
          <div class="product-thumb border">
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-food-delivery.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-food-delivery.html"></a><img src="{{ asset('assets-frontend/img/home/preview/07.jpg') }}" alt="Food Delivery Service">
          </div>
          <div class="card-body text-center">
            <h3 class="product-title fs-lg pt-2"><a href="home-food-delivery.html">Food Delivery Service</a></h3>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-4">
        <div class="card product-card-alt">
          <div class="product-thumb border">
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-marketplace.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-marketplace.html"></a><img src="{{ asset('assets-frontend/img/home/preview/04.jpg') }}" alt="Multi-vendor Marketplace">
          </div>
          <div class="card-body text-center">
            <h3 class="product-title fs-lg pt-2"><a href="home-marketplace.html">Multi-vendor Marketplace</a></h3>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-4">
        <div class="card product-card-alt">
          <div class="product-thumb border">
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-grocery-store.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-grocery-store.html"></a><img src="{{ asset('assets-frontend/img/home/preview/06.jpg') }}" alt="Grocery Store">
          </div>
          <div class="card-body text-center">
            <h3 class="product-title fs-lg pt-2"><a href="home-grocery-store.html">Grocery Store</a></h3>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-4">
        <div class="card product-card-alt">
          <div class="product-thumb border">
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-fashion-store-v2.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-fashion-store-v2.html"></a><img src="{{ asset('assets-frontend/img/home/preview/02.jpg') }}" alt="Fashion Store v.2">
          </div>
          <div class="card-body text-center">
            <h3 class="product-title fs-lg pt-2"><a href="home-fashion-store-v2.html">Fashion Store v.2</a></h3>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-4">
        <div class="card product-card-alt">
          <div class="product-thumb border">
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="home-single-store.html"><i class="ci-eye"></i></a><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" target="_blank" rel="noopener"><i class="ci-cart"></i></a></div><a class="product-thumb-overlay" href="home-single-store.html"></a><img src="{{ asset('assets-frontend/img/home/preview/05.jpg') }}" alt="Single Product / Brand Store">
          </div>
          <div class="card-body text-center">
            <h3 class="product-title fs-lg pt-2"><a href="home-single-store.html">Single Product / Brand Store</a></h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Cartzilla pages section-->
  <section class="bg-dark py-5">
    <div class="container py-3 py-lg-4">
      <div class="row align-items-center">
        <div class="col-xl-4 col-lg-5 pb-4 pb-lg-0">
          <h2 class="text-light"><span class='fw-light'>Complete</span> E-Commerce Front-End <span class='fw-light'>Solution</span></h2>
          <p class="text-light opacity-70">All you need for your next e-commerce project</p>
          <ul class="text-light list-unstyled pt-3">
            <li><i class="ci-check-circle text-success me-2"></i>Shop Grid / List Layout Options</li>
            <li><i class="ci-check-circle text-success me-2"></i>Multiple Product Page Variations</li>
            <li><i class="ci-check-circle text-success me-2"></i>Complete Order Workflow: Cart + Checkout</li>
            <li><i class="ci-check-circle text-success me-2"></i>Shop Customer Account Pages</li>
            <li><i class="ci-check-circle text-success me-2"></i>Vendor Dashboard for Multi-vendor Marketplaces</li>
            <li><i class="ci-check-circle text-success me-2"></i>Ready for any Content: Fashion, Electronics, Digital (Downloadable) Products, etc.</li>
            <li><i class="ci-check-circle text-success me-2"></i>Blog Pages: Blog Layouts + Single Post</li>
            <li><i class="ci-check-circle text-success me-2"></i>Help Center / Support Pages</li>
            <li><i class="ci-check-circle text-success me-2"></i>Secondary Pages: About, Contacts, 404, etc.</li>
            <li><i class="ci-check-circle text-success me-2"></i>40+ Flexible Components</li>
          </ul>
        </div>
        <div class="col-lg-7 offset-xl-1"><img src="{{ asset('assets-frontend/img/intro/pages-showcase.jpg') }}" alt="Cartzilla pages"></div>
      </div>
    </div>
  </section>
  <!-- Cartzill handheld toolbar-->
  <section class="bg-secondary py-4">
    <div class="container pt-4 pt-md-0">
      <div class="row align-items-center">
        <div class="col-xl-4 offset-xl-1 col-lg-5 offset-lg-1 col-md-6 text-center text-md-left"><span class="badge badge-info fs-sm mb-4">From v1.2</span>
          <h2><span class='fw-light'>Even More</span> Mobile Friendly <span class='fw-light'>Interface</span></h2>
          <p class="text-muted pb-2">New <span class='fw-medium'>Toolbar</span> designed specifically for handheld devices to further improve user experience.</p>
          <p class="fs-sm">Scan QR code below to test on your device:</p><img src="{{ asset('assets-frontend/img/intro/qrcode.png') }}" width="150" alt="QR code">
        </div>
        <div class="col-md-6"><img class="d-block mx-auto" src="{{ asset('assets-frontend/img/intro/handheld-toolbar.jpg') }}" alt="Toolbar"></div>
      </div>
    </div>
  </section>
  <!-- Cartzilla features section-->
  <section class="py-5">
    <div class="container py-3 py-lg-4">
      <h2 class="text-center mb-4">Cartzilla Feature <span class='fw-light'>Highlights</span></h2>
      <div class="row text-center pt-4">
        <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="{{ asset('assets-frontend/img/intro/features/01.png') }}" width="90" alt="Gulp icon">
          <h6>Kick-start Your Development</h6>
          <p class="fs-ms text-muted mb-0">Start your development process fast and easy with Node.js and Gulp setup. Configuration files are included in download package. Full tasks automation.</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="{{ asset('assets-frontend/img/intro/features/02.png') }}" width="90" alt="Sass icon">
          <h6>Easy to Customize with Sass</h6>
          <p class="fs-ms text-muted mb-0">Cartzilla is built using Sass. Easily change colors, typography and much more. It is the most mature, stable, and powerful CSS extension language in the world.</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="{{ asset('assets-frontend/img/intro/features/03.png') }}" width="90" alt="Pug icon">
          <h6>Pug - Node Templating Engine</h6>
          <p class="fs-ms text-muted mb-0">No need to write huge amount of HTML, if you don’t want to. Pug provides features not available in plain HTML like variables, includes, mixins, functions, etc.</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="{{ asset('assets-frontend/img/intro/features/04.png') }}" width="90" alt="Bootstrap icon">
          <h6>Built With Bootstrap 5</h6>
          <p class="fs-ms text-muted mb-0">Cartzilla is the powerful e-commerce front-end solution based on Bootstrap 5 - the world's most popular responsive, mobile-first front-end component library.</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="{{ asset('assets-frontend/img/intro/features/05.png') }}" width="90" alt="Web Components icon">
          <h6>40+ Flexible Components</h6>
          <p class="fs-ms text-muted mb-0">Besides styling all default Bootstrap 5 components Cartzilla introduces lots of new flexible, customizable and reusable elements you can use across the website.</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="{{ asset('assets-frontend/img/intro/features/06.png') }}" width="90" alt="Mobile Friendly icon">
          <h6>Mobile Friendly Interface</h6>
          <p class="fs-ms text-muted mb-0">It's not a surprise that nowadays over 70% of users shop online using their mobile devices. Cartzilla is 100% responsive and optimized for small touch screens.</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="{{ asset('assets-frontend/img/intro/features/07.png') }}" width="90" alt="Google Fonts icon">
          <h6>Google Fonts</h6>
          <p class="fs-ms text-muted mb-0">Cartzilla uses Google fonts which are free, fast to load and of very high quality. Currently Google fonts library includes 870+ font families to choose from.</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="{{ asset('assets-frontend/img/intro/features/08.png') }}" width="90" alt="Touch icon">
          <h6>Touch-enabled Sliders</h6>
          <p class="fs-ms text-muted mb-0">In the era of touch screens it's important to ensure great user experience on handheld devices, especially when it comes to such frequently used interface component as slider.</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="{{ asset('assets-frontend/img/intro/features/09.png') }}" width="90" alt="Vector icon">
          <h6>Vector Based HD Ready Icons</h6>
          <p class="fs-ms text-muted mb-0">Cartzilla is equiped with font-based icon pack to ensure that infographics and interface icons look sharp on any device with any screen resolution and pixel density.</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="{{ asset('assets-frontend/img/intro/features/10.png') }}" width="90" alt="HTML5 icon">
          <h6>W3C Valid HTML Code</h6>
          <p class="fs-ms text-muted mb-0">All HTML files are checked via W3C validator to ensure 100% valid code. As you probably know invalid HTML limits innovation, but Cartzilla is innovative at its core.</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="{{ asset('assets-frontend/img/intro/features/11.png') }}" width="90" alt="JavaScript icon">
          <h6>Future-proof JavaScript</h6>
          <p class="fs-ms text-muted mb-0">Cartzilla core scripts as well as all dependencies are written in vanilla JS. And now with Bootstrap 5 we finally drops jQuery and uses ES6 modules.</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter pb-2"><img class="inline-block mb-3" src="{{ asset('assets-frontend/img/intro/features/12.png') }}" width="90" alt="Documentation icon">
          <h6>Detailed Documentation</h6>
          <p class="fs-ms text-muted mb-0">Download package includes links to online documentation. It covers all crucial information about how to get started, customize template and components usage.</p>
        </div>
      </div>
      <h6 class="text-center">And much more...</h6>
    </div>
  </section>e

@endsection
<!-- End Page-content -->
