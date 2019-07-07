<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">

        <ul class="nav navbar-top-links navbar-left pull-left">
            <li>
                <a href="#" class="profile-pic">Marketplacer - Condor Sport </a>
            </li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li>
                <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                    <input type="text" placeholder="Search..." class="form-control" onkeyup="Api.Product.filterAllProducts(this.value)">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </li>
            <li>
                <a class="profile-pic" href="#"> <i class="fa fa-user fa-1x"></i> <b class="hidden-xs">Welcome <span id="user-name"></span></b></a>
            </li>
            <li>
                <a class="profile-pic" href="#">|</a>
            </li>
            <li>
                <a class="profile-pic" href="#" onclick="Api.logout()"> <i class="fa fa-sign-out fa-1x"></i> <b class="hidden-xs">Logout</b></a>
            </li>
            <li>
                <a class="profile-pic" href="#">&nbsp;</a>
            </li>
        </ul>
    </div>
</nav>