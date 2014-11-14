<div class="container">
    <nav id="doc-navigation" style="position:relative"> 
        
        <!--side nav-->
        
        <div class="navbar-default sidebar" role="navigation"> <a href="#" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-doc"> <span>Navigate <span class="caret"></span> </span> </a>
            <div class="sidebar-nav navbar-collapse" id="nav-doc">
                <ul class="nav" id="side-menu">
                    <li> <a href="#" <?php if ($page == 'person-docoverview') { echo 'class="active"'; } ?>><span class="icon-file-alt"></span> Doc Overview</a> </li>
                    <li> <a href="#" <?php if ($page == 'person-personoverview') { echo 'class="active"'; } ?>><span class="icon-user"></span>Person Overview</a> </li>
                    <li> <a href="#" <?php if ($page == 'person-affiliations') { echo 'class="active"'; } ?>><span class="icon-puzzle"></span>Affiliations</a> </li>
                    <li> <a href="#" <?php if ($page == 'person-contactinfo') { echo 'class="active"'; } ?>><span class="icon-list-alt"></span>Contact Info &amp; Privacy</a> </li>
                    <li> <a href="#" <?php if ($page == 'person-memberships') { echo 'class="active"'; } ?>><span class="icon-group"></span>Memberships</a> </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
