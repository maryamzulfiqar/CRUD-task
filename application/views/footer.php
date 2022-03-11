 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.site-footer
{
  background-color:#F8F8FF;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
 

}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:15px;
  text-transform:uppercase;
  margin-top:100px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none;
  width:120px;
  
}
.footer-links li
{
  display:block;
}
.footer-links a
{
  color:#737373;
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:80px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}

@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:0px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;

  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #A9A9A9, 0 0 40px #A9A9A9, 0 0 50px #A9A9A9, 0 0 60px #A9A9A9, 0 0 70px #A9A9A9;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px 	#000000, 0 0 40px 	#000000, 0 0 50px 	#000000, 0 0 60px 	#000000, 0 0 70px 	#000000, 0 0 80px 	#000000;
  }
}


// reset
@import '//codepen.io/chrisdothtml/pen/ojLzJK.css'

btn-size = 90px
sites = {
  'facebook': #3B5998
  'twitter': #3CF
  'google': #DC4A38
  'dribbble': #F26798
  'skype': #00AFF0
}

$animate {
  transition: all .35s
  transition-timing-function: cubic-bezier(
    0.310,
    -0.105,
    0.430,
    1.590
  )
}

$btn__inactive {
  
  &:before {
    top: 90%
    left: -110%
  }
  
  .fa {
    transform: scale(.8)
  }
  
  // variants
  for name, color in sites {
    
    &.{name} {
      
      &:before {
        background-color: color
      }
      
      .fa {
        color: color
      }
    }
  }
}

$btn__active {

  &:before {
    top: -10%
    left: -10%
  }

  .fa {
    color: #fff
    transform: scale(1)
  }
}



</style>
  
    <footer  class="site-footer">
      <div class="  footer-inner bg-white">
	  
        <div class="row">
          <div class="col-sm-12 col-md-6">
		  <div class="glow" style="padding-top:160px;">
            <h1 >PARKER Company Ltd.</h1>
            </div>
          </div>

      
          <div   class="col-xs-6 col-md-3">
            <h6 style="color: #A9A9A9; text-shadow: 2px 2px black; font-size:20px;"><b> Vehicle Detail</h6>
            <ul class="footer-links">
              <li style="  text-shadow: 2px 2px white; font-size:17px;  opacity:0.5;"><a href="manage-category.php"><b>Categpry</a></li>
              <li style="  text-shadow: 2px 2px white; font-size:17px;  opacity:0.5;"><a href="manage-incomingvehicle.php"><b>In vehicle</a></li>
              <li style="  text-shadow: 2px 2px white;  font-size:17px; opacity:0.5;"><a href="manage-outgoingvehicle.php">Out Vehicle</a></li>
              <li style="  text-shadow: 2px 2px white; font-size:17px;  opacity:0.5;"><a href="search-vehicle.php">Search</a></li>
         
            </ul>
          </div>
		      <div style=" width:150px;"  class="col-xs-6 col-md-3">
          <h6 style="color: #A9A9A9; text-shadow: 2px 2px black; font-size:20px;"><b>Setting</h6>
            <ul class="footer-links">
              <li style="  text-shadow: 2px 2px white; font-size:17px; opacity:0.5;"><a href="admin-profile.php">Admin Profile</a></li>
              <li style="  text-shadow: 2px 2px white; font-size:17px;  opacity:0.5;"><a href="reset.php">Reset password </a></li>
              <li style="  text-shadow: 2px 2px white;  font-size:17px; opacity:0.5;"><a href="login.php">Log Out</a></li>
              
            </ul>
          </div>

        </div>
		<br>
		<br>


                

     
		
      </div>

</footer>
<center style=" font-size:14px; text-shadow: 2px 2px white; opacity:0.5;">@All right Reserved</center>