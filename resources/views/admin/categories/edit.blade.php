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
        </div>

        <div class="title">
            Edit Category
        </div>
    </div>

    <section class="mt-20">
        <div class="container-fluid">
            @include('errors.list')

            {!! Form::model($category, ['method' => 'PATCH', 'route' => ['categories.update', $category->id], 'class' => 'form' ]) !!}

                {{-- Left side  --}}
                <div class="row">
                    <div class="col-sm-8">
                        <div class="block">
                            <div class="block-content">
                                <div class="form-group">
                                    {!! Form::text('name', null, [
                                        'class' => 'form-control input-lg',
                                        'required' => 'required',
                                        'placeholder' => 'Category Name']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::text('slug', null, [
                                        'class' => 'form-control input-lg',
                                        'required' => 'required',
                                        'disabled' => 'disabled']) !!}
                                </div>

                                <div class="form-group mt-20">
                                    <label>Parent Category</label>
                                    <select class="form-select grey" name="parent_id">

                                        @foreach ($categories as $cat)
                                            @if ($cat->id != $category->id)
                                                <option value="{{ $cat->id }}" {{ $cat->id == $category->id ? 'selected' : ''}}>{{ $cat->name }}</option>
                                            @endif
                                        @endforeach
                                        <option value = "0" {{ !$category->parent_id ? 'selected' : '' }}>Aucune</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End of col 9 --}}


                    <div class="col-sm-4">
                        <div class="block">
                            <div class="block-content">
                                <div class="mt-20">
                                    <button type="submit" name="submit" class="btn btn-lg btn-blue btn-block">
                                        <i class="flaticon-check"></i> Save Category
                                    </button>
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
    $('#slug-target').slugify('#slug-source');
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
