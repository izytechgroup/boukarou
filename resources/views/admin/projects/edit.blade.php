@extends('admin.body')


@section('head')
    <link rel="stylesheet" type="text/css" href="/backend/fancybox/jquery.fancybox.css" media="screen" />
@endsection

@section('body')
    <div class="page-heading">
        <div class="buttons">
            <a href="{{ route('posts.index') }}" class="btn btn-lg btn-grey">
                <i class="flaticon-undo"></i> Cancel
            </a>
            <a href="/{{ $project->slug }}" class="btn btn-lg btn-green">
                <i class="flaticon-view"></i> View Project
            </a>
        </div>

        <div class="title">
            Edit Project
        </div>
    </div>

    <section class="mt-20">
        <div class="container-fluid">
            @include('errors.list')

            {!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->id], 'class' => 'form' ]) !!}
            {{-- Left side  --}}
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-8">
                    <div class="block">
                        <div class="block-content">
                            <div class="form-group">
                                <label>project Title</label>
                                <input type="text" name="title" value="{{ $project->title }}"
                                required
                                placeholder="Project title"
                                id="slug-source"
                                class="form-control input-lg">
                            </div>

                            <div class="form-group">
                                <label>Project Slug</label>
                                <input type="text" name="slug" value="{{ $project->slug }}"
                                required
                                placeholder="Project slug"
                                id="slug-target"
                                class="form-control input-lg">
                            </div>

                            <div class="form-group mt-20">
                                <label>Themes</label>
                                <input type="text" name="tags" value="{{ $project->tags }}"
                                    placeholder="Tags separated by a comma"
                                    class="form-control input-lg tags">
                            </div>


                            <div class="mt-20">
                                <label>Description</label>
                                <textarea name="description" class="tiny">{{ $project->description }}</textarea>
                            </div>

                            <div class="mt-20">
                                <label>Idea Development</label>
                                <textarea name="idea" class="tiny">{{ $project->idea}}</textarea>
                            </div>

                            <div class="mt-20">
                                <label>Project Development</label>
                                <textarea name="project_dev" class="tiny">{{ $project->project_dev }}</textarea>
                            </div>

                            <div class="form-group mt-20">
                                <label>Project Owner</label>
                                <input type="text" name="owner" value="{{ $project->owner }}"
                                    placeholder="project owner"
                                    class="form-control input-lg">
                            </div>

                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" name="contact" value="{{ $project->contact }}"
                                    placeholder="Contact"
                                    class="form-control input-lg">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End of col 9 --}}


                <div class="col-sm-4">
                    <div class="block">
                        <div class="block-content">
                            <label>Progression State</label>
                            <div class="form-select grey">
                                <select class="" name="status">
                                    <option value="En cours" {{ $project->status == "En cours" ? 'selected' : ''}}>In process</option>
                                    <option value="Terminé" {{ $project->status == "Terminé" ? 'selected' : ''}}>Ended</option>
                                    <option value="Annulé" {{ $project->status == "Annulé" ? 'selected' : ''}}>Cancelled</option>
                                </select>
                            </div>

                            <div class="mt-20">
                                <button type="submit" name="submit" class="btn btn-lg btn-blue btn-block">
                                    <i class="flaticon-check"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="block mt-40">
                        <div class="block-content">
                            <h3>Logo</h3>

                            <input type="hidden" class="form-control" id='profile' name='image' readonly value="{{ $project->image }}">
                            <div id="profile_view" class="mt-20"></div>

                            <div class="text-right">
                                <a href="/backend/filemanager/dialog.php?type=1&field_id=profile" class="iframe-btn btn-dark btn round"> <i class='flaticon-folder'></i> Files</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End of col 3 --}}


            </div>

            {!! Form::close() !!}

        </div>
    </section>
@endsection


@section('js')
<script type="text/javascript" src="/backend/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="/backend/tinymce/tinymce.min.js"></script>
<script>
$(document).ready(function() {
    $('.tags').tokenfield();

    $('.iframe-btn').fancybox({
        'width'     : 900,
        'maxHeight' : 600,
        'minHeight'    : 400,
        'type'      : 'iframe',
        'autoSize'      : false
    });

    $("body").hover(function() {
        var profilePic = $("input[name='image']").val();
        if(profilePic)
            $('#profile_view').html("<img class='thumbnail img-responsive mb-10' src='" + profilePic +"'/>");
    });
})

tinymce.init({
    selector: ".tiny",
    theme: "modern",
    relative_urls: false,
    height : 280,
    fontsize_formats: "8px 10px 12px 14px 16px 18px 24px 32px 36px 60px",
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor filemanager code"
   ],
   toolbar1: "undo redo | fontsizeselect bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
   toolbar2: "|filemanager | link unlink anchor | image media | forecolor backcolor  | print preview code | styleselect",
   image_advtab: true ,

    external_filemanager_path:"/backend/filemanager/",
    filemanager_title:"Responsive Filemanager" ,
    external_plugins: { "filemanager" : "/backend/filemanager/plugin.min.js"}
});
</script>
@endsection
