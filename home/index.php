<?php include_once "../includes/header.php"; ?>
<section id="hero-caro" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/carousels/fashion.jpg" class=" w-100" alt=<?=$busName."-eggs"?> />
      <div class="overlay flexy-col">
        <h3><?=$busName ?></h3>
        <p><?=$shortTxt?></p>
        <a data-toggle="modal" data-target="#function-modal">
            <button class="hero-func">Email Us</button>
        </a>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../assets/carousels/girl.jpg" class=" w-100" alt=<?=$busName."-table"?> />
    <div class="overlay">
        <h3><?=$busName ?></h3>
        <p><?=$shortTxt?></p>
        <a data-toggle="modal" data-target="#function-modal">
            <button class="hero-func">Call Us</button>
        </a>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../assets/carousels/woman.jpg" class=" w-100" alt=<?=$busName."-cookies"?> />
    <div class="overlay">
        <h3><?=$busName ?></h3>
        <p><?=$shortTxt?></p>
        <a data-toggle="modal" data-target="#function-modal">
            <button class="hero-func">WhatsApp</button>
        </a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#hero-caro" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#hero-caro" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</section>
<!-- ========================================== 
HERO END
BEGINING OF INTRO
========================================== -->
<section class="container-fluid" id="intro">
    <div class="container">
    <h2><?=$busName?></h2>
        <div class="row">
            <article class="col-lg-3 col-md-3 col-sm-12">
                <aside class="flex-col">
                    <img src="../assets/intro/cookies.jpg" alt='<?=$busName."-imgaes"?>' />
                    <h5>Facial</h5>
                    <p><?=$shortTxt?></p>
                </aside>
            </article>
            <article class="col-lg-6 col-md-6 col-sm-12">
                <aside class="flex-col">
                    <img src="../assets/intro/three.png" alt='<?=$busName."-imgaes"?>' />
                    <h5>Nails</h5>
                    <p><?=$longTxt?></p>
                </aside>
            </article>
            <article class="col-lg-3 col-md-3 col-sm-12">
                <aside class="flex-col">
                    <img src="../assets/intro/muffins.jpg" alt='<?=$busName."-imgaes"?>' />
                    <h5>Hair</h5>
                    <p><?=$shortTxt?></p>
                </aside>
            </article>
        </div>
    </div>
</section>
<!-- ========================================== 
END INTRO
BEGINING OF ABOUT
========================================== -->
<section class="container-fluid flexy" id="about">
    <div class="container">
        <div class="row">
            <article class="col-lg-6 col-md-6 col-sm-12">
                <aside class="flex-cen">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <img src="../assets/welcome/woman-g05630fe14_640.jpg" alt='<?=$busName."-office"?>' />
                        </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <img src="../assets/welcome/makeup-gba4f2fec2_1280.jpg" alt='<?=$busName."-office"?>' />
                            </div>
                    </div>
                </aside>
            </article>
            <article class="col-lg-6 col-md-6 col-sm-12 content">
                <aside class="flex-col">
                    <div class="flex-col">
                        <figure class="heading">
                            <p class="welcome">WELCOME</p>
                            <h4><?=$busName?></h4>
                        </figure>
                        <p class="detail"><?=$busDisc ?></p>
                        <p class="detail"><?=$motto ?></p>
                    </div>
                    <div class="flex-col">
                    <a data-toggle="modal" data-target="#function-modal">
                        <button class="readomore">READ</button>
                    </a>
                    </div>
                </aside>
            </article>
        </div>
    </div>
</section>
<!-- ========================================== 
HERO E ABOUT
BEGINING OF OFFERS
========================================== -->
<!-- <section class="container-fluid choose-ovals flexy" id="offers">
    <div class="container">
        <h3>OUR OFFERS</h3>
        <div class="row">
            <article class="col-lg-4 col-md-3 col-sm-12">
                <aside class="ovals flex-col">
                    <img src="assets/ovals/" alt=<?=$busName." why-us" ?> />
                    <h5>Facials</h5>
                    <p><?=$shortTxt?></p> 
                    <button>ENQUIRE</button>
                </aside>
            </article>
            <article class="col-lg-4 col-md-3 col-sm-12">
                <aside class="ovals flex-col">
                    <img src="assets/ovals/" alt=<?=$busName." why-us" ?> />
                    <h5>Facials</h5>
                    <p><?=$shortTxt?></p> 
                    <button>NAILS</button>
                </aside>
            </article>
            <article class="col-lg-4 col-md-3 col-sm-12">
                <aside class="ovals flex-col">
                    <img src="assets/ovals/" alt=<?=$busName." why-us" ?> />
                    <h5>Facials</h5>
                    <p><?=$shortTxt?></p> 
                    <button>HAIR</button>
                </aside>
            </article>
        </div>
    </div>
