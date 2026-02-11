<div class="bottom-nav">

<a href="/home" class="nav-item {{ request()->is('home') ? 'active' : '' }}">
<i class="fas fa-home"></i>
</a>

<a href="/modul" class="nav-item {{ request()->is('modul*') ? 'active' : '' }}">
<i class="fas fa-fire"></i>
</a>

<a href="/setting" class="nav-item {{ request()->is('setting') ? 'active' : '' }}">
<i class="fas fa-gear"></i>
</a>

</div>
