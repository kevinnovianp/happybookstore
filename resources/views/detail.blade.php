@extends('layout.template')

@section('content')
    <div class="fluid-container pt-1 pb-1 mb-2" style="background-color: #FFC107">
        <p class="mb-0" style="font-size: 18pt; vertical-align: middle; padding-left: 0.3rem">
            Book Detail
        </p>
    </div>

    <div class="ps-2 pt-3 pe-3">
        <p style="text-align: justify; font-size: 10pt">
            Title : {{$book->title}}
            <br><br>
            Author : {{$detail->author}}
            <br><br>
            Publisher : {{$detail->publisher}}
            <br><br>
            Year : {{$detail->year}}
            <br><br>
            Description :
            <br>
            &emsp;&emsp;&emsp;{{$detail->description}}
        </p>
    </div>

@endsection
