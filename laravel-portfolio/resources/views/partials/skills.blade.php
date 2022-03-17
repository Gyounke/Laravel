<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container">

        <div class="section-title">
          <h2>{{ $titles[3]->text}}</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row skills-content">

            <div class="col-lg-6" data-aos="fade-up">

                <div class="progress">
                    <span class="skill">{{ $skills[0]->langage}} <i class="val">{{ $skills[0]->value}}</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills[0]->level}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">{{ $skills[1]->langage}} <i class="val">{{ $skills[1]->value}}</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills[1]->level}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">{{ $skills[2]->langage}} <i class="val">{{ $skills[2]->value}}</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills[2]->level}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                <div class="progress">
                    <span class="skill">{{ $skills[3]->langage}} <i class="val">{{ $skills[3]->value}}</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills[3]->level}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">{{ $skills[4]->langage}} <i class="val">{{ $skills[4]->value}}</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills[4]->level}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">{{ $skills[5]->langage}} <i class="val">{{ $skills[5]->value}}</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills[5]->level}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Skills Section -->