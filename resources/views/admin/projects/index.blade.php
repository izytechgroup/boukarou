@extends('admin.body')


@section('body')
    <div class="page-heading">
        <div class="buttons">
            <a href="{{ route('projects.create') }}" class="btn btn-lg btn-green">
                <i class="flaticon-cross"></i> Nouveau Projet
            </a>
        </div>

        <div class="title">
            Projets
        </div>
    </div>

    <section class="page page-white">
        <div class="container-fluid">

            @include('errors.list')

            <div class="mt-10">
                <div class="row">
                    <form class="form" action="" method="get">
                        <div class="col-sm-4">
                            <div class="form-select grey">
                                <select class="" name="status">
                                    <option value="">All</option>
                                    <option value="published" {{ Request::get('status') == 'En cours' ? 'selected' : '' }}>En cours</option>
                                    <option value="unpublished" {{ Request::get('status') == 'Terminé' ? 'selected' : '' }}>Terminé</option>
                                    <option value="unpublished" {{ Request::get('status') == 'Annulé' ? 'selected' : '' }}>Annulé</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text"
                                            name="keywords"
                                            class="form-control input-lg"
                                            value="{{ Request::get('keywords') }}"
                                            placeholder="Project title">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-lg btn-blue btn-block">
                                        Filter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



            <div class="mt-10">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Titre du projet</th>
                            <th>Etat d'avancement</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($projects as $post)
                            <tr data-href="{{ route('projects.edit', $post->id) }}">
                                <td class="bold">{{ $post->title }}</td>
                                <td>{{ $post->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End of table -->
        </div>
    </section>

@endsection
