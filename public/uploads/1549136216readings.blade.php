@extends('front.template1')

@section('main')
<!-- End banner Area -->	
<style>
    .hide{
        display:none;
    }
</style>

<!-- start service Area-->
<section class="service-area pt-100 pb-20" id="service">
	<div class="container">
		<div class="row d-flex justify-content-center mb-20">
			<div class="menu-content">
                <h1 class="">Readings</h1><br><hr>
                <video id='vid1' class='hide' width="100%" height="350" controls>
                    <source src="aim.mp4" type="video/mp4">
                    <source src="aim.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <video id='vid2' class='hide' width="100%" height="350" controls>
                    <source src="aim.mp4" type="video/mp4">
                    <source src="aim.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <video id='vid3' class='hide' width="100%" height="350" controls>
                    <source src="aim.mp4" type="video/mp4">
                    <source src="aim.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <br>
                <div class='row'>
                    <div class='col-lg-4'>
                        <button class='btn btn-primary' id='video_1' style='width:100%'>Video 1</button>
                    </div>
                    <div class='col-lg-4'>
                        <button class='btn btn-warning' id='video_2' style='width:100%'>Video 2</button>
                    </div>
                    <div class='col-lg-4'>
                        <button class='btn btn-danger' id='video_3' style='width:100%'>Video 3</button>
                    </div>
                </div><br>
                <div>
                    <p class='font-size-15'>
                        The AIM Anusha Welfare Trust Scholarship is a prize awarded an MIT Sloan Fellow to encourage and support the ideas and work towards achieving the United Nations’ Sustainable Development Goals and positive global impact through entrepreneurship. The scholarship will be awarded to a current Sloan Fellow chosen through a competitive evaluation process by a selection jury and will be called the Anusha's AIM Scholar at MIT Sloan School of Management for excellence in Entrepreneurship for Social Impact. The AIM Scholar will be one who hopes to change the world through social entrepreneurship, and is inspired by a personal experience to take on a specific global challenge. 
                    </p>
                    <h3>IN A NUTSHELL:</h3>
                    <p class='font-size-15'>
                        - Open to current Sloan Fellows who may apply individually or in teams (max 2 member).<br>
                        - One-time grant of 10,000 USD, with an additional honorarium of 1,000 USD per month, per person, during the implementation phase as to cover the cost of living in India. <br>
                        - 6-12 months of hands on immersion in India to test, prototype and pilot your idea into a working solution to progress towards a SDG goal<br>
                        - On ground logistics and implementation support<br>
                        - Connect with ecosystem and guidance by Collective of experienced professionals in the relevant field 
                    </p>
                    <h3>IDEAL CANDIDATE:</h3>
                    <p class='font-size-15'>
                        An action-oriented individual willing to go beyond the research stage and commit time to execute on his/her idea on the ground.  The Trust would like the scholar to build on the idea, test the hypothesis, conduct field exploration, develop a rapid prototype, and showcase a working model which can be used for execution anywhere, including India.  
                    </p>
                    <h3>FELLOW BENEFITS</h3>
                    <p class='font-size-15'>
                        - Financial incentive and support<br>
                        - Logistics and implementation support<br>
                        - Guidance from a collective of senior advisors and a group of mentors & experts from various domains<br>
                        - Continue the journey together through funding and support after the scholarship window closes  
                    </p><hr>
                    <p class='font-size-15'>
                        Entrepreneurship is like family,<br>

                        Your company and your team is like your child(ren). It’s a pleasure to see it grow, you nurture it, you guide it, you discipline it, you reward it. You bear their pains. You eat drink sleep their requirements. You create the culture, personality and character of your company like your children. The pleasure is beyond words. <br>

                        Of course for serial entrepreneurs the second and more companies get the similar lower attention as second and later children <br>

                        Your Board is like your parents. You know they have wisdom, but you think you know more. They want you to weigh pros and cons and you want to rush ahead, you think they are slowing you down. Oldies!!<br>

                        When they are there you don’t hear them. When they are gone you miss them.<br>

                        Your investors are like your wife. All amiable during courtship and terror post marriage. Investors have the same idiosyncrasies as women. Cant argue with them on rationale. The power equation is clear. My way or highway. <br>

                        A rare few do get lucky and bear many children with the same wife, but for most it’s a compromise. For some living hell.
                    </p>
                </div>
                
			</div>
		</div>	
														
	</div>	
</section>
<!-- end service Area-->
<!-- Start testimonial Area -->
<script>
    $(function(){
        $("#video_1").on("click",function(){
            var vid = document.getElementById("vid1");
            var vid1 = document.getElementById("vid2");
            var vid2 = document.getElementById("vid3");
            vid.currentTime = 0;
            vid.play();
            vid1.pause();
            vid2.pause();
            $("#vid1").show();
            $("#vid2").hide();
            $("#vid3").hide();
        })
        $("#video_2").on("click",function(){
            var vid = document.getElementById("vid2");
            var vid1 = document.getElementById("vid1");
            var vid2 = document.getElementById("vid3");
            vid.currentTime = 0;
            vid.play();
            vid1.pause();
            vid2.pause();
            $("#vid2").show();
            $("#vid1").hide();
            $("#vid3").hide();
        })
        $("#video_3").on("click",function(){
            var vid = document.getElementById("vid3");
            var vid1 = document.getElementById("vid1");
            var vid2 = document.getElementById("vid2");
            vid.currentTime = 0;
            vid.play();
            vid1.pause();
            vid2.pause();
            $("#vid3").show();
            $("#vid1").hide();
            $("#vid2").hide();
        })
    })
</script>
@stop


