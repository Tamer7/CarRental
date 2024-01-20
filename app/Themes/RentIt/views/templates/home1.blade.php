
<!-- PAGE -->

<section class="page-section no-padding slider">
    <div class="container full-width">

        <div class="main-slider">
            <div>

                <!-- Slide 1 -->
                <div class="item slide1 ver1">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                <div class="div-cell">
                                    <div class="caption-content">
                                        <h2 class="caption-title">{{__('All Discounts Just For You')}}</h2>
                                        <h3 class="caption-subtitle">{{__('Find Best Rental Car')}}</h3>
                                        <!-- Search form -->
                                        <div class="row">
                                            <div class="col-sm-12 col-md-10 col-md-offset-1">

                                                <div class="form-search dark">
                                                    <form action="{{ route('products.index') }}" method="get">
                                                        <div class="form-title">
                                                            <i class="fa fa-globe"></i>
                                                            <h2>{{__('Search for Cheap Rental Cars Wherever Your Are')}}</h2>
                                                        </div>

                                                        <div class="row row-inputs">
                                                            <div class="container-fluid">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchUpLocation">{{__('Picking Up Location')}}</label>
                                                                        <select name="PickingUpLocation"
                                                                                class="selectpicker input-price"
                                                                                data-live-search="true"
                                                                                data-width="100%"
                                                                                data-toggle="tooltip"
                                                                                id="formSearchUpLocation"
                                                                        >
                                                                            @if($locations ?? false)
                                                                                @foreach($locations as $location)


                                                                                    <option
                                                                                        <?php  selected( old( 'PickingUpLocation', session( 'PickingUpLocation' ) ), $location->alias ); ?>
                                                                                        value="{{$location->alias}}">{{$location->title}}</option>
                                                                                @endforeach
                                                                            @endif
                                                                        </select>
                                                                        <span class="form-control-icon"><i
                                                                                    class="fa fa-map-marker"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchUpDate">{{__('Picking Up Date')}}</label>
                                                                        <input autocomplete="off"
                                                                               name="PickingUpDate"
                                                                               type="text"
                                                                               class="PickingUpDate form-control datepicker"
                                                                               id="formSearchUpDate"
                                                                               placeholder="dd/mm/yyyy"
                                                                               value="{{session('PickingUpDate')}}"
                                                                        >
                                                                        <span class="form-control-icon">
                                                                            <i class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group has-icon has-label selectpicker-wrapper">
                                                                        <label>{{__('Picking Up Hour')}}</label>

                                                                        <select
                                                                                name="PickingUpHour"
                                                                                class="selectpicker input-price"
                                                                                data-live-search="true"
                                                                                data-width="100%"
                                                                                data-toggle="tooltip" title="Select">

                                                                            <?php  $times = rentit_get_times(); ?>
                                                                            @if($times && is_array($times))
                                                                                @foreach($times as $time)
                                                                                    <option
                                                                                        <?php  selected( old( 'PickingUpHour', session( 'PickingUpHour' ) ), $time ); ?> value="{{$time}}">{{$time}}</option>
                                                                                @endforeach
                                                                            @endif

                                                                        </select>
                                                                        <span class="form-control-icon"><i
                                                                                    class="fa fa-clock-o"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row row-inputs">
                                                            <div class="container-fluid">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchOffLocation">{{__('Dropping Off Location')}}</label>
                                                                        <select id="formSearchOffLocation"
                                                                                name="DroppingOffLocation"
                                                                                class="selectpicker input-price"
                                                                                data-live-search="true"
                                                                                data-width="100%"
                                                                                data-toggle="tooltip" title="Select">
                                                                            @if($locations)
                                                                                @foreach($locations as $location)

                                                                                    <option
                                                                                        <?php  selected( old( 'DroppingOffLocation', session( 'DroppingOffLocation' ) ), $location->alias ); ?>
                                                                                        value="{{$location->alias}}">{{$location->title}}</option>

                                                                                @endforeach
                                                                            @endif
                                                                        </select>
                                                                        <span class="form-control-icon"><i
                                                                                    class="fa fa-map-marker"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchOffDate">{{__('Dropping Off Date')}}</label>
                                                                        <input autocomplete="off"
                                                                               name="DroppingOffDate"
                                                                               type="text"
                                                                               class="form-control datepicker DroppingOffDate"
                                                                               id="formSearchOffDate"
                                                                               placeholder="dd/mm/yyyy"
                                                                               value="{{session('DroppingOffDate')}}"
                                                                        >
                                                                        <span class="form-control-icon"><i
                                                                                    class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">

                                                                    <div class="form-group has-icon has-label selectpicker-wrapper">
                                                                        <label>{{__("Dropping Off Hour")}}</label>
                                                                        <select name="DroppingOffHour"
                                                                                class="selectpicker input-price"
                                                                                data-live-search="true"
                                                                                data-width="100%"
                                                                                data-toggle="tooltip" title="Select">
                                                                            @if($times && is_array($times))
                                                                                @foreach($times as $time)
                                                                                    <option
                                                                                        <?php  selected( old( 'DroppingOffHour', session( 'DroppingOffHour' ) ), $time ); ?> value="{{$time}}">{{$time}}</option>
                                                                                @endforeach
                                                                            @endif

                                                                        </select>
                                                                        <span class="form-control-icon"><i
                                                                                    class="fa fa-clock-o"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row row-submit">
                                                            <div class="container-fluid">
                                                                <div class="inner">
                                                                    <i class="fa fa-plus-circle"></i>{{__(' ')}}
                                                                    <button type="submit" id="formSearchSubmit"
                                                                            class="btn btn-submit btn-theme pull-right">{{__("Find Car")}}</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /Search form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Slide 1 -->


            </div>
        </div>

    </div>
