<div class="section-prec position-relative">
         <div class="r-container">
            <div class="sub-heading position-absolute text-accent second" style="z-index: -1; right: 15%; top: -4%;">
               FUNNELS</div>
            <div class=" row align-items-center mb-b6 ">
               <div class="col-md-8">
                  <div class="d-flex flex-row align-items-center gap-2">
                     <div class="border-bottom border-4 border-accent mb-5" style="width: 100px;"></div>
                     <h3 class="scrollanimation animated fadeInDown adr-9">
                        Specialized <br> <span class="sp-text">Funnels We Offer</span>
                     </h3>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class=" ">
                     <p class=" ">
                        The traditional agency model is broken. It focuses on vanity metrics rather than the holistic
                        revenue engine.
                     </p>
                  </div>
               </div>
            </div>
            <?php
            $funnels = [
                ['image' => 'assets/image/funnal/f1.png', 'title' => 'Ecommerce', 'description' => 'Precision targeting across paid & organic channels.'],
                ['image' => 'assets/image/funnal/f2.png', 'title' => 'SaaS', 'description' => 'Precision targeting across paid & organic channels.'],
                ['image' => 'assets/image/funnal/f3.png', 'title' => 'Coaches', 'description' => 'Precision targeting across paid & organic channels.'],
                ['image' => 'assets/image/funnal/f4.png', 'title' => 'Local Business', 'description' => 'Precision targeting across paid & organic channels.'],
            ];
            ?>
            <div class="funnal">
               <div class="row">
                  <?php foreach ($funnels as $funnel): ?>
                  <div class="col-md-3">
                     <div class="process-box">
                        <img src="<?php echo htmlspecialchars($funnel['image']); ?>" alt="">
                        <div class="process-space"></div>
                        <div class="process-in">
                           <h4><?php echo htmlspecialchars($funnel['title']); ?></h4>
                           <p><?php echo htmlspecialchars($funnel['description']); ?></p>
                        </div>
                     </div>
                  </div>
                  <?php endforeach; ?>
               </div>
            </div>
         </div>

      </div>