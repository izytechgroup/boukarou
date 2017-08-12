@extends('front.templates.projets.default')


@section('head')
    <title>Projets | Le Boukarou</title>
    <meta name="description" content="Les projets du Boukarou" />
@endsection



@section('body')
<section class="projets">
    <div class="container">
        <h2>Projets / Startups</h2>

        @foreach ($projects->chunk(3) as $chunks)
            <div class="row">
                @foreach ($chunks as $project)
                    <div class="col-sm-4">
                        <a href="/projets/{{ $project->slug}}">
                            <div class="projet">
                                <div class="image">
                                    <img src="{{ $project->image }}" alt="">
                                </div>

                                <div class="title">{{ $project->title }}</div>
                                <div class="theme">{{ $project->tags }}</div>

                                <div class="extract">
                                    {!! implode(' ', array_slice(explode(' ', $project->description), 0, 25)) !!}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endforeach

    </div>
</section>
@endsection
