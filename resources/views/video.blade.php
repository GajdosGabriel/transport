{{--EN version --}}
@if(App::getLocale() != 'nl')
    <video width="100%" controls>
        <source src="{{ asset('images/video_en.mp4') }}" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        {{--                            Your browser does not support the video tag.--}}
    </video>
@endif

{{--NL version --}}
@if(App::getLocale() != 'en')
    <video width="440" height="440" controls>
        <source src="{{ asset('images/video_nl.mp4') }}" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        {{--                            Your browser does not support the video tag.--}}
    </video>
@endif
