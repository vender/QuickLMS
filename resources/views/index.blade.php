@extends('layouts.home')

@section('main')

    @if (!is_null($purchased_courses))
        <h3>Мои курсы</h3>
        <div class="row">

        @foreach($purchased_courses as $course)
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/320x150" alt="">
                    <div class="caption">
                        <h4><a href="{{ route('courses.show', [$course->slug]) }}">{{ $course->title }}</a>
                        </h4>
                        <p>{{ $course->description }}</p>
                    </div>
                    <div class="ratings">
                        <p>Progress: {{ Auth::user()->lessons()->where('course_id', $course->id)->count() }}
                            of {{ $course->lessons->count() }} lessons</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <hr />

    @endif

    <h3>Все курсы</h3>
    <div class="row">
    @foreach($courses as $course)
        <div class="product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="thumbnail">
                <a href="{{ route('courses.show', [$course->slug]) }}">
                @if($course->course_image)
                    <img src="/uploads/{{$course->course_image}}" alt="{{ $course->title }}" width="320px" height="150px">
                @else
                    <img src="http://placehold.it/320x150" alt="{{ $course->title }}">
                @endif
                </a>
                <div class="caption">
                    <h4 class="pull-right">${{ $course->price }}</h4>
                    <h4><a href="{{ route('courses.show', [$course->slug]) }}">{{ $course->title }}</a>
                    </h4>
                    <p>{{ $course->description }}</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">Students: {{ $course->students()->count() }}</p>
                    <p>
                        @for ($star = 1; $star <= 5; $star++)
                            @if ($course->rating >= $star)
                                <span class="glyphicon glyphicon-star"></span>
                            @else
                                <span class="glyphicon glyphicon-star-empty"></span>
                            @endif
                        @endfor
                    </p>
                </div>
            </div>
        </div>
    @endforeach
    </div>

@endsection