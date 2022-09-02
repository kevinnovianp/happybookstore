@extends('layout.template')

@section('content')
    <div class="fluid-container pt-1 pb-1 mb-2" style="background-color: #FFC107">
        <p class="mb-0" style="font-size: 18pt; vertical-align: middle; padding-left: 0.3rem">
            Book List:
        </p>
    </div>

    <table class="table">
        <tr style="border-bottom: 2px solid black">
            <td class="col-2"><b>Title</b></td>
            <td class="col-1"><b>Author</b></td>
        </tr>
        @foreach ($books as $b)
            <tr style="font-size: 11pt; background-color: #F2F2F2; height: 3.4rem">
                <td class="pt-1 pb-1">
                    <div data-bs-toggle="collapse" href="#collapseExample{{$b->detail->id}}" aria-expanded="false" aria-controls="collapseExample{{$b->detail->id}}" style="cursor: pointer">
                        {{$b->title}}
                    </div>
                    <a class="btn collapse btn btn-outline-dark" id="collapseExample{{$b->detail->id}}" style="text-decoration: none; font-size: 7pt; padding: 0px 2px" href="/detail/{{$b->detail->id}}">
                        Book detail
                    </a>
                </td>
                <td  class="pt-1 pb-1">{{$b->detail->author}}</td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-between align-items-center ps-3 pe-3">
        <p style="vertical-align: middle; font-size: 11pt">
            {{$books->currentPage()}} of {{ceil($totalBooks/5)}} page(s)
        </p>
        {{$books->links()}}
    </div>
@endsection
