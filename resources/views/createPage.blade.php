@extends('layouts.main')

@section('content')
<section class="section-pagetop bg-gray">
    <div class="container clearfix">
        <h4 class="title-page dark b float-xl-left mb-0">Dashboard</h4>
        <nav class="float-xl-right mt-2 mt-xl-0">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="#" class="dark"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
</section>
<section class="section-content padding-y bg-white">
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="card box">
                    <div class="card-body">
                        <form action="{{ route('pages.store') }}" method="post">
                            @csrf
                            <div id="page">
                                <fieldset class="form-group">
                                    <legend class="col-form-label">Page content</legend>
                                    @include('layouts.flashMessge')
                                    <div class="a2lix_translations">
                                        <div class="a2lix_translationsFields tab-content">
                                            <div id="page_translations_en_a2lix_translations-fields" class="tab-pane show active" role="tabpanel">
                                                <div id="page_translations_en">
                                                    <div class="form-group">
                                                        <label for="page_translations_en_title" class="required">Title</label>
                                                        <input type="text" id="page_translations_en_title" name="title" required="required" maxlength="35" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="page_translations_en_content">Content</label>
                                                        <textarea id="page_translations_en_content" name="content" class="htmlEditor form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary btn">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
