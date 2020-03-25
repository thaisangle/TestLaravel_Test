<div class="wrapper">
<!-- Sidebar -->
<nav id="sidebar">
    <div class="sidebar-header" style="border:1px;">
        <h3>ADMIN</h3>
    </div>

    <ul class="list-unstyled components">
        <p>--LTS--</p>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{Route('user.home')}}">User</a>
                </li>
                <li>
                    <a href="{{Route('post.home')}}">Post</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
            </ul>
        </li>
      <hr />
        <li>
            <a href="#">About</a>
        </li>
        <hr />
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="{{Route('user.home')}}">User Page</a>
                </li>
                <li>
                    <a href="{{Route('user.home')}}">Post Page</a>
                </li>

            </ul>
        </li>
        <hr />
        <li>
            <a href="#">Portfolio</a>
        </li>
        <hr />
        <li>
            <a href="#">Contact</a>
        </li>
        <hr />
    </ul>
</nav>

</div>
