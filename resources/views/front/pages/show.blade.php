@extends('front.templates.pages.default')

@section('head')
    <title>{{ $page->title }}</title>
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
        <div class="row">
            <div class="post">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="post-title mt-20">
                            <h1>{{ $page->title }}</h1>
                        </div>

                        <div class="image mt-20">
                            <img class="img-responsive" src="{{ $page->image }}" alt="">
                        </div>

                        <div class="content mt-20">
                            {!! $page->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
