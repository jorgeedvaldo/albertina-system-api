@extends('layouts.app')
@section('nav-home', 'off')

@section('content')
<section class="home-slider js-fullheight owl-carousel bg-white">
    <div class="slider-item js-fullheight">
        <div class="overlay"></div>
      <div class="container-fluid p-0">
        <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
            <div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_3.jpg);">
                <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <div class="text mt-md-5">
                  <h1 class="mb-4">Eat Healthy <br> and Natural Foods</h1>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
                  <div class="thumb mt-4 mb-3 d-flex">
                      <a href="#" class="thumb-menu pr-md-4 text-center">
                          <div class="img" style="background-image: url(images/menu-1.jpg);"></div>
                          <h4>Australian Organic Beef</h4>
                      </a>
                      <a href="#" class="thumb-menu pr-md-4 text-center">
                          <div class="img" style="background-image: url(images/menu-2.jpg);"></div>
                          <h4>Australian Organic Beef</h4>
                      </a>
                      <a href="#" class="thumb-menu pr-md-4 text-center">
                          <div class="img" style="background-image: url(images/menu-3.jpg);"></div>
                          <h4>Australian Organic Beef</h4>
                      </a>
                  </div>
                  <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Book A Table</a></p>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="slider-item js-fullheight">
        <div class="overlay"></div>
      <div class="container-fluid p-0">
        <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
            <div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_2.jpg);">
                <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <div class="text mt-md-5">
                  <h1 class="mb-4">We Love <br> Delicious Foods</h1>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
                  <div class="thumb mt-4 mb-3 d-flex">
                      <a href="#" class="thumb-menu pr-md-4 text-center">
                          <div class="img" style="background-image: url(images/menu-1.jpg);"></div>
                          <h4>Australian Organic Beef</h4>
                      </a>
                      <a href="#" class="thumb-menu pr-md-4 text-center">
                          <div class="img" style="background-image: url(images/menu-2.jpg);"></div>
                          <h4>Australian Organic Beef</h4>
                      </a>
                      <a href="#" class="thumb-menu pr-md-4 text-center">
                          <div class="img" style="background-image: url(images/menu-3.jpg);"></div>
                          <h4>Australian Organic Beef</h4>
                      </a>
                  </div>
                  <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Book A Table</a></p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>


      <section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
          <div class="container">
              <div class="row no-gutters">
                  <div class="col-sm-5 img img-2 d-flex align-items-center justify-content-center justify-content-md-end" style="background-image: url(images/about.jpg); position: relative">

                  </div>
                  <div class="col-sm-7 wrap-about py-5 ftco-animate">
            <div class="heading-section mt-5 mb-4">
                <div class="pl-lg-5 ml-md-5">
                    <span class="subheading">About</span>
                  <h2 class="mb-4">Welcome to Kusina Restaurant</h2>
              </div>
            </div>
            <div class="pl-lg-5 ml-md-5">
                          <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <h3 class="mt-5">Special Recipe</h3>
                          <div class="thumb my-4 d-flex">
                  <a href="#" class="thumb-menu pr-md-4 text-center">
                      <div class="img" style="background-image: url(images/lunch-4.jpg);"></div>
                      <h4>Australian Organic Beef</h4>
                  </a>
                  <a href="#" class="thumb-menu pr-md-4 text-center">
                      <div class="img" style="background-image: url(images/lunch-7.jpg);"></div>
                      <h4>Australian Organic Beef</h4>
                  </a>
                  <a href="#" class="thumb-menu pr-md-4 text-center">
                      <div class="img" style="background-image: url(images/lunch-6.jpg);"></div>
                      <h4>Australian Organic Beef</h4>
                  </a>
              </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
          <div class="row d-md-flex align-items-center justify-content-center">
              <div class="col-lg-10">
                  <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                    <div class="text">
                      <strong class="number" data-number="6">0</strong>
                      <span>Anos de Experiência</span>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                    <div class="text">
                      <strong class="number" data-number="20000">0</strong>
                      <span>Clientes</span>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                    <div class="text">
                      <strong class="number" data-number="564">0</strong>
                      <span>Nossas Vendas/Encomendas</span>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                    <div class="text">
                      <strong class="number" data-number="2190">0</strong>
                      <span>Dias de Trabalho</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      </div>
  </section>


  <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Specialties</span>
          <h2 class="mb-4">Our Menu</h2>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-lg-4 menu-wrap">
              <div class="heading-menu text-center ftco-animate">
                  <h3>Breakfast</h3>
              </div>
              <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/breakfast-1.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Beef with potatoes</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/breakfast-2.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Crab with Onion</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/breakfast-3.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Crab with Onion</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          </div>

          <div class="col-md-6 col-lg-4 menu-wrap">
              <div class="heading-menu text-center ftco-animate">
                  <h3>Lunch</h3>
              </div>
              <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/lunch-1.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Beef with potatoes</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/lunch-2.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Crab with Onion</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/lunch-3.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Crab with Onion</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          </div>

          <div class="col-md-6 col-lg-4 menu-wrap">
              <div class="heading-menu text-center ftco-animate">
                  <h3>Dinner</h3>
              </div>
              <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/dinner-1.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Beef with potatoes</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/dinner-2.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Crab with Onion</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/dinner-3.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Crab with Onion</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          </div>

          <!--  -->
          <div class="col-md-6 col-lg-4 menu-wrap">
              <div class="heading-menu text-center ftco-animate">
                  <h3>Desserts</h3>
              </div>
              <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/dessert-1.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Beef with potatoes</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/dessert-2.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Crab with Onion</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/dessert-3.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Crab with Onion</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          </div>

          <div class="col-md-6 col-lg-4 menu-wrap">
              <div class="heading-menu text-center ftco-animate">
                  <h3>Wine Card</h3>
              </div>
              <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/wine-1.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Beef with potatoes</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/wine-2.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Crab with Onion</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/wine-3.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Crab with Onion</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          </div>

          <div class="col-md-6 col-lg-4 menu-wrap">
              <div class="heading-menu text-center ftco-animate">
                  <h3>Drinks</h3>
              </div>
              <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/drink-1.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Beef with potatoes</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/drink-2.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Crab with Onion</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url(images/drink-3.jpg);"></div>
            <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Crab with Onion</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 text-center ftco-animate">
              <p><a href="#" class="btn btn-black py-3 px-5">View All Menu</a></p>
          </div>
      </div>
      </div>

  </section>
@endsection
