<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="{{ $facts[0]->icon}}"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $facts[0]->title}}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>{{ $facts[0]->boldtext}}</strong> {{ $facts[0]->text}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="{{ $facts[1]->icon}}"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $facts[1]->title}}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>{{ $facts[1]->boldtext}}</strong> {{ $facts[1]->text}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="{{ $facts[2]->icon}}"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $facts[2]->title}}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>{{ $facts[2]->boldtext}}</strong> {{ $facts[2]->text}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="{{ $facts[3]->icon}}"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $facts[3]->title}}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>{{ $facts[3]->boldtext}}</strong> {{ $facts[3]->text}}</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->