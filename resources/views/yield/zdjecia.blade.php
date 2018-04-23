@extends('layouts.zdjecia')

@section('content')
<p><br/>
            Kilka zdjęć z terenu:<br/><br/>
            <a href="image/3.jpg" data-lightbox="galeria" data-title="zdj1"><img class="zdj" src="image/3.jpg" alt="Brak" /></a>
            <a href="image/4.jpg" data-lightbox="galeria" data-title="zdj2"><img class="zdj" src="image/4.jpg" alt="Brak" /></a>
            <a href="image/6.jpg" data-lightbox="galeria" data-title="zdj3"><img class="zdj" src="image/6.jpg" alt="Brak" /></a>
            <a href="image/7.jpg" data-lightbox="galeria" data-title="zdj4"><img class="zdj" src="image/7.jpg" alt="Brak" /></a>
            <a href="image/8.jpg" data-lightbox="galeria" data-title="zdj5"><img class="zdj" src="image/8.jpg" alt="Brak" /></a>
            <a href="image/10.jpg" data-lightbox="galeria" data-title="zdj6"><img class="zdj" src="image/10.jpg" alt="Brak" /></a>
            <a href="image/12.jpg" data-lightbox="galeria" data-title="zdj7"><img class="zdj" src="image/12.jpg" alt="Brak" /></a>
        </p>
        <br/>
        
    
    <div class="slideshow-container">
        <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="image/8.jpg" style="width:100%" alt="8">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="image/6.jpg" style="width:100%" alt="6">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="image/7.jpg" style="width:100%" alt="7">
        <div class="text"></div>
    </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    </div> 
        <br/> 
        
 @endsection