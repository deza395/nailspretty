@extends('front.master')
@section("content")

    <style>
      .service:hover{
    color:#67b0d1;
	  }
	   .avatar img{
        width: 300px;
        height: 300px;
		margin: auto;
	}
	</style>
      
	<!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h2>Uñas perfectas siempre<span class="text_color"></span> </h2>
			<h4>belleza de manos y piel.</h4>
		</div>
		<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->

	<!-- Section: servicios -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Servicios</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
		<a href="servicios" class="service">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h3>Manicura</h3>
                       
                        <div class="avatar" ><img src="img/manicure/manicure3.jpg"  style="border:#e1c9c3 13px solid"alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h3>Peluquería</h3>
                       
                        <div class="avatar"><img src="img/pedicure/peluqueria.jpg" alt=""style="border:#c3d8d3 13px solid"  class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h3>Servicios</h3>
                        
                        <div class="avatar"><img src="img/pedicure/pinturas.jpg" style="border:#d1cbd1 13px solid" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
		
        </div>	
	</a>	
		</div>
	</section>
	<!-- /Section: servicios -->


	<!--/Section:nosotras-->
	<section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>nosotras</h2>
					
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

	
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-4">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
						
                       
                        <div class="avatar2"><img src="img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-7">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
					
						<p>Somos un grupo de mujeres emprendedoras apasionadas por nuestro trabajo.</p>
                            <p>Ofrecemos a nuestros clientas un servicio de alto nivel con productos de calidad y con una duración óptima, siempre a la vanguardia en productos, colores y tendencias.</p>
                            
                       
                        

                    </div>
                </div>
				</div>
            </div>
	
		
        </div>		
		</div>
	</section>
	<!--/Section -->
	

	
	<!--/ Section: footer -->

    @endsection