@foreach($children as $submenu)
    <ul class="navbar-nav ml-auto">
        @if(count($submenu->children))
