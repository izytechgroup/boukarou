@extends('front.templates.blog.default')


@section('head')
    <title>Blog | Le Boukarou</title>
    <meta name="description" content="Le blog du Boukarou" />
@endsection




@section('body')
    <div class="container">
        <section class="posts-list">

            <div class="post-featured">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="left-side">
                            <div class="category">
                                <a href="/blog/category/{{$first->category->id}}">
                                    <i class="flaticon-menu-mobile"></i> {{ $first->category->name }}
                                </a>
                            </div>

                            <div class="post-title">
                                <a href="/blog/{{ $first->slug}}">
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
                                <a href="/blog/{{ $first->slug }}">
                                    Lire la suite
                                    <i class="flaticon-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End of featured post  --}}

            <div class="posts">
                @foreach ($posts->chunk(2) as $chunks)
                    <div class="row">
                        @foreach ($chunks as $post)
                            <div class="col-sm-6">
                                <div class="post" style="background-image:url({{ $post->image }})">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="post-details">
                                                <div class="inside">
                                                    <div class="category">
                                                        <a href="/blog/category/{{$post->category->id}}">
                                                            <i class="flaticon-menu-mobile"></i> {{ $post->category->name}}
                                                        </a>
                                                    </div>

                                                    <h2>
                                                        <a href="/blog/{{ $post->slug}}">{{ $post->title }}</a>
                                                    </h2>

                                                    <ul class="list-unstyled">
                                                        <li>{{ Helper::fullDate($post->created_at) }}</li>
                                                    </ul>

                                                    <div class="excerpt">
                                                        {{ $post->excerpt }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-footer">
                                        <a href="/blog/{{ $post->slug }}">
                                            Lire la suite <i class="flaticon-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                @endforeach

            </div>
            {{-- End of posts  --}}

        </section>
    </div>
@endsection
