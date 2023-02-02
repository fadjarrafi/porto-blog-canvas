<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>fadjarrafi.be</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/world-wide-web.png') }}">
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#home" class="nav_logo">
                Fadjar Irfan Rafi
            </a>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav_link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav_link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#skills" class="nav_link">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav_link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#portfolio" class="nav_link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('blog') }}" class="nav_link active_link">Writings</a>
                    </li>
                </ul>

                <div class="nav_close" id="nav-close">
                    <i class="uil uil-times nav_close" id="nav-close"></i>
                </div>
            </div>

            <div class="nav_btns">
                <!--===== THEME CHANGE BUTTON =====-->
                <i class="uil uil-moon change_theme" id="theme-button"></i>

                <div class="nav_toogle" id="nav-toggle">
                    <i class="uil uil-bars"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <section class="about blog_section">
            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-header">
                        <img src="{{ $post->featured_image }}" alt="rover" />
                    </div>
                    <div class="card-body">
                        @foreach ($post->topic as $topic)
                            <span class="tag tag-teal">{{ $topic }}</span>
                        @endforeach
                        <a href="{{ route('blog.show', $post->slug) }}">
                            <h4>
                                {{ $post->title }}
                            </h4>
                        </a>
                        <p>
                            {{ $post->summary }}
                        </p>
                        @foreach ($post->tags as $tag)
                            #{{ $tag }}
                        @endforeach
                        <div class="user">
                            <img src="{{ $post->avatar_user }}" alt="user" />
                            <div class="user-info">
                                <h5>{{ $post->user->name }}</h5>
                                <small>{{ $post->created_at->format('d-m-Y') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer_bg">
            <div class="footer_container container grid">
                <div>
                    <h1 class="footer_title">Fadjar Irfan Rafi</h1>
                    <span class="footer_subtitle">Backend Web developer</span>
                </div>
                <ul class="footer_links">
                    <li>
                        <a href="#services" class="footer_link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer_link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer_link">Contact Me</a>
                    </li>
                </ul>
                <div class="footer_social">
                    <a href="mailto:dark.fir21@gmail.com" target="_blank" rel="noopener noreferrer"
                        class="footer_social">
                        <i class="uil uil-envelope"></i>
                    </a>
                    <a href="https://www.linkedin.com" target="_blank" rel=”noopener noreferrer” class="footer_social">
                        <i class="uil uil-linkedin"></i>
                    </a>
                    <a href="https://github.com/fadjarrafi" target="_blank" rel=”noopener noreferrer”
                        class="footer_social">
                        <i class="uil uil-github-alt"></i>
                    </a>
                    <a href="https://www.github.com" target="_blank" rel=”noopener noreferrer” class="footer_social">
                        <i class="uil uil-github"></i>
                    </a>
                </div>
            </div>
            <p class="footer_copy">&#169; Share Tutorials. All right reserved</p>
        </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup_icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

    <!--==================== MAIN JS ====================-->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
