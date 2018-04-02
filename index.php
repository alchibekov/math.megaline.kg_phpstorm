<!--Landing Page-->

<!-- add header -->
<?php
//require_once 'header.php';
session_start();
if(isset($_SESSION['user_session'])!="")
{
header("Location:dashboard/index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
    <!--jquery registration-->


    <!--jquery registration

<!-- //add header -->
<title>Сайт для подготовки к ОРТ | Домашняя страница</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="ОРТ орт подготовка бишкек математика подготовка к ОРТ по математике бишкек" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" 	href="css/chocolat.css" type="text/css" media="all">
<!--// css -->

<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->

<script src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="validation.min.js"></script>
<script src="js/bootstrap.js"></script>

	<!-- Popup-Box-JavaScript -->
	<script src="js/modernizr.custom.97074.js"></script>
	<script src="js/jquery.chocolat.js"></script>
	<script type="text/javascript">
		$(function() {
			$('.gallery-grids a').Chocolat();
		});
	</script>
	<!-- //Popup-Box-JavaScript
	<!-- start-smooth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			</script>
	<!-- //start-smooth-scrolling -->
		<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
    <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});

						});
    </script>
    <!--Preloader-->
    <script type="text/javascript">
    $(window).load(function() {
    setTimeout(function () {
    $(".loader").delay(10).fadeOut().remove();
    }, 1000);
    });
    /*$(window).load(function() {
        $(".loader").delay(1000).fadeOut().remove();
    });*/
    </script>
    <!--/Preloader-->
</head>
<body>
    <div class="loader">
        <div class="loader-inner">
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
        </div>
    </div>
    
	<div class="header">
		<div class="container">
			<div class="w3l_header_left">
				<ul>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+(996)772 21-12-34</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:talchibekov@mega.kg">talchibekov@mega.kg</a></li>
				</ul>
			</div>

			<div class="w3l_header_right">
				<ul>
                    <li><a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Войти</a></li>
					<li><a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog2"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Регистрация</a></li>
				</ul>
			</div>

			<div class="clearfix"> </div>

		</div>
	</div>
	<div class="logo-navigation-w3layouts">
		<div class="container">
		<div class="logo-w3">
			<a href="#"><h1><img src="images/logo.png" alt=" " /><span>GT-Education</span></h1></a>
		</div>
		<div class="navigation agileits w3layouts">
			<nav class="navbar agileits w3layouts navbar-default">
				<div class="navbar-header agileits w3layouts">
					<button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only agileits w3layouts">Toggle navigation</span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
					</button>
				</div>
				<div class="navbar-collapse agileits w3layouts collapse hover-effect" id="navbar">
					<ul class="agileits w3layouts">
						<li class="agileits w3layouts"><a href="#" class="active">Главная</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#about">О проекте</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#team">Наша команда</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#services">Обучение</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#gallery">Галлерея</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#contact">Контакты</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>

	<div class="banner">
		<h3>подготовка к <span>ОРТ</span></h3>
		<h2>по математике</h2>
		<h4>Наша цель - подготовить к качественной сдачи ОРТ</h4>
		<div class="arrow">
			<a href="#contact" class="scroll"><img src="images/arrow.png" alt=" " /></a>
		</div>
	</div>
	<!-- about -->
	<div class="about-w3-agile" id="about">
		<div class="container">
			<div class="wthree_about_grids">
				<div class="col-md-6 wthree_about_grid_left">
					<h3>О нас</h3>
							<p>Мы команда молодых преподавателей, с современным подходом к обучению.</p>
								<a href="#" data-toggle="modal" data-target="#myModal">Подробнее </a>
				</div>
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">О нас</h4>
						  </div>
						  <div class="modal-body">
							<p>Привествую учеников и всех кто зашёл на эту страничку, меня зовут Альчибекова Гульэра и я рада представить вам свою программу подготовки к ОРТ по математике. Я закончила КТУ "Манас" по специальности инженер-программист. Математика является моей любимой наукой, также сферой деятельности. </p>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						  </div>
						</div>
					</div>
				</div>

				<div class="col-md-6 wthree_about_grid_right">
					<img src="images/11.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
	<div class="featured-work">
		<div class="container">
			<h3>О проекте</h3>
			<div class="col-md-6 featured-left">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<img src="images/f1.jpg" alt=" " class="img-responsive" />
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<img src="images/f2.jpg" alt=" " class="img-responsive" />
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<img src="images/f3.jpg" alt=" " class="img-responsive" />
							</div>
						</article>
					</div>
				</div>
			</div>
			<script src="js/jquery.wmuSlider.js"></script>
								<script>
									$('.example1').wmuSlider();
								</script>

				<div class="col-md-6 featured-right">
					<h4>Использование сайта</h4>
					<p>Для того чтобы открыть доступные лекции, практические задания и тесты вам необходимо зарегистрироваться. За каждое пройденное задание вам начисляются баллы, которые в дальнейшем вы сможете обменять на скидку на занятия в нашем центре подготовки к ОРТ "GT Education"</p>
					<a href="#" data-toggle="modal" data-target="#myModal2">Подробнее</a>
				</div>
				<div id="myModal2" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">О проекте</h4>
							</div>
							<div class="modal-body">
								<p>. </p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							</div>
						</div>
					</div>
				</div>
		</div>
			<div class="clearfix">
			</div>
		</div>
	</div>

	<div class="feat-bottom">
		<h4></h4><!-- здесь можно что-нибудь напечатать -->
	</div>

