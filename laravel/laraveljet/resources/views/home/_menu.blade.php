@php
    $parentMenu= \App\Http\Controllers\HomeController::menuList()
@endphp

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#date" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">SEÇENEKLER</a>
                @foreach($parentMenu as $rs)
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="article-details.html"><span class="item-text">{{$rs->title}}</span></a>
                    <div class="dropdown-divider"></div>
                 @if(count($rs->children))
                     @include('menutree', ['children' =>$rs->children])
                    @endif
                </div>
            </li>
            @endforeach
        </ul>
    </div>
