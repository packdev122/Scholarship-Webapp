@extends('front.template1')

@section('main')
    <div class='container pt-100 pb-100'>
        <div class="row">
            <div class="col-lg-4">
                <h1>Contact</h1><br>
                <p>
                    Here is a description of how to contact us. Ut dui quam,dignissim sed nisl sed,viverra tempor ipsum.Nunc sollicitudin ipsum at purus tincidunt eleifend.Duis ut neque ullamcorper elit-sagittis facilisis vel quis libero
                </p><br>
                <p class='margin-0'>
                    Name of Contact
                </p>
                <p class='margin-0'>
                    Department
                </p>
                <p class='margin-0'>
                    <a class='text-blue'>name.contact@example.com</a>
                </p><br>
                <p class='margin-0'>
                    Name of Contact
                </p>
                <p class='margin-0'>
                    Department
                </p>
                <p class='margin-0'>
                    <a class='text-blue'>name.contact@example.com</a>
                </p><br>
                <p class='margin-0'>
                    Name of Contact
                </p>
                <p class='margin-0'>
                    Department
                </p>
                <p class='margin-0'>
                    <a class='text-blue'>name.contact@example.com</a>
                </p>
            </div>
            <div class="col-lg-8">
                <div class='form-group row'>
                    <div class='col-lg-6'>
                        <label class='control-label'>First Name *</label>
                        <input class='form-control' type='text'>
                    </div>
                    <div class='col-lg-6'>
                        <label class='control-label'>Last Name *</label>
                        <input class='form-control' type='text'>
                    </div>
                </div>
                <div class='form-group row'>
                    <div class='col-lg-12'>
                        <label class='control-label'>Email *</label>
                        <input class='form-control' type='email'>
                    </div>
                </div>
                <div class='form-group row'>
                    <div class='col-lg-12'>
                        <label class='control-label'>Subject *</label>
                        <input class='form-control' type='email'>
                    </div>
                </div>
                <div class='form-group row'>
                    <div class='col-lg-12'>
                        <label class='control-label'>Message *</label>
                        <textarea class='form-control' type='email' style='height:200px'></textarea>
                    </div>
                </div>
                <div class='form-group'>
                    <a href="#" class="btn btn-black text-uppercase">Submit</a>
                </div>
                
            </div>
        </div>
    </div>
@stop