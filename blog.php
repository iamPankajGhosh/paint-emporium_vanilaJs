<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--
        - primary meta tags
    -->
    <title>Paint Emporium - Wall paint and Home painting in kolkata</title>
    <meta
      name="title"
      content="Paint Emporium - Wall Paint and Home Painting in kolkata"
    />
    <meta
      name="description"
      content="Get hassle-free wall painting with one of the best paint colours by Asian and Berger Paints. Exclusive waterproofing solutions, interior wall paint, exterior house painting & paint colours by Asian and Berger Paints."
    />
    

    <!--
        - favicon
    -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="public/favicon/apple-touch-icon.png"
    />

    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="public/favicon/favicon-32x32.png"
    />

    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="public/favicon/favicon-16x16.png"
    />

    <link rel="manifest" href="public/favicon/site.webmanifest" />

    <!--
        - custom css link
    -->
    <link rel="stylesheet" href="src/assets/css/estimator.css" />

    <link rel="stylesheet" href="src/assets/css/main.css" />

    <link rel="stylesheet" href="src/assets/css/home.css" />

    <link rel="stylesheet" href="src/assets/css/blog.css" />

    <!--
        - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body id="top">
    <!--
      - #PRELOADER
    -->
    <div class="preloader has-bg-image" data-preloader></div>

    <!--
        - #HEADER
    -->
    <header class="header">
      <div class="header-top" data-header>
        <div class="container">
          <a href="./index.html" class="logo">
            <img
              src="./src/assets/img/paint-emporium-logo.png"
              width="140"
              height="26"
              loading="lazy"
              alt="Paint Emporium"
            />
          </a>

          <button class="nav-open-btn" aria-label="open menu" data-nav-toggle>
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
          </button>

          <div class="input-wrapper">
            <input
              type="search"
              name="search"
              placeholder="Search product"
              class="search-field"
            />

            <button class="search-submit" aria-label="search">
              <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

          <nav class="navbar">
            <ul class="navbar-list">
              <li>
                <a href="./index.html" class="navbar-link has-after active"> home </a>
              </li>

              <li class="dropdown">
                <a href="#" class="navbar-link has-after">
                  <span class="span">paints and colors</span>
                  <ion-icon name="caret-down-outline"></ion-icon>
                </a>

                <ul class="dropdown-menu">
                  <li>
                    <a href="./interior-paint.html" class="link-item">
                      Interior paints
                    </a>
                  </li>

                  <li>
                    <a href="./exterior-paint.html" class="link-item">
                      exterior paints
                    </a>
                  </li>

                  <li>
                    <a href="./wood-paint.html" class="link-item">
                      wood paints
                    </a>
                  </li>

                  <li>
                    <a href="./metal-paint.html" class="link-item">
                      metal paints
                    </a>
                  </li>

                  <li>
                    <a href="./primer-paint.html" class="link-item">
                      primer paints
                    </a>
                  </li>
                 
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="navbar-link has-after">
                  <span class="span">services</span>
                  <ion-icon name="caret-down-outline"></ion-icon>
                </a>

                <ul class="dropdown-menu">
                  <li>
                    <a href="./waterproofing-solutions.html" class="link-item">
                      Waterproofing Solutions
                    </a>
                  </li>

                  <li>
                    <a href="./painting-services.html" class="link-item">
                      Painting Services
                    </a>
                  </li>

                  <li>
                    <a href="./wood-solutions.html" class="link-item">
                      Wood Solutions
                    </a>
                  </li>

                  <li>
                    <a href="./roof-coating.html" class="link-item">
                      roof coating
                    </a>
                  </li>

                  <li>
                    <a href="./damp-treatment.html" class="link-item">
                      damp treatment
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="./estimator.html" class="navbar-link has-after">
                  Estimator
                </a>
              </li>

              <li>
                <a href="./blog.php" class="navbar-link has-after">
                  Blog
                </a>
              </li>

              <li>
                <a href="./contact.html" class="navbar-link has-after">
                  contact
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <!--
        - #MOBILE NAVBAR
    -->
    <div class="sidebar">
      <div class="mobile-navbar" data-navbar>
        <div class="wrapper">
          <a href="./index.html" class="logo">
            <img
              src="./src/assets/img/paint-emporium-logo.png"
              width="140"
              height="26"
              loading="lazy"
              alt="Paint Emporium"
            />
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggle>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">
          <li>
            <a href="./index.html" class="navbar-link has-after active" data-nav-link>
              home
            </a>
          </li>

          <li class="dropdown">
            <a href="#" class="navbar-link has-after" >
              <span class="span"> paints and colors </span>

              <ion-icon name="caret-down-outline"></ion-icon>
            </a>

            <ul class="dropdown-menu">
              <li>
                <a href="./interior-paint.html" class="link-item">interior paints</a>
              </li>

              <li>
                <a href="./exterior-paint.html" class="link-item">exterior paints</a>
              </li>

              <li>
                <a href="./wood-paint.html" class="link-item">wood paints</a>
              </li>

              <li>
                <a href="./metal-paint.html" class="link-item">metal paints</a>
              </li>

              <li>
                <a href="./primer-paint.html" class="link-item">metal paints</a>
              </li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="navbar-link has-after" >
              <span class="span">services</span>

              <ion-icon name="caret-down-outline"></ion-icon>
            </a>

            <ul class="dropdown-menu">
              <li>
                <a href="./waterproofing-solutions.html" class="link-item">waterproofing solutions</a>
              </li>

              <li>
                <a href="./painting-services.html" class="link-item">painting services</a>
              </li>

              <li>
                <a href="./wood-solutions.html" class="link-item"
                  >wood solutions</a
                >
              </li>

              <li>
                <a href="./roof-coating.html" class="link-item"
                  >roof coating</a
                >
              </li>

              <li>
                <a href="./damp-treatment.html" class="link-item"
                  >damp treatment</a
                >
              </li>
            </ul>
          </li>

          <li>
            <a
              href="./estimator.html"
              class="navbar-link has-after"
              data-nav-link
            >
              Estimator
            </a>
          </li>

          <li>
            <a
              href="./blog.php"
              class="navbar-link has-after"
              data-nav-link
            >
              Blog
            </a>
          </li>

          <li>
            <a
              href="./contact.html"
              class="navbar-link has-after"
              data-nav-link
            >
              contact
            </a>
          </li>
        </ul>
      </div>

      <div class="overlay" data-nav-toggle data-overlay></div>
    </div>

    <main>
      <article>
        <!--
          - #HERO
        -->

      

        <section id="blog">
            <div class="blog-heading">
                <span>Blogs</span>
                <h4>Get inspiring ideas for interior home design. explore latest home decor ideas & trends and more.</h4>

            </div>

            <div class="blog-container">

                <div class="blog-box">
                    <div class="blog-img">
                        <img src="./src/assets/img/blog-1.jpg" alt="Blog">
                    </div>
                    <div class="blog-text">
                    
                        <!-- <span>18 Oct 2023 / Wooden Door Paint</span> -->
                        <!-- <a href="#" class="blog-title">What has Happend of All the Door Paints?</a> -->
                        
                        <?php include('../admin/includes/connection.php');?>
                       
                                      <?php
                                      $query= "SELECT * FROM `blog` where id='27' ";
                                      $data= mysqli_query($con, $query);
                                      $total= num_rows($data);
                                    if($total > 0 )
                                      {
                                          while ($result= mysqli_fetch_assoc($data)){
                                            echo '
                                          
                                            <span style="color: rgb(157, 57, 57);
                                            font-size: 15px;
                                            float: left;
                                            margin-right: 50px;
                                            font-weight: bold; "> '.$result['title']. "/" .$result['date'].' </span>
                                            
                                    
                                         <a href="#" class="blog-title">What has Happend of All the Door Paints?</a> 

                                                <p style="  color: #9b9b9b;
                                                font-size: 18px;
                                                display: -webkit-box;
                                                -webkit-line-clamp:3;
                                                -webkit-box-orient: vertical;
                                                overflow: hidden;
                                                text-overflow: ellipsis;
                                                margin: 20px 0px;"> '.$result['content'].' </p>
                                            
                                              ';
                                          }
                                      }
                                      
                                      ?> 
              
              
                        <!-- <p>Welcome to the world of door transformations! As the saying goes, "First impressions matter,"</p> -->


                  
                        <?php
                         $query= "SELECT * FROM `blog` where id ='27' ";
                         $data= mysqli_query($con, $query);
                         $result= mysqli_num_rows($data);
                            if ($result > 0)
                            {
                              while ($row= mysqli_fetch_assoc($data)) {
                                echo '<a href="./admin/blog-display.php?id='.$row['id'].' ">Read More</a>';
                              }
                            }
      
                         ?>
                        <!-- <a href="./admin/blog-display.php">Read More</a> -->
                    </div>
                </div>

                <div class="blog-box">
                    <div class="blog-img">
                        <img src="./src/assets/img/blog-2.jpg" alt="Blog">
                    </div>
                    <div class="blog-text">
                    
                        <!-- <span>18 July 2023 /  Color Combination</span>
                        <a href="#" class="blog-title">What has Happend of All the Door Paints?</a> -->

                 
                       
                       <?php
                       $query= "SELECT * FROM `blog` where id='26' ";
                       $data= mysqli_query($con, $query);
                       $total= mysqli_num_rows($data);
                     if($total > 0 )
                       {
                           while ($result= mysqli_fetch_assoc($data)){
                             echo '
                           
                             <span style="color: rgb(157, 57, 57);
                             font-size: 15px;
                             float: left;
                             margin-right: 50px;
                             font-weight: bold; "> '.$result['title']. "/" .$result['date'].' </span>
                             
                     
                          <a href="#" class="title">What has Happend of All the Door Paints?</a> 

                                 <p style="  color: #9b9b9b;
                                 font-size: 18px;
                                 display: -webkit-box;
                                 -webkit-line-clamp:3;
                                 -webkit-box-orient: vertical;
                                 overflow: hidden;
                                 text-overflow: ellipsis;
                                 margin: 20px 0px;"> '.$result['content'].' </p>
                             
                               ';
                           }
                       }
                       
                       ?> 
                        <!-- <p>Creating the ideal home interior design can make a huge difference in how your home looks and feels.</p> -->
                        <!-- <a href="./admin/blog-display.php">Read More</a> -->
                        
                        <?php
                         $query= "SELECT * FROM `blog` where id ='26' ";
                         $data= mysqli_query($con, $query);
                         $result= mysqli_num_rows($data);
                            if ($result > 0)
                            {
                              while ($row= mysqli_fetch_assoc($data)) {
                                echo '<a href="./admin/blog-display.php?id='.$row['id'].' ">Read More</a>';
                              }
                            }
      
                         ?>
                    </div>
                </div>

                <div class="blog-box">
                    <div class="blog-img">
                        <img src="./src/assets/img/blog-3.jpg" alt="Blog">
                    </div>
                    <div class="blog-text">
                    
                        <!-- <span>18 Aug 2023 / Front Door Color</span>
                        <a href="#" class="blog-title">What has Happend of All the Door Paints?</a>
                        <p>The front door of your home is an essential element in your interior design that can leave a lasting impression on the guests</p>
                        <a href="./admin/blog-display.php">Read More</a> -->

                        
                        <?php
                                      $query= "SELECT * FROM `blog` where id='28' ";
                                      $data= mysqli_query($con, $query);
                                      $total= mysqli_num_rows($data);
                                    if($total > 0 )
                                      {
                                          while ($result= mysqli_fetch_assoc($data)){
                                            echo '
                                          
                                            <span style="color: rgb(157, 57, 57);
                                            font-size: 15px;
                                            float: left;
                                            margin-right: 50px;
                                            font-weight: bold; "> '.$result['title']. "/" .$result['date'].' </span>
                                            
                                    
                                         <a href="#" class="title">What has Happend of All the Door Paints?</a> 

                                                <p style="  color: #9b9b9b;
                                                font-size: 18px;
                                                display: -webkit-box;
                                                -webkit-line-clamp:3;
                                                -webkit-box-orient: vertical;
                                                overflow: hidden;
                                                text-overflow: ellipsis;
                                                margin: 20px 0px;"> '.$result['content'].' </p>
                                            
                                              ';
                                          }
                                      }
                                      
                                      ?> 
              
              
                        <!-- <p>Welcome to the world of door transformations! As the saying goes, "First impressions matter,"</p> -->


                  
                        <?php
                         $query= "SELECT * FROM `blog` where id ='28' ";
                         $data= mysqli_query($con, $query);
                         $result= mysqli_num_rows($data);
                            if ($result > 0)
                            {
                              while ($row= mysqli_fetch_assoc($data)) {
                                echo '<a href="./admin/blog-display.php?id='.$row['id'].' ">Read More</a>';
                              }
                            }
      
                         ?>
                    </div>
                </div>

             
            </div>
        </section>
     
      </article>
    </main>

