<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href=""></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">||</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="{{ route('admin.dashbaord') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="menu-header">Ecommerce</li>

            <li class="dropdown {{ setActive([
                'admin.category.*',
                'admin.sub-category.*',
                'admin.child-category.*',
            ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-list"></i>
                    <span>Manage Categories</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.category.*']) }}"><a class="nav-link"
                                                                         href="{{ route('admin.category.index') }}">Category</a>
                    </li>
                    <li class="{{ setActive(['admin.sub-category.*']) }}"><a class="nav-link"
                                                                             href="{{ route('admin.sub-category.index') }}">Sub
                            Category</a></li>
                    <li class="{{ setActive(['admin.child-category.*']) }}"><a class="nav-link"
                                                                               href="{{ route('admin.child-category.index') }}">Child
                            Category</a></li>

                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-box"></i>
                    <span>Manage Products</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.brand.*']) }}"><a class="nav-link"
                                                                      href="{{ route('admin.brand.index') }}">Brands</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ route('admin.products.index') }}">Products</a>
                    </li>
                    <li class=""><a class="nav-link" href="{{ route('admin.seller-products.index') }}">Seller
                            Products</a></li>
                    <li class=""><a class="nav-link" href="{{ route('admin.seller-pending-products.index') }}">Seller
                            Pending Products</a></li>

                    <li class=""><a class="nav-link" href="">Product Reviews</a></li>

                </ul>
            </li>


            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cart-plus"></i>
                    <span>Orders</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="">All Orders</a></li>
                    <li class=""><a class="nav-link" href="">All Pending Orders</a></li>
                    <li class=""><a class="nav-link" href="">All processed Orders</a></li>
                    <li class=""><a class="nav-link" href="">All Dropped Off Orders</a></li>

                    <li class=""><a class="nav-link" href="">All Shipped Orders</a></li>
                    <li class=""><a class="nav-link" href="">All Out For Delivery Orders</a></li>

                    <li class=""><a class="nav-link" href="">All Delivered Orders</a></li>

                    <li class=""><a class="nav-link" href="">All Canceled Orders</a></li>

                </ul>
            </li>

            <li class=""><a class="nav-link" href=""><i class="fas fa-money-bill-alt"></i> <span>Transactions</span></a>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Ecommerce</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="{{ route('admin.flash-sale.index') }}">Flash Sale</a></li>
                    <li class=""><a class="nav-link" href="{{ route('admin.coupons.index') }}">Coupons</a></li>
                    <li class=""><a class="nav-link" href="{{ route('admin.shipping-rule.index') }}">Shipping Rule</a>
                    </li>
                    <li class=""><a class="nav-link" href="{{ route('admin.vendor-profile.index') }}">Vendor Profile</a>
                    </li>
                    <li class="{{ setActive(['admin.payment-settings.*']) }}"><a class="nav-link"
                                                                                 href="{{ route('admin.payment-settings.index') }}">Payment
                            Settings</a></li>

                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i> <span>Manage Website</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="{{ route('admin.slider.index') }}">Slider</a></li>

                    <li class=""><a class="nav-link" href="">Home Page Setting</a></li>

                    <li class=""><a class="nav-link" href="">Vendor Condition</a></li>
                    <li class=""><a class="nav-link" href="">About page</a></li>
                    <li class=""><a class="nav-link" href="">Terms Page</a></li>

                </ul>
            </li>

            <li><a class="nav-link {{ setActive(['admin.advertisement.*']) }}"
                   href="{{ route('admin.advertisement.index') }}"><i class="fas fa-ad"></i>
                    <span>Advertisement</span></a></li>

            <li
                class="dropdown {{ setActive(['admin.blog-category.*', 'admin.blog.*', 'admin.blog-comments.index']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fab fa-blogger-b"></i> <span>Manage Blog</span></a>
                <ul class="dropdown-menu">

                    <li class="{{ setActive(['admin.blog-category.*']) }}"><a class="nav-link"
                                                                              href="{{ route('admin.blog-category.index') }}">Categories</a>
                    </li>
                    <li class="{{ setActive(['admin.blog.*']) }}"><a class="nav-link"
                                                                     href="{{ route('admin.blog.index') }}">Blogs</a>
                    </li>
                    <li class="{{ setActive(['admin.blog-comments.index']) }}"><a class="nav-link"
                                                                                  href="{{ route('admin.blog-comments.index') }}">Blog
                            Comments</a></li>
                </

            <li class="menu-header">Settings & More</li>

            <li class="dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th-large"></i><span>Footer</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.footer-info.index']) }}"><a class="nav-link"
                                                                                href="{{ route('admin.footer-info.index') }}">Footer
                            Info</a></li>

                    <li class="{{ setActive(['admin.footer-socials.*']) }}"><a class="nav-link"
                                                                               href="{{ route('admin.footer-socials.index') }}">Footer
                            Socials</a></li>

                    <li class="{{ setActive(['admin.footer-grid-two.*']) }}"><a class="nav-link"
                                                                                href="{{ route('admin.footer-grid-two.index') }}">Footer
                            Grid Two</a></li>

                    <li class="{{ setActive(['admin.footer-grid-three.*']) }}"><a class="nav-link"
                                                                                  href="{{ route('admin.footer-grid-three.index') }}">Footer
                            Grid Three</a></li>

                </ul>
            </li>
            <li class="dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Users</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="">Customer list</a></li>
                    <li class=""><a class="nav-link" href="">Vendor list</a></li>

                    <li class=""><a class="nav-link" href="">Pending vendors</a></li>

                    <li class=""><a class="nav-link" href="">Admin Lists</a></li>

                    <li class=""><a class="nav-link" href="">Manage user</a></li>

                </ul>
            </li>

            <li><a class="" href=""><i class="fas fa-user"></i>
                    <span>Subscribers</span></a></li>

            <li><a class="nav-link" href="{{ route('admin.settings.index') }}"><i class="fas fa-wrench"></i>
                    <span>Settings</span></a></li>

        </ul>
    </aside>
</div>
