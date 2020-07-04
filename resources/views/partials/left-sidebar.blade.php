<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
            

                <li class="menu-title">Dashboard</li>

                <li>
                    <a href="/" class=" waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Manage</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-shape-circle"></i>
                        <span>Vendors</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('vendor.create')}}">Add New</a></li>
                        <li><a href="{{route('vendor.index')}}">View All</a></li>
                    </ul>
                </li>
                         
                <!-- Products Routes -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxl-product-hunt"></i>
                        <span>Products</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                         <!-- products routes -->
                            <li><a href="{{route('product.create')}}">Add New</a></li>
                        
                            <li><a href="{{route('product.index')}}">View All</a></li>
                            <!-- /products routes -->
                          <!-- products filters -->
                          <li>
                            <a href="javascript: void(0);" class="has-arrow">Filters</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true">
                                <li><a href="{{route('productFilter.create')}}">Add New</a></li>
                                <li><a href="#">View All</a></li>
                            </ul>
                        </li>
                        <!-- / products filters -->
                        <!-- categories sub menu -->
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Categories</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true">
                                <li><a href="{{route('ProductCategory.create')}}">Add New</a></li>
                                <li><a href="{{route('ProductCategory.index')}}">View All</a></li>
                            </ul>
                        </li>
                        <!-- /categories sub menu -->
                    </ul>
                   
                   
                </li>
                <!-- /Products Routes -->

                
                <!-- Blog Routes -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxl-blogger"></i>
                        <span>Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <!-- posts  sub menu -->
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Posts</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true">
                                <li><a href="{{route('BlogPost.create')}}">Add New</a></li>
                                <li><a href="{{route('BlogPost.index')}}">View All</a></li>
                            </ul>
                        </li>
                        <!-- / posts  sub menu -->
                         <!-- post categories sub menu -->
                         <li>
                            <a href="javascript: void(0);" class="has-arrow">Categories</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true">
                                <li><a href="{{route('BlogPostsCategory.create')}}">Add New</a></li>
                                <li><a href="{{route('BlogPostsCategory.index')}}">View All</a></li>
                            </ul>
                        </li>
                        <!-- / post categories sub menu -->
                    </ul>
                </li>
                <!-- /Blog Routes -->


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>