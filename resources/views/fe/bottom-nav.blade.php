<nav class="bottom-nav">

    <a href="/home"
       class="nav-item {{ request()->is('home') ? 'active' : '' }}">
        <i class="fas fa-home"></i>
        <span>Home</span>
    </a>

    <a href="/modul"
       class="nav-item {{ request()->is('modul*') ? 'active' : '' }}">
        <i class="fas fa-fire"></i>
        <span>Modul</span>
    </a>

    <a href="/setting"
       class="nav-item {{ request()->is('setting') ? 'active' : '' }}">
        <i class="fas fa-gear"></i>
        <span>Setting</span>
    </a>

</nav>


<style>
.bottom-nav{
    position: fixed;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 30px;
    padding: 14px 28px;

    background: rgba(20,30,50,0.85);
    backdrop-filter: blur(14px);
    border-radius: 30px;

    box-shadow:
        0 10px 30px rgba(0,0,0,0.25),
        inset 0 1px 0 rgba(255,255,255,0.05);

    z-index: 999;
}

.nav-item{
    text-decoration: none;
    color: #94a3b8;
    font-size: 12px;

    display:flex;
    flex-direction:column;
    align-items:center;
    gap:4px;

    transition: all .3s ease;
    position: relative;
}

.nav-item i{
    font-size:18px;
    transition:.3s;
}

.nav-item:hover{
    color:white;
    transform: translateY(-2px);
}

.nav-item.active{
    color:#38bdf8;
}

.nav-item.active i{
    transform: scale(1.2);
}

/* indicator dot */
.nav-item.active::after{
    content:"";
    width:6px;
    height:6px;
    border-radius:50%;
    background:#38bdf8;
    position:absolute;
    bottom:-8px;
}

/* mobile responsive */
@media(max-width:500px){
    .bottom-nav{
        width:90%;
        justify-content:space-around;
        gap:0;
    }
}
</style>
