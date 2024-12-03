@extends('layouts.main')

@section('title', 'Portofolio | Nizam')

@section('header')
<header>
    <a href="#" class="logo">Developer <span>Z.</span></a>
    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="navlist">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#service">Service</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    <div class="top-btn">
        <a href="#contact" class="h-btn">Contact Me</a>
    </div>
</header>
@endsection

@section('content')
<section class="hero" id="home">
    <div class="hero-container" data-aos="zoom-in-up">
        <div class="main-content">
            <h4>Hi, There!</h4>
            <h1>I'm <span>Nizzami Ramdhan </span></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, aperiam!</p>
            <div class="social">
                <a href="#facebook"><i class="ri-facebook-fill"></i></a>
                <a href="https://www.instagram.com/nizaam_ramdhan/" target="_blank" title="Instagram"><i class="ri-instagram-fill"></i></a>
                <a href="#twitter"><i class="ri-twitter-fill"></i></a>
                <a href="https://www.linkedin.com/in/nizzami-ramdhan-arraudy-74907b238/" target="_blank" title="Linkedln"><i class="ri-linkedin-box-fill"></i></a>
            </div>
            <div class="main-btn">
                <a href="#" class="btn">Hire Me</a>
                <a href="#" class="btn btn2">Download CV</a>
            </div>
        </div>
        <div class="cover-image">
            <img src="{{ asset('img/zam.png') }}" alt="cover image">
        </div>
    </div>
</section>

<section class="about" id="about">
    <div class="about-img" data-aos="zoom-in-down">
        <img src="{{ asset('img/zam.png') }}" alt="about">
    </div>
    <div class="about-text" data-aos="zoom-in-down">
        <h2>I am Product <span>Designer</span><br>& Web <span>Developer</span></h2>
        <div class="exp-area">
            <p class="exp">Experience: <span>12 Years</span></p>
            <p class="exp">Specialty: <span>Product Designer, Developer</span></p>
            <p class="exp">Address: <span>Purwakarta, Indonesia</span></p>
            <p class="exp">Email: <span>nizzamiramdhan@gmail.com</span></p>
            <p class="exp">Phone: <span>+62-858-8174-7164</span></p>
            <p class="exp">Freelance: <span>Available</span></p>
        </div>
        <a href="https://github.com/Nizzami" target="_blank" title="Github" class="btn">View All Projects</a>
    </div>
</section>

<section class="services" id="service">
      <div class="center-text" data-aos="zoom-in-up">
        <h2>My <span>Services</span></h2>
      </div>
      <div class="services-content" data-aos="zoom-in-up">
        <div class="box">
          <img src="{{ asset('img/ui.png') }}" alt="ux" width="100px" />
          <h3>UI/UX Designer</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus mollitia nemo possimus aliquid voluptas sit facilis doloribus quas amet ducimus!</p>
          <a href="#">
            Download Now
            <i class="ri-arrow-right-line"></i>
          </a>
        </div>
        <div class="box">
          <img src="{{ asset('img/ui.png') }}" alt="ux" width="100px" />
          <h3>Mobile Dev</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus mollitia nemo possimus aliquid voluptas sit facilis doloribus quas amet ducimus!</p>
          <a href="#">
            Download Now
            <i class="ri-arrow-right-line"></i>
          </a>
        </div>
        <div class="box">
          <img src="{{ asset('img/ui.png') }}" alt="ux" width="100px" />
          <h3>Web Dev</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus mollitia nemo possimus aliquid voluptas sit facilis doloribus quas amet ducimus!</p>
          <a href="#">
            Download Now
            <i class="ri-arrow-right-line"></i>
          </a>
        </div>
      </div>
</section>

<section class="portfolio" id="portfolio">
      <div class="center-text" data-aos="zoom-in-down">
        <h2>My <span>Portfolio</span></h2>
      </div>

      <div class="portfolio-content" data-aos="zoom-in-down">
        <div class="row">
          <img src="img/web.png" alt="web" />
          <div class="main-row">
            <div class="row-text">
              <h5>Website Design</h5>
            </div>
            <div class="row-icon">
              <i class="ri-github-fill"></i>
            </div>
          </div>
          <h4>Website Development For Dark X</h4>
        </div>

        <div class="row">
          <img src="img/web.png" alt="web" />
          <div class="main-row">
            <div class="row-text">
              <h5>Website Design</h5>
            </div>
            <div class="row-icon">
              <i class="ri-github-fill"></i>
            </div>
          </div>
          <h4>Website Development For Dark X</h4>
        </div>

        <div class="row">
          <img src="img/web.png" alt="web" />
          <div class="main-row">
            <div class="row-text">
              <h5>Website Design</h5>
            </div>
            <div class="row-icon">
              <i class="ri-github-fill"></i>
            </div>
          </div>
          <h4>Website Development For Dark X</h4>
        </div>

        <div class="row">
          <img src="img/web.png" alt="web" />
          <div class="main-row">
            <div class="row-text">
              <h5>Website Design</h5>
            </div>
            <div class="row-icon">
              <i class="ri-github-fill"></i>
            </div>
          </div>
          <h4>Website Development For Dark X</h4>
        </div>

        <div class="row">
          <img src="img/web.png" alt="web" />
          <div class="main-row">
            <div class="row-text">
              <h5>Website Design</h5>
            </div>
            <div class="row-icon">
              <i class="ri-github-fill"></i>
            </div>
          </div>
          <h4>Website Development For Dark X</h4>
        </div>

        <div class="row">
          <img src="img/web.png" alt="web" />
          <div class="main-row">
            <div class="row-text">
              <h5>Website Design</h5>
            </div>
            <div class="row-icon">
              <i class="ri-github-fill"></i>
            </div>
          </div>
          <h4>Website Development For Dark X</h4>
        </div>
      </div>
</section>

<section id="contact" class="contact">
      <div class="center-text" data-aos="zoom-in-up">
        <h2>Contact <span>Me</span></h2>
      </div>

      <div class="contact-form" data-aos="zoom-in-up">
        <form action="">
          <input type="text" placeholder="Your Name" required />
          <input type="email" placeholder="Email Address..." />
          <textarea name="" id="" cols="30" rows="10" placeholder="Isi Pesan Disini..." required></textarea>
          <input type="submit" name="" value="Send Message" class="send-btn" />
        </form>
      </div>
</section>
@endsection
