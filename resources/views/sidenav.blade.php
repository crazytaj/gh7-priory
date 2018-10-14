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
    font-size: 22px;
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
    right: 22px;
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

.logo {
    left: 0;
    position: fixed;
    cursor: pointer;
    margin-left: 25px;
}

/* On smaller screens, where height is less than ___px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-width: 700px) {
    .sidenav {padding-top: 15px;
                height: 70%;
                
                }
    .sidenav a {font-size: 18px;}

    .openbtn {font-size: 25px;}
    }
@media screen and (max-width: 500px) {
    .sidenav {padding-top: 10px;
                height: 65%;
                
                    }
    .sidenav a {font-size: 13px;}

    .openbtn {font-size: 17px;}
}
</style>