<!-- body section -->

    <!--
      - #FOOTER
    -->
    <footer class="footer" data-section>
      <div class="container">
        <div class="footer-top">
          <ul class="footer-list">
            <li>
              <p class="footer-list-title">Paint Emporium</p>
            </li>

            <li>
              <p class="footer-list-text">
                Find a location nearest you. See
                <a href="./contact.html" class="link">Our Store</a>
              </p>
            </li>

            <li>
              <a href="tel:+919230428113" class="footer-list-text bold">
                +91-9230-428-113
              </a>
            </li>

            <li>
              <a
                href="mailto:emporiumpaint@gmail.com"
                class="footer-list-text hover"
              >
                emporiumpaint@gmail.com
              </a>
            </li>
          </ul>

          <ul class="footer-list">
            <li>
              <p class="footer-list-title">Useful links</p>
            </li>

            <li>
              <a href="#" class="footer-link">New Products</a>
            </li>

            <li>
              <a href="#" class="footer-link">Best Sellers</a>
            </li>

            <li>
              <a href="#" class="footer-link">Bundle & Save</a>
            </li>
          </ul>

          <ul class="footer-list">
            <li>
              <p class="footer-list-title">Infomation</p>
            </li>

            <li>
              <a href="#" class="footer-link">Contact Us</a>
            </li>

            <li>
              <a href="#" class="footer-link">Terms & Conditions</a>
            </li>

            <li>
              <a href="#" class="footer-link">Privacy Policy</a>
            </li>
          </ul>
        </div>

        <div class="footer-bottom">
          <a href="#" class="logo">
            <img
              src="./src/assets/img/paint-emporium-logo.png"
              width="140"
              height="26"
              loading="lazy"
              alt="Paint Emporium"
            />
          </a>

          <div class="wrapper">
            <p class="copyright">
              &copy; 2023
              <a href="https://www.siplhub.com/" target="_blank">
                Sikharthy Infotech
              </a>
            </p>

            <ul class="social-list">
              <li>
                <a
                  href="https://www.facebook.com/sikharthyinfotech/"
                  target="_blank"
                  class="social-link"
                >
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a
                  href="https://www.linkedin.com/company/sikharthy-infotech-pvt-ltd"
                  target="_blank"
                  class="social-link"
                >
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li>
                <a
                  href="https://www.instagram.com/sikharthyinfotech/"
                  target="_blank"
                  class="social-link"
                >
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

              <li>
                <a
                  href="https://www.youtube.com/@sikharthyinfotech9023"
                  target="_blank"
                  class="social-link"
                >
                  <ion-icon name="logo-youtube"></ion-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!--
      - #BACK TO TOP
    -->
    <a
      href="#top"
      class="back-top-btn"
      aria-label="back to top"
      data-back-top-btn
    >
      <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
    </a>

    <!--
        - custom js link
    -->
    <script src="src/assets/js/script.js"></script>

    <!--
        - ionicon link
    -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>

    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>

