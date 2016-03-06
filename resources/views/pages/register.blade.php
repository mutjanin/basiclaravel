@extends('layouts.default')

@section('title_page')
ลงทะเบียน @parent
@stop

@section('content')
<div class="container rgisterbox">
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <!-- 
    <ul>
       @foreach( $errors->all() as $e )
                <li>{{$e}}</li>

    
   @endforeach  
    </ul>
    -->

        <form role="form" method="post" action ="{{URL::to('register')}}"> <!-- ตัวแปรที่เราตั้งใน routes -->
            <h2>Please Sign Up <small>It's free and always will be.</small></h2>
            <!-- คำสั่ง with ใช้ Session ในการรับ  -->
            {!!Session::get('status')!!}
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="first_name" id="first_name" value="{{Input::old('first_name')}}" class="form-control input-lg" placeholder="ชื่อ" tabindex="1">
                        {!!$errors->first('first_name','<span class=" alert-danger">:message</span>')!!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="last_name" id="last_name" value="{{Input::old('last_name')}}" class="form-control input-lg" placeholder="นามสกุล" tabindex="2">
                    {!!$errors->first('last_name','<span class=" alert-danger">:message</span>')!!}


                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" value="{{Input::old('email')}}" class="form-control input-lg" placeholder="Email" tabindex="4">
            {!!$errors->first('email','<span class=" alert-danger">:message</span>')!!}

            </div>
            <div class="form-group">
                <input type="text" name="tel" id="tel" value="{{Input::old('tel')}}" class="form-control input-lg" placeholder="เบอร์โทรศัพท์" tabindex="3">
            {!!$errors->first('tel','<span class=" alert-danger">:message</span>')!!}

            </div>
            
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password" value="{{Input::old('password')}}" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                        {!!$errors->first('password','<span class=" alert-danger">:message</span>')!!}

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password_confirmation" value="{{Input::old('password_confirmation')}}" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                        {!!$errors->first('password_confirmation','<span class=" alert-danger">:message</span>')!!}

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3">
                    <span class="button-checkbox">
                        <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
                    </span>
                </div>
                <div class="col-xs-8 col-sm-9 col-md-9">
                     By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
                </div>
            </div>

<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-md-6"><input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                <div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Sign In</a></div>
            </div>
        </form>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

    @stop
