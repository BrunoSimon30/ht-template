 <!-- services -->
 <div class="section position-relative">
         <div class="r-container">
            <div class="sub-heading position-absolute text-accent second" style="z-index: -1; right: 15%; top: -4%;">
               SERVICES</div>
            <div class=" row align-items-center mb-b6 ">
               <div class="col-md-8">
                  <div class="d-flex flex-row align-items-center gap-2">
                     <div class="border-bottom border-4 border-accent mb-5" style="width: 100px;"></div>
                     <h3 class="scrollanimation animated fadeInDown adr-9">
                        The Forjwell <br> <span class="sp-text">Tactical Execution</span>
                     </h3>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class=" ">
                     <p class=" ">
                        We build scientific growth engines for ambitious brands. Stop guessing with ads and start
                        engineering predictable outcomes.

                     </p>
                  </div>
               </div>
            </div>

            <?php
            $services = [
                [
                    'number' => '01',
                    'title' => 'Performance <br> Marketing',
                    'image' => 'assets/image/ser/s1.png',
                    'description' => 'Paid media management on Meta, Google, and TikTok that prioritizes ROAS over reach.',
                    'link' => '#',
                ],
                [
                    'number' => '02',
                    'title' => 'SEO (Search Engine Opt) ',
                    'image' => 'assets/image/ser/s2.png',
                    'description' => 'Paid media management on Meta, Google, and TikTok that prioritizes ROAS over reach.',
                    'link' => '#',
                ],
                [
                    'number' => '03',
                    'title' => 'AEO (Answer Engine Opt) ',
                    'image' => 'assets/image/ser/s3.png',
                    'description' => 'Paid media management on Meta, Google, and TikTok that prioritizes ROAS over reach.',
                    'link' => '#',
                ],
                [
                    'number' => '04',
                    'title' => 'Email Marketing',
                    'image' => 'assets/image/ser/s4.png',
                    'description' => 'Paid media management on Meta, Google, and TikTok that prioritizes ROAS over reach.',
                    'link' => '#',
                ],
                [
                    'number' => '05',
                    'title' => 'Website Development',
                    'image' => 'assets/image/ser/s5.png',
                    'description' => 'Paid media management on Meta, Google, and TikTok that prioritizes ROAS over reach.',
                    'link' => '#',
                ],
            ];
            ?>
            <div class="ser-wrap">
               <?php foreach ($services as $service): ?>
               <div class="marketing-card">
                  <div class="row align-items-center g-4">
                     <!-- Left Content -->
                     <div class="col-lg-3">
                        <div class="left-content">
                           <div class="number-circle">
                              <h5><?php echo htmlspecialchars($service['number']); ?></h5>
                           </div>
                           <h2 class="title"><?php echo $service['title']; ?></h2>
                        </div>
                     </div>
                     <!-- Image -->
                     <div class="col-lg-5 text-center">
                        <img src="<?php echo htmlspecialchars($service['image']); ?>" class="img-fluid marketing-img" alt="marketing">
                     </div>
                     <!-- Right Content -->
                     <div class="col-lg-4 sr-wrp">
                        <p class="description">
                           <?php echo htmlspecialchars($service['description']); ?>
                        </p>
                        <div class="w-max-content d-flex flex-row align-items-center gap-3 m-xl-0 mt-3 mx-auto">
                           <a class="btn btn-accent d-flex flex-row gap-3" href="<?php echo htmlspecialchars($service['link']); ?>">
                              <span>Book Strategy Call</span>
                              <i class="rtmicon rtmicon-arrow-up-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endforeach; ?>
            </div>

         </div>

      </div>
      <!-- End services -->