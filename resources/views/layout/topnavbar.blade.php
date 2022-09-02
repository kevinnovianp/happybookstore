<div class="container-fluid d-flex align-items-center pt-2 pb-4" style="justify-content: center; font-size: 10pt; color: #0D6EFD">
    <div class="text-center" style="width: 6rem">
        <a href="/home" style="text-decoration: none">
            Home
        </a>
    </div>
    <div class="text-center" style="width: 6rem">
        <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none; cursor: pointer">
            Category
        </a>
        <ul class="dropdown-menu" style="font-size: 10pt">
            @foreach ($categories as $c)
                <li>
                    <a class="dropdown-item" href="/category/{{$c->id}}">
                        {{$c->category}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="text-center" style="width: 6rem">
        <a href="/contact" style="text-decoration: none">
            Contact
        </a>
    </div>
</div>
