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
                            <form action="{{ route('posts.store') }}" method="POST">
                                @csrf
                                <div class="post-input">
                                    <div class="pp"></div>
                                    <input type="text" name="description" placeholder="What's happening?">
                                </div>
                                <div class="post-options">
                                    <div class="options-left">
                                        <i class="fa-regular fa-image"></i>
                                        <i class="fa-solid fa-chart-simple"></i>
                                        <i class="fa-solid fa-face-smile"></i>
                                        <i class="fa-solid fa-calendar"></i>
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="options-right">
                                        <button class="button">Post</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div>
                        @foreach($posts as $post)
                            <div class="post">
                                <div class="post-header">
                                    <div class="pp"></div>
                                    <div class="post-user">
                                        <span class="tag">@admintagtest</span>
                                        <span class="tag">{{ $post->created_at->diffForHumans() }}</span>
                                    </div>
                                  
                                </div>
                                <div class="post-content">
                                    <p>{{ $post->description }}</p>
                                </div>
                                
                            </div>
                        @endforeach 
                    </div>



                </div>
                <div class="column smal"></div>
        </div>
    </div>
</div>
@endsection

