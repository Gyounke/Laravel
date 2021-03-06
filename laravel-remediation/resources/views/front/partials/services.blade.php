<section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Our Services</h6>
            <h4>Provided <em>Services</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">


            @foreach ($services as $item)
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset("images/" . $item->icon) }}" alt="">
                </div>
                <h4>{{ $item->title }}</h4>
                <p>{{ $item->description }}</p>
              </div>
            </div>
            @endforeach
            
          </div>
        </div>
      </div>
    </div>
  </section>