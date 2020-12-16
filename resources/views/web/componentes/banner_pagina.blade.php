<div class="banner-page">
  <img src="{!! asset('images/banners/' . $imagenBanner )!!}" alt="">
  <div class="banner-page-content-container">
    <div class="container">
      <div class="row">
        <h1>{{ $tituloBanner }}</h1>
        @if (isset($subtituloBanner))
        <h3>{{ $subtituloBanner }}</h3>    
        @endif
      </div>
    </div>
  </div>
</div>