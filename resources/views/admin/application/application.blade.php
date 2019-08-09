@extends('layouts.admin')
@section("styles")
    <style>
        .feedback_field{
            height:170px !important;
        }
        .answer_field{
            height:320px !important;
        }
        .answer_field:read-only{
            background:none !important;
        }
        input:read-only{
            background:none !important;
        }
        textarea:read-only{
            background:none !important;
        }
        .score.summary{
            border:none;
        }
        .member_trash_td{
            display:none;
        }
    </style>
@endsection
@section('main')    
    <h3 class="page-title">
        Application <small></small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/admin/applications') }}">Applications</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Application</a></a>
            </li>
        </ul>
    </div>
    <div class='main-content'>
        <div class='flex space-between align-items-center'>
            <h4>
                Total Score : <label id='total_score' class='font-bold font-size-20'>{{ $application->score }}</label>&nbsp;&nbsp;&nbsp;
                Status : {!! $application->status_label() !!}</label>
            </h4>
            <div>
                <a href="{{ url('/application/accept/'.$application->id) }}" class='btn btn-success'><i class='icon-check'></i>Accept</a>
                <a href="#declined_dialog" data-toggle='modal' class='btn btn-danger'><i class='icon-ban'></i>Decline</a>
            </div>
        </div>
        <hr>
        <div class="tabbable-custom nav-justified">
            <ul class="nav nav-tabs nav-justified">
                <li class="active">
                    <a href="#tab_infos" data-toggle="tab" aria-expanded="true">
                    Infos </a>
                </li>
                <li class="">
                    <a href="#tab_Q1" data-toggle="tab" aria-expanded="true">
                    Q 1 </a>
                </li>
                <li class="">
                    <a href="#tab_Q2" data-toggle="tab" aria-expanded="false">
                    Q 2 </a>
                </li>
                <li class="">
                    <a href="#tab_Q3" data-toggle="tab" aria-expanded="false">
                    Q 3 </a>
                </li>
                <li class="">
                    <a href="#tab_Q4" data-toggle="tab" aria-expanded="false">
                    Q 4 </a>
                </li>
                <li class="">
                    <a href="#tab_Q5" data-toggle="tab" aria-expanded="false">
                    Q 5 </a>
                </li>
                <li class="">
                    <a href="#tab_Q6" data-toggle="tab" aria-expanded="false">
                    Q 6 </a>
                </li>
                <li class="">
                    <a href="#tab_Q7" data-toggle="tab" aria-expanded="false">
                    Q 7 </a>
                </li>
                <li class="">
                    <a href="#tab_Q8" data-toggle="tab" aria-expanded="false">
                    Q 8 </a>
                </li>
                <li class="">
                    <a href="#tab_Q9" data-toggle="tab" aria-expanded="false">
                    Q 9 </a>
                </li>
                <li class="">
                    <a href="#tab_Q10" data-toggle="tab" aria-expanded="false">
                    Q 10 </a>
                </li>
                <li class="">
                    <a href="#tab_Q11" data-toggle="tab" aria-expanded="false">
                    Q 11 </a>
                </li>
                <li class="">
                    <a href="#tab_Q12" data-toggle="tab" aria-expanded="false">
                    Q 12 </a>
                </li>
                <li class="">
                    <a href="#tab_summary" data-toggle="tab" aria-expanded="false">
                    Summary </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class='tab-pane active' id='tab_infos'>
                    <div class='row form-group'>
                        <div class='col-lg-3'>
                            <label class='control-label'>First name</label>
                            <input type='text' class='form-control' readonly value='{{$application->first_name}}'>
                        </div>
                        <div class='col-lg-3'>
                            <label class='control-label'>Last name</label>
                            <input type='text' class='form-control' readonly value='{{$application->last_name}}'>
                        </div>
                        <div class='col-lg-3'>
                            <label class='control-label'>Middle name</label>
                            <input type='text' class='form-control' readonly value='{{$application->middle_name}}'>
                        </div>
                        <div class='col-lg-3'>
                            <label class='control-label'>Birthday</label>
                            <input type='text' class='form-control' readonly value='{{$application->birthday}}'>
                        </div>
                    </div>
                    <div class='row form-group'>
                        <div class='col-lg-3'>
                            <label class='control-label'>MIT ID*</label>
                            <input type='text' class='form-control' readonly value='{{$application->mit_id}}'>
                        </div>
                        <div class='col-lg-3'>
                            <label class='control-label'>Recent Qualification*</label>
                            <select class='form-control' name='application[qualification]' disabled>
                                @foreach(\App\Common::$qualifications as $key=>$quali)
                                    <option value='{{ $key }}' <?php if($key == $application->qualification)echo 'selected'?>>{{$quali}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class='col-lg-6'>
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
                    </div>
                    <div class='form-group row'>
                        <div class='col-lg-3'>
                            <label class='control-label'>Email Address</label>
                            <input type='text' class='form-control' readonly value='{{$application->email}}'>
                        </div>
                        <div class='col-lg-3'>
                            <label class='control-label'>Zip/Postal Code</label>
                            <input type='text' class='form-control' readonly value='{{$application->postal_code}}'>
                        </div>
                        <div class='col-lg-3'>
                            <label class='control-label'>Permanent Address*(Address1)</label>
                            <input type='text' class='form-control' readonly value='{{$application->address1}}'>
                        </div>
                        <div class='col-lg-3'>
                            <label class='control-label'>Address2</label>
                            <input type='text' class='form-control' readonly value='{{$application->adress2}}'>
                        </div>
                    </div>
                    <div class='form-group row'>

                        <div class='col-lg-3'>
                            <label class='control-label'>City</label>
                            <input type='text' class='form-control' readonly value='{{$application->city}}'>
                        </div>
                        <div class='col-lg-3'>
                            <label class='control-label'>State/Province</label>
                            <input type='text' class='form-control' readonly value='{{$application->province}}'>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label'>Team Memebers</label>
                        <div style='width:100%;overflow:auto'>
                            <table class='table table-bordered table striped'>
                                <thead>
                                    <th>First Name</th>
                                    <th>Email Id</th>
                                    <th>Other, please specify</th>
                                    <th>Last Qualification</th>
                                </thead>
                                <tbody id='member_tbody'>
                                    <?php echo \App\Common::getMemberTableContent($application['team_members'])?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
                @for($i=1; $i<=12 ; $i++)
                <div class="tab-pane" id="tab_Q{{$i}}">
                    <label class='control-label font-bold'>
                        {!! \App\Common::$questions[$i] !!}
                    </label>
                    <p>
                        {!! \App\Common::$jury_desc[$i] !!}
                    </p>
                    <div class='row'>
                        <div class='col-lg-6'>
                            <label class='control-label font-bold'>
                                Answer
                            </label>
                            @if($i == 1)
                                <p class='font-bold'>S.D.G's Goals : {{ \App\Common::$sdg_goals[$application->sdg_goals] }}</p>
                            @endif
                            @if($i == 8)
                            <iframe width="100%" height="315"
                                src="{{ $application->question($i)->answer }}">
                            </iframe>
                            @elseif($i == 9)
                                @if($application->files())
                                    @foreach($application->files() as $key=>$file)
                                        <br>
                                        <p>File : <a href="/download/{{ $file->file_name }}"><i class='fa fa-download'></i> Download</a></p>
                                    @endforeach
                                @endif
                            @elseif($i == 12)
                                <table class='table table-bordered table-striped'>
                                    <thead>
                                        <th></th>
                                        <th>Yes</th>
                                        <th>No</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Would you be willing to allow Anusha Welfare Trust or other entities in India to carry forward your project work post your completion of the same in India?</td>
                                            <td><?php if($application->check_value($i,0) == '1')echo '<i class="fa fa-check"></i>' ?></td>
                                            <td><?php if($application->check_value($i,0) == '0')echo '<i class="fa fa-check"></i>' ?></td>
                                        </tr>
                                        <tr>
                                            <td>In case you do decide to set-up a venture post completion of your project based on your work during this period, would you be willing to provide Anusha Welfare Trust & partner companies equity investment in your new venture up to 5% at the same terms as yourself? </td>
                                            <td><?php if($application->check_value($i,1) == '1')echo '<i class="fa fa-check"></i>' ?></td>
                                            <td><?php if($application->check_value($i,1) == '0')echo '<i class="fa fa-check"></i>' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Would you want Anusha Welfare Trust or its Trustees to be involved in your venture in any capacity i.e. Board member?</td>
                                            <td><?php if($application->check_value($i,2) == '1')echo '<i class="fa fa-check"></i>' ?></td>
                                            <td><?php if($application->check_value($i,2) == '0')echo '<i class="fa fa-check"></i>' ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            @else
                                <textarea class='form-control answer_field' readonly>{{ $application->question($i)->answer }}</textarea>
                            @endif
                        </div>
                        <div class='col-lg-6' id='question_{{ $i }}'>
                            <label class='control-label font-bold'>
                                FeedBack
                            </label>
                            <textarea class='form-control feedback_field'>{{ $application->question($i)->feedback }}</textarea><br>
                            <div style='display:flex;justify-content:space-between'>
                                <div><label class='font-bold'>Weightage: {{ \App\Weightage::getPercentage($i) }}%</label></div>
                                <div class='hide'>
                                    <label class='font-bold'>Score:&nbsp;</label>
                                    <input type='text' data-number="{{$i}}" id='input_score_{{$i}}'  class='score' value = "{{ $application->question($i)->score }}">
                                </div>
                                @if(Auth::user()->isSuperAdmin())
                                <button class='btn btn-success btn-sm btn-save-score' data-number="{{$i}}"><i class='fa fa-save'></i> Save</button>
                                @endif
                            </div>
                            <br>
                            <div class='scale-content'>
                                <div class='scale'>
                                    <div class='flex justify-content-center position-relative'>
                                        <a class='scale-button <?php if($application->question($i)->score == 0)echo'scale-button-active'?>' data-score='0' data-number="{{$i}}"></a>
                                        <div class='right-line'></div>
                                    </div><br>
                                    <p class='text-center margin-0'>1</p>
                                    <p class='text-center margin-0 desc'>Very Bad</p>
                                </div>
                                <div class='scale'>
                                    <div class='flex justify-content-center position-relative'>
                                        <div class='left-line' ></div>
                                        <a class='scale-button <?php if($application->question($i)->score == 5)echo'scale-button-active'?>' data-score='5' data-number="{{$i}}"></a>
                                        <div class='right-line'></div>
                                    </div><br>
                                    <p class='text-center margin-0'>2</p>
                                    <p class='text-center margin-0 desc'>Bad</p>
                                </div>
                                <div class='scale'>
                                    <div class='flex justify-content-center position-relative'>
                                        <div class='left-line' ></div>
                                        <a class='scale-button <?php if($application->question($i)->score == 10)echo'scale-button-active'?>' data-score='10' data-number="{{$i}}"></a>
                                        <div class='right-line'></div>
                                    </div><br>
                                    <p class='text-center margin-0'>3</p>
                                    <p class='text-center margin-0 desc'>Weak</p>
                                </div>
                                <div class='scale'>
                                    <div class='flex justify-content-center position-relative'>
                                        <div class='left-line' ></div>
                                        <a class='scale-button <?php if($application->question($i)->score == 25)echo'scale-button-active'?>' data-score='25' data-number="{{$i}}"></a>
                                        <div class='right-line'></div>
                                    </div><br>
                                    <p class='text-center margin-0'>4</p>
                                    <p class='text-center margin-0 desc'>Mediocre</p>
                                </div>
                                <div class='scale'>
                                    <div class='flex justify-content-center position-relative'>
                                        <div class='left-line' ></div>
                                        <a class='scale-button <?php if($application->question($i)->score == 50)echo'scale-button-active'?>' data-score='50' data-number="{{$i}}"></a>
                                        <div class='right-line'></div>
                                    </div><br>
                                    <p class='text-center margin-0'>5</p>
                                    <p class='text-center margin-0 desc'>Good</p>
                                </div>
                                <div class='scale'>
                                    <div class='flex justify-content-center position-relative'>
                                        <div class='left-line' ></div>
                                        <a class='scale-button <?php if($application->question($i)->score == 75)echo'scale-button-active'?>' data-score='75' data-number="{{$i}}"></a>
                                        <div class='right-line'></div>
                                    </div><br>
                                    <p class='text-center margin-0'>6</p>
                                    <p class='text-center margin-0 desc'>Very Good</p>
                                </div>
                                <div class='scale'>
                                    <div class='flex justify-content-center position-relative'>
                                        <div class='left-line' ></div>
                                        <a class='scale-button <?php if($application->question($i)->score == 100)echo'scale-button-active'?>' data-score='100' data-number="{{$i}}"></a>
                                    </div><br>
                                    <p class='text-center margin-0'>7</p>
                                    <p class='text-center margin-0 desc'>Excellent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
                <div class='tab-pane' id='tab_summary'>
                    <div class=''>
                        <table class='table table-border table-striped'>
                            <thead>
                                <th width='25%'>Question</th>
                                <th width='25%'>Weightage(%)</th>
                                <th width='25%'>Score (out of 100)</th>
                                <th width='25%'>Weighted Score</th>
                            </thead>
                            <tbody>
                                @for($i = 1 ;$i<=12;$i++)
                                <tr>
                                    <td>Question {{$i}}</td>
                                    <td><input type='text' value='{{ \App\Weightage::getPercentage($i) }}' class='no-border' readonly id = "weight_{{$i}}"></td>
                                    <td><input type='text' class='no-border' readonly id='score_{{$i}}' value = "{{ $application->question($i)->score }}"></td>
                                    <td><input type='text' class='no-border' readonly id='score_{{$i}}_weighted'></td>
                                </tr>
                                @endfor
                                <tr>
                                    <td>Total</td>
                                    <td>{{ \App\Weightage::totalPercentage()}} %</td>
                                    <td></td>
                                    <td id='total_calc_score'></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @if(Auth::user()->isSuperAdmin())
                    <div class='form-group'>
                        <button class='btn btn-warning btn-score-submit'>Submit Score</button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div id="declined_dialog" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Feedback to applicant</h4>
            </div>
            <form method = 'post' action = "{{ url('/application/declined') }}">
            @csrf
            <div class="modal-body">
                <input type='hidden' name='id' value='{{ $application->id }}'>
                <textarea name='feedback' class='form-control' style='height:200px;width:100%'></textarea>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
            </div>

        </div>
    </div>
@endsection
@section("scripts")
    <script>
        $(document).ready(function(){
            var total_percentage = {{ \App\Weightage::totalPercentage()}};
            var calculate_scores = function(){
                var total_score = 0;
                for(var i=1;i<=12;i++){
                    var weighted_score = $("#weight_"+i).val()*$("#score_"+i).val()/total_percentage;
                    $("#score_"+i+"_weighted").val(weighted_score.toFixed(2));
                    total_score += weighted_score;
                }
                $("#total_calc_score").html(total_score.toFixed(2));
            }
            calculate_scores();
            $(".btn-save-score").on("click",function(){
                var number = $(this).data("number");
                var score = $(this).parent().find(".score").val();
                $("#score_"+number).val(score);
                calculate_scores();
            });
            $(".btn-score-submit").on("click",function(){
                window.scrollTo(0, 0);
                Metronic.blockUI({
                    target: '.main-content',
                    overlayColor:'#000',
                    animate: true,
                });
                var success_count = 0;
                for(var i=1;i<=12;i++){
                    var score = $("#question_"+i).find(".score").val();
                    var number = $("#question_"+i).find(".score").data("number");
                    var feedback = $("#question_"+i).find(".feedback_field").val();
                    var application_id = <?php echo $application->id?>;
                    $.ajax({
                        url: "{{URL::to('save_score')}}",
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            application_id : application_id,
                            number : number,
                            score: score,
                            feedback: feedback,
                            _token:'{{ csrf_token() }}'
                        },
                        success:function(data){
                            success_count+=1;
                            if(success_count == 12){
                                $("#total_score").html(data.score);
                                ShowNotice("success","Success","Your score successfully saved.");
                                Metronic.unblockUI('.main-content');
                            }
                        }
                    });
                }
            })

            $(".scale-button").on("click",function(){
                $(this).parent().parent().parent().find(".scale-button").removeClass("scale-button-active");
                $(this).addClass("scale-button-active");
                var score = $(this).data("score");
                var number = $(this).data("number");
                // console.log($("#input_score_"+number));
                $("#input_score_"+number).val(score);
                // alert($("#input_score_"+number).val());
            })
        })
    </script>
@endsection