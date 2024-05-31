
<?php require basePath('views/partials/head.php'); ?>

<!-- HEADER -->
    <header id="header" class="header">
      <div class="logo-buttons">
        <div class="logo">
          <a href="#">
            <img src="/assets/blog.png" alt="" />
          </a>
        </div>

        <div class="header-buttons">
          <button>
            <i class="bx bxs-user"></i>
          </button>
          <button>
            <i class="bx bx-sun"></i>
          </button>
          <button>
            <i class="bx bx-menu"></i>
          </button>
        </div>
      </div>

      <nav class="navbar">
        <li>
          <a href="/">Home</a>
        </li>
        <li>
          <a href="/blog">Blog</a>
        </li>
        <li>
          <a href="/about">About</a>
        </li>
        <li>
          <a href="/contact">Contact</a>
        </li>
      </nav>
    </header>

    <!-- HOME -->
    <section id="home" class="home">
      <div class="home-header">
        <h1>What's up?</h1>
        <p>Read about my creative ideas!</p>
      </div>

      <div class="home-buttons">
        <button class="loginBtn">Login</button>
        <button class="signupBtn">Signup</button>
      </div>
    </section>

    <!-- *** MAIN SECTION *** -->
    <section id="blog" class="blog">
      <div class="blog-header">
        <h2>The Latest Blog Posts</h2>
        <p>
          You can read our latest blog posts right here. Leave a comment and
          help us improve our work.
        </p>
      </div>

      <div class="posts-container">
        <div class="post-box">
          <h3 class="post-title">
            Vanilla JavaScript is the beginning for frontend developers
          </h3>
          <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. At illum
            perspiciatis, quis dolorem dicta natus eius non quasi saepe debitis
            repellat harum consequuntur ea, rerum dolore libero sint deleniti
            dolorum.
          </p>
          <div class="details">
            <span>
              <i class="bx bxs-user"></i>
              John Doe
            </span>
            <span> 24/10/2024 </span>
            <span>Tags: Engineering, Development, Computer</span>
          </div>
          <button class="readBtn">Read More</button>
        </div>

        <!-- THE SECOND POST -->
        <div class="post-box">
          <h3 class="post-title">
            Cooking has its own methods and starategies
          </h3>
          <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. At illum
            perspiciatis, quis dolorem dicta natus eius non quasi saepe debitis
            repellat harum consequuntur ea, rerum dolore libero sint deleniti
            dolorum.
          </p>
          <div class="details">
            <span>
              <i class="bx bxs-user"></i>
              John Doe
            </span>
            <span> 24/10/2024 </span>
            <span>Tags: Engineering, Development, Computer</span>
          </div>
          <button class="readBtn">Read More</button>
        </div>

        <!-- THE THIRD POST -->

        <div class="post-box">
          <h3 class="post-title">Call Of Duty "Ghosts"</h3>
          <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. At illum
            perspiciatis, quis dolorem dicta natus eius non quasi saepe debitis
            repellat harum consequuntur ea, rerum dolore libero sint deleniti
            dolorum.
          </p>
          <div class="details">
            <span>
              <i class="bx bxs-user"></i>
              John Doe
            </span>
            <span> 24/10/2024 </span>
            <span>Tags: Engineering, Development, Computer</span>
          </div>
          <button class="readBtn">Read More</button>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer>
      <h4>This website is created by Behnam Hamidi</h4>
      <p>Copyright 2024</p>
      <p>Contact: behnamhamidi688@gmail.com</p>
    </footer>

    <script src="./public/index.js"></script>
  </body>
</html>
