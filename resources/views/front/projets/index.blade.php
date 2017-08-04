@extends('front.templates.projets.default')


@section('head')
    <title>Projets | Le Boukarou</title>
    <meta name="description" content="Les projets du Boukarou" />
@endsection



@section('body')
<section class="projets">
    <div class="container">
        <h2>Projets / Startups</h2>

        <div class="row">
            <div class="col-sm-4">
                <a href="/projets/camermix">
                    <div class="projet">
                        <div class="image">
                            <img src="http://www.izypayment.com/assets/img/merchants/camermix.png" alt="">
                        </div>

                        <div class="title">Camermix</div>
                        <div class="theme">#Startup #Musique #Culture</div>

                        <div class="extract">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
