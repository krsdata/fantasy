 

<div class="form-body col-md-6">
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button> Please fill the required field! 
    </div> 
 
    <div class="form-group {{ $errors->first('deposit_amount', ' has-error') }}">
            <label class="control-label col-md-4">Deposit Amount <span class="required"> * </span></label>
            <div class="col-md-7"> 
                {!! Form::text('deposit_amount',null, ['class' => 'form-control','data-required'=>1])  !!}
                <span class="help-block">{{ $errors->first('deposit_amount', ':message') }}</span>
            </div>
    </div>

    <div class="form-group {{ $errors->first('real_cash', ' has-error') }}">
            <label class="control-label col-md-4">Real Cash <span class="required"> * </span></label>
            <div class="col-md-7"> 
                {!! Form::text('real_cash',null, ['class' => 'form-control','data-required'=>1])  !!}
                <span class="help-block">{{ $errors->first('real_cash', ':message') }}</span>
            </div>
    </div>

    <div class="form-group {{ $errors->first('bonus', ' has-error') }}">
            <label class="control-label col-md-4">Bonus <span class="required"> * </span></label>
            <div class="col-md-7"> 
                {!! Form::text('bonus',null, ['class' => 'form-control','data-required'=>1])  !!}
                <span class="help-block">{{ $errors->first('bonus', ':message') }}</span>
            </div>
    </div>

    <div class="form-group {{ $errors->first('extra_cash', ' has-error') }}">
            <label class="control-label col-md-4">Extra Cash <span class="required"> * </span></label>
            <div class="col-md-7"> 
                {!! Form::text('extra_cash',null, ['class' => 'form-control','data-required'=>1])  !!}
                <span class="help-block">{{ $errors->first('extra_cash', ':message') }}</span>
            </div>
    </div>  
       


        <div class="form-group {{ $errors->first('offer_start_date', ' has-error') }}  @if(session('field_errors')) {{ 'has-group' }} @endif">
            <label class="col-md-4 control-label">Start Date 
                <span class="required"> * </span>
            </label>
            <div class="col-md-7"> 

                  {!! Form::text('offer_start_date',null, ['id'=>'startdate','class' => 'form-control end_date','data-required'=>1,"size"=>"16","data-date-format"=>"dd-mm-yyyy","data-date-start-date"=>"+0d" ])  !!} 
                
                <span class="help-block">{{ $errors->first('offer_start_date', ':message') }}</span>
            </div> 
        </div>

         <div class="form-group {{ $errors->first('offer_end_date', ' has-error') }}  @if(session('field_errors')) {{ 'has-group' }} @endif">
            <label class="col-md-4 control-label">End Date 
                <span class="required"> * </span>
            </label>
            <div class="col-md-7"> 
                {!! Form::text('offer_end_date',null, ['id'=>'enddate','class' => 'form-control end_date','data-required'=>1,"size"=>"16","data-date-format"=>"dd-mm-yyyy","data-date-start-date"=>"+0d" ])  !!} 


                
                <span class="help-block">{{ $errors->first('offer_end_date', ':message') }}</span>
            </div> 
        </div>

        <div class="form-group {{ $errors->first('validity', ' has-error') }}">
            <label class="control-label col-md-4">Validity in days. <span class="required"> * </span></label>
            <div class="col-md-7"> 
                {!! Form::text('validity',1, ['class' => 'form-control','onkeypress'=>'return isNumberKey(event)'])  !!} 
                 
                <span class="help-block">{{ $errors->first('validity', ':message') }}</span>
            </div>
        </div>

        <div class="form-group {{ $errors->first('coupon_code', ' has-error') }}">
            <label class="control-label col-md-4">Coupan Code. <span class="required"> * </span></label>
            <div class="col-md-7"> 
                {!! Form::text('coupon_code',null, ['class' => 'form-control'])  !!} 
                 
                <span class="help-block">{{ $errors->first('coupon_code', ':message') }}</span>
            </div>
        </div>


