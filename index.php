<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Чемпионат мира по футболу</title>
    <meta name="description" content="" />
    <meta name="author" content="Tooplate" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/tooplate-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
  </head>
  <body>
<?php
 session_start();
?>  
    <div id="page-wraper">
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="assets/images/logo.jpg" alt="Blugoon by Tooplate" /></a>
            </div>
            <div class="author-content">
              <h4><? php echo "Имя: ".$_SESSION['user']['Ima'];?></h4>
              <span>Чемпионат мира по футболу</span>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1">Главная</a></li>
                <li><a href="#section2">О нас</a></li>
                <li><a href="#section3">Галерея</a></li>
                <li><a href="#section4">Контакты</a></li>
              </ul>
			  <a style="
				height: 60px;
				line-height: 60px;
				display: inline-block;
				font-size: 16px;
				font-weight: 700;
				color: #fff;
				width: 100%;
				transition: all 0.5s;
				border-top: 1px solid #69C;
				" href="avtor.php" class="profil">Профиль</a>
            </nav>
            <div class="copyright-text">
              <p>Разработано:<br>
              Ярославль,2024 год</p>
            </div>
          </div>
        </div>
      </div>

      <section class="section about-me" data-section="section1">
        <div class="container">
        <div class="top-header">
        	<img src="assets/images/foot.jpg" alt="aerobic girls" />
        </div>
          <div class="section-heading">
          
            <h2>Чемпионат мира по футболу</h2>
            <div class="line-dec"></div>
            <span>Финальные турниры чемпионатов мира проводятся раз в четыре года, как и Олимпийские игры, однако, если учесть региональные турниры, каждый мундиаль продолжается более трёх лет. В отборочных соревнованиях Чемпионата участвует более 200 сборных. В финальном турнире, который проходит раз в четыре года в течение примерно месяца в заранее выбранной стране-хозяйке (или нескольких странах-хозяйках) чемпионата участвует 48 команд.</span>
          </div>
          <div class="right-image-post">
            <div class="row">
 
              <div class="col-md-8">
                <div class="left-text">
                  <h4>Команды</h4>
                  <p>Футбольная команда — это группа игроков, отобранных для совместной игры в различных командных видах спорта, известных как футбол.

Такие команды могут быть выбраны для участия в матче против команды соперника, представлять футбольный клуб, группу, штат или нацию, команду всех звёзд или даже быть выбраны в качестве гипотетической команды (например, Dream Team или Team of the Century) и никогда не играть в реальном матче</p>
                  
                  <div class="white-button">
                    <a href="#">Читать подробнее</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="right-image">
                  <img src="assets/images/kom.jpg" alt="Mountain Reflection" />
                </div>
              </div>
              
            </div>
          </div>
          <div class="left-image-post">
            <div class="row">
            
              <div class="col-md-4">
                <div class="left-image">
                  <img src="assets/images/chem.jpg" alt="Nature Girl" />
                </div>
              </div>
              
              <div class="col-md-8">
                <div class="right-text">
                  <h4>Чемпионаты</h4>
                  <p>На фоне горящих огней и бурящихся эмоций на трибунах, спортсмены из разных уголков мира соревнуются за звание чемпиона. Каждый участник чемпионата стремится к победе, вкладывая в поединки весь свой талант, стойкость и страсть к спорту. Главное сражение идет не только на поле соревнований, но и внутри каждого спортсмена, который ищет силы и мотивацию для преодоления своих пределов.</p>
                  <p>Чемпионат - это время испытаний, но и время победы, когда лучшие из лучших становятся на вершину успеха, оставаясь в сердцах поклонников на всю жизнь.</p>
                  <div class="white-button">
                    <a href="#">Читать подробнее</a>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>

      <section class="section my-services" data-section="section2">
        <div class="container">
          <div class="section-heading">
            <h2>О нас</h2>
            <div class="line-dec"></div>
            <span>Узнайте чем мы занимаемся!</span>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service-item">
                <i class="fa fa-area-chart"></i>
                <h4>Статистика</h4>
                <p>Мы ведем статистику по чемпионатам мира по футболу и следим за главными новостями</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <i class="fa fa-check-square-o"></i>
                <h4>Чемпионаты</h4>
                <p>Мы выкладываем только актуальные данные по чемпионатам</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <i class="fa fa-question-circle"></i>
                <h4>Нужна помощь?</h4>
                <p>Что-то не отображается или возникли вопрос? Обращайтесь к нам, указав данные.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <i class="fa fa-support"></i>
                <h4>Изображения</h4>
                <p>Мы выкладываем актуальные изображения с матчей и чемпионатов.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section my-work" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2>Галерея</h2>
            <div class="line-dec"></div>
            <span>Просматривайте только самые лучшие и актуальные изображения по чемпионатам!</span>
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <div class="isotope-box">
                <div class="isotope-item" data-type="beach">
                    <img src="assets/images/one.jpg" alt="man" />
                </div>
                <div class="isotope-item" data-type="s">
                    <img src="assets/images/two.jpg" alt="sq-sample26" />
                </div>

                <div class="isotope-item" data-type="pretty">
                    <img src="assets/images/three.jpg" alt="P"/>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section contact-me" data-section="section4">
        <div class="container">
          <div class="section-heading">
            <h2>Контакты</h2>
            <div class="line-dec"></div>
            <span>Если у вас возникли вопросы, то обязательно их пишите и мы их решим!</span>
          </div>
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input name="name" type="text" class="form-control"
                          id="name" placeholder="Имя..." required="" />
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="email" type="text" class="form-control"
                          id="email" placeholder="email..." required=""  />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="subject" type="text" class="form-control" 
                          id="subject" placeholder="Тема..." required="" />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control"
                          id="message" placeholder="Ваше сообщение..." required="" ></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">
                          Отправить сообщение
                        </button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
 
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
  </body>
</html>