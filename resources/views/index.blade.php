@php($page_title = $category)
@extends('layout.app')
@section('page_title', $page_title)
@section('content')

    <!-- Main container -->
    <div class="container my-5">
        @component('component.category-tab')
            {{$category}}
        @endcomponent
        <div id="myTabContent" class="tab-content  my-5">
            <div class="tab-pane fade show active" id="home">
                <div class="row my-3 ">
                    @foreach($news as $single_news)
                        <div class="col-lg-4 mb-3" style="display: grid">
                            @component('component.news-card', ['single_news' => $single_news])
                            @endcomponent
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /Category Tabs -->
        <div class="row">
            {{ $news->links() }}
        </div>
    </div>
    <!-- / Main container -->
@endsection