</section>
<!-- /PAGE -->

<style>
  .n_slider {
    width: 100%;
    overflow: hidden;
  }

  .slider_container {
    display: flex;
  }

  .slider_container h1 {
    font-size: 36px;
    font-weight: bold;
    color: black;
  }

  .slider_container h1 {
    color: black;
  }

  /* .slider_container #slide1 h1,
  .slider_container #slide1 h3 {
    color: white !important;
  } */
  .slider_container .slide  h3{
    margin-bottom:20px;
  }

  .slider_container .slide {
    padding: 2vw 0 5vw 22vw;
    position: absolute;
    height:inherit;
    left: 0;
    min-width: 100%;
    box-sizing: border-box;
    opacity: 0;
    transition: opacity 1s ease-in-out;
    z-index:1;
  }
  .slider_container #slide1::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.6); /* Adjust the alpha value (0.5 in this case) for opacity */
    z-index: -1;
}
  .slider_container #slide1 {
    background: rgba(255, 255, 255, 0.5); /* Adjust the alpha value (0.5 in this case) for opacity */
    background-image:url('https://goldenlease.ae/wp-content/uploads/2023/11/goldenlease-monthly-car-rental-in-dubai-2.webp');
    background-size: cover;
    background-position:center;

  }
  .slider_container #slide2 {
    background-image:url('https://goldenlease.ae/wp-content/uploads/2023/11/goldenlease-monthly-car-rental-in-dubai-long-term-2.webp');
    background-size: cover;
    background-position:center;
  }
  .slider_container #slide3 {
    background-image:url('https://goldenlease.ae/wp-content/uploads/2023/11/goldenlease-car-rental-extra-services-2.webp');
    background-size: cover;
    background-position:center;


  }
  .slider_container .slide.active {
    opacity: 1;
    z-index: 9;
  }

  .slide_content {
    position: absolute;
    width: fit-content;
    margin: auto;
    top: 70px;
    left: 20vw;
  }

  .whatsapp_btn {
    background-color: green;
    border-radius: 25px;
    padding: 15px 28px;
    margin-right:20px;
    margin-top:20px;
    color: white !important;
  }

  .whatsapp_btn:hover {
    color: green;
    font-weight: bold;
  }

  .call_btn {
    background-color: black;
    border-radius: 25px;
    padding: 15px 28px;
    margin: 20px 20px 0 0;
    color: white !important;
  }

  .call_btn:hover {
    color: black !important;
    background-color: white;
  }

  .slide_img img {
    max-height: 300px;
    width: 100%;
    object-fit: cover;
  }

  .btn_container {
    position: relative;
    top:85%;
    width: 100%;
    justify-content: center;
    align-items: center;
    text-align: center;
    height: 50px;
    z-index:100;
  }

  .btn_container span {
    background-color: grey;
    border: 2px solid white;
    display:inline-block;
    /* padding: 0 7px;
    margin: 2px;
    height: 0px; */
    border-radius: 50%;

    width: 14px;
    height: 14px;
    margin: 5px;
    background-color: transparent;
    border: solid 3px #a5abb7;
}
  

  .btn_container span:hover {
    background-color: white;
    border: 2px solid black;
    cursor: pointer;
  }

  .btn_container .active_btn {
    background-color: white !important;
    border: 2px solid black !important;
  }
  @media screen and  (max-width: 280px) {
    .slider_container .slide {
    padding: 4vw 0 4vw 2vw !important ;
  }
  .slider_container .action_buttons{
    display:flex;
    justify-content:center;
    flex-direction:column;
    padding-left:20px !important;

  }
  .slider_container .action_buttons *{
    width:fit-content !important;
  }

  .slider_container {
    height: 500px;
  }
  .slider_container .whatsapp_btn{
    padding: 15px 16px !important;
    min-width:130px;
    
  }
   .slider_container .call_btn {
    padding: 15px 16px !important;
    min-width:130px;
  }
  .btn_container {
    top:94% !important;
  }


}
 /* Styles for screens up to 767px width */
@media screen and (min-width: 281px) and (max-width: 767px) {
  .slider_container .slide {
    padding: 4vw 0 4vw 4vw !important ;
  }

  .slider_container {
    height: 320px;
  }
  .slider_container .whatsapp_btn{
    padding: 15px 16px !important;
    
  }
   .slider_container .call_btn {
    padding: 15px 16px !important;
  }

  
}


/* Styles for screens between 768px and 991px width */
@media screen and (min-width: 768px) and (max-width: 991px) {
    .slider_container .slide {
    padding: 4vw 0 4vw 15vw !important ;
  }
  .slider_container {
    height: 300px;
  }
  
}

