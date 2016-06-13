@extends('layouts.app')

@section('content')
<div class="container register">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal registration" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <!-- First Name -->
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">What is your First Name?</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Last Name -->
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">What is your Last Name?</label>

                        <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Which email address shall we use? <p class="small-txt">Don't worry, we're not going to spam you. We communicate important messages to you via email.</p></label> 

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!-- What is your address? * -->
                         <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Street Address</label>

                        <div class="col-md-6">
                                <input type="text" class="form-control" name="address" value="{{ old('address') }}">

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- City/Town * -->
                         <div class="form-group{{ $errors->has('city_town') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">City/Town</label>

                        <div class="col-md-6">
                                <input type="text" class="form-control" name="city_town" value="{{ old('city_town') }}">

                                @if ($errors->has('city_town'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_town') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Province * -->
                        <div class="form-group{{ $errors->has('province') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Province</label>

                        <div class="col-md-6">
                                <select id="province" name="province" class="form-control">
                                    @foreach (App\Http\Utilities\Province::all() as $province)
                                        <option value="{{ $province }}">{{ $province }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('province'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Postal Code * -->
                         <div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Postal Code</label>

                        <div class="col-md-6">
                                <input type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}">

                                @if ($errors->has('postal_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('postal_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- And what is your phone number, [NAME] * -->
                           <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">And what is your phone number?</label>

                        <div class="col-md-6">
                                <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}">

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- If you use Twitter, what is your twitter handle? -->
                        <div class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">If you use Twitter, what is your twitter handle?</label>

                        <div class="col-md-6">
                                <input type="text" class="form-control" name="twitter" value="{{ old('twitter') }}">

                                @if ($errors->has('twitter'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('twitter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Where did you hear about 100 Men, [NAME]? *  -->

                        <div class="form-group{{ $errors->has('referral') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Where did you hear about 100 men calgary? </label>

                        <div class="col-md-6">
                                <select id="province" name="referral" class="form-control">
                                    @foreach (App\Http\Utilities\Referral::all() as $referral)
                                        <option value="{{ $referral }}">{{ $referral }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('referral'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('referral') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Personal info * -->
                        <hr/>

                        <div class="special form-group{{ $errors->has('info') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Your Personal Information</label>
                            <div class="col-md-6">
                            <p>100 Men Who Give a Damn Calgary collects your personal information (including name, address, email address, and phone number) strictly for the purpose of maintaining our membership lists and communicating with our membership. 100 Men Who Give a Damn Calgary will not sell, give, or otherwise share your personal information without your express consent, unless required by law.</p>

                        <div>
                                <input type="radio" value="1" name="info"><span>Agree</span>
                                <input type="radio" value="0" name="info"><span>I don't Agree</span>
                                @if ($errors->has('info'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('info') }}</strong>
                                    </span>
                                @endif 
                                </div>
                            </div>
                        </div>

                        <!-- Commitment * -->
                         <div class="special form-group{{ $errors->has('commitment') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">100 Men Is About Commitment</label>
                            <div class="col-md-6">
                            <p>100 Men Is About Commitment*
I understand I am making a commitment to 100 Men Who Give a Damn – Calgary to make an annual donation of $400 – ($100 at each of four meetings) – given 100% to a local charity or one of its valuable programs that serves the Calgary or Southern Alberta community.</p>

                        <div>
                                <input type="radio" value="1" name="commitment"><span>Agree</span> 
                                <input type="radio" value="0" name="commitment"><span>I don't Agree</span> 
                                @if ($errors->has('commitment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('commitment') }}</strong>
                                    </span>
                                @endif 
                                </div>
                            </div>
                        </div>
                          <!-- Community * -->
                        <div class="special form-group{{ $errors->has('community') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">100 Men is About Community</label>
                             <div class="col-md-6">
                            <p>100 Men is about community 
I agree to fulfill my donation commitment even if I did not vote for the charity selected by majority vote and that if I cannot attend a meeting I will ensure I will make the donation through other means (online, mail, or provide cheque with to another member)</p>


                        <div>
                                <input type="radio" value="1" name="community"><span>Agree</span>
                                <input type="radio" value="0" name="community"><span>I don't Agree</span>
                                @if ($errors->has('community'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('community') }}</strong>
                                    </span>
                                @endif 
                                </div>
                            </div>
                        </div>
                          <hr/>
                        <!-- New Member? * -->
                        <div class="special newM form-group{{ $errors->has('community') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Is this your first 100 Men Calgary Event?</label>

                        <div class="inputs col-md-6">
                                <input type="radio" value="1" name="new_member"><span>Yes</span>
                                <input type="radio" value="0" name="new_member"><span>No, I'm a returning member.</span>
                                @if ($errors->has('new_member'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new_member') }}</strong>
                                    </span>
                                @endif 
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
