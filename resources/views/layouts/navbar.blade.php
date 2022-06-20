<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center"><i class="material-icons">art_track</i></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="{{ route('dashboard') }}" class="active"><i class="material-icons left">home</i>Home</a></li>
                <li><a href="notifications.html"><i class="material-icons left">notifications</i>Notifications</a></li>
                <li><a href="messages.html"><i class="material-icons left">mail</i>Messages</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a class="dropdown-trigger" href="#" data-target="dropdown1"><i class="material-icons">person_pin</i></a></li>
                <li><a href="{{ route('codeKnowledge.create') }}" class="modal-trigger"><i class="material-icons">add_to_photos</i></a></li>
            </ul>
        </div>
    </nav>
</div>
