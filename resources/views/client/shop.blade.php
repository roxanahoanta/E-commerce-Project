

	@extends('client_layout.client')

    @section('title')
        Menu
    @endsection

    @section('content')

    <!-- start content -->
	
    <div class="hero-wrap hero-bread" style="background-image: url('{{asset('front-end/images/poza2.jpg')}}');">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Our</a></span> <span>Products</span></p>
              <h1 class="mb-0 bread">Dishes</h1>
            </div>
          </div>
        </div>
      </div>
  
      <section class="ftco-section">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-10 mb-5 text-center">
                      <ul class="product-category">
                          <li><a href="{{url('/shop')}}" class="{{request()->is('shop') ? 'active' : ''}}">All</a></li>
                          @foreach ($categories as $category)
                               <li><a href="{{url('/view_product_by_category/'.$category->category_name)}}" class="{{request()->is('view_product_by_category/'.$category->category_name) ? 'active' : ''}}">{{$category->category_name}}</a></li>
                          @endforeach
                        </ul>
                  </div>
              </div>

              <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="product">
                          <a href="#" class="img-prod"><img class="img-fluid" src="/Storage/product_images/{{$product->product_image}}" alt="Colorlib Template">
                              <div class="overlay"></div>
                          </a>
                          <div class="text py-3 pb-4 px-3 text-center">
                              <h3><a href="#">{{$product->product_name}}</a></h3>
                              <div class="d-flex">
                                  <div class="pricing">
                                      <p class="price"><span>{{$product->product_price}} $</span></p>
                                  </div>
                              </div>
                              <div class="bottom-area d-flex px-3">
                                  <div class="m-auto d-flex">
                                      <a href="{{url('/addtocart/'.$product->id)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                          <span><i class="ion-ios-cart"></i></span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      
                    </div>
                    </div>
                @endforeach
                  
              </div>
              <div class="row mt-5">
            <div class="col text-center">
              <div class="block-27">
                <ul>
                  <li><a href="#">&lt;</a></li>
                  <li class="active"><span>1</span></li>
                  <li><a href="#">&gt;</a></li>
                </ul>
              </div>
            </div>
          </div>
          </div>
      </section>
  
      
        
    @endsection