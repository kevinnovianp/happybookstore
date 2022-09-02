<div class="fluid-container pt-1 pb-1 mb-2" style="background-color: #FFC107">
    <p class="mb-0" style="font-size: 14pt; vertical-align: middle; padding-left: 0.3rem">
        Category
    </p>
</div>

@foreach ($categories as $c)
    <div class="fluid-container pt-1 pb-1" style="font-size: 10pt">
        <a style="text-decoration: none; padding-left: 1rem; vertical-align: middle" href="/category/{{$c->id}}">
            {{$c->category}}
        </a>
    </div>
@endforeach
