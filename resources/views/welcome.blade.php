<!DOCTYPE html>
<html>
<head>
  <title>Facebook - login or signup</title>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}">
</head>
<body>
  <nav class="navbar">
    <img class="logo" src="{{asset('assets/fb.png')}}">
    <form class="login_form">
      <div class="email">
        <div class="font">Email or Phone</div>
        <input type="text" name="">
      </div>
      <div class="password">
        <div class="font">Password</div>
        <input type="password" name="">
      </div>
      <button class="login_btn">Login</button>
    </form>
  </nav>
  <section>
    <div class="logo_body">
  <img class="logobdy" src="{{asset('assets/fbbdy.png')}}">
  <p class="like_font font1">Thanks for stopping by!</p>
  <p class="like_font">We hope to see you again soon.</p>
</div>

  <div class="signup_body">
    <p class="acc_crt">Create an account</p>
    <p class="free_hint">It's free and always will be.</p>
    <x-jet-authentication-card>
        <x-slot name="logo">

        </x-slot>

        <x-jet-validation-errors/>

        <form  class="signup_form" method="POST" action="{{ route('register') }}">
            @csrf
            <div>
            <input  class="firstname" type="text" name="name" placeholder="First name" required/>
            <input class="lastname" type="text" name="lastname" placeholder="Last name" required/>
            <input class="email" type="text" name="email" placeholder="Mobile number or Email" required />
            <input class="password" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
            <input class="password2" type="password" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password" />
            </div>
            <p class="birthday">Birthday</p>
            <div class="birth_date">
             <select class="month" name="month">
               <option>Month</option><option>Jan</option><option>Feb</option><option>Mar</option>
               <option>Apr</option><option>May</option><option>Jun</option><option>Jul</option>
               <option>Aug</option><option>Sep</option><option>Oct</option><option>Nov</option>
               <option>Dec</option>
             </select>
             <select class="day" name="day">
                <option>Day</option><option>1</option><option>2</option><option>3</option>
                <option>4</option><option>5</option><option>6</option><option>7</option>
                <option>8</option><option>9</option><option>10</option><option>11</option>
                <option>12</option><option>13</option><option>14</option><option>15</option>
                <option>16</option><option>17</option><option>18</option><option>19</option>
                <option>20</option><option>21</option><option>22</option><option>23</option>
                <option>24</option><option>25</option><option>26</option><option>27</option>
                <option>28</option><option>29</option><option>30</option>
              </select>

              <select class="year" name="year">
                <option>Year</option><option>1990</option><option>1992</option><option>1974</option>
                <option>1976</option><option>1978</option><option>1980</option><option>1982</option>
                <option>1984</option><option>1986</option><option>1988</option><option>1990</option>
                <option>1992</option><option>1995</option><option>1997</option><option>2000</option>
                <option>2002</option><option>2003</option><option>2004</option><option>2005</option>
                <option>2006</option><option>2007</option><option>2008</option>
              </select>
              <p class="brth_hint"><a href="#">Why do i need to provide my date of birth?</a></p>
             </div>

             <input type="radio" name="gender" value="male">
             <input type="radio" name="gender" value="female">

             <p class="font">Male</p>
             <p class="font font2">Female</p>
             <p class="agreement">By clicking Sign Up, you agree to our <a href="#">Terms, Data Policy and Cookies Policy.</a> You may receive SMS Notifications from us and can opt out any time.</p>








            {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif --}}

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="signup">
                    {{ __('Sign Up') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>


  </div>


  </section>



</body>
</html>



    {{-- <form class="signup_form">
        <div>
          <input class="firstname" type="text" name="" placeholder="First name">
          <input class="lastname" type="text" name="" placeholder="Last name">
          <input class="email" type="text" name="" placeholder="Mobile number or Email">
          <input class="password" type="password" name="" placeholder="Password">
          <input class="password2" type="password" name="" placeholder="Confirm password">
        </div>
        <p class="birthday">Birthday</p>
        <div class="birth_date">
         <select class="month">
           <option>Month</option><option>Jan</option><option>Feb</option><option>Mar</option>
           <option>Apr</option><option>May</option><option>Jun</option><option>Jul</option>
           <option>Aug</option><option>Sep</option><option>Oct</option><option>Nov</option>
           <option>Dec</option>
         </select>

         <select class="day">
           <option>Day</option><option>1</option><option>2</option><option>3</option>
           <option>4</option><option>5</option><option>6</option><option>7</option>
           <option>8</option><option>9</option><option>10</option><option>11</option>
           <option>12</option><option>13</option><option>14</option><option>15</option>
           <option>16</option><option>17</option><option>18</option><option>19</option>
           <option>20</option><option>21</option><option>22</option><option>23</option>
           <option>24</option><option>25</option><option>26</option><option>27</option>
           <option>28</option><option>29</option><option>30</option>
         </select>

         <select class="year">
           <option>Year</option><option>1970</option><option>1972</option><option>1974</option>
           <option>1976</option><option>1978</option><option>1980</option><option>1982</option>
           <option>1984</option><option>1986</option><option>1988</option><option>1990</option>
           <option>1992</option><option>1995</option><option>1997</option><option>2000</option>
           <option>2002</option><option>2003</option><option>2004</option><option>2005</option>
           <option>2006</option><option>2007</option><option>2008</option>
         </select>
         <p class="brth_hint"><a href="#">Why do i need to provide my date of birth?</a></p>
        </div>

        <input type="radio" name="gender" value="male">
        <input type="radio" name="gender" value="female">

        <p class="font">Male</p>
        <p class="font font2">Female</p>
        <p class="agreement">By clicking Sign Up, you agree to our <a href="#">Terms, Data Policy and Cookies Policy.</a> You may receive SMS Notifications from us and can opt out any time.</p>

        <button class="signup">Sign Up</button>

      </form>
 --}}
