<nav class="wsus__main_menu d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="relative_contect d-flex">
                    <div class="wsus_menu_category_bar">
                        <i class="far fa-bars"></i>
                    </div>
                    <ul class="wsus_menu_cat_item show_home toggle_menu">
                        {{-- <li><a href="#"><i class="fas fa-star"></i> hot promotions</a></li> --}}


                        <li><a class="" href=""><i class=""></i> </a>

                            <ul class="wsus_menu_cat_droapdown">

                                <li><a href=" "> <i class=" "></i></a>

                                    <ul class="wsus__sub_category">

                                        <li><a href=" "> </a></li>

                                    </ul>

                                </li>


                            </ul>

                        </li>


                        {{-- <li><a href="#"><i class="fal fa-gem"></i> View All Categories</a></li> --}}
                    </ul>

                    <ul class="wsus__menu_item">
                        <li><a class=" " href="{{url('/')}}">home</a></li>

                        <li><a class="" href="">vendors</a></li>
                        <li><a class="" href="">flash Sale</a></li>
                        <li><a class="" href="">blog</a></li>
                        <li><a class="" href="">about</a></li>
                        <li><a class="" href="">contact</a></li>


                    </ul>
                    <ul class="wsus__menu_item wsus__menu_item_right">
                        <li><a href=" ">track order</a></li>

                        <li><a href=" ">my account</a></li>

                        <li><a href=" ">Vendor Dashboard</a></li>

                        <li><a href=" ">Admin Dashboard</a></li>


                        <li><a href="{{route('login')}}">login</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>


<section id="wsus__mobile_menu">
    <span class="wsus__mobile_menu_close"><i class="fal fa-times"></i></span>
    <ul class="wsus__mobile_menu_header_icon d-inline-flex">

        <li><a href=" "><i class="fal fa-heart"></i><span id="wishlist_count">

        </span></a></li>


        <li><a href=" "><i class="fal fa-user"></i></a></li>

        <li><a href=" "><i class="fal fa-user"></i></a></li>

        <li><a href=" "><i class="fal fa-user"></i></a></li>

        <li><a href="{{route('login')}}"><i class="fal fa-user"></i></a></li>


    </ul>
    <form action=" ">
        <input type="text" placeholder="Search..." name="search" value=" ">
        <button type="submit"><i class="far fa-search"></i></button>
    </form>

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    role="tab" aria-controls="pills-home" aria-selected="true">Categories
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    role="tab" aria-controls="pills-profile" aria-selected="false">main menu
            </button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="wsus__mobile_menu_main_menu">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <ul class="wsus_mobile_menu_category">

                        <li>
                            <a href="#" class="  collapsed" data-bs-toggle="collapse"
                               data-bs-target="#flush-collapseThreew " aria-expanded="false"
                               aria-controls="flush-collapseThreew"><i class=""></i> </a>


                            <div id="flush-collapseThreew" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>

                                        <li><a href="#"> </a></li>

                                    </ul>
                                </div>
                            </div>

                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="wsus__mobile_menu_main_menu">
                <div class="accordion accordion-flush" id="accordionFlushExample2">
                    <ul>
                        <li><a href="{{route('home')}}">home</a></li>

                        <li><a href=" ">vendor</a></li>

                        <li><a href=" ">blog</a></li>
                        <li><a href=" ">about us</a></li>
                        <li><a href=" ">contact</a></li>


                        <li><a href=" ">track order</a></li>
                        <li><a href=" ">flash sale</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
