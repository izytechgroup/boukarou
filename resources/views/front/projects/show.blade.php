@extends('front.templates.projets.default')


@section('head')
    <title>Camermix | Projets | Le Boukarou</title>
    <meta name="description" content="Camermix" />
@endsection



@section('body')
<section class="projet">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="content">
                    <div class="image">
                        <img src="{{ $project->image }}" alt="">
                    </div>

                    <h2>{{ $project->title }}</h2>
                    <div class="theme">{{ $project->tags }}</div>
                    <div class="theme">Etat d'avancement: {{ $project->status }}</div>

                    <div class="clearfix"></div>

                    <div class="paragraph">
                        <h4>Description</h4>
                        {!! $project->description !!}
                    </div>

                    <div class="paragraph">
                        <h4>Developement de l'idée</h4>
                        {!! $project->idea !!}
                    </div>

                    <div class="paragraph">
                        <h4>Dévelopement du projet</h4>
                        {!! $project->project_dev !!}
                    </div>

                </div>
            </div>

            @if ($most_recent)
                <div class="col-sm-3">
                    <div class="other-projects">
                        <a href="/projets/{{ $most_recent->slug }}">
                            <div class="item">
                                <div class="image">
                                    <img src="{{ $most_recent->image }}" alt="">
                                </div>

                                <h2>{{ $most_recent->title }}</h2>
                                <div class="">{{ $most_recent->tags }}</div>
                                <div class="theme">Etat d'avancement: {{ $most_recent->status }}</div>
                            </div>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
