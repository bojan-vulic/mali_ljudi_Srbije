 <!-- footer -->
 <footer class="py-5">
     <div class="container">
         <div class="row">

             <?php if(is_active_sidebar('footer-1')) : ?>
             <?php dynamic_sidebar('footer-1'); ?>
             <?php endif; ?>
            

             <?php if(is_active_sidebar('footer-2')) : ?>
             <?php dynamic_sidebar('footer-2'); ?>
             <?php endif; ?>

             <?php if(is_active_sidebar('footer-3')) : ?>
             <?php dynamic_sidebar('footer-3'); ?>
             <?php endif; ?>

         </div>
          
     </div>
 </footer>

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

 <?php wp_footer(); ?>
 </body>

 </html>
