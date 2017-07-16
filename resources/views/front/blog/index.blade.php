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
                                <a href="">
                                    <i class="flaticon-menu-mobile"></i> Entrepreunariat
                                </a>
                            </div>

                            <div class="post-title">
                                <a href="/blog/les-entrepreneurs-datacity-1-mobilite-flux-et-planification-urbaine">
                                    Les Entrepreneurs Datacity: #1 Mobilité,
                                    Flux et Planification Urbaine
                                </a>
                            </div>

                            <div class="details">
                                <ul class="list-unstyled">
                                    <li>24 Juillet 2017</li>
                                </ul>
                            </div>
                        </div>

                    </div>


                    <div class="col-sm-8">
                        <div class="post-content">
                            <div class="post-image" style="background-image:url(http://www.alios-finance.com//images/images_article/62_max.jpg)"></div>

                            <div class="text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur. Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>

                            <div class="post-footer">
                                <a href="">
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
                <div class="row">
                    <div class="col-sm-6">
                        <div class="post" style="background-image:url(http://www.traveladventures.org/countries/cameroon/images/bandjoun-chefferie13.jpg)">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="post-details">
                                        <div class="inside">
                                            <div class="category">
                                                <a href="">
                                                    <i class="flaticon-menu-mobile"></i> Société
                                                </a>
                                            </div>

                                            <h2>
                                                <a href="">De Baf en mbeng... le parcours d'un indien</a>
                                            </h2>

                                            <ul class="list-unstyled">
                                                <li>22 Juillet 2017</li>
                                            </ul>

                                            <div class="excerpt">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod tempor
                                                incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-footer">
                                <a href="">
                                    Lire la suite <i class="flaticon-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="post" style="background-image:url(http://files.acn-aed-ca.org/Cameroon-3-ACN-20150408-22666-1024x683.jpg)">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="post-details">
                                        <div class="inside">
                                            <div class="category">
                                                <a href="">
                                                    <i class="flaticon-menu-mobile"></i> Société
                                                </a>
                                            </div>

                                            <h2>
                                                <a href="">Quand un DG verse partout... ça donne ça</a>
                                            </h2>

                                            <ul class="list-unstyled">
                                                <li>19 Juillet 2017</li>
                                            </ul>

                                            <div class="excerpt">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod tempor
                                                incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-footer">
                                <a href="">
                                    Lire la suite <i class="flaticon-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End of posts  --}}

        </section>
    </div>
@endsection
