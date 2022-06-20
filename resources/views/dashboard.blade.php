@extends('layouts.main')

@section('head')

    <style>
        .code{
            background: #1a202c;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
    </style>

@endsection

@section('content')
    <!-- content center -->
    <div class="col m6">
        <ul class="collection" style="border:none;">
            @if(isset($codes))
                @foreach($codes as $code)
                    <li class="collection-item avatar">
                        <img src="{{ asset('images/fotoprofil.jpg') }}" alt="" class="circle">
                        <span class="title"><a href="#"><strong>{{ $code->title ?? ''}}</strong> <small>{{ $code->user->email ?? '' }}</small></a></span><br /><br />

                        <p class="paragraph-rtl">{{ $code->description ?? ''}}</p>
                        <p class="paragraph-rtl code">{{ $code->code ?? ''}}</p>
                        <a class="secondary-content" href="#" data-target="dropdownoption"><i class="material-icons">expand_more</i></a>
                        <br />
                        <div class="row">
                            <div class="col s2"><a href="#"><i class="material-icons">chat_bubble_outline</i></a></div>
                            <div class="col s2"><a href="#"><i class="material-icons">repeat</i></a></div>
                            <div class="col s2"><a href="#"><i class="material-icons">star_border</i></a></div>
                            <div class="col s2"><a href="#"><i class="material-icons">mail_outline</i></a></div>
                        </div>
                    </li>
                @endforeach
            @endif



        </ul>
    </div>
@endsection

@section('footer')

@endsection