</section> -->
<!-- ========================================== 
OFFERS END
BEGINING OF ABOUT
========================================== -->
<section class="container-fluid flexy portfolio" id="why-choose-us">
    <div class="container">
        <div class="row">
            <article class="col-lg-6 col-md-6">
                <aside class="flexy-col" style="line-height: 0px">
                    <p>WE DO IT</p>
                    <h6>WITH PASSION</p>
                </aside>
            </article>
            <article class="col-lg-6 col-md-6">
                <aside class="flex-cen">
                    <div class="flexy filters">
                        <p class='filt-btn active' onclick="filterCater(this)">All</p>
                        <p class='filt-btn' onclick="filterCater(this)">Nails</p>
                        <p class='filt-btn' onclick="filterCater(this)">Eye Lashes</p>
                        <p class='filt-btn' onclick="filterCater(this)">Face</p>
                    </div>
                </aside>
            </article>
        </div>
        <div class="row">
            <div class="column eyelashes col-lg-4 col-md-4 col-sm-6">
                <div class="port-cont">
					<a href="../assets/filters/eyelash.jpg" title="">
                    <img src="../assets/filters/eyelash.jpg" alt=<?=$busName."-images"?>  class="img-fluid">
					</a>
				</div>
            </div>
            <div class="column hair col-lg-4 col-md-4 col-sm-6">
                <div class="port-cont">
					<a href="../assets/filters/face-mask.jpg" title="">
						<img src="../assets/filters/face-mask.jpg" alt=<?=$busName."-images"?> class="img-fluid">
					</a>
				</div>
            </div>
            <div class="column nails col-lg-4 col-md-4 col-sm-6">
                <div class="port-cont">
					<a href="../assets/filters/nails.jpg" title="">
                    <img src="../assets/filters/nails.jpg" alt=<?=$busName."-images"?>  class="img-fluid">
					</a>
				</div>
            </div>

            <div class="column hair col-lg-4 col-md-4 col-sm-6">
                <div class="port-cont">
					<a href="../assets/filters/clour.jpg" title="">
                    <img src="../assets/filters/clour.jpg" alt=<?=$busName."-images"?>  class="img-fluid">
					</a>
				</div>
            </div>
            <div class="column nails col-lg-4 col-md-4 col-sm-6">
                <div class="port-cont">
					<a href="../assets/filters/nails1.jpg" title="">
                    <img src="../assets/filters/nails1.jpg" alt=<?=$busName."-images"?>  class="img-fluid">
					</a>
				</div>
            </div>
            <div class="column eyelashes col-lg-4 col-md-4 col-sm-6">
                <div class="port-cont">
					<a href="../assets/filters/eyelash1.jpg" title="">
                    <img src="../assets/filters/eyelash1.jpg" alt=<?=$busName."-images"?>  class="img-fluid">
					</a>
				</div>
            </div>

            <div class="column nails col-lg-4 col-md-4 col-sm-6">
                <div class="port-cont">
					<a href="../assets/filters/nails2.jpg" title="">
                    <img src="../assets/filters/nails2.jpg" alt=<?=$busName."-images"?>  class="img-fluid">
					</a>
				</div>
            </div>
            <div class="column hair col-lg-4 col-md-4 col-sm-6">
                <div class="port-cont">
					<a href="../assets/filters/face.jpg" title="">
                    <img src="../assets/filters/face.jpg" alt=<?=$busName."-images"?>  class="img-fluid">
					</a>
				</div>
            </div>
            <div class="column eyelashes col-lg-4 col-md-4 col-sm-6">
                <div class="port-cont">
					<a href="../assets/filters/eyelash2.jpg" title="">
                    <img src="../assets/filters/eyelash2.jpg" alt=<?=$busName."-images"?>  class="img-fluid">
					</a>
				</div>
            </div>
        </div>
    </div>