/* Styles for screens 992px and wider */
@media screen and (min-width: 992px) {
    .slider_container .slide {
    padding: 2vw 0 4vw 22vw !important ;
  }
  .slider_container {
    height: 300px;
  }
  .docs_info .first-col
  {
    border-right:2px solid black;
  }
}


</style>

<section class="n_slider">
  <div class="slider_container">
    <div class="slide active" id="slide1">
        <h1>FOR TEACHER </h1>
        <h3>55,000 km monthly instead of 4,000, 800 deposit <br> 5,000 km monthly instead of 4,000, 800 deposit</h3>
        <div class ="action_buttons">
          <a class="call_btn" href="">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>CALL NOW</span>
          </a>
          <a class="whatsapp_btn" href="">
          <i class="fa-brands fa-whatsapp"></i>
            <span>WHATSAPP</span>
          </a>
      </div>
    </div>
    <div class="slide" id= "slide2">
        <h1>New in Dubai </h1>
        <h3>Accept New Driving license, <br> 1000 deposit for monthly rent <br> instead of 1500 for new driving license. </h3>
        <div class ="action_buttons">
          <a class="call_btn" href="">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>CALL NOW</span>
          </a>
          <a class="whatsapp_btn" href="">
          <i class="fa-brands fa-whatsapp"></i>
            <span>WHATSAPP</span>
          </a>
        </div>
    </div>
    <div class="slide" id ="slide3">
        <h1>LONG TERM</h1>
        <h3>Special offers & prices upon request. </h3>
        <div class ="action_buttons" >
          <a class="call_btn" href="">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>CALL NOW</span>
          </a>
          <a class="whatsapp_btn" href="">
          <i class="fa-brands fa-whatsapp"></i>
            <span>WHATSAPP</span>
          </a>
        </div>
    </div>
    <div class="btn_container">
      <span class="slide_btn active_btn" onclick="showImage(0)"></span>
      <span class="slide_btn" onclick="showImage(1)"></span>
      <span class="slide_btn" onclick="showImage(2)"></span>
    </div>
  </div>
</section>

<script>
  const slides = document.querySelectorAll('.slide');
  let count = 0;

  function showImage(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    const buttons = document.querySelectorAll('.slide_btn');
    const active_btn = document.querySelector('.active_btn');
    slides[index].classList.add('active');
    buttons[index].classList.add('active_btn');
    active_btn.classList.remove('active_btn');
  }

  setInterval(() => {
    count = (count + 1) % slides.length;
    showImage(count);
  }, 5000); // Change slide every 6 seconds
</script>

