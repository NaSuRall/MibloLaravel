@extends("./layouts/app")

@section("content")
<div class="body">
    <div class="containers">
        <div class="container">
                <div class="column smal">
                    <nav>
                        <img src="{{  asset('img/mibloLogo.png') }}" alt="">
                        <div class="navigate">
                            <div class="nav-onlgets">
                                <div class="onglets">
                                    <i class="fa-solid fa-house"></i>
                                    <a href="">Home</a>
                                </div>
                                <div class="onglets">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <a href="">Explore</a>
                                </div>
                                <div class="onglets">
                                    <i class="fa-solid fa-bell"></i>
                                    <a href="">Notifications</a>
                                </div>
                                <div class="onglets">
                                    <i class="fa-solid fa-envelope"></i>
                                    <a href="">Messages</a>
                                </div>
                                <div class="onglets">
                                    <i class="fa-solid fa-house"></i>
                                    <a href="">Miblo</a>
                                </div>
                                <div class="onglets">
                                    <i class="fa-solid fa-bookmark"></i>
                                    <a href="">Bookmarks</a>
                                </div>
                                <div class="onglets">
                                    <i class="fa-solid fa-suitcase"></i>
                                    <a href="">jobs</a>
                                </div>
                                <div class="onglets">
                                    <i class="fa-solid fa-users"></i>
                                    <a href="">Communities</a>
                                </div>
                                <div class="onglets">
                                    <i class="fa-solid fa-house"></i>
                                    <a href="">Premium</a>
                                </div>
                                <div class="onglets">
                                    <i class="fa-solid fa-user"></i>
                                    <a href="">Profile</a>
                                </div>
                                <a href="" class="button">Post</a>
                            </div>
                        
                            <div class="profil">
                                <div class="pp"></div>
                                <div class="profil-name">
                                    {{ auth()->user()->name }} 
                                    <p>@admintagtest</p>
                                </div> 
                                <i class="fa-solid fa-bars"></i>
                            </div> 
                        </div>
                    </nav>
                </div>
                <div class="column large">
                    <div class="header">
                        <div class="categorie">
                            <button><span>For You</span></button>
                            <button>Following</button>
                        </div>
                        <div class="create-post">

                        </div>
                    </div>



                </div>
                <div class="column smal"></div>
        </div>
    </div>
</div>
@endsection

