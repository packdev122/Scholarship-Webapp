@extends('layouts.admin')
@section('styles')
    <!-- {!! HTML::style( 'plugins/bootstrap-summernote/summernote.css') !!} -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
@endsection
@section('main')    
    <h3 class="page-title">
        Email Templates <small></small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Juries</a></a>
            </li>
        </ul>
    </div>
    <div class='main-content'>
        <form method = 'post' action = "{{  url('admin/save_template') }}" id='template_form'>
            @csrf
            <div class='flex space-between align-items-center'>
                <h4>
                    <select class='form-control' name='type' id='email_type'>
                        @foreach(\App\Common::$email_types as $key=>$quali)
                            <option value='{{ $key }}' <?php echo $key == $type?'selected':'' ?> >{{$quali}}</option>
                        @endforeach
                    </select>
                </h4>
                <div>
                    <button class='btn btn-success' type='button' id='btn_submit'><i class='icon-check'></i> Submit</button>
                </div>
            </div>
            <hr>
            <div>
                <h4>Subject</h4>
                <input class=" form-control" id='' name='subject' value="{{ $template->subject }}">
            </div>
            <div>
                <h4>Fixed Content</h4>
                <div id='summernote_1'>{!! $template->fixed_content !!}</div>
            </div>
            <div>
                <h4>Variable Content</h4>
                <div id='summernote_2'>{!! $template->variable_content !!}</div>
            </div>
            <div>
                <h4>Signature</h4>
                <div id='summernote_3'>{!! $template->signature !!}</div>
            </div>
            <input type='hidden' name='fixed_content' id='fixed_content'>
            <input type='hidden' name='variable_content' id='variable_content'>
            <input type='hidden' name='signature' id='signature'>
        </form>
    </div>
@endsection
@section("scripts")
    <!-- {!! HTML::script( 'plugins/bootstrap-summernote/summernote.min.js' ) !!}
     -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script>
        $(document).ready(function(){
            var handleWysihtml5 = function () {
                $('#summernote_1').summernote({height: 100});
                $('#summernote_2').summernote({height: 100});
                $('#summernote_3').summernote({height: 100});
            }
            handleWysihtml5();
            $("#btn_submit").on("click",function(){
                var fixed_content = "";
                fixed_content = $('#summernote_1').summernote('code');
                variable_content = $('#summernote_2').summernote('code');
                signature = $('#summernote_3').summernote('code');
                $("#fixed_content").val(fixed_content);
                $("#variable_content").val(variable_content);
                $("#signature").val(signature);

                $("#template_form").submit();
            })
            $("#email_type").on("change",function(){
                document.location.href = "{{ url('admin/email_templates/') }}"+"/"+$(this).val();
            })
        })
    </script>
@endsection