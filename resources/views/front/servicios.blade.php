@extends('front.master')
@section("content")

<style>
.intro{
    background: url(../img/portada/photo3.jpg) no-repeat center;
    background-size: cover;
}
    
    
   
    .avatar img{
        width: 250px;
        height: 250px;
       /* border: #d3c8c6 9px solid;*/
        
        margin: auto !important;
    }
    .cards{
        margin-bottom: 50px;
       height: 600px;
    }
    .services{
        text-align: left;
        font-size: 18px;
        padding:5px;
    }
  


</style>
<section id="intro" class="intro">
	
    <div class="slogan">
        <h2> Conocé todos nuestros servicios!<span class="text_color"></span> </h2>
        <h4>belleza de manos y pies.</h4>
    </div>
    <div class="page-scroll">
        <a href="#service" class="btn btn-circle">
            <i class="fa fa-angle-double-down animated"></i>
        </a>
    </div>
</section>


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
                        <hr class="marginbot-50" />
                    </div>
                </div>

                <div class="row">
                    @foreach ($services as $service)
                    <div class="col-xs-6 col-sm-6 col-md-4 cards">


                        <div class="wow bounceInUp" data-wow-delay="0.2s">
                            <div class="team boxed-grey">
                                <div class="inner"  @if ($service->category_id=='1')  style=" background: #e1c9c3"  @elseif ($service->category_id=='2')  style=" background: #c3d8d3" @else  style=" background:#d1cbd1;"@endif >
                                    <br><br>
                                    
                                   
                                    <div class="avatar">
                                        <img
                                            src="{{Storage::url($service->image->url)}}"
                                            alt=""
                                            class="img-responsive img-circle"
                                        />
                                       
                                    </div>
                                    <br>
                                    <h4>{{ $service->name}}</h4>
                                    <div class="services">
                                        <p class="">{!!$service->body!!}</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>           
                </div>
                @endforeach
               </div>
            </div>
</section>

@endsection