<section class="page-section">
    <div class="container">

        <h2 class="section-title wow fadeInUp" data-wow-offset="70" data-wow-delay="100ms">
            <small>{{__("What a Kind of Car You Want")}}</small>
            <span>{{__("Great Rental Offers for You")}}</span>

        </h2>

        <div class="tabs wow fadeInUp" data-wow-offset="70" data-wow-delay="300ms">
            @if($terms)
                <ul id="tabs" class="nav">
                    @foreach($terms as $item)
                        @if($item->type == 'category')
                            <li class="{{($loop->index == 0 )?  'active' : ''}}">
                                <a href="#tab-{{$item->alias}}" data-toggle="tab">{{$item->title}}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="tab-content wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">

            @foreach($terms as $item)
                @if($item->type == 'category')
                    <div class="sladersss tab-pane fade  {{($loop->index == 0 )?  'active in' : ''}} "
                         id="tab-{{$item->alias}}">

                        <div class="swiper swiper--{{$item->alias}}">
                            <div class="swiper-container-GREAT-RENTAL swiper-container">

                                <div class="swiper-wrapper">

                                    <!-- Slides -->

                                    @if($item->products)
                                        @foreach($item->products as $product)
                                            <div class="swiper-slide">
                                                <div class="thumbnail no-border no-padding thumbnail-car-card">
                                                    <div class="media">

                                                        @if(isset($product->img) && $product->img > 0)

                                                            <a class="media-link" data-gal="prettyPhoto"
                                                               href="{{ the_image_url($product->img) }}">
                                                                <img src="{{ the_image_url($product->img,'thumbnail-370x220') }}"
                                                                     alt=""/>
                                                                <span class="icon-view"><strong><i
                                                                                class="fa fa-eye"></i></strong></span>
                                                            </a>
                                                        @endif

                                                    </div>
                                                    <div class="caption text-center">
                                                        <h4 class="caption-title"><a
                                                                    href="#">{{$product->title}}</a>
                                                        </h4>
                                                        <div class="caption-text">{{__('Start
                                                            from')}} {{formatted_price($product->price)}}{{__('/per a day')}}
                                                        </div>
                                                        <div class="buttons">
                                                            <a class="btn btn-theme ripple-effect"
                                                               href="{{route('products.show',['products'=> $product->alias ])}}">  {{get_theme_mod('rentit_rent_it',__('Rent It'))}}</a>
                                                        </div>
                                                        <table class="table">
                                                            <tr>
                                                                <?php
                                                                $product_meta = getProductMetas( $product );

                                                                if($product_meta['product_icons'] ?? false) {
                                                                $product_icons = unserialize( $product_meta['product_icons'] );


                                                                if ( is_array( $product_icons ) && $product_icons['icon'] ?? false && $product_icons['text'] ?? false) {
                                                                $product_icons = array_combine( $product_icons['icon'], $product_icons['text'] );


                                                                $j = 0;
                                                                foreach ( $product_icons as $k => $text ) {  ?>
                                                                <td><i class="fa {{$k}}"></i> {{$text}}</td>
                                                                <?php
                                                                }
                                                                }
                                                                }
                                                                ?>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
                                    @endif


                                </div>

                            </div>

                            <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>

                        </div>

                    </div>
                @endif
            @endforeach
        </div>


    </div>
</section>
<!-- /PAGE -->


<section class="page-section" style="padding: 20px 30px; font-family: Arial, sans-serif;">
    <div class="container docs_info">

        <h2 class="section-title" style="text-align: center; font-weight: bold; margin-bottom: 30px; color: #333;">
            WHAT DOCUMENTS ARE REQUIRED TO RENT A CAR IN DUBAI?
        </h2>

        <p style="text-align:left;">The following documents are required for booking or making reservations for car rental services for people residing in the UAE.</p>

        <div class="row" style="margin-bottom: 10px;text-align:center;">
            <div class="col-md-6 first-col" >
               <div style ="display:flex; align-items:end;">
                    <h3 style="font-size: 18px; color: #333; margin-bottom: 10px; font-weight:bold;">For UAE Residents</h3>
                    <hr style ="flex:1; margin-left:5px">
                </div>
                <ul style="list-style: disc; padding: 0; color: #555; text-align:left; margin-left:25px;">
                    <li>Passport copy</li>
                    <li>Valid UAE driving license</li>
                    <li>Copy of Emirates ID</li>
                </ul>
            </div>
            <div class="col-md-6" style="text-align:center;">
                <div style ="display:flex; align-items:end;">
                    <h3 style="font-size: 18px; color: #333; margin-bottom: 10px; font-weight:bold;">For Tourists visiting UAE</h3>
                    <hr style ="flex:1; margin-left:5px";>
                </div>
                <ul style="list-style: disc; padding: 0; color: #555;  text-align:left; margin-left:25px;">
                    <li>Passport copy</li>
                    <li>Valid International driving license</li>
                    <li>Copy of Visit Visa/ Visa stamp</li>
                </ul>
            </div>
        </div>

        <div class="row" style="margin-top: 20px;">
    <div class="col-md-12 " style="background-color: #FFC107; text-align: center; padding: 10px; color: #333; font-weight:bold; border-radius:10px; font-size: 14px; box-shadow: 0 2px 4px rgba(0,0,0,.2);">
        Visitors from European / GCC Countries can drive on their home country driving license (when on Visit Visa)
    </div>
</div>


    </div>
</section>

<!-- PAGE -->
<!-- <section class="page-section">
    <div class="container">

        <div class="row">
            <div class="col-md-4 wow flipInY" data-wow-offset="70" data-wow-duration="1s">
                <div class="thumbnail thumbnail-featured no-border no-padding">
                    <div class="media">
                        <a class="media-link" href="#">
                            <div class="caption">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <div class="caption-icon"><i class="fa fa-support"></i></div>
                                        <h4 class="caption-title">Teacher Deals</h4>
                                        <div class="caption-text">5,000 km monthly instead of 4,000, 800 deposit </br>  for monthly rental instead of 1000, 100 AED off in rental price </div>
                                        <div class="buttons">
                                            <span onclick="window.location.href='#'"
                                                  class="btn btn-theme ripple-effect btn-theme-transparent">{{__("Read More")}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption hovered">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <div class="caption-icon"><i class="fa fa-support"></i></div>
                                        <h4 class="caption-title">Teacher deals</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow flipInY" data-wow-offset="70" data-wow-duration="1s" data-wow-delay="200ms">
                <div class="thumbnail thumbnail-featured no-border no-padding">
                    <div class="media">
                        <a class="media-link" href="#">
                            <div class="caption">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <div class="caption-icon"><i class="fa fa-calendar"></i></div>
                                        <h4 class="caption-title">New in Dubai</h4>
                                        <div class="caption-text">Accept New Driving license,  1000 deposit for monthly rent  instead of 1500 for new driving license. </div>
                                        <div class="buttons">
                                            <span class="btn btn-theme ripple-effect btn-theme-transparent">{{__("Read More")}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption hovered">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <div class="caption-icon"><i class="fa fa-calendar"></i></div>
                                        <h4 class="caption-title">New in Dubai</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow flipInY" data-wow-offset="70" data-wow-duration="1s" data-wow-delay="400ms">
                <div class="thumbnail thumbnail-featured no-border no-padding">
                    <div class="media">
                        <a class="media-link" href="#">
                            <div class="caption">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <div class="caption-icon"><i class="fa fa-map-marker"></i></div>
                                        <h4 class="caption-title">Long Term</h4>
                                        <div class="caption-text">Special offers & prices upon request </br> </br> </br> </div>
                                        <div class="buttons">
                                            <span class="btn btn-theme ripple-effect btn-theme-transparent">{{__("Read More")}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption hovered">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <div class="caption-icon"><i class="fa fa-map-marker"></i></div>
                                        <h4 class="caption-title">Long Term</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section> -->
<!-- /PAGE -->

<!-- PAGE -->


<!-- PAGE -->


<!-- PAGE -->
<section class="page-section testimonials">

<h2 class="section-title wow fadeInUp" data-wow-offset="70" data-wow-delay="100ms">
            <span>{{__("OUR BELOVED CLIENTS")}}</span>

        </h2>

    <div class="container wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
        <div class="testimonials-carousel">
            <div class="owl-carousel" id="testimonials">
                <div class="testimonial">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object testimonial-avatar"
                                     src="{{ asset(config('settings.theme')) }}/assets/img/preview/avatars/testimonial-140x140x1.jpg"
                                     alt="Testimonial avatar">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="testimonial-text">{{__("I have rented cars from several different companies in the past, but this rent-a-car company stands out as the best. The staff is always friendly and helpful, and the process of booking and picking up my rental is always seamless. The cars are always clean and in excellent condition. I highly recommend this company to anyone in need of a rental car.")}}</div>
                            <div class="testimonial-name">{{__("Ana ")}}</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object testimonial-avatar"
                                     src="{{ asset(config('settings.theme')) }}/assets/img/preview/avatars/testimonial-140x140x1.jpg"
                                     alt="Testimonial avatar">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="testimonial-text">{{__("I have been a loyal customer of this rent-a-car company for years, and I am always blown away by the level of professionalism and kindness shown by the staff. The cars are always clean and well-maintained, and the process of booking and picking up my rental is always seamless. I highly recommend this company to anyone in need of a rental car.")}}</div>
                            <div class="testimonial-name">{{__("Ahmed")}}</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object testimonial-avatar"
                                     src="{{ asset(config('settings.theme')) }}/assets/img/preview/avatars/testimonial-140x140x1.jpg"
                                     alt="Testimonial avatar">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="testimonial-text">{{__("I recently had the pleasure of renting a car from this company for a business trip, and I was thoroughly impressed with the level of service I received. The staff was knowledgeable and accommodating, and the car was clean and well-maintained. I will definitely be using this company for all of my future car rental needs.")}}</div>
                            <div class="testimonial-name">{{__("John")}}</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object testimonial-avatar"
                                     src="{{ asset(config('settings.theme')) }}/assets/img/preview/avatars/testimonial-140x140x1.jpg"
                                     alt="Testimonial avatar">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="testimonial-text">{{__("I have rented cars from several different companies in the past, but this rent-a-car company has consistently exceeded my expectations. The staff is always friendly and helpful, and the cars are always in excellent condition. I highly recommend this company to anyone in need of a rental car.")}}</div>
                            <div class="testimonial-name">{{__("Ashiq")}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /PAGE -->

<!-- PAGE -->
<section class="page-section">
    <div class="container">

        <h2 class="section-title wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
            <small>{{__("Select What You Want")}}</small>
            <span>{{__("Our awesome Rental Fleet cars")}}</span>
        </h2>

        @if($terms)



            <div class="tabs awesome wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
                <ul id="tabs1" class="nav"><!--

                <?php  $i = 1; ?>
                        -->
                    @foreach($terms as $item)

                        @if($item->type == 'group')
                            <li data-q="{{$i}}" class="{{($i == 2 ? 'active' : '')}}"><a href="#tab-x{{$i}}"
                                                                                         data-toggle="tab">{{$item->title}}</a></li>

                            <?php  $i ++; ?>
                        @endif
                    @endforeach


                </ul>
            </div>



            <div class="tab-content wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
                <!-- tab 1 -->

                <?php  $i = 1; ?>

                @foreach($terms as $item)
                    @if($item->type == 'group')
                        <div class="mutabsss tab-pane fade panel1 {{ ( $i == 1 ) ? ' active in ' : ''}}"
                             id="tab-x{{$i}}">
                            <div class="car-big-card">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="tabs awesome-sub">
                                            <ul id="tabs4" class="nav"><!--

                                            -->
                                                <?php  $j = 1; ?>
                                                @foreach($item->products as $product)
                                                    <li class="{{( $j == 1 ) ? ' active' : ""}} linkswiperSlider{{$i}}x{{$j}}">
                                                        <a
                                                                href="#tab-x{{$i}}x{{$j}}"
                                                                data-swiper="swiperSlider{{$i}}x{{$j}}"
                                                                data-toggle="tab">{{$product->title}}</a></li><!--
                                            -->
                                                    <?php  $j ++; ?>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9">

                                        <!-- Sub tabs content -->
                                        <div class="tab-content">

                                            <div class="tab-content">
                                                <?php  $j = 1; ?>
                                                @foreach($item->products as $product)
                                                    <div class="tab-pane mytab_car fade custumclass {{( $j == 1 ) ? ' active in' : ""}}"
                                                         id="tab-x{{$i}}x{{$j}}">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                            <?php
                                                            $gallery_media = [];
                                                            foreach ( $product->meta as $meta ) {
                                                                if ( $meta->name == 'gallery_media' ) {
                                                                    $gallery_media = explode( ',', $meta->value );
                                                                }
                                                            }

                                                            ?>
                                                            <!-- Swiper -->
                                                                <div class="swiper-container"
                                                                     id="swiperSlider{{$i}}x{{$j}}"
                                                                     data-img0="{{the_image_url($product->img,'thumbnail-600x426')}}"
                                                                     @if($gallery_media && isset($gallery_media[0]{0}))

                                                                     @foreach($gallery_media as $k => $gItme)
                                                                     data-img{{$k+1}}="{{the_image_url($gItme,'thumbnail-600x426')}}"
                                                                        @endforeach
                                                                        @endif
                                                                >
                                                                    <div class="swiper-wrapper">
                                                                        <div class="swiper-slide">
                                                                            <a class="btn btn-zoom"
                                                                               href="{{the_image_url($product->img)}}"
                                                                               data-gal="prettyPhoto"><i
                                                                                        class="fa fa-arrows-h"></i></a>
                                                                            <a href="{{the_image_url($product->img)}}"
                                                                               data-gal="prettyPhoto"><img
                                                                                        class="img-responsive"
                                                                                        src="{{the_image_url($product->img,'thumbnail-600x426')}}"
                                                                                        alt=""/></a>
                                                                        </div>


                                                                        @if($gallery_media && isset($gallery_media[0]{0}))

                                                                            @foreach($gallery_media as $gItme)
                                                                                <div class="swiper-slide">
                                                                                    <a class="btn btn-zoom"
                                                                                       href="{{the_image_url($gItme)}}"
                                                                                       data-gal="prettyPhoto"><i
                                                                                                class="fa fa-arrows-h"></i></a>
                                                                                    <a href="{{the_image_url($gItme)}}"
                                                                                       data-gal="prettyPhoto"><img
                                                                                                class="img-responsive"
                                                                                                src="{{the_image_url($gItme, 'thumbnail-600x426')}}"
                                                                                                alt=""/></a>
                                                                                </div>
                                                                            @endforeach
                                                                        @endif


                                                                    </div>
                                                                    <!-- Add Pagination -->
                                                                    <div class="row car-thumbnails"></div>
                                                                </div>
                                                            </div>
                                                            <script>

                                                                jQuery(document).ready(function ($) {

                                                                    var wiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>;

                                                                    swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?> = new Swiper(swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>, {

                                                                        pagination: '#swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?> .row.car-thumbnails',

                                                                        paginationClickable: true,
                                                                        initialSlide: 0, //slide number which you want to show-- 0 by default
                                                                        paginationBulletRender: function (index, className) {

                                                                            var img = jQuery('#swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>').data("img" + index);

                                                                            return '<div class="col-xs-2 col-sm-2 col-md-3 ' + className + '">' +

                                                                                '<a href="#"><img width="70" height="70" class="responsive" src="' + img + ' "' +

                                                                                ' alt=""/></a></div>';


                                                                        }

                                                                    });

                                                                    setTimeout(function () {
                                                                        swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>.update();
                                                                        swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>.onResize();
                                                                        swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>.slideTo(0);
                                                                    }, 500);

                                                                    jQuery('.linkswiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>').click(function () {
                                                                        console.log('.linkswiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>');
                                                                        setTimeout(function () {
                                                                            swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>.update();
                                                                            swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>.onResize();
                                                                            swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>.slideTo(0)
                                                                        }, 250);
                                                                    });


                                                                });

                                                            </script>
                                                            <div class="col-md-4">
                                                                <div class="car-details">
                                                                    <div class="price">
                                                                        <strong>{{$product->price}}</strong>{{__(" ")}}
                                                                        <span>{{__("$/per a day ")}}</span><i
                                                                                class="fa fa-info-circle"></i>
                                                                    </div>
                                                                    <div class="list">
                                                                        <ul>
                                                                            <?php  $product_meta = getProductMetas( $product ); ?>
                                                                            @if(isset($product_meta['attributes']{1}))
                                                                                <?php $attr = json_decode( $product_meta['attributes'] );
                                                                                if($attr){ ?>
                                                                                @foreach($attr->value as $item)
                                                                                    <li>{{$item}}</li>
                                                                                @endforeach
                                                                                <?php  } ?>
                                                                            @endif
                                                                        </ul>
                                                                    </div>
                                                                    <div class="button">
                                                                        <a href="{{route('products.show',['products'=> $product->alias ])}}"
                                                                           class="btn btn-theme ripple-effect btn-theme-dark btn-block">{{__("Reservation Now")}}</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php  $j ++; ?>
                                                @endforeach

                                            </div>

                                        </div>
                                        <!-- /Sub tabs content -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php  $i ++; ?>
                    @endif
                @endforeach

            </div>
        @endif
    </div>

    <script>

        jQuery(document).ready(function ($) {


            jQuery('#tabs1 li a').eq(0).click();


            jQuery('.tab-content .panel1.mutabsss').removeClass('active');

            jQuery('.tab-content .panel1.mutabsss').eq(0).find('.mytab_car').removeClass('active');


            jQuery('.tab-content .panel1').eq(0).addClass('active in');

            jQuery('.tab-content .panel1').eq(0).find('.tabs a').eq(0).click();
            jQuery('.tab-content .panel1').eq(0).find('.mytab_car').eq(0).addClass('active in');

            jQuery('#tabs1 li').click(function (e) {
                var id = $(this).data('q');

                console.log(id);
                setTimeout(function () {
                    console.log('swiperSlider' + id + 'x1.update()');
                    eval('swiperSlider' + id + 'x1.update()');
                    eval('swiperSlider' + id + 'x1.onResize()');

                }, 250);
                $('#swiperSlider2x1').update();
            });
        });

    </script>
</section>
<!-- /PAGE -->



<!-- PAGE -->
<section class="page-section image">
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
                <div class="thumbnail thumbnail-counto no-border no-padding">
                    <div class="caption">
                        <div class="caption-icon"><i class="fa fa-heart"></i></div>
                        <div class="caption-number">{{__("5657")}}</div>
                        <h4 class="caption-title">{{__("Happy costumers")}}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-offset="200" data-wow-delay="200ms">
                <div class="thumbnail thumbnail-counto no-border no-padding">
                    <div class="caption">
                        <div class="caption-icon"><i class="fa fa-car"></i></div>
                        <div class="caption-number">{{__("657")}}</div>
                        <h4 class="caption-title">{{__("Total car count")}}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-offset="200" data-wow-delay="300ms">
                <div class="thumbnail thumbnail-counto no-border no-padding">
                    <div class="caption">
                        <div class="caption-icon"><i class="fa fa-flag"></i></div>
                        <div class="caption-number">{{__("1.255.657")}}</div>
                        <h4 class="caption-title">Total KM/MIL</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-offset="200" data-wow-delay="400ms">
                <div class="thumbnail thumbnail-counto no-border no-padding">
                    <div class="caption">
                        <div class="caption-icon"><i class="fa fa-comments-o"></i></div>
                        <div class="caption-number">{{__("1255")}}</div>
                        <h4 class="caption-title">{{__("Call Center Solutions")}}</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- /PAGE -->

<!-- PAGE -->
<section class="page-section">
    <div class="container">

        <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
            <small>{{__("See What People Ask to Us")}}</small>
            <span>{{__("FAQS")}}</span>
        </h2>

        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">
                <!-- FAQ -->
                <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                    <!-- faq1 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading1">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"
                                   aria-expanded="true" aria-controls="collapse1">
                                    <span class="dot"></span> How can ı dorp the rental car?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in" role="tabpanel"
                             aria-labelledby="heading1">
                            <div class="panel-body">
                                Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor
                                vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam
                                sollicitudin aliquet.
                            </div>
                        </div>
                    </div>
                    <!-- /faq1 -->
                    <!-- faq2 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading2">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2"
                                   aria-expanded="false" aria-controls="collapse2">
                                    <span class="dot"></span> Where can I rent a car?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body">
                                Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor
                                vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam
                                sollicitudin aliquet.
                            </div>
                        </div>
                    </div>
                    <!-- /faq2 -->
                    <!-- faq3 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading3">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3"
                                   aria-expanded="false" aria-controls="collapse3">
                                    <span class="dot"></span> If I crash a car. What happens?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                            <div class="panel-body">
                                Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor
                                vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam
                                sollicitudin aliquet.
                            </div>
                        </div>
                    </div>
                    <!-- /faq3 -->
                </div>
                <!-- /FAQ -->
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="200ms">
                <!-- FAQ -->
                <div class="panel-group accordion" id="accordion2" role="tablist" aria-multiselectable="true">
                    <!-- faq1 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading21">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse21"
                                   aria-expanded="false" aria-controls="collapse21">
                                    <span class="dot"></span> How can ı dorp the rental car?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse21" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="heading21">
                            <div class="panel-body">
                                Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor
                                vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam
                                sollicitudin aliquet.
                            </div>
                        </div>
                    </div>
                    <!-- /faq1 -->
                    <!-- faq2 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading22">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse22"
                                   aria-expanded="true" aria-controls="collapse22">
                                    <span class="dot"></span> Where can I rent a car?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse22" class="panel-collapse collapse in" role="tabpanel"
                             aria-labelledby="heading22">
                            <div class="panel-body">
                                Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor
                                vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam
                                sollicitudin aliquet.
                            </div>
                        </div>
                    </div>
                    <!-- /faq2 -->
                    <!-- faq3 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading23">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse23"
                                   aria-expanded="false" aria-controls="collapse23">
                                    <span class="dot"></span> If I crash a car. What happens?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse23" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="heading23">
                            <div class="panel-body">
                                Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor
                                vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam
                                sollicitudin aliquet.
                            </div>
                        </div>
                    </div>
                    <!-- /faq3 -->
                </div>
                <!-- /FAQ -->
            </div>
        </div>

    </div>
</section>
<!-- /PAGE -->

<section class="page-section dark" style ="background-color:#273f44 !important; ">
    <div class="container" style ="background-color:#273f44 !important; ">

        <div class="row">
            <div class="col-md-6 col-lg-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="100ms" style="margin-top:28px ">
                <h3 class="section-title ;  ">

                    <span style ="text-align:left;">{{__('GoldenLease - Not The Average Car Rental Company')}}</span>
                </h3>
                <p style = "color:white;">
                Welcome to Golden Lease Rent a Car – your premier choice for Affordable Car Rentals in Dubai. Our extensive fleet offers a variety of vehicles, from compact cars to SUVs and vans, providing excellent options for exploring Dubai. Our dedicated team in Dubai ensures a seamless rental experience.
                </p>
                <p style = "color:white;" >
                In addition to standard car rentals, we offer services like GPS navigation, car seats, and roadside assistance, catering to your needs in Dubai. At Golden Lease Rent a Car, safety is a priority, with all Dubai-based vehicles undergoing rigorous inspection.
                </p>
                <p style = "color:white;" >
                Choose us as your trusted partner for car rentals in Dubai. Your journey begins with Golden Lease Rent a Car – where quality meets affordability in the heart of Dubai.
                            </p>
                <p class="btn-row">
                    <a   style ="background-color:#f0c540; border-radius:5px; border:none;" href="#"
                       class="btn btn-theme ripple-effect btn-theme-md btn-theme-transparent">{{__("Our Company")}}</a>
                </p>
            </div>
            <div class="col-md-6 col-lg-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="300ms">
                <div class="owl-carousel img-carousel">
                    <div class="item"><a
                                href="{{ asset(config('settings.theme')) }}/assets/img/preview/slider/slide1-775x500x1.webp"
                                data-gal="prettyPhoto"><img style ="border-radius:10px;" class="img-responsive"
                                                            src="{{ asset(config('settings.theme')) }}/assets/img/preview/slider/slide1.webp"
                                                            alt=""/></a></div>
                    <div class="item"><a
                                href="{{ asset(config('settings.theme')) }}/assets/img/preview/slider/slide-775x500x1.jpg"
                                data-gal="prettyPhoto"><img style ="border-radius:10px;" class="img-responsive"
                                                            src="{{ asset(config('settings.theme')) }}/assets/img/preview/slider/slide-775x500x1.jpg"
                                                            alt=""/></a></div>
                    <div class="item"><a
                                href="{{ asset(config('settings.theme')) }}/assets/img/preview/slider/slide-775x500x1.jpg"
                                data-gal="prettyPhoto"><img style ="border-radius:10px;" class="img-responsive"
                                                            src="{{ asset(config('settings.theme')) }}/assets/img/preview/slider/slide-775x500x1.jpg"
                                                            alt=""/></a></div>
                    <div class="item"><a
                                href="{{ asset(config('settings.theme')) }}/assets/img/preview/slider/slide-775x500x1.jpg"
                                data-gal="prettyPhoto"><img style ="border-radius:10px;" class="img-responsive"
                                                            src="{{ asset(config('settings.theme')) }}/assets/img/preview/slider/slide-775x500x1.jpg"
                                                            alt=""/></a></div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- /PAGE -->
<!-- /PAGE -->
<!--
<section class="page-section contact dark">
    <div class="container">


        <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
            <small>Feel Free to Say Hello!</small>
            <span>{{__("Get in Touch With Us")}}</span>
        </h2>

        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">
                <form name="contact-form" method="post" action="#" class="contact-form" id="contact-form">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="outer required">
                                <div class="form-group af-inner has-icon">
                                    <label class="sr-only" for="name">{{__("Name")}}</label>
                                    <input
                                            type="text" name="name" id="name" placeholder="Name" value="" size="30"
                                            data-toggle="tooltip" title="Name is required"
                                            class="form-control placeholder"/>
                                    <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="outer required">
                                <div class="form-group af-inner has-icon">
                                    <label class="sr-only" for="email">{{__("Email")}}</label>
                                    <input
                                            type="text" name="email" id="email" placeholder="Email" value="" size="30"
                                            data-toggle="tooltip" title="Email is required"
                                            class="form-control placeholder"/>
                                    <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="outer required">
                        <div class="form-group af-inner has-icon">
                            <label class="sr-only" for="subject">{{__("Subject")}}</label>
                            <input
                                    type="text" name="subject" id="subject" placeholder="Subject" value="" size="30"
                                    data-toggle="tooltip" title="Subject is required"
                                    class="form-control placeholder"/>
                            <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                        </div>
                    </div>

                    <div class="form-group af-inner has-icon">
                        <label class="sr-only" for="input-message">{{__("Message")}}</label>
                        <textarea
                                name="message" id="input-message" placeholder="Message" rows="4" cols="50"
                                data-toggle="tooltip" title="Message is required"
                                class="form-control placeholder"></textarea>
                        <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                    </div>

                    <div class="outer required">
                        <div class="form-group af-inner">
                            <input type="submit" name="submit"
                                   class="form-button form-button-submit btn btn-block btn-theme ripple-effect btn-theme-dark"
                                   id="submit_btn" value="Send message"/>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="200ms">

                <p>{{__("This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.")}}</p>

                <ul class="media-list contact-list">
                    <li class="media">
                        <div class="media-left"><i class="fa fa-home"></i></div>
                        <div class="media-body">{{__("Adress: 1600 Pennsylvania Ave NW, Washington, D.C.")}}</div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa"></i></div>
                        <div class="media-body">{{__("DC 20500, ABD")}}</div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-phone"></i></div>
                        <div class="media-body">{{__("Support Phone: 01865 339665")}}</div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-envelope"></i></div>
                        <div class="media-body">{{__("E mails: info@example.com")}}</div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-clock-o"></i></div>
                        <div class="media-body">{{__("Working Hours: 09:30-21:00 except on Sundays")}}</div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-map-marker"></i></div>
                        <div class="media-body">{{__("View on The Map")}}</div>
                    </li>
                </ul>

            </div>
        </div>

]
    </div>
</section>
 -->
