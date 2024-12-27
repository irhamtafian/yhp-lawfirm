<div class="header-search d-flex flex-wrap justify-content-center align-items-center w-100">
  <span class="search-close-btn"><i class="flaticon-delete"></i></span>
  <form action="{{ route('frontend.search.index') }}" method="GET">
      <input id="search-input" name="keyword" type="text" placeholder="Search" autofocus />
  </form>
</div>
