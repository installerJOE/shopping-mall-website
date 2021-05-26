{{-- <div id="div_sidebar" class="col-12">
    <ul id="ul_sidebar">
        <li class="li-underlined">
            <a>
                DASHBOARD 
            </a>
        </li>
        <li>
            <a>
                PRODUCT SETTINGS
            </a>
        </li>
        <li class="li-underlined">
            <a>
                BLOG SETTINGS
            </a>
        </li>
        <li>
            <a>
                NOTIFICATIONS
            </a>
        </li>
        <li class="li-underlined">
            <a>
                DOCUMENTATION
            </a>
        </li>
    </ul>
</div> --}}

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" class="sidebar">
        <ul class="list-unstyled components">
            <li class="li-underlined">
                <a href="/dashboard"> 
                    <span class="icons glyphicon glyphicon-search"></span> DASHBOARD 
                </a>
            </li>
            
            <li class="active">
                <a href="#productSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">PRODUCTS</a>
                <ul class="collapse list-unstyled" id="productSubMenu">
                    <li>
                        <a href="/products">View Products</a>
                    </li>
                    <li>
                        <a href="/products/create">Add Products</a>
                    </li>
                    {{-- <li>
                        <a href="#">Delete Products</a>
                    </li> --}}
                </ul>
            </li>
            
            <li class="li-underlined">
                <a href="#categorySubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">CATEGORIES</a>
                <ul class="collapse list-unstyled" id="categorySubMenu">
                    <li>
                        <a href="/categories">View Categories</a>
                    </li>
                    <li>
                        <a href="/categories/create">
                            Add Categories
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#">Delete Categories</a>
                    </li> --}}
                </ul>
            </li>
            <li>
                <a href="#">NOTIFICATIONS</a>
            </li>
            <li class="li-underlined">
                <a href="#">DOCUMENTATION</a>
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    LOG OUT
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>

</div>
