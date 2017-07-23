@extends('front.templates.blog.default')


@section('head')
    <title>Les Entrepreneurs Datacity: #1 Mobilité, Flux et Planification Urbaine</title>
    <!-- for Google -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <meta name="author" content="" />
    <meta name="copyright" content="" />
    <meta name="application-name" content="" />

    <!-- for Facebook -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />

    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=596ba1c9f9e0300011cf386b&product=inline-share-buttons"></script>
@endsection




@section('body')
    <div class="container">
        <section class="single-post">

            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="post">
                        <div class="category">
                            <a href="/blog/categories/entrepreunariat">
                                <i class="flaticon-menu-mobile"></i> {{ $post->category->name }}
                            </a>
                        </div>

                        <div class="post-title">
                            {{ $post->title }}
                        </div>

                        <div class="post-metas">
                            <ul class="list-unstyled">
                                <li>{{ Helper::fullDate($post->created_at) }}</li>
                            </ul>
                        </div>

                        <div class="image">
                            <img class="img-responsive" src="{{ $post->image }}" alt="">
                        </div>
                        <div class="sharethis-inline-share-buttons"></div>

                        <div class="content">
                            {!! $post->content !!}
                        </div>

                    </div>
                </div>
                {{-- End of col --}}


                <div class="col-md-3 col-sm-12">
                    <div class="row">
                        @foreach ($posts as $p)
                            <div class="col-md-12 col-sm-6">
                                <div class="other-post">
                                    <div class="image">
                                        <a href="">
                                            <img src="{{ $p->image }}" class="img-responsive">
                                        </a>
                                    </div>
                                    <h4>
                                        <a href="/blog/{{ $p->slug }}">{{ $p->title }}</a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="fb-comments mt-30" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="10"></div>
                </div>
            </div>
            {{-- End of row  --}}

        </section>
    </div>
@endsection

<div id="fb-root"></div>
<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
