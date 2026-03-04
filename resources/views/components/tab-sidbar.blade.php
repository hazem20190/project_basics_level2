<li class="nav-item w-100">
    <a class="nav-link {{ request()->url() == $href ? 'active' : '' }}" href="{{ $href }}">
        <i class=" {{ $icon }} fe-16"></i>
        <span class="ml-3 item-text">{{ $name }}</span>
    </a>
</li>
