<!-- Sidebar-->
<div class="list-group" id="div-sidebar">
    <a class="list-group-item" href="/admin/dashboard">
        <i class="fas fa-fw fa-home"></i> &nbsp; DASHBOARD
    </a><hr class="list-underlined"/>
    
    <a href="#categorySubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-group-item">
        <i class="fas fa-fw fa-list-alt"></i> &nbsp; CATEGORIES
    </a>
    <ul class="collapse list-unstyled" id="categorySubMenu">
        <li>
            <a class="list-group-item" href="/categories">View Categories</a>
        </li>
        <li>
            <a href="/categories/create" class="list-group-item">
                Add Categories
            </a>
        </li>
        {{-- <li>
            <a href="#">Delete Categories</a>
        </li> --}}
    </ul>

    <a href="#productSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-group-item">
        <i class="fas fa-fw fa-gifts"></i> &nbsp; PRODUCTS
    </a>
    <ul class="collapse list-unstyled" id="productSubMenu">
        <li>
            <a class="list-group-item" href="/products">View Products</a>
        </li>
        <li>
            <a href="/products/create" class="list-group-item">Add Products</a>
        </li>
        {{-- <li>
            <a href="#">Delete Products</a>
        </li> --}}
    </ul><hr class="list-underlined"/>
    
    <a href="#" class="list-group-item">
        <i class="fas fa-fw fa-barcode"></i> &nbsp; PRINT BARCODES
    </a>

    <a href="#" class="list-group-item">
        <i class="fas fa-fw fa-bell"></i> &nbsp; NOTIFICATIONS
    </a><hr class="list-underlined"/>
    
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
    class="list-group-item">
        <i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; LOG OUT
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>