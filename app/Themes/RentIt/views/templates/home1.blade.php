<!-- PAGE -->

<section class="page-section no-padding slider">
    <div class="container full-width">

        <div class="main-slider">
            <div>

                <!-- Slide 1 -->
                <div class="item slide2 ver2">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                <div class="div-cell">
                                    <div class="caption-content">
                                        <!-- Search form -->
                                        <div class="form-search light pickup_container">
                                            <form action="{{ route('products.index') }}" method="get">
                                                <!-- <div class="form-title">
                                                    <i class="fa fa-globe"></i>
                                                    <h2>{{__("Search for Cheap Rental Cars Wherever Your Are")}}</h2>
                                                </div> -->

                                                <div class="row row-inputs">
                                                    <div class="container-fluid">
                                                        <div class="col-sm-12" style="margin-top: 30px;">
                                                            <div class="form-group has-icon has-label">
                                                                <label for="formSearchUpLocation2" style="text-transform: uppercase;">{{__("Pick Up")}}</label>

                                                                <select name="PickingUpLocation" class="selectpicker input-price car_search_field_label" data-live-search="true" data-width="100%" data-toggle="tooltip" id="formSearchUpLocation2">
                                                                    @if($locations ?? false)
                                                                    @foreach($locations as $location)


                                                                    <option <?php selected(old('PickingUpLocation', session('PickingUpLocation')), $location->alias); ?> value="{{$location->alias}}">{{$location->title}}</option>
                                                                    @endforeach
                                                                    @endif
                                                                </select>
                                                                <span class="form-control-icon">
                                                                    <i class="fa fa-map-marker"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group has-icon has-label">
                                                                <label for="formSearchOffLocation2" style="text-transform: uppercase;">{{__("Drop Off")}}</label>
                                                                <select id="formSearchOffLocation2" name="DroppingOffLocation" class="selectpicker input-price car_search_field_label" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select">
                                                                    @if($locations)
                                                                    @foreach($locations as $location)

                                                                    <option <?php selected(old('DroppingOffLocation', session('DroppingOffLocation')), $location->alias); ?> value="{{$location->alias}}">{{$location->title}}</option>

                                                                    @endforeach
                                                                    @endif
                                                                </select>
                                                                <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row row-inputs">
                                                    <div class="container-fluid">
                                                        <div class="col-sm-7">
                                                            <div class="form-group has-icon has-label">
                                                                <label for="formSearchUpDate2" style="text-transform: uppercase;">{{__("Pick Up Date")}}</label>
                                                                <input name="PickingUpDate" class="PickingUpDate form-control datepicker" id="formSearchUpDate2" placeholder="dd/mm/yyyy">
                                                                <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="form-group has-icon has-label selectpicker-wrapper">
                                                                <label style="text-transform: uppercase;">{{__("Pick Up Hour")}}</label>
                                                                <select name="PickingUpHour" class="selectpicker input-price car_search_field_label" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select">

                                                                    <?php $times = rentit_get_times(); ?>
                                                                    @if($times && is_array($times))
                                                                    @foreach($times as $time)
                                                                    <option <?php selected(old('PickingUpHour', session('PickingUpHour')), $time); ?> value="{{$time}}">{{$time}}</option>
                                                                    @endforeach
                                                                    @endif

                                                                </select>
                                                                <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row row-inputs">
                                                    <div class="container-fluid">
                                                        <div class="col-sm-7">
                                                            <div class="form-group has-icon has-label">
                                                                <label for="formSearchOffDate2" style="text-transform: uppercase;">{{__("Drop Off Date")}}</label>
                                                                <input autocomplete="off" name="DroppingOffDate" type="text" class="form-control datepicker DroppingOffDate" id="formSearchOffDate2" placeholder="dd/mm/yyyy" value="{{session('DroppingOffDate')}}">
                                                                <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="form-group has-icon has-label selectpicker-wrapper">
                                                                <label style="text-transform: uppercase;">{{__("Drop Off Hour")}}</label>
                                                                <select name="DroppingOffHour" class="selectpicker input-price car_search_field_label" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select">
                                                                    @if($times && is_array($times))
                                                                    @foreach($times as $time)
                                                                    <option <?php selected(old('DroppingOffHour', session('DroppingOffHour')), $time); ?> value="{{$time}}">{{$time}}</option>
                                                                    @endforeach
                                                                    @endif

                                                                </select>
                                                                <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-5" style="margin-top:30px; margin-bottom: 20px;">
                                                            <button style="font-family: Montserrat, Arial; background: linear-gradient(to bottom right, #3A386F 80%, #191726); border-color:#273f44 !important;" type="submit" id="formSearchSubmit2" class="btn btn-theme ripple-effect pull-right">{{__("Find A Vehicle")}}</button>

                                                        </div>

                                                    </div>

                                                    <!-- <div class="row row-submit">
                                                    <div class="container-fluid">
                                                        <div class="inner pickup_container">
                                                            <i class="fa fa-plus-circle"></i>{{__(" ")}}

                                                        </div>
                                                    </div>
                                                </div> -->
                                            </form>
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
    .slider_container .slide h3 {
        margin-bottom: 20px;
    }

    .slider_container .slide {
        padding: 2vw 0 5vw 22vw;
        position: absolute;
        height: inherit;
        left: 0;
        min-width: 100%;
        box-sizing: border-box;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        z-index: 1;
    }

    .slider_container #slide1::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.6);
        /* Adjust the alpha value (0.5 in this case) for opacity */
        z-index: -1;
    }

    .slider_container #slide1 {
        background: rgba(255, 255, 255, 0.5);
        /* Adjust the alpha value (0.5 in this case) for opacity */
        background-image: url('https://goldenlease.ae/wp-content/uploads/2023/11/goldenlease-monthly-car-rental-in-dubai-2.webp');
        background-size: cover;
        background-position: center;

    }

    .slider_container #slide2 {
        background-image: url('https://goldenlease.ae/wp-content/uploads/2023/11/goldenlease-monthly-car-rental-in-dubai-long-term-2.webp');
        background-size: cover;
        background-position: center;
    }

    .slider_container #slide3 {
        background-image: url('https://goldenlease.ae/wp-content/uploads/2023/11/goldenlease-car-rental-extra-services-2.webp');
        background-size: cover;
        background-position: center;


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
        margin-right: 20px;
        margin-top: 20px;
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
        top: 85%;
        width: 100%;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 50px;
        z-index: 100;
    }

    .btn_container span {
        background-color: grey;
        border: 2px solid white;
        display: inline-block;
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

    .pickup_container {
        background: linear-gradient(to bottom right, #B19158, #B19158 70%, #7F5E26) !important;
    }

    .car_search_field_label {
        background-color: #fff !important;
    }

    #formSearchSubmit2:hover {
        background-color: #304e55 !important;
        border-color: #304e55 !important;
    }

    .align-middle {
        display: inline-flex;
        align-items: center;
        vertical-align: middle;
    }

    .div-cell, .div-table {
        height: 79% !important;
    }

    .testimonial-text {
        font-size: 14px !important;
        line-height: 20px !important;
    }

    @media screen and (max-width: 280px) {
        .slider_container .slide {
            padding: 4vw 0 4vw 2vw !important;
        }

        .slider_container .action_buttons {
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding-left: 20px !important;

        }

        .slider_container .action_buttons * {
            width: fit-content !important;
        }

        .slider_container {
            height: 500px;
        }

        .slider_container .whatsapp_btn {
            padding: 15px 16px !important;
            min-width: 130px;

        }

        .slider_container .call_btn {
            padding: 15px 16px !important;
            min-width: 130px;
        }

        .btn_container {
            top: 94% !important;
        }


    }

    /* Styles for screens up to 767px width */
    @media screen and (min-width: 281px) and (max-width: 767px) {
        .slider_container .slide {
            padding: 4vw 0 4vw 4vw !important;
        }

        .slider_container {
            height: 320px;
        }

        .slider_container .whatsapp_btn {
            padding: 15px 16px !important;

        }

        .slider_container .call_btn {
            padding: 15px 16px !important;
        }


    }


    /* Styles for screens between 768px and 991px width */
    @media screen and (min-width: 768px) and (max-width: 991px) {
        .slider_container .slide {
            padding: 4vw 0 4vw 15vw !important;
        }

        .slider_container {
            height: 300px;
        }

    }

    /* Styles for screens 992px and wider */
    @media screen and (min-width: 992px) {
        .slider_container .slide {
            padding: 2vw 0 4vw 22vw !important;
        }

        .slider_container {
            height: 300px;
        }

        .docs_info .first-col {
            border-right: 2px solid black;
        }
    }
</style>

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

<!-- <section class="n_slider">
    <div class="slider_container">
        <div class="slide active" id="slide1">
            <h1>FOR TEACHER </h1>
            <h3>55,000 km monthly instead of 4,000, 800 deposit <br> 5,000 km monthly instead of 4,000, 800 deposit</h3>
            <div class="action_buttons">
                <a class="call_btn" href="tel:+971586887706">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>CALL NOW</span>
                </a>
                <a class="whatsapp_btn" href="https://wa.me/message/EED5R6GPKGDII1" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>WHATSAPP</span>
                </a>
            </div>
        </div>
        <div class="slide" id="slide2">
            <h1>New in Dubai </h1>
            <h3>Accept New Driving license, <br> 1000 deposit for monthly rent <br> instead of 1500 for new driving license. </h3>
            <div class="action_buttons">
                <a class="call_btn" href="tel:+971586887706">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>CALL NOW</span>
                </a>
                <a class="whatsapp_btn" href="https://wa.me/message/EED5R6GPKGDII1" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>WHATSAPP</span>
                </a>
            </div>
        </div>
        <div class="slide" id="slide3">
            <h1>LONG TERM</h1>
            <h3>Special offers & prices upon request. </h3>
            <div class="action_buttons">
                <a class="call_btn" href="tel:+971586887706">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>CALL NOW</span>
                </a>
                <a class="whatsapp_btn" href="https://wa.me/message/EED5R6GPKGDII1" target="_blank">
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
</section> -->

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
            <div class="sladersss tab-pane fade  {{($loop->index == 0 )?  'active in' : ''}} " id="tab-{{$item->alias}}">

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

                                        <a class="media-link" href="{{route('products.show',['products'=> $product->alias ])}}">
                                            <img src="{{ the_image_url($product->img,'thumbnail-370x220') }}" alt="" />
                                            <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                        </a>
                                        @endif

                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><a href="#">{{$product->title}}</a>
                                        </h4>
                                        <div class="caption-text">{{__('Start
                                                            from')}} {{formatted_price($product->price)}}{{__('/per a day')}}
                                        </div>
                                        <div class="buttons">
                                            <a class="btn btn-theme ripple-effect" href="{{route('products.show',['products'=> $product->alias ])}}"> {{get_theme_mod('rentit_rent_it',__('Rent It'))}}</a>
                                        </div>
                                        <table class="table">
                                            <tr>
                                                <?php
                                                $product_meta = getProductMetas($product);

                                                if ($product_meta['product_icons'] ?? false) {
                                                    $product_icons = unserialize($product_meta['product_icons']);


                                                    if (is_array($product_icons) && $product_icons['icon'] ?? false && $product_icons['text'] ?? false) {
                                                        $product_icons = array_combine($product_icons['icon'], $product_icons['text']);


                                                        $j = 0;
                                                        foreach ($product_icons as $k => $text) {  ?>
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

        <p style="text-align:center;">The following documents are required for booking or making reservations for car rental services for people residing in the UAE.</p>

        <div class="row" style="margin-bottom: 10px;text-align:center;">
            <div class="col-md-6 first-col">
                <div style="display:flex; align-items:end;">
                    <h3 style="font-size: 18px; color: #333; margin-bottom: 10px; font-weight:bold;">For UAE Residents</h3>
                    <hr style="flex:1; margin-left:5px">
                </div>
                <ul style="list-style: disc; padding: 0; color: #555; text-align:left; margin-left:25px;">
                    <li>Passport copy</li>
                    <li>Valid UAE driving license</li>
                    <li>Copy of Emirates ID</li>
                </ul>
            </div>
            <div class="col-md-6" style="text-align:center;">
                <div style="display:flex; align-items:end;">
                    <h3 style="font-size: 18px; color: #333; margin-bottom: 10px; font-weight:bold;">For Tourists visiting UAE</h3>
                    <hr style="flex:1; margin-left:5px" ;>
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
                        <div class="media-body">
                            <div class="testimonial-text">{{__("I have rented cars from several different companies in the past, but this rent-a-car company stands out as the best. The staff is always friendly and helpful, and the process of booking and picking up my rental is always seamless. The cars are always clean and in excellent condition. I highly recommend this company to anyone in need of a rental car.")}}</div>
                            <div class="testimonial-name">{{__("Ana ")}}</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="media">

                        <div class="media-body">
                            <div class="testimonial-text">{{__("I have been a loyal customer of this rent-a-car company for years, and I am always blown away by the level of professionalism and kindness shown by the staff. The cars are always clean and well-maintained, and the process of booking and picking up my rental is always seamless. I highly recommend this company to anyone in need of a rental car.")}}</div>
                            <div class="testimonial-name">{{__("Ahmed")}}</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="media">
                        <div class="media-body">
                            <div class="testimonial-text">{{__("I recently had the pleasure of renting a car from this company for a business trip, and I was thoroughly impressed with the level of service I received. The staff was knowledgeable and accommodating, and the car was clean and well-maintained. I will definitely be using this company for all of my future car rental needs.")}}</div>
                            <div class="testimonial-name">{{__("John")}}</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="media">

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
<!--  -->
<!-- /PAGE -->



<!-- PAGE -->

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
                        <div class="panel-heading" role="tab" id="heading2">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <span class="dot"></span>What's the Total Cost of the Rental?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body">
                            Each car has its special rates depending on type, model, features, and the duration (Daily, weekly, Monthly), in addition customers must pay one-time refundable deposit.
                            </div>
                        </div>
                    </div>
                    <!-- /faq1 -->
                    <!-- faq2 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading2">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <span class="dot"></span> Does the Car Have to be Returned with a Full Tank of Gas?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body">
                            We asked our customers to return the car with the same tank as when they picked it up!
                            </div>
                        </div>
                    </div>
                    <!-- /faq2 -->
                    <!-- faq3 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading23">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                    <span class="dot"></span> If I’m a UAE resident, can I drive with my home country license?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23">
                            <div class="panel-body">
                            No, when you are a UAE resident, you must have a valid UAE driving license.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading3">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    <span class="dot"></span> How can I pay for my rental car?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                            <div class="panel-body">
                            The customer can pay in multiple ways: Cash, debit card, credit card, payment link, and bank transfer.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading3">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    <span class="dot"></span> How many working days does it take to get the deposit back?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                            <div class="panel-body">
                            Our team will strictly ensure that our customers get the deposit within 21 days by bank transfer.
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
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                    <span class="dot"></span> What Happens if the Car is in an Accident?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21">
                            <div class="panel-body">
                            Please don’t panic; you must immediately call 999 to report the accident & after that, you can contact us to advise you about the next steps.
                            Please note that all our cars are covered by insurance; please don’t listen to anyone telling you not to report the accident to the police.
                            </div>
                        </div>
                    </div>
                    <!-- /faq1 -->
                    <!-- faq2 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading22">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                    <span class="dot"></span> How can I upgrade to full protection insurance?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading22">
                            <div class="panel-body">
                            We offer same insurance for all customers, damages responsibilities divided into two cases as below: <br>
                            1. If the Accident is your fault or unknown damage, you must pay 1500/- DHS for the accident excess charge and police report (1,050 for insurance claim + 450 police report). <br>
                            2. If the Accident is not your fault, you don’t have to pay anything.
                            </div>
                        </div>
                    </div>

                    <!-- /faq2 -->
                    <!-- faq3 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading3">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <span class="dot"></span> Is there a Daily Mileage Limit?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                            <div class="panel-body">
                            Our daily mileage limit is 150 km per day! Any special millage should be confirmed & approved by our management! Don’t hesitate to ask for!
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading23">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                    <span class="dot"></span> Is having a valid UAE driving license acceptable, but my Emirates ID is expired?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23">
                            <div class="panel-body">
                            Each document should be valid at least one month in advance to approve your documents.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading23">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                    <span class="dot"></span> How can I ensure that Goldenlease Rent a Car is a valid registered company in UAE?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23">
                            <div class="panel-body">
                            Our company stamp should stamp each Contract; Stamp contains our legal company name and license number.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /FAQ -->
            </div>
        </div>

    </div>
</section>
<!-- /PAGE -->

<section class="page-section dark" style="background-color:#273f44 !important; ">
    <div class="container" style="background-color:#273f44 !important; ">

        <div class="row">
            <div class="col-md-6 col-lg-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="100ms" style="margin-top:28px ">
                <h3 class="section-title ;  ">

                    <span style="text-align:left;">{{__('GoldenLease - Not The Average Car Rental Company')}}</span>
                </h3>
                <p style="color:white;">
                    Welcome to Golden Lease Rent a Car – your premier choice for Affordable Car Rentals in Dubai. Our extensive fleet offers a variety of vehicles, from compact cars to SUVs and vans, providing excellent options for exploring Dubai. Our dedicated team in Dubai ensures a seamless rental experience.
                </p>
                <p style="color:white;">
                    In addition to standard car rentals, we offer services like GPS navigation, car seats, and roadside assistance, catering to your needs in Dubai. At Golden Lease Rent a Car, safety is a priority, with all Dubai-based vehicles undergoing rigorous inspection.
                </p>
                <p style="color:white;">
                    Choose us as your trusted partner for car rentals in Dubai. Your journey begins with Golden Lease Rent a Car – where quality meets affordability in the heart of Dubai.
                </p>
                <p class="btn-row">
                    <a style="background:linear-gradient(to bottom right, #B19158, #B19158 70%, #7F5E26); border-radius:5px; border:none; color:#273f44!important;" href="/about-us" class="btn btn-theme ripple-effect btn-theme-md btn-theme-transparent">{{__("Our Company")}}</a>
                </p>
            </div>
            <div class="col-md-6 col-lg-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="300ms">
                <div class="item"><a href="{{ asset(config('settings.theme')) }}/assets/img/preview/slider/slide1-775x500x1.webp" data-gal="prettyPhoto"><img style="border-radius:10px;" class="img-responsive" src="{{ asset(config('settings.theme')) }}/assets/img/preview/slider/slide1.webp" alt="" /></a></div>
            </div>
        </div>

    </div>
</section>

<section class="page-section dark" style="background:linear-gradient(to bottom right, #B19158, #B19158 70%, #7F5E26) !important; ">

    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-7 wow fadeInRight">
                <p style="color:#273f44; font-size:24px; font-weight:700; line-height: 2;">
                    HAVE A QUESTIONS? FEEL FREE TO ASK...
                </p>

            </div>
            <div class="col-md-5 col-lg-5 wow fadeInRight">
                <a href="tel:+971586887706" class="align-middle" style="font-weight:700; font-size:24px; color:#273f44; margin-right:6px;">
                    <span> <i class="fa fa-phone" aria-hidden="true"></i> +971 586 887 706</span>
                </a>
                <a href="/contact-us" class="btn btn-theme ripple-effect btn-theme-md btn-theme-transparent align-middle" style="border-radius:5px; border: 2px solid #fff; color:#273f44!important; background-color: transparent;">
                    <span><i class="fa fa-envelope" aria-hidden="true"></i>{{__(" Feedback")}}</span>
                </a>
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