</div>
<div class="form-body col-md-6">


    <div class="form-group {{ $errors->first('pass_type', ' has-error') }}  @if(session('field_errors')) {{ 'has-group' }} @endif">
            <label class="col-md-4 control-label">Pass Type
                <span class="required"> * </span>
            </label>
            <div class="col-md-7"> 

                {{ Form::select('pass_type' , ['0'=>'Select Type','1'=>'MEGA',2=>'Mini GL'], $depositOffer->pass_type,['class' => 'form-control']) }}
                <span class="help-block">{{ $errors->first('pass_type', ':message') }}</span>
            </div> 
        </div>


     <div class="form-group {{ $errors->first('status', ' has-error') }}  @if(session('field_errors')) {{ 'has-group' }} @endif">
            <label class="col-md-4 control-label"> Status
                <span class="required"> * </span>
            </label>
            <div class="col-md-7"> 

                {{ Form::select('status', [0=>'Select Status','1'=>'Active',0=>'Inactive',3=>'Stop'], $depositOffer->status,['class' => 'form-control']) }}
                <span class="help-block">{{ $errors->first('status', ':message') }}</span>
            </div> 
        </div>

        <div class="form-group {{ $errors->first('passes', ' has-error') }}">
            <label class="control-label col-md-4">{{ucfirst('passes')}}<span class="required"> </span></label>
            <div class="col-md-7"> 
                {!! Form::text('passes',null, ['class' => 'form-control','data-required'=>1])  !!} 
                
                <span class="help-block">{{ $errors->first('passes', ':message') }}</span>
            </div>
        </div>

        <div class="form-group {{ $errors->first('total_passes', ' has-error') }}">
            <label class="control-label col-md-4">{{ucfirst('total passes')}}<span class="required"> </span></label>
            <div class="col-md-7"> 
                {!! Form::text('total_passes',null, ['class' => 'form-control','data-required'=>1])  !!} 
                
                <span class="help-block">{{ $errors->first('total_passes', ':message') }}</span>
            </div>
        </div>


        <div class="form-group {{ $errors->first('matchid', ' has-error') }}">
            <label class="control-label col-md-4">{{ucfirst('match id')}}<span class="required"> </span></label>
            <div class="col-md-7"> 
                {!! Form::text('match_id',null, ['class' => 'form-control','data-required'=>1])  !!} 
                
                <span class="help-block">{{ $errors->first('match_id', ':message') }}</span>
            </div>
        </div> 

        <div class="form-group {{ $errors->first('contest_entry', ' has-error') }}">
            <label class="control-label col-md-4">{{ucfirst('contest_entry')}}<span class="required"> </span></label>
            <div class="col-md-7"> 
                {!! Form::text('contest_entry',null, ['class' => 'form-control','data-required'=>1])  !!} 
                <span class="help-block">{{ $errors->first('contest_entry', ':message') }}</span>
            </div>
        </div> 

        <div class="form-group {{ $errors->first('contest_entry_id', ' has-error') }}">
            <label class="control-label col-md-4">{{ucfirst('contest_entry_id')}}<span class="required"> </span></label>
            <div class="col-md-7"> 
                {!! Form::text('contest_entry_id',null, ['class' => 'form-control','data-required'=>1])  !!} 
                <span class="help-block">{{ $errors->first('contest_entry_id', ':message') }}</span>
            </div>
        </div> 


    
    
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
          {!! Form::submit(' Save ', ['class'=>'btn  btn-primary text-white','id'=>'saveBtn']) !!}


           <a href="{{route('depositOffer')}}">
{!! Form::button('Back', ['class'=>'btn btn-warning text-white']) !!} </a>
        </div>
    </div>
</div>




<div class="form-body">

  <script type="text/javascript">
       <!--
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       //-->
    </script>



</div> 

