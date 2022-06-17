@extends('layouts.app')

@section('content')
<div class="first_layout">
    <div class="banner">
        <div class="banner_image">
            
            <img src="{{ asset('images/banner.png') }}" alt="">
        </div>
        <div class="banner_content">
            <p class="banner_content_title"> Learn Anytime, Anywhere <span>at HapoLearn<img src="{{ asset('images/banner1.png') }}" alt=""> !</span> 
                </p>
                
                <p class="banner_content_text">
                    Interactive lessons, "on-the-go" practice, peer support.
                </p>
                <p> <a href="#" class="link_hapo">Start learning Now!</a></p>
    
                
        </div>
    </div>
</div>


