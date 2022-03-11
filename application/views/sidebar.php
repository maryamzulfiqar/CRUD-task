 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
$turbo-yellow: #ffcc19;
$turbo-yellow-10: lighten($turbo-yellow, 40%);
$turbo-yellow-20: lighten($turbo-yellow, 30%);
$turbo-yellow-30: lighten($turbo-yellow, 20%);
$turbo-yellow-40: lighten($turbo-yellow, 10%);
$turbo-yellow-50: lighten($turbo-yellow, 0%);
$turbo-yellow-60: darken($turbo-yellow, 10%);
$turbo-yellow-70: darken($turbo-yellow, 20%);
$turbo-yellow-80: darken($turbo-yellow, 30%);
$turbo-yellow-90: darken($turbo-yellow, 40%);

.bg-turbo-yellow {
  background-color: $turbo-yellow;
}

.bg-turbo-yellow-10 {
  background-color: $turbo-yellow-10;
}
.bg-turbo-yellow-20 {
  background-color: $turbo-yellow-20;
}
.bg-turbo-yellow-30 {
  background-color: $turbo-yellow-30;
}
.bg-turbo-yellow-40 {
  background-color: $turbo-yellow-40;
}
.bg-turbo-yellow-50 {
  background-color: $turbo-yellow-50;
}
.bg-turbo-yellow-60 {
  background-color: $turbo-yellow-60;
}
.bg-turbo-yellow-70 {
  background-color: $turbo-yellow-70;
}
.bg-turbo-yellow-80 {
  background-color: $turbo-yellow-80;
}
.bg-turbo-yellow-90 {
  background-color: $turbo-yellow-90;
}
    
    
   @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
   
   body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 2.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
	  text-shadow: 2px 2px #444444;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}



$lila : $turbo-yellow /*#7386D5*/;
$lila-60 : $turbo-yellow-60 /*#6d7fcc*/;
$lila-line : $turbo-yellow-70 /*#47748b*/;

$text-sidebar : #6b6b6b /*#fff*/;
$text-sidebar-hover : #6b6b6b /*#fff*/;

.text-sidebar {
  color: $text-sidebar;
}

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
	text-shadow: 2px 2px #DCDCDC;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: $lila;
    color: $text-sidebar;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background:$lila-60 /*#6d7fcc*/;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid $lila-line;
}

#sidebar ul p {
    color: $text-sidebar;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: $lila;
    background: $text-sidebar-hover;
}

#sidebar ul li.active>a, a[aria-expanded="true"] {
    color: $text-sidebar;
    background: $lila-60;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: $lila-60;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: $text-sidebar;
    color: $lila;
}

a.article,
a.article:hover {
    background: $lila-60 !important;
    color: $text-sidebar !important;
}


</style>
<!DOCTYPE html>
<html>

<body>
    <div  class="wrapper" style="width:30px; float:left;">
     
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3></h3>
            </div>
            <ul class="list-unstyled components">
             <a  href="dashb.php">   <p >Dashboard</p></a>
                	
				<li class="active">
				<div>
			
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Vheicle Managment</a>
					
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="add-category.php">Add Vehcile Category</a>
                        </li>
                        <li>
                            <a href="manage-category.php">Manage vehicle category</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="add-vehicle.php">Add Vehicle</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Vehicles</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="manage-incomingvehicle.php">Manage Incoming Vehicle</a>
                        </li>
                        <li>
                            <a href="manage-outgoingvehicle.php">Manage Outgoing Vehicle</a>
                        </li>
                     
                    </ul>
                </li>
                <li>
                    <a href="bwdates-report-ds.php">Check Reports of Vehicle</a>
                </li>
                <li>
                    <a href="search-vehicle.php">Search Vehicle</a>
                </li>
            </ul>        
        </nav>
       
    </div>

</body>

</html>