<section id="wsus__flash_sell" class="wsus__flash_sell_2">
    <div class=" container">
        <div class="row">
            <div class="col-xl-12">
                <div class="offer_time" style="background: url({{asset('frontend/images/flash_sell_bg.jpg')}})">
                    <div class="wsus__flash_coundown">
                        <span class=" end_text">Flash Sale</span>
                        <div class="simply-countdown simply-countdown-one"></div>
                        <a class="common_btn" href=" ">see more <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row flash_sell_slider">

            <div class="col-xl-3 col-sm-6 col-lg-4">
                <div class="wsus__product_item">
                    <span class="wsus__new"> </span>

                    <span class="wsus__minus"> %</span>

                    <a class="wsus__pro_link" href=" ">
                        <img src=" " alt="product" class="img-fluid w-100 img_1" />
                        <img src="
                        
                        " alt="product" class="img-fluid w-100 img_2" />
                    </a>
                    <ul class="wsus__single_pro_icon">
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-eye"></i></a></li>
                        <li><a href="" class="add_to_wishlist" data-id=" "><i class="far fa-heart"></i></a></li>
                        {{-- <li><a href="#"><i class="far fa-random"></i></a> --}}
                    </ul>
                    <div class="wsus__product_details">
                        <a class="wsus__category" href="#"> </a>

                        <p class="wsus__pro_rating">



                            <i class="fas fa-star"></i>

                            <i class="far fa-star"></i>

                            <span> </span>
                        </p>
                        <a class="wsus__pro_name" href=" "> </a>

                        <p class="wsus__price"> <del> </del></p>

                        <p class="wsus__price"> </p>

                        <form class="shopping-cart-form">
                            <input type="hidden" name="product_id" value=" ">

                            <select class="d-none" name="variants_items[]">

                                <option value=" "> </option>

                            </select>

                            <input class="" name="qty" type="hidden" min="1" max="100" value="1" />
                            <button class="add_cart" type="submit">add to cart</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<!--==========================
    PRODUCT MODAL VIEW START
===========================-->


<section class="product_popup_modal">
    <div class="modal fade" id="exampleModal- " tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times"></i></button>
                    <div class="row">
                        <div class="col-xl-6 col-12 col-sm-10 col-md-8 col-lg-6 m-auto display">
                            <div class="wsus__quick_view_img">

                                <a class="venobox wsus__pro_det_video" data-autoplay="true" data-vbtype="video" href=" ">
                                    <i class="fas fa-play"></i>
                                </a>

                                <div class="row modal_slider">
                                    <div class="col-xl-12">
                                        <div class="modal_slider_img">
                                            <img src=" " alt="product" class="img-fluid w-100">
                                        </div>
                                    </div>


                                    <div class="col-xl-12">
                                        <div class="modal_slider_img">
                                            <img src=" " alt="product" class="img-fluid w-100">
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="modal_slider_img">
                                            <img src=" " alt=" " class="img-fluid w-100">
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="wsus__pro_details_text">
                                <a class="title" href="#"> </a>
                                <p class="wsus__stock_area"><span class="in_stock">in stock</span> (167 item)</p>

                                <h4> <del> </del></h4>

                                <h4> </h4>

                                <p class="review">

                                    <i class="fas fa-star"></i>

                                    <i class="far fa-star"></i>


                                    <span> </span>
                                </p>
                                <p class="description"> </p>

                                <form class="shopping-cart-form">
                                    <div class="wsus__selectbox">
                                        <div class="row">
                                            <input type="hidden" name="product_id" value=" ">

                                            <div class="col-xl-6 col-sm-6">
                                                <h5 class="mb-2"> </h5>
                                                <select class="select_2" name="variants_items[]">

                                                    <option value=" "></option>

                                                </select>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="wsus__quentity">
                                        <h5>quentity :</h5>
                                        <div class="select_number">
                                            <input class="number_area" name="qty" type="text" min="1" max="100" value="1" />
                                        </div>

                                    </div>

                                    <ul class="wsus__button_area">
                                        <li><button type="submit" class="add_cart" href="#">add to cart</button></li>

                                        <li><a href="" class="add_to_wishlist" data-id=""><i class="fal fa-heart"></i></a></li>
                                        {{-- <li><a href="#"><i class="far fa-random"></i></a></li> --}}
                                    </ul>
                                </form>

                                <p class="brand_model"><span>brand :</span> </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
<!--==========================
    PRODUCT MODAL VIEW END
===========================-->

@push('scripts')
<script>
    $(document).ready(function() {
        simplyCountdown('.simply-countdown-one', {
            year: {
                {
                    date('Y', strtotime($flashSaleDate - > end_date))
                }
            },
            month: {
                {
                    date('m', strtotime($flashSaleDate - > end_date))
                }
            },
            day: {
                {
                    date('d', strtotime($flashSaleDate - > end_date))
                }
            },
        });
    })
</script>
@endpush