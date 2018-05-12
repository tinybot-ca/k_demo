@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><h4>Presentation</h4></div>

                <div class="card-body">

                    <div id="video-container">
                
                        <video poster="{{ asset('images/poster.jpg') }}" id="my-video" playsinline controls>
                            <source src="{{ asset('videos/Kenna_Video_MW_05-10-2018.mp4') }}" type="video/mp4">
                        
                            <!-- Captions are optional -->
                            <track kind="captions" label="English captions" src="{{ asset('videos/captions.vtt') }}" srclang="en" default>
                        </video>

                    </div>

                    <!-- Description -->
                    <li class="list-group-item card-bg-light">
                        <h3>Business Development Follow-up</h3>
                        Can personalized, targeted video be leveraged as an effective business development tactic with B2B prospects?
                    </li>

                    <!-- Table of contents -->
                    <li class="list-group-item">
                        00:00 &nbsp;<a href="javascript:void(0)" onclick="seek(0)">Introduction</a>
                    </li>
                    <li class="list-group-item">
                        00:37 &nbsp;<a href="javascript:void(0)" onclick="seek(37)">BASF: The Opportunity</a>
                    </li>
                    <li class="list-group-item">
                        02:02 &nbsp;<a href="javascript:void(0)" onclick="seek(122)">Customer Lifecycle Curve</a>
                    </li>
                    <li class="list-group-item">
                        02:31 &nbsp;<a href="javascript:void(0)" onclick="seek(151)">Video Content Ideas</a>
                    </li>
                    <li class="list-group-item">
                        03:17 &nbsp;<a href="javascript:void(0)" onclick="seek(197)">Personal Update</a>
                    </li>
                    <li class="list-group-item">
                        04:37 &nbsp;<a href="javascript:void(0)" onclick="seek(277)">Next Steps</a>
                    </li>
                    
                </div><!-- card body -->
            </div><!-- card -->

            <br />

            <div class="card">
                <div class="card-header"><h4>Discussion</h4></div>

                {{-- <div class="card-body"> --}}

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item grid-bg">
                            <a class="card-link btn btn-outline-primary btn-sm" href="/comments/create">Submit</a>
                        </li>
    
                        @foreach ($comments as $comment)
                        <li class="list-group-item">
                                <a href="/comments/{{ $comment->id }}/edit">{{ $comment->created_at->diffForHumans() }}</a> {{ $comment->user->name }} said, "{{ $comment->body }}"
                        </li>
                        @endforeach

                    </ul>

                {{-- </div><!-- card body --> --}}
            </div><!-- card -->

        </div><!-- col-md-8 -->
    </div><!-- row -->
</div><!-- container -->

<script src="https://cdn.plyr.io/3.2.1/plyr.js"></script>

<script>

    // const player = new Plyr('#my-video', {
    //     captions: {
    //         active: true
    //     }
    // });
    
    var myVideo = document.getElementById("my-video"); 

    function seek(seconds) {
        myVideo.currentTime = seconds;

        if (myVideo.paused) { 
            myVideo.play();
        }
    }

    document.documentElement.addEventListener('keydown', function (e) {
        if ( ( e.keycode || e.which ) == 32) {
            e.preventDefault();
            myVideo.paused ? myVideo.play() : myVideo.pause();
        }
    }, false);

    // Todo: Map arrow keys to rewind or forward +/- 10 secs
    // https://stackoverflow.com/questions/38604103/how-can-you-make-video-js-skip-forwards-and-backwards-15-seconds

    function resize() {
        let videoWidth = $( "#video-container" ).width();
        let videoRatio = 1.777777777777778;

        $( "#my-video" ).css('width', videoWidth);
        $( "#my-video" ).css('height', videoWidth / videoRatio);
    }

    $(function() {
        resize();
    });

    $( window ).resize(function() {
        resize();
    });

</script>

@endsection
