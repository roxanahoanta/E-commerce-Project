@extends('client_layout.client')

@section('title')
        Home
@endsection

@section('content')
    

    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">

       @foreach ($sliders as $slider)
            <div class="slider-item" style="background-image: url(/storage/slider_images/{{$slider->slider_image}});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">{{$slider->description1}}</h1>
                            <h2 class="subheading mb-4">{{$slider->description2}}</h2>
                            <p><a href="{{url('/shop')}}" class="btn btn-primary">Details</a></p>
                        </div>

                    </div>
                </div>
            </div>
       @endforeach

     
      </div>
  </section>

  <section class="ftco-section">
          <div class="container">
              <div class="row no-gutters ftco-services">
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                  <span class="flaticon-shipped"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Delivery</h3>
              <span>Monday-Sunday 09:00-22:00</span>
            </div>
          </div>      
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                  <span class="flaticon-diet"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Everything always fresh</h3>
              <span>Well packaged products</span>
            </div>
          </div>    
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                  <span class="flaticon-award"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Superior Quality</h3>
              <span>Quality products</span>
            </div>
          </div>      
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                  <span class="flaticon-customer-service"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Suport</h3>
              <span>24/7 Suport</span>
            </div>
          </div>      
        </div>
      </div>
          </div>
      </section>
      
  <section class="ftco-section img" style="background-image: url(front-end/images/poza9.jpg);">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
            <span class="subheading"> Passion for cooking!</span>
            <h2 class="mb-4" style="color:blanchedalmond">NECCI
              RESTAURANT</h2>
            <p style="color:beige">
              We are a complex in the city of Horezu that has a cafe, fitness room, swimming pool and restaurant with a terrace heated in winter and airy in summer. We offer both traditional dishes and pizza, pasta and other selected international dishes.

              During the pandemic, we can only serve you on the terrace of the restaurant. The staff is trained to adopt the new regulations, the tables are cleaned after each client, and the place has numerous bottles of disinfectant solutions.</p>
          </div>
        </div>   		
      </div>
  </section>
  
  <br>
  <br>
  <br>

      <section class="ftco-section ftco-category ftco-no-pt">
          <div class="container">
              <div class="row">
                  <div class="col-md-8">
                      <div class="row">
                          <div class="col-md-6 order-md-last align-items-stretch d-flex">
                              <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(front-end/images/poza6.jpg);">
                                  <div class="text text-center">
                                      <h2>Pasta</h2>
                                      <p><a href="{{url('/view_product_by_category/Paste')}}" class="btn btn-primary">Menu</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(front-end/images/categorie-ciorbe.jpg);">
                                  <div class="text px-3 py-1">
                                      <h2 class="mb-0"><a href="{{url('/view_product_by_category/Ciorbe')}}">Soups</a></h2>
                                  </div>
                              </div>
                              <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(front-end/images/categorie-pizza.jpg);">
                                  <div class="text px-3 py-1">
                                      <h2 class="mb-0"><a href="{{url('/view_product_by_category/Pizza')}}">Pizza</a></h2>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                      <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(front-end/images/categorie-pui.jpg);">
                          <div class="text px-3 py-1">
                              <h2 class="mb-0"><a href="{{url('/view_product_by_category/Preparate%20Carne%20pasăre')}}">Chicken Meat dishes</a></h2>
                          </div>		
                      </div>
                      <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(front-end/images/categorie-porc.jpg);">
                          <div class="text px-3 py-1">
                              <h2 class="mb-0"><a href="{{url('/view_product_by_category/Preparate%20Carne%20porc')}}">Pork meat dishes</a></h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>


      


  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Recenzii</span>
          <h2 class="mb-4">Reviews from customers who have visited us</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(front-end/images/person_2.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line">In the restaurant there is a warm, welcoming atmosphere. Tasty food, very friendly staff. Good prices. It was worth driving for an hour to eat here, I will definitely return when I am in the area.</p>
                  <p class="name">Popa Marian</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(front-end/images/person_3.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line">Great location, impeccable service, tasty and plentiful food and decent prices. Whether you are a tourist or a local, I am sure you will not be disappointed!</p>
                  <p class="name">Marc Iulian</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(front-end/images/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line">I had breakfast with the family, the services are 5 stars, and the service is very prompt! The high quality of the services and products is easy to notice, and the prices are decent to very affordable!</p>
                  <p class="name">Jonas Claudiu</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url(front-end/images/person_4.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text text-center">
                  <p class="mb-5 pl-4 line">The menu is rich, with a remarkable diversity of quality products.</p>
                  <p class="name">Iacob Stefan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr>	
  
  
@endsection

		