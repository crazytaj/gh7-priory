<!DOCTYPE html>
<html>
<head>
<style>
.sidenav {
    height: 75%; /* Full-height: remove this if you want "auto" height */
    width: 0; /* Set the width of the sidebar */
    position: fixed; /* Fixed Sidebar (stay in place on scroll) */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    right: 0;
    background-color: #343a40; /* Dark gray */
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 20px;
    text-align: right;
    margin-top: 100px;
    transition: 0.5s;
}
.override {
    color: #e0e1e2 !important;
}
/* The navigation menu links */
.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #919396;
    display: block;
    margin-bottom: 5px;
    margin-right: 5px;
    transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-right: 100px;
}

.openbtn {
    position: fixed;
    font-size: 30px;
    cursor: pointer;
    right: 0;
    margin-right: 30px;
    
}

/* Style page content */
.main {
    margin-right: auto; /* Same as the width of the sidebar */
    padding: 0px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-width: 700px) {
    .sidenav {padding-top: 15px;
                height: 70%}
    .sidenav a {font-size: 18px;}
}
@media screen and (max-width: 500px) {
    .sidenav {padding-top: 10px;
                height: 65%}
    .sidenav a {font-size: 13px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav rounded-left">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/" class="override">Home</a>
  <a href="/about">About</a>
  <a href="/services">Information</a>
  <a href="/posts">Form</a>
</div>

<!-- Open Button -->

<span class="openbtn" onclick="openNav()">&#9776; Expand</span> 


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "175px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>