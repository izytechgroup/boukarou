@extends('front.templates.blog.default')


@section('head')
    <title>Events | Le Boukarou</title>
    <meta name="description" content="Les events du Boukarou" />
@endsection




@section('body')
    <div class="container">
        <section class="posts-list">
            @if ($first)
                <div class="post-featured">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="left-side">
                                <div class="category">
                                        <i class="flaticon-menu-mobile"></i> {{ $first->category->name }}
                                        <a href="#">
                                    </a>
                                </div>

                                <div class="post-title">
                                    <a href="/events/{{ $first->slug}}">
                                        {{ $first->title }}
                                    </a>
                                </div>

                                <div class="details">
                                    <ul class="list-unstyled">
                                        <li>{{ Helper::fullDate($first->created_at) }}</li>
                                    </ul>
                                </div>
                            </div>

                        </div>


                        <div class="col-sm-8">
                            <div class="post-content">
                                <div class="post-image" style="background-image:url({{ $first->image }})"></div>

                                <div class="text">
                                    <p>
                                        {!! $first->excerpt !!}
                                    </p>
                                </div>

                                <div class="post-footer">
                                    <a href="/events/{{ $first->slug }}">
                                        Lire la suite
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            {{-- End of featured post  --}}

            @if ( sizeof($events) > 0 )
                <div class="posts">
                    @foreach ($events->chunk(2) as $chunks)
                        <div class="row">
                            @foreach ($chunks as $event)
                                <div class="col-sm-6">
                                    <div class="post" style="background-image:url({{ $event->image }})">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="post-details">
                                                    <div class="inside">
                                                        <div class="category">
                                                            <a href="#">
                                                                <i class="flaticon-menu-mobile"></i> {{ $event->category->name}}
                                                            </a>
                                                        </div>

                                                        <h2>
                                                            <a href="/events/{{ $event->slug}}">{{ $event->title }}</a>
                                                        </h2>

                                                        <ul class="list-unstyled">
                                                            <li>{{ Helper::fullDate($event->created_at) }}</li>
                                                        </ul>

                                                        <div class="excerpt">
                                                            {{ $event->excerpt }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="post-footer">
                                            <a href="/events/{{ $event->slug }}">
                                                Lire la suite <i class="flaticon-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    @endforeach

                </div>

            @endif
            {{-- End of posts  --}}

        </section>
    </div>
@endsection
