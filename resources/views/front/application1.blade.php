@extends('front.template1')
@section("styles")
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <style>
        .datepicker{
            padding:9px;
        }
        p{
            text-align:justify;
        }
        .footer-area{
            display:none;
        }
    </style>
@endsection
@section('main')
    <div class='page-content pt-100 pb-100'>
        <div class='row mt-20'>
            <!-- <img src='img/new/application_banner.png' width='100%' height="260px"> -->
            <div class='col-lg-3 border-right-white'>
                <h2 class='text-uppercase'>Application</h2>
            </div>
            <div class='col-lg-9'>
                <div class="d-flex justify-content-center">
                    <div class="">
                        <div>
                            <h2>The Application</h2>
                            <hr class='hr1'>
                        </div>
                        @if ($errors->has('success'))
                            <div class="alert alert-danger">
                                <strong>{{ $errors->first('success') }}</strong>
                            </div>
                        @endif
                        <div class=''>
                            <p class='font-size-16 font-bold text-uppercase text-black'>
                                important note
                            </p>
                            <p class='font-size-16'>
                                Kindly register or login before starting your application<br>
                                After submitting the form below, you will not be able to apply changes to it.
                            </p><hr>
                            <p class='font-size-16 font-bold text-uppercase text-black'>
                                Aggrement terms and signature
                            </p>
                            <p class='font-size-16'>
                                I have read and understand the conditions of the Anusha Welfare Trust Scholarship as explained on the website. I affirm that I plan to pursue a project as defined in this document. I give permission to officials of my institution to release transcripts of my academic record and other information requested for consideration in the Anusha Welfare Trust Scholarship. I understand that this application will be available only to qualified people associated with the process who need to see it in the course of their duties.  If selected as a AIM Scholar, I agree to travel to India to implement the project as part of the AIM Scholarship program. I affirm that all of this application, including the project proposal, is my own work formally cited from other sources. I affirm the information contained herein is true and accurate to the best of my knowledge and belief.
                            </p>
                        </div>
                        <form method="POST" action="{{ route('application') }}" enctype="multipart/form-data" id='application_form'>
                            @csrf
                            <input type='checkbox' required id='check_term'>&nbsp;<label for='check_term'>I've read and accept the terms and conditions</label>
                            <input type='hidden' value='{{ Auth::user()->id }}' name='application[user_id]'>
                            <p class='font-size-16 font-bold text-uppercase text-black'>
                                Your information
                            </p><hr class='hr1'>
                            <div class='row form-group'>
                                <div class='col-lg-6'>
                                    <label class='control-label'>First name*</label>
                                    <input type='text' class='form-control' name='application[first_name]' required value='{{ $application->first_name }}'>
                                </div>
                                <div class='col-lg-6'>
                                    <label class='control-label' required>Last name*</label>
                                    <input type='text' class='form-control' value='{{ $application->last_name }}' name='application[last_name]' required>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='control-label' required>Middle name</label>
                                <input type='text' class='form-control' value='{{ $application->middle_name }}' name='application[middle_name]' >
                            </div>
                            <div class='form-group'>
                                <label class='control-label'>MIT ID*</label>
                                <input type='text' class='form-control' value='{{ $application->mit_id }}' name='application[mit_id]' required>
                            </div>
                            <div class='form-group'>
                                <label class='control-label'>Recent Qualification*</label>
                                <select class='form-control' name='application[qualification]'>
                                    @foreach(\App\Common::$qualifications as $key=>$quali)
                                        <option value='{{ $key }}' <?php if($key == $application->qualification)echo 'selected'?>>{{$quali}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class='form-group'>
                                <label class='control-label'>Phone*</label>
                                <div class='row'>
                                    <div class='col-md-2 col-lg-2'>
                                        <input type='text' class='form-control' value='{{ $application->phone1 }}' name='application[phone1]' required>
                                    </div>
                                    <div class='col-md-10 col-lg-10'>
                                        <input type='text' class='form-control' value='{{ $application->phone2 }}' name='application[phone2]' required>
                                    </div>
                                </div>
                            </div>
                            <p class='font-bold'>Birthday*</p>
                            <div class='form-group'>
                                <input class="form-control datepicker" value='{{ $application->birthday }}' data-date-format="yyyy-mm-dd" name='application[birthday]' required>
                            </div>
                            <div class='form-group' style='border:1px solid #ccc;padding:10px'>
                                <label class='control-label'>Team Memebers</label>
                                <div style='width:100%;overflow:auto'>
                                    <table class='table table-bordered table striped'>
                                        <thead>
                                            <th>First Name</th>
                                            <th>Email Id</th>
                                            <th>Other, please specify</th>
                                            <th>Last Qualification</th>
                                            <th></th>
                                        </thead>
                                        <tbody id='member_tbody'>
                                            <?php echo \App\Common::getMemberTableContent($application->team_members)?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-4'>
                                        <label class='control-label'>Full Name</label>
                                        <input class="form-control" id='member_first_name' value="">
                                    </div>
                                    <div class='col-lg-2'>
                                        <label class='control-label'>Email Id</label>
                                        <input class="form-control" id='member_email' value="">
                                    </div>
                                    <div class='col-lg-2'>
                                        <label class='control-label'>Other, please specify</label>
                                        <select class='form-control' id='member_specify'>
                                            @foreach(\App\Common::$member_specify as $key=>$quali)
                                                <option value='{{ $key }}'>{{$quali}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class='col-lg-2'>
                                        <label class='control-label'>Last Qualification</label>
                                        <select class='form-control' id='member_qualification'>
                                            @foreach(\App\Common::$qualifications as $key=>$quali)
                                                <option value='{{ $key }}'>{{$quali}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class='col-lg-2 d-flex justify-content-center align-items-center'>
                                        <button type='button' class='btn btn-success' id='add_member'>Add Member</button>
                                    </div>
                                    <input type='hidden' name='application[team_members]' id='team_members'>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='control-label'>Email Address*</label>
                                <input type='text' class='form-control' value='{{ $application->email }}' name='application[email]' required>
                            </div>
                            <div class='form-group'>
                                <label class='control-label' required>Permanent Address*</label>
                                <input type='text' class='form-control' value='{{ $application->address1 }}' name='application[address1]'>
                                <label class='control-label' >Address1</label>
                            </div>
                            <div class='form-group'>
                                <input type='text' class='form-control' name='application[address2]' value='{{ $application->address2 }}'>
                                <label class='control-label'>Address2</label>
                            </div>
                            <div class='row form-group'>
                                <div class='col-lg-8'>
                                    <input type='text' class='form-control' value='{{ $application->city }}' name='application[city]' required>
                                    <label class='control-label'>City*</label>
                                </div>
                                <div class='col-lg-4'>
                                    <input type='text' class='form-control' value='{{ $application->province }}' name='application[province]' required>
                                    <label class='control-label'>State/Province*</label>
                                </div>
                            </div>
                            <div class='row form-group'>
                                <div class='col-lg-4'>
                                    <input type='text' class='form-control' value='{{ $application->postal_code }}' name='application[postal_code]'>
                                    <label class='control-label'>Zip/Postal Code*</label>
                                </div>
                            </div>
                            <p class='font-size-16 font-bold text-uppercase text-black'>
                                Answer Questions below
                            </p><hr class='hr1'>
                            <div class='form-group'>
                                <label class='control-label font-bold'>
                                S.D.G's Goals;
                                </label>
                                <select class='form-control' name='application[sdg_goals]'>
                                    @foreach(\App\Common::$sdg_goals as $key=>$goal)
                                        <option value='{{ $key }}' <?php if($key == $application->sdg_goals)echo 'selected'?>>{{$goal}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class='form-group'>
                                <label class='control-label font-bold text-black'>
                                    1. Which Sustainable Development Goals (SDG) do you want to work towards and why? (500 words) Share with us your reasons to include your personal motivation and professional reasons (skill, area of interest, experience) to do this. <a class='open_description' data-toggle="modal" href='#'><i class='font-size-16 fa fa-question-circle'></i></a>
                                </label>
                                
                                <p class='description hide'>
                                    -Highlight/ indicate previous work undertaken<br>
                                    -Share history of family or entreprenuership <br>
                                    -Indicate involvement in social organisations<br>
                                    -Share the information with regards to investments charitable/non-charitable towards your chosen SDG<br>

                                </p>
                                <textarea class='form-control' style='height:100px' name='question[1]'>{{ $application->question_answer(1) }}</textarea>
                            </div>
                            <div class='form-group'>
                                <label class='control-label font-bold text-black'>
                                    2. What is the problem you aim to address? (1000 words)Share the narrative of the problem as you see it in the country/ world. <a class='open_description' data-toggle="modal" href='#'><i class='font-size-16 fa fa-question-circle'></i></a>
                                </label>
                                <p  class='description hide'>
                                    -Share primary market research conducted to identify the problem <br>
                                    -Narrow it down to a specific region or country<br>
                                </p>
                                <textarea class='form-control' style='height:100px' name='question[2]'>{{ $application->question_answer(2) }}</textarea>
                            </div>
                            <div class='form-group'>
                                <label class='control-label font-bold text-black'>
                                    3. What is your big idea that aligns with the Sustainable Development Goals? ( 1000 words )
                                    Your own mission and solution towards contributing to the Sustainable Development Goals. Include your thought process on the potential feasibility and its replicability for impact. <a class='open_description' data-toggle="modal" href='#'><i class='font-size-16 fa fa-question-circle'></i></a>
                                </label>
                                <p  class='description hide'>
                                    -Share primary market research conducted to identify the problem <br>
                                    -Narrow it down to a specific region or country<br>
                                </p>
                                <textarea class='form-control' style='height:100px' name='question[3]'>{{ $application->question_answer(3) }}</textarea>
                            </div>
                            <div class='form-group'>
                                <label class='control-label font-bold text-black'>
                                    4. If selected as the AIM Scholar, what is the proposed action plan that you would like to work on in India.<br>
                                        -Please give detailed and specific objectives you plan to achieve<br>
                                        -Share a quarterly milestone plan that you plan to achieve  <a class='open_description' data-toggle="modal" href='#'><i class='font-size-16 fa fa-question-circle'></i></a>
                                </label>
                                <p  class='description hide'>
                                    -Share the roadmap of the project<br>
                                    -Showcase work already undertaken<br>
                                    -Showcase partnership already explored in India/intended target nation<br>

                                </p>
                                <textarea class='form-control' style='height:100px' name='question[4]'>{{ $application->question_answer(4) }}</textarea>
                            </div>
                            <div class='form-group'>
                                <label class='control-label font-bold text-black'>
                                    5. Any specific electives you have taken at Sloan which might help you develop this plan. 
                                    (500 words) <a class='open_description' data-toggle="modal" href='#'><i class='font-size-16 fa fa-question-circle'></i></a>
                                </label>
                                <p  class='description hide'>
                                    -Feel free highlight electives that you may have taken outside of Sloan MIT as well. 
                                </p>
                                <textarea class='form-control' style='height:100px' name='question[5]'>{{ $application->question_answer(5) }}</textarea>
                            </div>
                            <div class='form-group'>
                                <label class='control-label font-bold text-black'>
                                    6. Any other scholarship / awards / events that you have applied for and / or won towards your project. (500 words) <a class='open_description' data-toggle="modal" href='#'><i class='font-size-16 fa fa-question-circle'></i></a>
                                </label>
                                <p  class='description hide'>
                                    -Be specific in what you have won<br>
                                    -Try to segregate Scholarship, Awards/Incubators & events/conferences. 
                                </p>
                                <textarea class='form-control' style='height:100px' name='question[6]'>{{ $application->question_answer(6) }}</textarea>
                            </div>
                            <div class='form-group'>
                                <label class='control-label font-bold text-black'>
                                7. Any previous experience which aligns with your proposed project that you would like to share. (500 words) 
                                </label>
                                <textarea class='form-control' style='height:100px' name='question[7]'>{{ $application->question_answer(7) }}</textarea>
                            </div>
                            <div class='form-group'>
                                <label class='control-label font-bold text-black'>
                                    8. Please paste your video link to tell us your story and your idea. Limit your video to maximum 2 minutes.   <a class='open_description' data-toggle="modal" href='#'><i class='font-size-16 fa fa-question-circle'></i></a>
                                </label>
                                <p  class='description hide'>
                                    -Showcase the core values - ACTION | IMPACT | MOTIVATION<br>
                                    -Express your passion & committment - Show what you are willing to put for this 
                                </p>
                                <input class='form-control' name='question[8]' value='{{ $application->question_answer(8) }}'>
                            </div>
                            <div class='form-group'>
                                <label class='control-label font-bold text-black'>
                                    9. Upload other supporting documents to share your interest (maximum 3 files) <a class='open_description' data-toggle="modal" href='#'><i class='font-size-16 fa fa-question-circle'></i></a>
                                </label>
                                <p  class='description hide'>
                                    -Primary research work that is undertaken (including statistical data)<br>
                                    -Previous research reports, paper or blogs written by you <br>
                                    -Independent study report that is undertaken at MIT Sloan<br>
                                    -Pitch presentation <br>
                                    -User stories/Videos/ pictures (Any form) conducted by you<br>
                                </p>
                                <div class='row'>
                                    <div class='col-lg-4'>
                                        <input type='file' class='form-control' name='file[]'>
                                    </div>
                                    <div class='col-lg-4'>
                                        <input type='file' class='form-control' name='file[]'>
                                    </div>
                                    <div class='col-lg-4'>
                                        <input type='file' class='form-control' name='file[]'>
                                    </div>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label class='control-label font-bold text-black'>
                                    10. What are your plans after completion of the initial execution phase (500 words)  <a class='open_description' data-toggle="modal" href='#'><i class='font-size-16 fa fa-question-circle'></i></a>
                                </label>
                                <p  class='description hide'>
                                    -Share your willingness to pursue this project as an entreprenuer or take up jobs after the completion
                                </p>
                                <textarea class='form-control' style='height:100px' name='question[10]'>{{ $application->question_answer(10) }}</textarea>
                            </div>
                            <div class='form-group'>
                                <label class='control-label font-bold text-black'>
                                    11. How do you think your proposed solution can be funded for scale in the future? <a class='open_description' data-toggle="modal" href='#'><i class='font-size-16 fa fa-question-circle'></i></a>
                                </label>
                                <p class='description hide'>
                                    -Showcase your funding options & plan<br>
                                    -Share any exsisting plan or talks with investors
                                </p>
                                <textarea class='form-control' style='height:100px' name='question[11]'>{{ $application->question_answer(11) }}</textarea>
                            </div>
                            <div class='form-group'>
                                <label class='control-label font-bold text-black'>
                                    12. Please provide your confirmations to the below: (Indicate your preference. Your response is not legally binding) 
                                </label>
                                <table class='table table-bordered table-striped'>
                                    <thead>
                                        <th></th>
                                        <th>Yes</th>
                                        <th>No</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Would you be willing to allow Anusha Welfare Trust or other entities in India to carry forward your project work post your completion of the same in India?</td>
                                            <td><input type='radio' class='form-control' name='question[12][radio1]' value='1' <?php if($application->check_value(12,0) == '1')echo 'checked' ?> ></td>
                                            <td><input type='radio' class='form-control' <?php if($application->check_value(12,0) == '0')echo 'checked' ?> name='question[12][radio1]' value='0'></td>
                                        </tr>
                                        <tr>
                                            <td>In case you do decide to set-up a venture post completion of your project based on your work during this period, would you be willing to provide Anusha Welfare Trust & partner companies equity investment in your new venture up to 5% at the same terms as yourself? </td>
                                            <td><input type='radio' class='form-control' <?php if($application->check_value(12,1) == '1')echo 'checked' ?> name='question[12][radio2]' value='1'></td>
                                            <td><input type='radio' class='form-control' <?php if($application->check_value(12,1) == '0')echo 'checked' ?> name='question[12][radio2]' value='0'></td>
                                        </tr>
                                        <tr>
                                            <td>Would you want Anusha Welfare Trust or its Trustees to be involved in your venture in any capacity i.e. Board member?</td>
                                            <td><input type='radio' class='form-control' <?php if($application->check_value(12,2) == '1')echo 'checked' ?> name='question[12][radio3]' value='1'></td>
                                            <td><input type='radio' class='form-control' <?php if($application->check_value(12,2) == '0')echo 'checked' ?> name='question[12][radio3]' value='0'></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button class="btn btn-primary text-uppercase">Submit <i class='fa fa-check text-white'></i></button>
                            <button class="btn btn-primary text-uppercase" id='save_later' type='button'>Save for Later <i class='fa fa-calendar text-white'></i></button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div id="description_dialog" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <!-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div> -->
            <div class="modal-body">
                <p id='description_text'></p>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
            </div>

        </div>
    </div>
    
@stop
@section("scripts")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script>
    var member_string ="{{$application['team_members']}}";
    console.log(member_string);
    var member_list = member_string ? member_string.split("##") : [];
    $(document).ready(function(){
        $(".open_description").on("click",function(){
            var desc = $(this).parent().parent().find("p.description").html();
            $("#description_text").html(desc);
            $("#description_dialog").modal();
        })
        $(".open_description").mouseover(function(){
            $(this).parent().parent().find("p.description").show();
        })
        $(".open_description").mouseout(function(){
            $(this).parent().parent().find("p.description").hide();
        })
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
        });

        $("#team_members").val(member_list.join("##"));
        $("#add_member").on("click",function(){
            var first_name = $("#member_first_name").val();
            var email = $("#member_email").val();
            var specify_id = $("#member_specify option:selected").val();
            var specify_text = $("#member_specify option:selected").text();
            var qualification_id = $("#member_qualification option:selected").val();
            var qualification_text = $("#member_qualification option:selected").text();
            var html = "";
            html += "<tr>";
            html += "<td>"+first_name+"</td>";
            html += "<td>"+email+"</td>";
            html += "<td>"+specify_text+"</td>";
            html += "<td>"+qualification_text+"</td>";
            html += "<td>"+"<a onclick='RemoveMember($(this))'><i class='fa fa-trash'></i></a>"+"</td>";
            html += "</tr>";
            $("#member_tbody").append(html);
            var member = first_name+"||"+ email+"||"+ specify_id+"||"+ qualification_id;
            member_list.push(member);
            var members = member_list.join("##");
            $("#team_members").val(members);
        });
        $("#save_later").on("click",function(){
            $("#application_form").attr("action","{{ url('application_store') }}").submit();
        });
    })
    function RemoveMember($object){
        var index = $object.parent().parent().index();
        member_list.splice(index, 1);
        var members = member_list.join("##");
        $("#team_members").val(members);
        $object.parent().parent().remove();
    }
</script>
@endsection