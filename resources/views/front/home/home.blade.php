<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Le Boukarou</title>
    <link rel="stylesheet" href="/assets/css/app.min.css?{{ time() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png"  href="/favicon.ico">
</head>
<body>


    @include('front.includes.nav')

    {{-- Home Top  --}}
    <section class="home-top">
        <div class="container">
            <div class="message">
                <div class="logo">
                    <img src="/assets/img/logo.png" alt="">
                </div>

                <h1>Vous êtes votre propre chance</h1>
            </div>
        </div>
    </section>


    {{-- Avant Propos --}}
    <section class="avant-propos">
        <div class="container">

            <div class="row">

                <div class="col-sm-6 left">
                    <div class="head">
                        Avant-Propos
                    </div>

                    <div class="text">
                        Pour le Cameroun et pour toute l’afrique centrale, la création
                        de TPE/PME viables est vitale aujourd’hui et demain pour au
                        moins deux raisons fortes: Le manque d’emploi : pour une
                        population jeune en forte demande et un boom démographique qui
                        va accentuer ce gap. Cela provoque une crise sociale très forte
                        qui va s’accentuer dans les années à venir si ce combat de
                        l’emploi n’est pas mené et remporté.
                    </div>
                </div>

                <div class="col-sm-6 right">
                    <div class="text">
                        A la suite de ce constat fait pour la zone afrique centrale par
                        le FMI, il faut relever les économies de cette zone. A l’image
                        des pays du Nord, cela passe par un tissu économique des PME
                        dense et dynamique qui va porter croissance et développement
                        social. L’urgence est là, l’urgence est claire : Il faut
                        encourager, accompagner la création de PME dynamiques,
                        innovantes, stables et surtout, pérennes.
                    </div>

                    <a href="">
                        <div class="foot">
                            En Savoir Plus
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>




    {{-- A Propos  --}}
    <section class="a-propos">
        <div class="container">
            <h1>#Ce Que Nous Sommes</h1>

            <div class="row">
                <div class="col-sm-5 col-md-4">
                    <div class="title">
                        Incubateur <br>
                        Laboratoire d'idées <br>
                        Catalyseur <br>
                        Pépinière
                    </div>
                </div>


                <div class="col-sm-7 col-md-8">
                    <div class="text">
                        Le Boukarou est la matérialisation d’un écosystème dédié
                        à l’innovation, à l’entrepreneuriat productif et
                        contextuel. Notre philosophie est de donner la
                        possibilité aux individus et aux communautés
                        de découvrir, d’exprimer, d’exploiter leur capacité,
                        créativité, talent, pour le bien-être des populations.
                        D’où notre signature « vous êtes votre propre chance ».
                    </div>
                </div>
            </div>


            <div class="row mt-80 pb-60">
                <div class="col-sm-3">
                    <div class="tile tile-white">
                        <h4>Incubateur</h4>

                        <div class="body">
                            Aider à construire et développer un projet
                            entrepreneurial viable et prêt à être financé.
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="tile tile-grey">
                        <h4>Laboratoire d'idées</h4>

                        <div class="body">
                            Etre le centre de l’innovation sur tous les sujets
                            concourants au bien être de la population.
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="tile tile-light">
                        <h4>Catalyseur</h4>

                        <div class="body">
                            Mobiliser tout l’écosystème de l’entrepreneuriat
                            pour le structurer et le rendre plus productif.
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="tile tile-blue">
                        <h4>Pépinière</h4>

                        <div class="body">
                            Proposer un environnement favorable au développement
                            des jeunes pousses.
                        </div>
                    </div>
                </div>
            </div>


            <h1>Objectifs Stratégiques</h1>


            <div class="row">
                <div class="col-sm-5 col-md-4">
                    <div class="title">
                        Inciter <br>
                        Développer <br>
                        Accélrer <br>
                        Protéger
                    </div>
                </div>


                <div class="col-sm-7 col-md-8">
                    <div class="text">
                        Nous avons choisi d’adopter la méthode – programme IDAP
                        qui se déroule en 4 phases : Inciter, Développer,
                        Accompagner, Protéger. Nous nous déployons donc selon
                        le modèle suivant:
                    </div>
                </div>
            </div>

            <div class="row mt-60 pb-80">
                <div class="col-sm-3">
                    <div class="strat strat-1">
                        <h4>#Inciter</h4>

                        <div class="chapo">
                            Augmenter en qualité et en quantité le nombre de jeunes qui se lancent.
                        </div>

                        <div class="details">
                             Campagnes de sensibilisation à l'entrepreunariat multi-supports,
                             digitales et évènementielles, à l'attention des jeunes
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="strat strat-2">
                        <h4>#Développer</h4>

                        <div class="chapo">
                            Accompagner la transformation d'idées en entreprise
                            via les structures d'accompagnement .
                        </div>

                        <div class="details">
                             Mentoring, coaching, renforcement de compétences
                             pratiques / mise à disposition d’espaces de travail
                             individuels et collectifs
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="strat strat-3">
                        <h4>#Accompagner</h4>

                        <div class="chapo">
                            Donner la possibilité aux entreprises viables de
                            grandir une fois leur produit bien établi.
                        </div>

                        <div class="details">
                             Mise en relation avec les investisseurs, aide à la
                             signature de premiers contrats commerciaux.
                             Pratique de l’open développement
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="strat strat-4">
                        <h4>#Protéger</h4>

                        <div class="chapo">
                            Maitriser l’environnement des affaires pour
                            les jeunes pousses, pour qu’elles puissent
                            se développer sereinement.
                        </div>

                        <div class="details">
                             Réunion des différents acteurs de l’écosystème dans
                             une plateforme, recueil des recommandations et
                             actions de lobbying sur ces questions
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>




    <section class="idees">

        <div class="container">
            <h1>#Idées Fortes</h1>

            <div class="row">
                <div class="col-sm-12">
                    <div class="idea">
                        <div class="hook">
                            L’entrepreneuriat comme pilier du développement; plus de pme c’est:
                        </div>
                        <ul class="list-unstyled">
                            <li>Plus d’emplois par les jeunes et pour les jeunes</li>
                            <li>Un pouvoir d'achat des ménages plus élevé</li>
                        </ul>
                    </div>


                    <div class="idea in">
                        <div class="hook">
                            La promotion des entrepreneurs citoyens: Pour une croissance
                        </div>
                        <ul class="list-unstyled">
                            <li>Plus juste, plus equitable</li>
                            <li>Durable et verte</li>
                        </ul>
                    </div>


                    <div class="idea">
                        <div class="hook">
                            L'émergence d'un leadership pragmatique: pour un dévelopement
                        </div>
                        <ul class="list-unstyled">
                            <li>Boosté par une innovation constante et pragmatique</li>
                            <li>Animé par la volonté de favoriser le "mieux vivre ensemble"</li>
                        </ul>
                    </div>

                    </div>
                </div>
            </div>
        </div>

    </section>


    @include('front.includes.footer')


</html>