</section>
<!-- ========================================== 
WHY CHOOSE US END
BEGINING OF ABOUT
========================================== -->
<section id="reviews" class="flex-col container-fluid">
    <div class="heading">
        <h3>WHAT THEY SAY</h3>
        <h5>ABOUT US</h5>
    </div>
<article class="carousel carousel-dark slide container" id="testimonials">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#testimonials" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#testimonials" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#testimonials" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#testimonials" data-bs-slide-to="3" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000" id="caro1">
      <div class="row">
        <article class="col-lg-6 col-md-6">
            <aside class="flex-col"></aside>
        </article>
        <article class="col-lg-6 col-md-6">
            <aside class="flex-col">
                <h4>Sophia</h4>
                <p><?=$testo ?></p>
                <div class="flex-cen social-icons">
                    <img src="../assets/social/whatsapp.png" alt="whatsapp-icon" />
                    <img src="../assets/social/facebook.png" alt="facebook-icon" />
                </div>
            </aside>
        </article>
      </div>
    </div>
    <div class="carousel-item " data-bs-interval="10000" id="caro2">
      <div class="row">
        <article class="col-lg-6 col-md-6">
            <aside class="flex-col"></aside>
        </article>
        <article class="col-lg-6 col-md-6">
            <aside class="flex-col">
                <h4>Goerge</h4>
                <p><?=$testo ?></p>
                <div class="flex-cen social-icons">
                    <img src="../assets/social/whatsapp.png" alt="whatsapp-icon" />
                    <img src="../assets/social/facebook.png" alt="facebook-icon" />
                </div>
            </aside>
        </article>
      </div>
    </div>
    <div class="carousel-item " data-bs-interval="10000" id="caro3">
      <div class="row">
        <article class="col-lg-6 col-md-6">
            <aside class="flex-col"></aside>
        </article>
        <article class="col-lg-6 col-md-6">
            <aside class="flex-col">
                <h4>Amelia</h4>
                <p><?=$testo ?></p>
                <div class="flex-cen social-icons">
                    <img src="../assets/social/whatsapp.png" alt="whatsapp-icon" />
                    <img src="../assets/social/facebook.png" alt="facebook-icon" />
                </div>
            </aside>
        </article>
      </div>
    </div>
    <div class="carousel-item " data-bs-interval="10000" id="caro4">
      <div class="row">
        <article class="col-lg-6 col-md-6">
            <aside class="flex-col"></aside>
        </article>
        <article class="col-lg-6 col-md-6">
            <aside class="flex-col">
                <h4>Dineo</h4>
                <p><?=$testo ?></p>
                <div class="flex-cen social-icons">
                    <img src="../assets/social/whatsapp.png" alt="whatsapp-icon" />
                    <img src="../assets/social/facebook.png" alt="facebook-icon" />
                </div>
            </aside>
        </article>
      </div>
    </div>
  </div>
  </article>
</section>
<!-- ========================================== 
TESTIMONIALS END
BEGINING OF DIVIDER
========================================== -->
<div class="container-fluid" id="section-divider">
        <article>
            <aside class="flexy">
                <div class="flexy-col">
                    <h3>APPLICATION ARE NOW OPEN</h3>
                    <p class="numbers"><?=$phone?></p>
                </div>
                <div class="flexy-col">
                    <h3>EROLL WITH US</h3>
                    <a data-toggle="modal" data-target="#function-modal"><p class="clickme">Here..</p></a>
                </div>
            </aside>
        </article>
</div>
<!-- ========================================== 
TESTIMONIALS END
BEGINING OF DIVIDER
========================================== -->
<!-- <section class="container-fluid" id="">
    <div class="container">
        <div class="row">
            <article class="col-lg-4 col-md-4 col-sm-12">
                <aside>

                </aside>
            </article>
        </div>
    </div>
</section> -->
<?php include_once "../includes/footer.php"; ?>