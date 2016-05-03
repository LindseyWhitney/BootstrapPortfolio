<?php
  include('../inc/port--header.php');
?>
      <!-- Portfolio -->
      <div class="portfolio newSection" id="portfolioOverview">
        <div class="container">
          <h2 class="text-hide h2--L">Featured Work</h2>
          <h3>Branding, Graphic Design &amp; Web Design</h3>

          <ul id="da-thumbs" class="row da-thumbs codrops-demos">

            <!-- Kaleidoscope Pediatric Therapy -->
            <li id="TN3" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
              <a class="animsition-link" href="../portfolio/portfolio__kaleidoscope.php">
                <img src="../images/Work__Thumbnail--KPT.jpg" alt="Thumbnail image of Kaleidoscope Physical Therapy project."/>
                <div>
                  <div>
                    <span>Kaleidoscope</br>Pediatric Therapy</span>
                    <span class="thumbnail__tags hidden-xs">branding &amp; graphic design</span>
                  </div>
                </div>
              </a>
            </li>

            <!-- Summer Conferences -->
            <li id="TN5" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
              <a class="animsition-link" href="../portfolio/portfolio__SumConf.php">
                <img src="../images/Work__Thumbnail--SumConf.jpg" alt="Thumbnail image of Summer Conferences project."/>
                <div>
                  <div>
                    <span>Summer</br>Conferences</span>
                    <span class="thumbnail__tags hidden-xs">web design</span>
                  </div>
                </div>
              </a>
            </li>

            <!-- Annual Report 2014 -->
            <li id="TN4" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
              <a class="animsition-link" href="../portfolio/portfolio__AR2014.php">
                <img src="../images/Work__Thumbnail--AR2013.jpg" alt="Thumbnail image of Boise State Annual Report project."/>
                <div>
                  <div>
                    <span>Boise State</br>Annual Report</span>
                    <span class="thumbnail__tags hidden-xs">graphic design</span>
                  </div>
                </div>
              </a>
            </li>

            <!-- Student Diversity & Inclusion -->
            <li id="TN7" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
              <a class="animsition-link" href="../portfolio/portfolio__SDI.php">
                <img src="../images/Work__Thumbnail--SDI.jpg" alt="Thumbnail image of Student Diversity project."/>
                <div>
                  <div>
                    <span>Student Diversity</br>&amp; Inclusion</span>
                    <span class="thumbnail__tags hidden-xs">branding &amp; graphic design</span>
                  </div>
                </div>
              </a>
            </li>

            <!-- Campus Awards Ceremony -->
            <li id="TN1" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
              <a class="animsition-link" href="../portfolio/portfolio__CAC.php">
                <img src="../images/Work__Thumbnail--CAC.jpg" alt="Thumbnail image of Campus Awards Ceremony project."/>
                <div>
                  <div>
                    <span>Campus</br>Awards Ceremony</span>
                    <span class="thumbnail__tags hidden-xs">graphic design</span>
                  </div>
                </div>
              </a>
            </li>

            <!-- Sweet Pepper Ranch -->
            <li id="TN8" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
              <a class="animsition-link" href="../portfolio/portfolio__SPR.php">
                <img src="../images/Work__Thumbnail--SPR.jpg" alt="Thumbnail image of Sweet Pepper Ranch project."/>
                <div>
                  <div>
                    <span>Sweet</br>Pepper Ranch</span>
                    <span class="thumbnail__tags hidden-xs">branding &amp; graphic design</span>
                  </div>
                </div>
              </a>
            </li>

            <!-- Women's Center -->
            <li id="TN2" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
              <a class="animsition-link" href="../portfolio/portfolio__WC.php">
                <img src="../images/Work__Thumbnail--WC.png" alt="Thumbnail image of Women's Center project."/>
                <div>
                  <div>
                    <span>Women&rsquo;s</br>Center</span>
                    <span class="thumbnail__tags hidden-xs">branding &amp; graphic design</span>
                  </div>
                </div>
              </a>
            </li>

            <!-- Bronco Day -->
            <li id="TN9" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
              <a class="animsition-link" href="../portfolio/portfolio__BroncoDay.php">
                <img src="../images/Work__Thumbnail--BroncoDay.jpg" alt="Thumbnail image of Bronco Day project."/>
                <div>
                  <div>
                    <span>Bronco</br>Day</span>
                    <span class="thumbnail__tags hidden-xs">event branding &amp; graphic design</span>
                  </div>
                </div>
              </a>
            </li>

            <!-- Get Involved -->
            <li id="TN6" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
              <a class="animsition-link" href="../portfolio/portfolio__GetIn.php">
                <img src="../images/Work__Thumbnail--GetIn.jpg" alt="Thumbnail image of Get Involved project."/>
                <div>
                  <div>
                    <span>Get</br>Involved</span>
                    <span class="thumbnail__tags hidden-xs">branding &amp; graphic design</span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
          <a href="../index.php#portfolio" class="text-hide Return__button">Return to Main Page</a>
        </div> <!--/.container -->
      </div> <!--/.portfolio -->

      <?php
      $startYear = 2016;
      $thisYear = date('Y');
      if ($thisYear > $startYear) {
        $copyright = "$startYear&ndash;$thisYear";
      } else {
        $copyright = $startYear;
      }
      ?>

      <!-- Footer -->
      <footer class="social">
        <p class="copyright">&copy; Lindsey Whitney Design, LLC  |  <?php echo $copyright; ?></p>
        <div class="group">

          <!-- Behance -->
          <div class="size">
            <a href="https://www.behance.net/LindseyWhitney">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 47.17 46.17" style="enable-background:new 0 0 47.17 46.17;" xml:space="preserve">
                <g id="behance">
                        <path d="M29.96,21.53c-0.69,0-1.22,0.43-1.6,0.82c-0.38,0.39-0.62,0.82-0.72,1.82h4.63
                            c-0.05-1-0.29-1.48-0.71-1.86C31.12,21.94,30.59,21.53,29.96,21.53z"/>
                        <path d="M20.2,21.46c0.37-0.23,0.56-0.82,0.56-1.4c0-0.65-0.25-1.27-0.75-1.48
                            c-0.43-0.14-0.98-0.41-1.64-0.41H15v4h3.74C19.34,22.17,19.83,21.69,20.2,21.46z"/>
                        <path d="M20.17,24.19c-0.33-0.15-0.79-0.02-1.39-0.02H15v4h3.73c0.6,0,1.07-0.45,1.41-0.61
                            c0.61-0.3,0.91-0.95,0.91-1.81C21.05,25.03,20.76,24.46,20.17,24.19z"/>
                        <path d="M23.82,0.62c-12.4,0-22.46,10.06-22.46,22.46c0,12.4,10.05,22.46,22.46,22.46
                            c12.4,0,22.46-10.06,22.46-22.46C46.28,10.68,36.23,0.62,23.82,0.62z M27,17.17h6v1h-6V17.17z M23.36,27.87
                            c-0.26,0.43-0.59,0.8-0.98,1.09c-0.44,0.34-0.96,0.73-1.57,0.86c-0.6,0.13-1.26,0.35-1.96,0.35H13v-14h6.3
                            c1.69,0,2.89,0.42,3.6,1.38c0.42,0.59,0.64,1.25,0.64,2.07c0,0.85-0.21,1.5-0.64,2.02c-0.24,0.29-0.59,0.54-1.06,0.78
                            c0.71,0.26,1.24,0.66,1.6,1.22c0.36,0.56,0.54,1.23,0.54,2.03C23.98,26.48,23.77,27.22,23.36,27.87z M35.05,26.17h-7.48
                            c0.04,1,0.4,1.4,1.07,1.82c0.41,0.26,0.9,0.21,1.48,0.21c0.61,0,1.11-0.08,1.49-0.4c0.21-0.17,0.39-0.63,0.55-0.63h2.74
                            c-0.07,1-0.41,1.07-0.99,1.7c-0.92,1-2.21,1.42-3.86,1.42c-1.37,0-2.57-0.46-3.61-1.3c-1.05-0.84-1.57-2.23-1.57-4.13
                            c0-1.78,0.47-3.15,1.41-4.1c0.94-0.95,2.17-1.43,3.67-1.43c0.89,0,1.7,0.16,2.41,0.48c0.72,0.32,1.31,0.83,1.77,1.52
                            c0.42,0.61,0.7,1.66,0.82,2.47C35.03,24.25,35.06,25.17,35.05,26.17z"/>
                </g>
              </svg>
            </a>
          </div> <!--/.size -->

          <!-- Linked In -->
          <div class="size">
            <a href="https://www.linkedin.com/in/whitneylindsey">
             <svg version="1.1" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 47.17 46.17" style="enable-background:new 0 0 47.17 46.17;" xml:space="preserve">
               <g id="linkedin">
                   <path d="M23.58,0.62c-12.4,0-22.46,10.06-22.46,22.46c0,12.4,10.06,22.46,22.46,22.46
                       c12.41,0,22.46-10.06,22.46-22.46C46.04,10.68,35.99,0.62,23.58,0.62z M17.67,32.5h-5v-14h5V32.5z M15,16.5h-0.03
                       c-1.58,0-2.61-0.96-2.61-2.32c0-1.38,1.06-2.38,2.67-2.38c1.61,0,2.61,0.97,2.64,2.35C17.67,15.51,16.64,16.5,15,16.5z M34.67,32.5
                       h-5v-7.27c0-1.9-0.68-3.19-2.39-3.19c-1.31,0-2.1,0.87-2.44,1.72c-0.13,0.3-0.17,0.72-0.17,1.15v7.6h-4.7c0,0,0.06-13,0-14h4.7
                       v2.17c1-0.96,1.9-2.33,4.41-2.33c3.11,0,5.59,2.02,5.59,6.35V32.5z"/>
               </g>
             </svg>
            </a>
          </div> <!--/.size -->

          <!-- GitHub -->
          <div class="size">
            <a href="https://github.com/LindseyWhitney">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 47.17 46.17" style="enable-background:new 0 0 47.17 46.17;" xml:space="preserve">
                <g id="github">
                        <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M23.58,0.61c-12.72,0-23.04,10.31-23.04,23.04
                            c0,10.18,6.6,18.81,15.76,21.86c1.15,0.21,1.57-0.5,1.57-1.11c0-0.55-0.02-2-0.03-3.92c-6.41,1.39-7.76-3.09-7.76-3.09
                            c-1.05-2.66-2.56-3.37-2.56-3.37c-2.09-1.43,0.16-1.4,0.16-1.4C9.99,32.79,11.21,35,11.21,35c2.06,3.52,5.39,2.5,6.7,1.91
                            c0.21-1.49,0.8-2.5,1.46-3.08c-5.12-0.58-10.49-2.56-10.49-11.39c0-2.51,0.9-4.57,2.37-6.18c-0.24-0.58-1.03-2.93,0.23-6.1
                            c0,0,1.93-0.62,6.34,2.36c1.84-0.51,3.81-0.77,5.77-0.78c1.96,0.01,3.93,0.26,5.77,0.78c4.4-2.98,6.33-2.36,6.33-2.36
                            c1.26,3.17,0.47,5.51,0.23,6.1c1.48,1.61,2.37,3.67,2.37,6.18c0,8.85-5.39,10.8-10.52,11.37c0.83,0.71,1.56,2.12,1.56,4.27
                            c0,3.08-0.03,5.56-0.03,6.32c0,0.62,0.41,1.33,1.58,1.11c9.15-3.05,15.74-11.68,15.74-21.86C46.62,10.93,36.31,0.61,23.58,0.61z"
                            />
                </g>
              </svg>
            </a>
          </div> <!--/.size -->

          <!-- CodePen -->
          <div class="size">
            <a href="http://codepen.io/LindseyWhitney/">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 47.17 46.17" style="enable-background:new 0 0 47.17 46.17;" xml:space="preserve">
                <g id="codepen">
                        <polygon points="12.06,21.08 12.06,25.08 15.05,23.08 		"/>
                        <polygon points="22.39,18.18 22.39,12.6 13.02,18.85 17.2,21.65 		"/>
                        <polygon points="34.15,18.85 24.78,12.6 24.78,18.18 29.96,21.65 		"/>
                        <polygon points="13.02,27.32 22.39,33.57 22.39,27.99 17.2,24.52 		"/>
                        <polygon points="24.78,27.99 24.78,33.57 34.15,27.32 29.96,24.52 		"/>
                        <polygon points="23.58,20.25 19.35,23.08 23.58,25.91 27.81,23.08 		"/>
                        <path d="M23.58,0.58c-12.43,0-22.5,10.07-22.5,22.5c0,12.43,10.07,22.5,22.5,22.5
                            c12.43,0,22.5-10.07,22.5-22.5C46.08,10.66,36.01,0.58,23.58,0.58z M37.5,27.32c0,0.05,0,0.1-0.01,0.16
                            c0,0.02-0.01,0.03-0.01,0.05c-0.01,0.03-0.01,0.07-0.02,0.1c-0.01,0.02-0.01,0.04-0.02,0.06c-0.01,0.03-0.02,0.06-0.03,0.09
                            c-0.01,0.02-0.02,0.04-0.03,0.06c-0.01,0.03-0.03,0.05-0.04,0.08c-0.01,0.02-0.02,0.04-0.03,0.05c-0.02,0.02-0.03,0.05-0.05,0.07
                            c-0.01,0.02-0.03,0.04-0.04,0.05c-0.02,0.02-0.04,0.04-0.06,0.06c-0.02,0.02-0.03,0.03-0.05,0.05c-0.02,0.02-0.04,0.04-0.07,0.06
                            c-0.02,0.01-0.04,0.03-0.05,0.04c-0.01,0-0.01,0.01-0.02,0.01l-12.72,8.48c-0.2,0.13-0.43,0.2-0.66,0.2
                            c-0.23,0-0.46-0.07-0.66-0.2L10.2,28.32c-0.01,0-0.01-0.01-0.02-0.01c-0.02-0.01-0.04-0.03-0.05-0.04
                            c-0.02-0.02-0.05-0.04-0.07-0.06c-0.02-0.01-0.03-0.03-0.05-0.05c-0.02-0.02-0.04-0.04-0.06-0.06c-0.01-0.02-0.03-0.03-0.04-0.05
                            c-0.02-0.02-0.03-0.05-0.05-0.07c-0.01-0.02-0.02-0.04-0.03-0.05c-0.01-0.03-0.03-0.05-0.04-0.08c-0.01-0.02-0.02-0.04-0.03-0.06
                            c-0.01-0.03-0.02-0.06-0.03-0.09c-0.01-0.02-0.01-0.04-0.02-0.06c-0.01-0.03-0.01-0.07-0.02-0.1c0-0.02-0.01-0.03-0.01-0.05
                            c-0.01-0.05-0.01-0.1-0.01-0.16v-8.48c0-0.05,0-0.1,0.01-0.16c0-0.02,0.01-0.03,0.01-0.05c0.01-0.03,0.01-0.07,0.02-0.1
                            c0.01-0.02,0.01-0.04,0.02-0.06c0.01-0.03,0.02-0.06,0.03-0.09c0.01-0.02,0.02-0.04,0.03-0.06c0.01-0.03,0.03-0.05,0.04-0.08
                            c0.01-0.02,0.02-0.04,0.03-0.06c0.02-0.02,0.03-0.05,0.05-0.07c0.01-0.02,0.03-0.04,0.04-0.05c0.02-0.02,0.04-0.04,0.06-0.06
                            c0.02-0.02,0.03-0.03,0.05-0.05c0.02-0.02,0.04-0.04,0.07-0.06c0.02-0.01,0.04-0.03,0.05-0.04c0.01,0,0.01-0.01,0.02-0.01
                            l12.72-8.48c0.4-0.27,0.92-0.27,1.33,0l12.72,8.48c0.01,0,0.01,0.01,0.02,0.01c0.02,0.01,0.04,0.03,0.05,0.04
                            c0.02,0.02,0.05,0.04,0.07,0.06c0.02,0.01,0.03,0.03,0.05,0.05c0.02,0.02,0.04,0.04,0.06,0.06c0.01,0.02,0.03,0.03,0.04,0.05
                            c0.02,0.02,0.03,0.05,0.05,0.07c0.01,0.02,0.02,0.04,0.03,0.06c0.01,0.03,0.03,0.05,0.04,0.08c0.01,0.02,0.02,0.04,0.03,0.06
                            c0.01,0.03,0.02,0.06,0.03,0.09c0.01,0.02,0.01,0.04,0.02,0.06c0.01,0.03,0.01,0.07,0.02,0.1c0,0.02,0.01,0.03,0.01,0.05
                            c0.01,0.05,0.01,0.1,0.01,0.16V27.32z"/>
                        <polygon points="35.1,25.08 35.1,21.08 32.11,23.08 		"/>
                </g>
              </svg>
            </a>
          </div> <!--/.size -->

          <!-- Twitter -->
          <div class="size">
            <a href="https://twitter.com/LindseyDWhitney">
               <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 47.17 46.17" style="enable-background:new 0 0 47.17 46.17;" xml:space="preserve">
                <g id="twitter">
                  <path d="M23.63,0.62c-12.4,0-22.46,10.06-22.46,22.46c0,12.4,10.06,22.46,22.46,22.46
                    c12.4,0,22.46-10.05,22.46-22.46C46.09,10.68,36.04,0.62,23.63,0.62z M32.6,19.59c0.01,0.2,0.01,0.4,0.01,0.6
                    c0,6.1-4.64,13.13-13.13,13.13c-2.61,0-5.03-0.76-7.08-2.07c0.36,0.04,0.73,0.06,1.1,0.06c2.16,0,4.15-0.74,5.73-1.98
                    c-2.02-0.04-3.72-1.37-4.31-3.2c0.28,0.05,0.57,0.08,0.87,0.08c0.42,0,0.76-0.05,1.15-0.16c-2.11-0.42-3.77-2.29-3.77-4.53v-0.06
                    c1,0.34,1.41,0.55,2.16,0.58c-1.24-0.83-2.02-2.24-2.02-3.84c0-0.85,0.25-1.64,0.64-2.32c2.28,2.79,5.69,4.63,9.52,4.82
                    c-0.08-0.34-0.11-0.69-0.11-1.05c0-2.55,2.07-4.62,4.62-4.62c1.33,0,2.53,0.56,3.37,1.46c1.05-0.21,2.04-0.59,2.93-1.12
                    c-0.34,1.08-1.08,1.98-2.03,2.55c0.93-0.11,1.82-0.36,2.65-0.73C34.29,18.12,33.5,18.94,32.6,19.59z"/>
                </g>
              </svg>
            </a>
          </div> <!--/.size -->

        </div> <!--/.row -->
      </footer>

      <!-- Scripts -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../js/jquery.hoverdir.js"></script>

      <script type="text/javascript">
        $(function() {
          console.log("hello");
          $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
        });
      </script>
      <script src="../js/scroll.js"></script>
      <script src="../js/dist/js/animsition.min.js"></script>
      <script>
        $(document).ready(function() {
        $(".animsition").animsition({
          inClass: 'fade-in',
          outClass: 'fade-out',
          inDuration: 1500,
          outDuration: 1500,
          linkElement: '.animsition-link',
          // e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
          loading: true,
          loadingParentElement: 'body', //animsition wrapper element
          loadingClass: 'animsition-loading',
          loadingInner: '', // e.g '<img src="loading.svg" />'
          timeout: false,
          timeoutCountdown: 5000,
          onLoadEvent: true,
          browser: [ 'animation-duration', '-webkit-animation-duration'],
          // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
          // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
          overlay : false,
          overlayClass : 'animsition-overlay-slide',
          overlayParentElement : 'body',
          transition: function(url){ window.location.href = url; }
          });
        });
      </script>

    </body>
  </html>
