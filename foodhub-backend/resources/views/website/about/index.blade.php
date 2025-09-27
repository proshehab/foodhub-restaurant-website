@extends('website.layouts.app')
@section('content')
    <!--
                                                                                                                                                    - #ABOUT SECTION
                                                                                                                                                  -->

    <section class="about" id="about">

        <div class="about-left">

            <div class="img-box">
                <img src="{{ asset('website/assets/images/about-image.jpg') }}" alt="about image" class="about-img"
                    width="250">
            </div>

            <div class="abs-content-box">
                <div class="dotted-border">
                    <p class="number-lg">17</p>
                    <p class="text-md">Years <br> Experiense</p>
                </div>
            </div>

            <img src="{{ asset('website/assets/images/circle.svg') }}" alt="circle shape" class="shape shape-6"
                width="20">
            <img src="{{ asset('website/assets/images/circle.svg') }}" alt="circle shape" class="shape shape-7"
                width="30">
            <img src="{{ asset('website/assets/images/ring.svg') }}" alt="ring shape" class="shape shape-8" width="35">
            <img src="{{ asset('website/assets/images/ring.svg') }}" alt="ring shape" class="shape shape-9" width="80">

        </div>

        <div class="about-right">

            <h2 class="section-title">We are doing more than
                you expect</h2>

            <p class="section-text">
                Faudantium magnam error temporibus ipsam aliquid neque quibusdam dolorum, quia ea numquam
                assumenda mollitia
                dolorem
                impedit. Voluptate at quis exercitationem officia temporibus adipisci quae totam enim dolorum,
                assumenda.
                Sapiente
                soluta nostrum reprehenderit a velit obcaecati facilis vitae magnam tenetur neque vel itaque
                inventore eaque
                explicabo
                commodi maxime! Aliquam quasi, voluptates odio.
            </p>

            <p class="section-text">
                Consectetur adipisicing elit. Cupiditate nesciunt amet facilis numquam, nam adipisci qui
                voluptate voluptas
                enim
                obcaecati veritatis animi nulla, mollitia commodi quaerat ex, autem ea laborum.
            </p>

            <img src="./assets/images/signature.png" alt="signature" class="signature" width="150">

        </div>

    </section>





    <!--
@endsection
