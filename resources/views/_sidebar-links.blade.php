<ul>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('home') }}" >Home</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="/" >Explore</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="/" >Notification</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="/" >Messagens</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('profile', auth()->user()) }}" >Perfil</a>
    </li>
</ul>