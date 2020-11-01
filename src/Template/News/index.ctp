<main id="main">
    <br/><br/><br/><br/>

    <div class="container">  
      <div class="row">
        <div class="col-md-6 my-auto">
            <a href="/news/view/20" class="img-caption">
                <figure> 
                    <img class="img-responsive w-100" src="assets/img/course-1.jpg" alt="" />
                    <figcaption>
                        <h3>"Ачаа тээврийн зохицуулалтын үйл ажиллагааг арванхоёрдугаар сарын 1-нээс шинэ горимд шилжүүлнэ"</h3> 
                    </figcaption>
                </figure>
            </a> 
        </div>

        <div class="col-md-3">
            <div class="row">
                <div class="col-sm-12">
                    <a href="/news/view/20" class="img-caption">
                        <figure> <img class="img-responsive w-100" src="assets/img/course-2.jpg" alt="" />
                            <figcaption>
                                <small style="color:white;">ХХААХҮЯ: Мах экспортлогч компаниудад нэг цэгийн үйлчилгээ</small> 
                            </figcaption>
                        </figure>
                    </a> 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="/news/view/20" class="img-caption">
                        <figure> <img class="img-responsive w-100" src="assets/img/course-3.jpg" alt="" />
                            <figcaption>
                                <small style="color:white;">Л.Мөнхтүшиг: 11 дүгээр сард тусгай үүргийн 10 удаагийн нислэг</small>
                            </figcaption>
                        </figure>
                    </a> 
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="row">
                <div class="col-sm-12">
                    <a href="/news/view/20" class="img-caption">
                        <figure> <img class="img-responsive w-100" src="assets/img/course-1.jpg" alt="" />
                            <figcaption>
                                <h3>MY First Caption</h3> <span>For what reason would it be advisable for me to think about business content?</span>
                            </figcaption>
                        </figure>
                    </a> 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                     <a href="/news/view/20" class="img-caption">
                        <figure> <img class="img-responsive w-100" src="assets/img/course-2.jpg" alt="" />
                            <figcaption>
                                <h3>MY First Caption</h3> <span>For what reason would it be advisable for me to think about business content?</span>
                            </figcaption>
                        </figure>
                    </a> 
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="row container m-auto mt-3"> <!-- 1 dahi bagana  -->
        <?= $this->element('newsVerticalList') ?>
      <div class="col-sm-12 col-md-9"> <!--  2 dahi bagana  -->
        <?php foreach($news as $item): ?>
          <a href="/news/view/<?= h($item->id) ?>" class="text-dark">
              <div class="row mt-4">
                  <div class="col-4">
                      <img src="assets/img/course-3.jpg" class="float-left w-100" alt="...">
                  </div>
                  <div class="col-8">
                      <div class="row">
                          <div class="col-12 d-flex justify-content-between">
                            <small class="text-muted"><?= h($item->category) ?></small>
                          </div>
                          <div class="col-12 font-weight-bold text-justify" style="max-height: 47px; overflow: hidden;">
                              <?= h($item->title) ?>
                          </div>
                          <div class="col-12 text-muted specialNewsList text-justify" style="max-height: 33px; overflow: hidden;">
                              <small><?= h($item->body) ?></small>
                          </div>
                          <div class="col-12 d-flex justify-content-between">
                            <small class="text-muted font-weight-bold" data-toggle="tooltip" data-placement="bottom" title="2020/05/20 13:23">
                                <i class="far fa-clock" ></i> 2 цагийн өмнө
                            </small>
                            <small class="text-muted font-weight-bold" data-toggle="tooltip" data-placement="bottom" title="Уншсан">
                                <i class="fa fa-eye"></i> (17)
                            </small> 
                            <small class="text-muted font-weight-bold" data-toggle="tooltip" data-placement="bottom" title="Таалагдсан">
                                <i class="fas fa-thumbs-up"></i> (17)
                            </small>
                            <small class="text-muted font-weight-bold" data-toggle="tooltip" data-placement="bottom" title="Сэтгэгдэл">
                                <i class="far fa-comments"></i> (4)
                            </small>
                            <small class="text-muted font-weight-bold" data-toggle="tooltip" data-placement="bottom" title="Нийтэлсэн">
                                <i class="fas fa-pen-alt"></i> Б.Сондор
                            </small>
                          </div>
                      </div>
                  </div>
              </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
    <br/>
  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>