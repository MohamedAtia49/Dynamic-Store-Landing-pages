<section class="slide">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <?php for ($i=1; $i <= 10 ; $i++) { ?>
                <div class="carousel-item <?php if($i == 4) echo 'active' ;?>">
                  <img src="images/slide/s<?=$i?>.jpg" class="d-block w-100" alt="...">
                </div> <!-- carousel-item -->
              <?php } ?>   
            </div> <!-- carousel-inner -->

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
</section>