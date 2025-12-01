<aside>
    <nav class="sidebar" style="">
            <form action="">
                @csrf
                <div class="mb-3 w-75" style=" border-radius:2rem;">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="form-control" placeholder="Search products...">
                </div>
            </form>
            <div>
                <h4>Categories</h4>
                <a href="{{ url('/shop/men') }}">Men</a>
                <a href="/shop/women">Women</a>
                <a href="/shop/kids">Kids</a>
                <h4>Filter By</h4>
                <div class="mb-3">
                    <label for="priceRange" class="form-label">Price Range</label>
                    <input type="range" class="form-range" id="priceRange" min="0" max="5000" step="50">
                    <button type="button" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </nav>
</aside>
