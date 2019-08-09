@extends('layouts.admin')

@section('main')    
    <h3 class="page-title">
        Applications <small></small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Applications</a></a>
            </li>
        </ul>
    </div>
    <div class='main-content'>
        <div style='width:100%;overflow:auto'>
        <table class='table table-striped table-hover'>
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Last Updated</th>
                <th>Total Score</th>
                <th style="">Application Status</th>
                <th style=''>Actions</th>
            </thead>
            <tbody>
                @foreach($applications as $application)
                <tr>
                    <td>{{ $application->first_name.' '.$application->last_name }}</td>
                    <td>{{ $application->email }}</td>
                    <td>{{ $application->updated_at }}</td>
                    <th>{{ $application->score }}</th>
                    <td><?php echo  $application->status_label() ?></td>
                    <td>
                        <a class='' href='/admin/application/{{$application->id}}'><i class='icon-list'></i> View</a>
                        <a class='' href='/admin/selector/{{$application->id}}'><i class='icon-user'></i> Selector</a>
                        <a class='' href='/application/accept/{{$application->id}}'><i class='icon-check'></i> Accept</a>
                        <a class='decline_dialog_open' href="#" data-toggle='modal' data-id = '{{ $application->id }}'><i class='icon-ban'></i> Decline</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        {{ $applications->links() }}
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
                <input type='hidden' name='id' value='0' id='application_id'>
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
            $(".decline_dialog_open").on("click",function(){
                $("#application_id").val($(this).data("id"));
                $("#declined_dialog").modal();
            })
        })
    </script>
@endsection