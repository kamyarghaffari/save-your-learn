<!-- content left -->
<div class="col m3">
    <!-- profil card -->
    <div class="card">
        <div class="card-image">
            <img src="{{asset('images/headerprofil.jpg')}}">
        </div>
        <div class="card-content">
                  <span class="card-title">
                    <img src="{{ asset('images/fotoprofil.jpg') }}" alt="" class="profilecircle">
                    <div style="margin-top: -20px;"><a href="profile.html"><b>{{ auth()->user()->name }}</b></a><br /><small>{{ auth()->user()->email }}</small></div>
                  </span>
            <div class="row">
                <div class="col s4"><small>Tweets</small><br /><b>2,185</b></div>
                <div class="col s4"><small>Following</small><br /><b>313</b></div>
                <div class="col s4"><small>Followers</small><br /><b>198</b></div>
            </div>
        </div>
    </div>

    <!-- trends card -->
    <div class="card">
        <div class="card-content">
            <span class="card-title">Trends for you</span>
            <ul class="trends">
                <li><a href="#">#Ramadhan</a></li>
                <li><a href="#">#BanggaIndonesia</a></li>
                <li><a href="#">#HijabLook2018Final</a></li>
            </ul>
        </div>
    </div>

</div>
