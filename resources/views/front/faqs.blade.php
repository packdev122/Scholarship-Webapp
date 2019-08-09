@extends('front.template1')
@section('styles')
    <style>
        p{
            text-align:justify;
        }
        .footer-area{
            display:none;
        }
    </style>
@endsection
@section('main')
<!-- start service Area-->
<section class="service-area pt-100 pb-20" id="service">
	<div class="page-content">
		<div class="d-flex justify-content-center mb-20">
            <div class='row mt-20' style='width:100%'>
                <div class='col-lg-3 border-right-white'>
                    <h1 class="">FAQs</h1><br>
                    <div class='d-flex align-items-center'>
                        <input type='text' class='form-control' id='search' style='width:350px !important'>&nbsp;&nbsp;
                        <i class='fa fa-search font-size-20'></i>
                    </div>
                </div>
                <div class='col-lg-9'>
                    <div class="menu-content">
                        <div>
                            <h3 class="">What are the key dates?</h3><br>
                            <p class='font-size-15'>Application open on 16th Feb 2019
                                Applications open on 16th Feb 2019 and last date to apply is 7th March 2019.
                                Start date of the Scholarship in India is 16th Aug 2019. If selected, you can commence to India any time after completing your course at MIT Sloan School of Management
                            </p>
                        </div>
                        <div>
                            <h3 class="">Is there a criterion of nationality for this scholarship</h3><br>
                            <p class='font-size-15 '>
                                It is for anyone who is impact and action oriented. The scholarship is open to all nationalities.
                            </p>
                        </div>
                        <div>
                            <h3 class="">Do I have the title of the AIM Scholar for life?</h3><br>
                            <p class='font-size-15'>
                                Yes, of course. This scholarship is in collaboration with the MIT Sloan School of Management. To be selected as a AIM Scholar is a matter of great pride and achievement for you.
                            </p>
                        </div>
                        <div>
                            <h3 class="">How will the submission will be evaluated and measured by the panel?</h3><br>
                            <p class='font-size-15'>The jury will assess the questions on various parameters like the problem you have chosen, how big is the problem in the chosen region, what is the big idea, how scalable is the big idea, background & primary work done by the applicant and future plans. 
                            </p>
                        </div>
                        <div>
                            <h3 class="">When can I receive feedback on applications?</h3><br>
                            <p class='font-size-15'>
                                The fellow member can log in the website and check status on the application. The portal provides feedback from each jury for you. 
                            </p>
                        </div>
                        <div>
                            <h3 class="">Do I have to an Entrepreneur or experience of entrepreneurship?</h3><br>
                            <p class='font-size-15'>
                                Not necessarily. Anyone with passion, commitment to the cause and clarity on the idea can apply for the scholarship. 
                                We however do recommend taking up electives on subjects of entrepreneurship, global impact, social innovation and development during your course so as to help you achieve our objective(s).
                            </p>
                        </div>
                        <div>
                            <h3 class="">Am I expected to do specific courses to qualify?</h3><br>
                            <p class='font-size-15'>
                                It is not mandatory but if you have chosen elective(s) that supports your big idea and / or entrepreneurship, it will provide you and advantage during assessment. 
                            </p>
                        </div>
                        <div>
                            <h3 class="">What does impact mean?</h3><br>
                            <p class='font-size-15'>
                                “Impact” in the context of scholarship is the measurement of how much change have you brought to the SDG you took up. We would assess the change you brought in with your project in the condition of the problem when you started working on it till when you finish the project. 
                                Ideally, you should have solved the problem/ facilitated the solution in the region you have chosen. 
                            </p>
                        </div>
                        <div>
                            <h3 class="">What resources will I have available during the course of my project?</h3><br>
                            <p class='font-size-15'>
                                The objective of the scholarship is to help you fine tune your proposition and pilot test the same. 
                                We will try to provide you logistics support and local travel guidance. A group of advisors & mentors – Collective, will support during your project tenure. 
                                There is of course the financial award too to help with the project and stay in India 
                            </p>
                        </div>
                        <div>
                            <h3 class="">How much are the financial awards?</h3><br>
                            <p class='font-size-15'>
                                The winning project will be granted a one-time award of 10,000 USD upon arrival in India, with an additional honorarium of 1,000 USD per month, per person, during the implementation phase to cover the cost of living in India. 
                            </p>
                        </div>
                        <div>
                            <h3 class="">Can I apply for this Scholarship together with my spouse as a team?</h3><br>
                            <p class='font-size-15'>
                                Yes, you may apply for the Scholarship with your spouse as a team member. However, you will have to share the credentials and the background proof of the contribution that your partner can make to the project.
                            </p>
                        </div>
                        <div>
                            <h3 class="">When is the financial reward given?</h3><br>
                            <p class='font-size-15'>
                                The cash reward will be transferred in a local bank account of the fellow as soon as he/she arrives in India.
                            </p>
                        </div>
                        <div>
                            <h3 class="">What is the tenure of the project in India?</h3><br>
                            <p class='font-size-15'>
                                We believe it may take a few months to develop and test the idea. Hence, the project tenure is 6-9 months. Infact, most likely you are going to need more time for the project to reach its full potential. These 6-9 months would help you validate your hypothesis, determine the scale, applicability of the solutions and direction the project would take.   
                            </p>
                        </div>
                        <div>
                            <h3 class="">Is there a minimum duration of the project?</h3><br>
                            <p class='font-size-15'>
                                Yes, the minimum tenure is 6 months.   
                            </p>
                        </div>
                        <div>
                            <h3 class="">What will be the base location in India?</h3><br>
                            <p class='font-size-15'>
                                We suggest the base location to be Delhi/ NCR.   
                            </p>
                        </div>
                        <div>
                            <h3 class="">Does the scholarship include induction to culture prior to landing?</h3><br>
                            <p class='font-size-15'>
                                We would endeavor our best to help you acclimatize to Indian conditions and provide local information. However, we do not have any special formal induction program or help on culture.   
                            </p>
                        </div>
                        <div>
                            <h3 class="">Is there an ability to extend the tenure?</h3><br>
                            <p class='font-size-15'>
                                Yes, you can stay longer than 9 months. However, the Trust will not be able to provide financial assistance. You will be on your own as the end of the tenure.   
                            </p>
                        </div>
                        <div>
                            <h3 class="">As a corporate sponsor, can we have a team execute our idea through our company?</h3><br>
                            <p class='font-size-15'>
                                No, the scholarship eligibility requires the applicant to be a registered MIT Sloan School of Management student. 
                            </p>
                        </div>
                        <div>
                            <h3 class="">Can a student looking to extend education after the graduation, could they break the tenure over 3 years?</h3><br>
                            <p class='font-size-15'>
                                Since this is not a research project, the scholarship terms do not give the student flexibility to break the tenure over 3 years.
                            </p>
                        </div>
                        <div>
                            <h3 class="">What resources they will have in terms of office space or access to technology or access to labs?</h3><br>
                            <p class='font-size-15'>
                                Aim scholar(s) would be given desk space to work/ meet people in a co-working office
                            </p>
                        </div>
                        <div>
                            <h3 class="">Will there be access to funding in India?</h3><br>
                            <p class='font-size-15'>
                                Yes, the scholar can publish any report, paper, blog. The scholar is expected to duly acknowledge role of Anusha Welfare Trust and other organizations / people who supported the project with approval. 
                            </p>
                        </div>
                        <div>
                            <h3 class="">What is the flexibility on travel outside from India?</h3><br>
                            <p class='font-size-15'>
                                When the fellow commits to the program, it is expected that the fellow will not travel outside from India unless there is a personal emergency or family requirements during the 6 - 9 months. 
                            </p>
                        </div>
                        <div>
                            <h3 class="">What will happen at the end of the term?</h3><br>
                            <p class='font-size-15'>
                            At the end of the project the scholar(s) will submit a formal report to the Trustees and include the following information as a conclusion to what was submitted at the time of project approval:<br>
                            -Impact Goals<br>
                            -Project Milestones<br>
                            -Insights <br>
                            -Working Prototype <br>
                            -Field Test<br>
                            -Area of Improvement <br>
                            Next Steps & Future Plans <br>
                            </p>
                        </div>
                        <div>
                            <h3 class="">Will there be health insurance?</h3><br>
                            <p class='font-size-15'>
                                Insurance is the responsibility of the scholar. We can recommend and help get local insurance while in India. They can discuss with the insurer directly. And make payments directly to the company. 
                                You may want to explore insurance from your insurer or any other insurance company of your choice. 
                            </p>
                        </div>
                        <div>
                            <h3 class="">Will I have the ability to publish reports from my research and project implementation?</h3><br>
                            <p class='font-size-15'>
                                Yes, the scholar can publish any report, paper, blog. The material collected during the project tenure is the property of the scholar. Though it is expected to duly acknowledge the role of Anusha Welfare Trust and other organizations / people involved. For any specific interviews conducted, permission to print or publish should be sort directly. 
                            </p>
                        </div>
                        <div>
                            <h3 class="">Will there be access to funding in India?</h3><br>
                            <p class='font-size-15'>
                                As soon as you reach India & open a bank account, you will receive the prize money immediately. Besides that, if you think the project is ready for scale during the tenure, the Trust can help you to liaise with network of investor to get funding on a case-to-case basis. The Trust may itself want to invest in the project together with you for which we would do mutual discussions. However, the fund raise is outside the terms of this scholarship.
                            </p>
                        </div>
                        <div>
                            <h3 class="">Can the alumni of MIT apply?</h3><br>
                            <p class='font-size-15'>
                                The scholarship is currently only for the current registered students of MIT Sloan School of Management. In case of any exceptions, we will review on case basis. For any changes in eligibility, updates will reflect on the website.
                            </p>
                        </div>
                        <div>
                            <h3 class="">How can the alumni get involved?</h3><br>
                            <p class='font-size-15'>
                                In case you as alumni want to get involved and want to contribute financially and / or provide guidance/ any form of support the Trust will be pleased to collaborate. Please contact us on connect@aimscholar.com or write directly to Shweta Aprameya.
                            </p>
                        </div>
                        <div>
                            <h3 class="">Am I expected to do specific courses to qualify?</h3><br>
                            <p class='font-size-15'>
                                It is not mandatory but if you have chosen elective(s) that supports your big idea and / or entrepreneurship, it will provide you and advantage during assessment.
                            </p>
                        </div>
                        <div>
                            <h3 class="">What if, I quit for personal or health reason?</h3><br>
                            <p class='font-size-15'>
                                We propose to keep two runner ups as back-up in case the winner of the scholarship decides to quit. We would respect the decision of the scholar (which could be you) but it would provide less time for runner ups to plan their project.
                            </p>
                        </div>
                        <div>
                            <h3 class="">Do I get a chance to apply if someone quits?</h3><br>
                            <p class='font-size-15'>
                                Yes, in case someone decide to quit, we will keep it open for fresh applications 
                            </p>
                        </div>
                        <div>
                            <h3 class="">What if I want to pivot on the original project idea?</h3><br>
                            <p class='font-size-15'>
                                You would win the scholarship program based on the problem you choose, the solution you share, the impact it can have in the world, and if you pivot there will be a domino effect on all the impact. While you can't change the objective/ big idea, eg: SDG change from Girl child education to women sanitation, you can review your approach or technology solution approach in consultation with the Collective and the members of the Trust This will be considered on a case to case basis. 
                            </p>
                        </div>
                        <div>
                            <h3 class="">What will happen with my visa?</h3><br>
                            <p class='font-size-15'>
                                We would highly recommend reaching out to your nation consulate to seek advice. For India, you have to obtain a Research Visa for the project duration. We will provide you an invitation letter and all the support on the paperwork.  We would suggest applying for visa at least 6 weeks prior to travelling to India.  

                                Research visas are given to Research Professors or Scholars and participants attending research Conferences/Seminars/Workshops. You can refer to this website for some information -  https://www.immihelp.com
                            </p>
                        </div><div>
                            <h3 class="">Will, I get access to company formation advice and secretarial support?</h3><br>
                            <p class='font-size-15'>
                                The Trust can help you to connect reliable legal and company secretarial support for your venture formation. The scholar can choose their own legal advisors as well. 
                            </p>
                        </div>
                        <div>
                            <h3 class="">Would you help to connect with local partners?</h3><br>
                            <p class='font-size-15'>
                                We will be happy to assist you to connect with local entities and partners in our local network. 
                            </p>
                        </div>
                        <div>
                            <h3 class="">Is there a penalty if I don’t complete the minimum duration?</h3><br>
                            <p class='font-size-15'>
                            The answer would depend on the circumstances:<br>
                                -If you complete the course of the program within six months, we are willing to review and consider an early closure<br>
                                -Although this will be evaluated on a case to case basis. If you don’t complete the program for cases like a medical emergency, personal exigency, you will not be entitled to the title of a scholar but will not be required to pay back the monthly allowance to the Trust. <br>
                                -In case you decide to just quit mid-way, you will not be entitled to the title of a scholar and will be required to pay back the scholarship amount and monthly allowance to the Trust. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
		</div>	
														
	</div>	
</section>
<!-- end service Area-->
<!-- Start testimonial Area -->
<script>
    $(document).ready(function(){
        $('#search').keyup(function(e){
            if(e.keyCode == 13)
            {
                $('.menu-content div h3').removeClass("text-highlighted");
                $('.menu-content div h3').each(function(){
                    var text = $(this).html();
                    if(text.includes($('#search').val())){
                        $('html, body').animate({
                            scrollTop: $(this).offset().top-200
                        }, 2000);
                        $(this).addClass("text-highlighted");
                        $(this).select();
                        return false;
                    }
                })
            }
        });
    })
</script>
@stop


