@extends('layouts.main')

@section('head')

@endsection

@section('content')
    <!-- content center -->
    <div class="col m6">
        <ul class="collection" style="border:none;">

            <li class="collection-item avatar" onclick="location.href='detail-tweet.html';">
                <img src="images/fotoprofil.jpg" alt="" class="circle">
                <span class="title"><a href="profile-other.html"><strong>Adobe XD</strong> <small>@AdobeXd . Jun 6</small></a></span><br /><br />
                <p class="paragraph-rtl">Remember to download @creativemints' Art Deco Icons Set to get started designing a splash screen, and share your XD prototype with us by midnight PT on June 10th: https://adobe.ly/xdartdecobehance … </p>
                <a class="secondary-content" href="#" data-target="dropdownoption"><i class="material-icons">expand_more</i></a>
                <br />
                <div class="row">
                    <div class="col s2"><a href="#"><i class="material-icons">chat_bubble_outline</i></a></div>
                    <div class="col s2"><a href="#"><i class="material-icons">repeat</i></a></div>
                    <div class="col s2"><a href="#"><i class="material-icons">star_border</i></a></div>
                    <div class="col s2"><a href="#"><i class="material-icons">mail_outline</i></a></div>
                </div>
            </li>

        </ul>
    </div>
@endsection

@section('footer')

@endsection