<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<h3>Наша команда</h3>
			<div class="agile_team_grids">
				<div class="col-md-3 agile_team_grid  agile_team_gridf">
					<div class="agile_team_grid_main">
						<img src="images/t1.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="https://vk.com/era_israilova" class="icon-button vkontakte"><i class="icon-vkontakte"></i><span></span></a></li>
								<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
								<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
								<li><a href="#" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h4>Гульэра Альчибекова</h4>
						<p>Преподаватель</p>
					</div>
				</div>

				<div class="col-md-3 agile_team_grid agile_team_grid3">
					<div class="agile_team_grid_main">
						<img src="images/t3.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#" class="icon-button twitter"><i class="icon-vkontakte"></i><span></span></a></li>
								<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
								<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
								<li><a href="#" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h4>Тимур <p></p>Альчибеков</h4>
						<p>Программист</p>
					</div>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->

	<div class="services" id="services">
		<div class="container">
			<h3>Наша деятельность</h3>
			<div class="col-md-4 services-grids services-grids1">
				<span class="glyphicon glyphicon-education" aria-hidden="true"></span>
				<h4>Теоретическая часть</h4>
				<p>На занятиях с учителем предоставляется теоретическая часть курса</p>
			</div>
			<div class="col-md-4 services-grids services-grids2">
				<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
				<h4>Работа с сайтом</h4>
				<p>Домашние задания и тесты выполняются непосредственно на сайте</p>
			</div>
			<div class="col-md-4 services-grids services-grids3">
				<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
				<h4>Практическая часть</h4>
				<p></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<!-- Gallery -->
	<div class="gallery" id="gallery">
		<div class="container">
			<h3>Галлерея</h3>
			<div class="gallery-grids">
				<div class="col-md-6 col-sm-6 gallery-grids-left gallery-grids-left-gallery1-top">
					<div class="gallery-grid">
						<a class="example-image-link" href="images/gallery-1.jpg" data-lightbox="example-set" data-title="">
							<div class="grid">
								<figure class="effect-apollo">
									<img src="images/gallery-1.jpg" alt=""/>
										<figcaption></figcaption>
								</figure>
							</div>
						</a>
					</div>
					<div class="gallery-grids-left-sub">
						<div class="col-md-6 col-sm-6 gallery-grids-left-subl">
							<div class="gallery-grid">
								<a class="example-image-link" href="images/gallery-4.jpg" data-lightbox="example-set" data-title="">
									<div class="grid">
										<figure class="effect-apollo">
											<img src="images/gallery-4.jpg" alt=""/>
												<figcaption></figcaption>
										</figure>
									</div>
								</a>
							</div>
							<div class="gallery-grid gallery-grid-sub grid-middle gallery-grid-sub-left-bottom">
								<a class="example-image-link" href="images/gallery-5.jpg" data-lightbox="example-set" data-title="">
									<div class="grid">
										<figure class="effect-apollo">
											<img src="images/gallery-5.jpg" alt=""/>
												<figcaption></figcaption>
										</figure>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 gallery-grids-left-subr gallery-grids-left-subr-long">
							<div class="gallery-grid">
								<a class="example-image-link" href="images/gallery-7.jpg" data-lightbox="example-set" data-title="">
									<div class="grid">
										<figure class="effect-apollo">
											<img src="images/gallery-7.jpg" alt=""/>
												<figcaption></figcaption>
										</figure>
									</div>
								</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 gallery-grids-left">
					<div class="col-md-6 col-sm-6 gallery-grids-right gallery-grids-right-first">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/gallery-2.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/gallery-2.jpg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 gallery-grids-right gallery-grids-right-two">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/gallery-3.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/gallery-3.jpg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="gallery-grids-right1 gallery-grids-right-hand">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/gallery-6.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/gallery-6.jpg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 gallery-grids-right gallery-8">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/gallery-8.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/gallery-8.jpg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 gallery-grids-right gallery-9">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/gallery-9.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/gallery-9.jpg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!-- //Gallery -->

	<div class="contact-w3-agileits" id="contact">
		<div class="container">
			<div class="col-md-5 contact-left-w3ls">
				<h3>Контактная информация</h3>
				<div class="visit">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Посетите нас</h4>
						<h5>г.Бишкек,
							Бишкек, Московская, 172, здание "Euphoria"</h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="mail">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Напишите нам</h4>
						<h5><a href="mailto:info@example.com">talchibekov@mega.kg</a></h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="call">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Контактные телефоны</h4>
						<h5>+(996)772 21-12-34</h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="visit">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Рабочие часы</h4>
						<h5>Пн-Пт 09:00-17:00</h5>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-7 contact-right-w3l">
				<h3>Написать сообщение</h3>
				<form action="#" method="post">

					<input type="text"  class="name" name="name" placeholder="Фамилия" required="">
					<input type="text"  class="name" name="name" placeholder="Имя" required="">
					<input type="text"  class="name" name="name" placeholder="Email" required="">
					<input type="text"  class="name" name="name" placeholder="Тема" required="">
					<textarea placeholder="Ваше сообщение" required=""></textarea>
					<input type="submit" value="Отправить сообщение">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="footer-w3l">
		<p> &copy;2018 Разработали Тимур и Гульэра Альчибековы</p>
	</div>

    <script type="text/javascript" src="auth_script.js"></script>

    <div class="fg">
        <div id="small-dialog" class="mfp-hide book-form">

            <form class="form-signin" method="post" id="login-form">
                <h3>Войти</h3>
                <div id="error">

                </div>
                <input type="text" id="user" name="user" class="email" placeholder="Email" required="" />
                <input type="password" id="pass" name="pass" class="password" placeholder="Пароль" required=""/>
                <ul>
                    <!--<<li>
                        <input type="checkbox" id="brand1" value="">
                        label for="brand1"><span></span>Remember me</label>
                    </li>-->
                </ul>
                <a href="#">Забыли пароль?</a><br>
                <div class="clearfix"></div>



                <button>
                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
                </button>
                <input type="submit"  class="btn btn-default" name="btn-login" id="btn-login" value="Войти">
                <!--<input type="image" class="btn btn-default" name="btn-login" id="btn-login" value="Sign In" src="btn-ajax-loader.gif"-->
                <!--<img src="btn-ajax-loader.gif" width="1%"/>-->

            </form>
           <!-- <form class="form-signin" method="post" id="login-form">

                <h2 class="form-signin-heading">Log In to WebApp.</h2><hr />

                <div id="error">

                </div>

                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email address" name="user" id="user_email" />
                    <span id="check-e"></span>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="pass" id="password" />
                </div>

                <hr />

                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="btn-login" id="btn-login">
                        <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
                    </button>
                </div>

            </form>-->
        </div>
    </div>
    <div class="pop-up">
        <div id="small-dialog2" class="mfp-hide book-form">
            <form class="form-signin" method="post" id="register-form">
                <h3>Зарегистрироваться</h3>
                <input type="text" name="Name" placeholder="Имя*" required=""/>
                <input type="text" name="Email" class="email" placeholder="Email*" required=""/>
                <input type="password" name="Password" class="password" placeholder="Пароль*" required=""/>
                <input type="password" name="Password" class="password" placeholder="Подтвердить пароль*" required=""/>
                <input type="submit" value="Зарегистрироваться">
            </form>
        </div>
    </div>

</body>
</html>
