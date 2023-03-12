  </body>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer mx-auto mt-3">
    <div class="copyright">
      &copy; Copyright <strong><span>DevWork</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a target="_blank" href="https://github.com/RaiA133">Raie Aswajjillah</a>
    </div>
  </footer>
  <!-- End Footer -->



  <!-- link bootstrap -->
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js">
  </script>

  <script>
    // Look for .hamburger
    var hamburger = document.querySelector(".hamburger");
    // On click
    hamburger.addEventListener("click", function() {
      // Toggle class "is-active"
      hamburger.classList.toggle("is-active");
      // Do something else, like open/close menu
    });
  </script>

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

  <!-- link js astropos -->
  <script src="<?= base_url(); ?>node_modules/atropos/atropos.min.js"></script>
  <script>
    const myAtropos = Atropos({
      el: '.my-atropos',
      // rest of parameters
    });
  </script>

  </html>