<main id="main">
    <br/><br/><br/><br/>
    <h1 class="text-center">Мэдээ</h1>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-4" data-aos-delay="100">
                    <img src="img/medee.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-sm-12 col-md-6" style="height: 340px; overflow: hidden;">
                    <?php foreach ($news as $news): ?>
                        <h4><?= $news->title ?></h4>
                        <p><?= $news->body ?></p>
                        
                    <?php break; endforeach; ?>
                </div>
                <?= $this->Html->link(__('Харах'), ['action' => 'view', $news->id],['class'=>'btn btn-outline-info float-right']) ?>
                        
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Шинжлэх ухаан</h4>
                </div>

                <h3><a href="course-details.html">Мэдээ 1</a></h3>
                  <p>Амарсанаа: Судалгаанаас харвал 30-аас доош насныхны маскны хэрэглээ маш бага байна
                    Эрүүл мэндийн яамны ээлжит хэвлэлийн хуралд Шадар сайдын зөвлөх Б.Амарсанаа оролцож, 
                    "Маскаа зүүе, гараа угаая" аяны талаар мэдээлэл өглөө.
                  </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Эрүүл мэнд</h4>
                </div>

                <h3><a href="course-details.html">Мэдээ 2</a></h3>
                <p>Амарсанаа: Судалгаанаас харвал 30-аас доош насныхны маскны хэрэглээ маш бага байна
                    Эрүүл мэндийн яамны ээлжит хэвлэлийн хуралд Шадар сайдын зөвлөх Б.Амарсанаа оролцож, 
                    "Маскаа зүүе, гараа угаая" аяны талаар мэдээлэл өглөө.
                </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                    <span>Lana</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Нийгэм</h4>
                </div>

                <h3><a href="course-details.html">Мэдээ 3</a></h3>
                  <p>Амарсанаа: Судалгаанаас харвал 30-аас доош насныхны маскны хэрэглээ маш бага байна
                    Эрүүл мэндийн яамны ээлжит хэвлэлийн хуралд Шадар сайдын зөвлөх Б.Амарсанаа оролцож, 
                    "Маскаа зүүе, гараа угаая" аяны талаар мэдээлэл өглөө.
                  </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                    <span>Brandon</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->
  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>