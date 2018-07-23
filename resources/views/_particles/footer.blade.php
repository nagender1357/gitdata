<div class="footer">
  <div class="container">
    <div class="row">
      <div class="social-icon">
       <h2>Follow Us</h2>
        <ul>
          <li><a href="{{getcong('facebook_url')}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="{{getcong('twitter_url')}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="{{getcong('gplus_url')}}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="{{getcong('linkedin_url')}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>      
      </div>
      <div class="footer-nav-list">
        <ul>
           <li><a href="{{ URL::to('/') }}">Home</a></li>          
           <li><a href="{{ URL::to('about') }}">{{getcong('about_title')}}</a></li>
           <li><a href="{{ URL::to('contact') }}">{{getcong('contact_title')}}</a></li>
           <li><a href="{{ URL::to('termsandconditions') }}">{{getcong('terms_of_title')}}</a></li>
           <li><a href="{{ URL::to('privacypolicy') }}">{{getcong('privacy_policy_title')}}</a></li>            
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="tiny-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">Copyright © {{date('Y')}} Advert Africa. All Rights Reserved</div><div class="col-md-6">Powered By:&nbsp;&nbsp;<a target="_blank" href="http://www.indicsoft.com/">Indicsoft Pvt. Ltd.</div>
    </div>
  </div>
</div>