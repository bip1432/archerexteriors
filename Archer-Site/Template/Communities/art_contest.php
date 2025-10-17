<?php
// Set Meta Tags
$this->set('title', 'Color the World with Archie Art Contest | Kids & Teens National Art Competition | Archer Exteriors');
$this->set('metaDescription', 'Join the Color the World with Archie Art Contest, a national art competition for kids and teens ages 5–16. Celebrate creativity, imagination, and community with Archer Exteriors. Discover contest details, categories, winners, and how young artists are bringing Archie to life.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Color the World with Archie, Archer Exteriors art contest, kids art contest, national art contest for children, art contest ages 5–16, creative kids competition, student art challenge, Archie art contest winners, kids drawing competition USA, children’s creativity contest');
$this->set('ogTitle', 'Color the World with Archie Art Contest | Kids & Teens National Art Competition | Archer Exteriors');
$this->set('ogDescription', 'Join the Color the World with Archie Art Contest, a national art competition for kids and teens ages 5–16. Celebrate creativity, imagination, and community with Archer Exteriors. Discover contest details, categories, winners, and how young artists are bringing Archie to life.');
$this->set('ogImage', $this->Url->assetUrl('/img/archerexteriors-insignia.png', ['fullBase' => true]) . '?' . time());
$this->set('ogType', 'website');
$this->set('ogUrl', $this->Url->build('/art-contest', ['fullBase' => true]));
?>

<!-- banner-section -->
<section class="artContest_hero">
  <div class="auto-container">
    <div class="row flex-column-reverse flex-lg-row gx-lg-5 gy-5 text-center text-lg-start">
      <div class="col-xl-5 col-lg-6 align-self-center">
        <div class="contents">
          <h1 class="title">Color the World <br> with Archie!</h1>
          <p class="desc">The imagination and talent blew us away this year. We can’t wait to see what next year’s artists will create!</p>
        </div>
      </div>

      <div class="col-xl-7 col-lg-6">
        <!-- <?= $this->Html->image('art-contest/archer-exteriors-art-contest-winners-hero-banner.jpg', [
                'class' => 'img-fluid banner_img',
                'alt' => 'Color the World with Archie!',
                'title' => 'Color the World with Archie!'
              ]) ?> -->

        <div class="video-wrapper mx-auto mx-lg-0">
          <div class="responsive-video">
            <?= $this->Html->tag('iframe', '', [
              'src' => 'https://player.vimeo.com/video/1115474503?h=cf4764085c',
              'frameborder' => '0',
              'allowfullscreen' => true,
              'webkitallowfullscreen' => true,
              'mozallowfullscreen' => true
            ]) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- banner-section end -->


<section class="section artContest_winner">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Winners</h6>
      <h2>Winners of <span>2025 Art Contest</span></h2>
    </div>
  </div>

  <div class="v1_tab_wrap">
    <!-- Tabs -->
    <ul class="tab_nav" role="tablist">
      <li class="nav_link active" data-bs-toggle="tab" data-bs-target="#scribblers"
        type="button">Little Scribblers <br> <span>Ages 5-7</span></li>
      <li class="nav_link" data-bs-toggle="tab" data-bs-target="#explorers" type="button">Color
        Explorers <br> <span>Ages 8-10</span></li>
      <li class="nav_link" data-bs-toggle="tab" data-bs-target="#architects"
        type="button">Imagination Architects <br> <span>Ages 11-13</span></li>
      <li class="nav_link" data-bs-toggle="tab" data-bs-target="#visioneers"
        type="button">Visioneers <br> <span>Ages 14-17</span></li>
    </ul>

    <div class="container">
      <!-- Tab Content -->
      <div class="tab-content mt-4">

        <!-- Little Scribblers -->
        <div class="tab-pane fade show active" id="scribblers">
          <div class="row g-4">
            <div class="col-lg-4">
              <!-- 1st -->
              <div class="card first position-relative"
                data-title="Archie with his favorite book in a nook"
                data-meta="Zohaan Ahmad / Ages 5-7 / Miramar, FL"
                data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/little-scribblers-5-7/zohaan-ahmad-1-thumb.jpg"
                data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/little-scribblers-5-7/zohaan-ahmad-1.jpg"
                data-desc="Archer also needs an own time to relax, unwind and chill. With a favorite book in a nook"
                data-place="gold">

                <img src="https://www.archerexteriors.com/img/art-contest/winners-image/little-scribblers-5-7/zohaan-ahmad-1-thumb.jpg" class="art-thumb" alt="Archie with his favorite book in a nook" title="Archie with his favorite book in a nook" loading="lazy">

                <div class="card-body">
                  <div class="mb-2 place_badge">
                    <img src="https://www.archerexteriors.com/img/art-contest/winners-image/gold.png" style="color: var(--grad-light);font-size: 16px;" width="24" title="First Place" alt="First Place">
                    First Place (Prize: iPad)
                  </div>
                  <div class="title">Archie with his favorite book in a nook</div>
                  <div class="meta">Zohaan Ahmad / Ages 5-7</div>
                  <div class="meta">Miramar, FL</div>
                  <div class="small-desc">Archer also needs an own time to relax, unwind and chill. With a favorite book in a nook</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <!-- 2nd -->
              <div class="card second position-relative"
                data-title="Archie Builds A Rainbow House"
                data-meta="Meidelyn Sinaga / Ages 5-7 / Missoula, MT"
                data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/little-scribblers-5-7/meidelyn-sinaga-2-thumb.jpg"
                data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/little-scribblers-5-7/meidelyn-sinaga-2.jpg"
                data-desc="Archie the giraffe and his friends are busy building a colourful dream house. With tools in hand and big smiles on their faces, they works happily under the bright sun while a rainbow shines above. Together, they create a home full of love, joy, and friendship."
                data-place="silver">

                <img src="https://www.archerexteriors.com/img/art-contest/winners-image/little-scribblers-5-7/meidelyn-sinaga-2-thumb.jpg" class="art-thumb" alt="Archie Builds A Rainbow House" title="Archie Builds A Rainbow House" loading="lazy">

                <div class="card-body">
                  <div class="mb-2 place_badge">
                    <img src="https://www.archerexteriors.com/img/art-contest/winners-image/silver.png" style="color: var(--grad-light);font-size: 16px;" width="24" title="Second Place" alt="Second Place">
                    Second Place (Prize: Kindle Fire)
                  </div>
                  <div class="title">Archie Builds A Rainbow House</div>
                  <div class="meta">Meidelyn Sinaga / Ages 5-7</div>
                  <div class="meta"> Missoula, MT</div>
                  <div class="small-desc">Archie the giraffe and his friends are busy building a colourful dream house. With tools in hand and big smiles on their faces, they works happily under the bright sun while a rainbow shines above. Together, they create a home full of love, joy, and friendship.</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <!-- 3rd -->
              <div class="card third position-relative"
                data-title="Archie at San Antonio"
                data-meta="Yuvaan Mukherjee / Ages 5-7 / Leander, TX"
                data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/little-scribblers-5-7/yuvaan-mukherjee-3-thumb.jpg"
                data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/little-scribblers-5-7/yuvaan-mukherjee-3.jpg"
                data-desc="Archer went to see San Antonio; he is excited to see the Alamo and the Riverwalk. He was pleased to make new friends with the swan and turtle, and was very excited to see that the cypress trees were taller than him. it was a very sunny day, so he later walked across the bridge and drank some lemonade sitting under a colorful umbrella."
                data-place="bronze">

                <img src="https://www.archerexteriors.com/img/art-contest/winners-image/little-scribblers-5-7/yuvaan-mukherjee-3-thumb.jpg" class="art-thumb" alt="Archie at San Antonio" title="Archie at San Antonio" loading="lazy">

                <div class="card-body">
                  <div class="mb-2 place_badge">
                    <img src="https://www.archerexteriors.com/img/art-contest/winners-image/bronze.png" style="color: var(--grad-light);font-size: 16px;" width="24" title="Third Place" alt="Third Place">
                    Third Place (Prize: Art Supplies)
                  </div>
                  <div class="title">Archie at San Antonio</div>
                  <div class="meta">Yuvaan Mukherjee / Ages 5-7</div>
                  <div class="meta">Leander, TX</div>
                  <div class="small-desc">Archer went to see San Antonio; he is excited to see the Alamo and the Riverwalk. He was pleased to make new friends with the swan and turtle, and was very excited to see that the cypress trees were taller than him. it was a very sunny day, so he later walked across the bridge and drank some lemonade sitting under a colorful umbrella.</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Color Explorers -->
        <div class="tab-pane fade" id="explorers">
          <div class="row g-4">
            <div class="col-lg-4">
              <!-- 1st -->
              <div class="card first position-relative"
                data-title="The Moon Party with Archie"
                data-meta="Blake Ngai / Ages 8-10 / Santa Clarita, CA"
                data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/color-explorers-8-10/blake-ngai-1-thumb.jpg"
                data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/color-explorers-8-10/blake-ngai-1.jpg"
                data-desc="My wildest dream is having a space party on the moon. With zero gravity in space, I can float upside down, fly around to look at stars, run and leap over giant craters. Of course it isn't a party without Archie the giraffe. We would have the best time ever exploring the space!"
                data-place="gold">

                <img src="https://www.archerexteriors.com/img/art-contest/winners-image/color-explorers-8-10/blake-ngai-1-thumb.jpg" class="art-thumb" alt="The Moon Party with Archie" title="The Moon Party with Archie" loading="lazy">

                <div class="card-body">
                  <div class="mb-2 place_badge">
                    <img src="https://www.archerexteriors.com/img/art-contest/winners-image/gold.png" style="color: var(--grad-light);font-size: 16px;" width="24" title="First Place" alt="First Place">
                    First Place (Prize: iPad)
                  </div>
                  <div class="title">The Moon Party with Archie</div>
                  <div class="meta">Blake Ngai / Ages 8-10</div>
                  <div class="meta">Santa Clarita, CA</div>
                  <div class="small-desc">My wildest dream is having a space party on the moon. With zero gravity in space, I can float upside down, fly around to look at stars, run and leap over giant craters. Of course it isn't a party without Archie the giraffe. We would have the best time ever exploring the space!</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <!-- 2nd -->
              <div class="card second position-relative"
                data-title="Archie’s Sweet Sky Adventure"
                data-meta="Aanya Verma / Ages 8-10 / Tustin, CA"
                data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/color-explorers-8-10/aanya-verma-2-thumb.jpg"
                data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/color-explorers-8-10/aanya-verma-2.jpg"
                data-desc="Archie zoom high above Candy land, flying past lollipop , candy cane trees, candy castle& Gumball Machine House. Everything below him is bright, Sweet & Magical."
                data-place="silver">

                <img src="https://www.archerexteriors.com/img/art-contest/winners-image/color-explorers-8-10/aanya-verma-2-thumb.jpg" class="art-thumb" alt="Archie’s Sweet Sky Adventure" title="Archie’s Sweet Sky Adventure" loading="lazy">

                <div class="card-body">
                  <div class="mb-2 place_badge">
                    <img src="https://www.archerexteriors.com/img/art-contest/winners-image/silver.png" style="color: var(--grad-light);font-size: 16px;" width="24" title="Second Place" alt="Second Place">
                    Second Place (Prize: Kindle Fire)
                  </div>
                  <div class="title">Archie’s Sweet Sky Adventure</div>
                  <div class="meta">Aanya Verma / Ages 8-10</div>
                  <div class="meta">Tustin, CA</div>
                  <div class="small-desc">Archie zoom high above Candy land, flying past lollipop, candy cane trees, candy castle & Gumball Machine House. Everything below him is bright, Sweet & Magical.</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <!-- 3rd -->
              <div class="card third position-relative"
                data-title="Archie’s Adventure"
                data-meta="Harshith Guruvaurappan / Ages 8-10 / Apex, NC"
                data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/color-explorers-8-10/harshith-guruvaurappan-3-thumb.jpg"
                data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/color-explorers-8-10/harshith-guruvaurappan-3.jpg"
                data-desc="I wanted to explore my imagination by drawing Archie going on a exciting and adventurous expedition."
                data-place="bronze">

                <img src="https://www.archerexteriors.com/img/art-contest/winners-image/color-explorers-8-10/harshith-guruvaurappan-3-thumb.jpg" class="art-thumb" alt="Archie’s Adventure" title="Archie’s Adventure" loading="lazy">

                <div class="card-body">
                  <div class="mb-2 place_badge">
                    <img src="https://www.archerexteriors.com/img/art-contest/winners-image/bronze.png" style="color: var(--grad-light);font-size: 16px;" width="24" title="Third Place" alt="Third Place">
                    Third Place (Prize: Art Supplies)
                  </div>
                  <div class="title">Archie’s Adventure</div>
                  <div class="meta">Harshith Guruvaurappan / Ages 8-10</div>
                  <div class="meta">Apex, NC</div>
                  <div class="small-desc">I wanted to explore my imagination by drawing Archie going on a exciting and adventurous expedition.</div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Imagination Architects -->
        <div class="tab-pane fade" id="architects">
          <div class="row">
            <div class="col-lg-4">
              <!-- 1st -->
              <div class="card first position-relative"
                data-title="Archie The Time Traveler"
                data-meta="Antonio Coloma / Ages 11-13 / La Quinta, CA"
                data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/imagination-architects-11-13/antonio-coloma-1-thumb.jpg"
                data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/imagination-architects-11-13/antonio-coloma-1.jpg"
                data-desc="Archie going through a time portal to travel 66 million years ago to learn the ways of the dinosaurs."
                data-place="gold">

                <img src="https://www.archerexteriors.com/img/art-contest/winners-image/imagination-architects-11-13/antonio-coloma-1-thumb.jpg" class="art-thumb" alt="Archie The Time Traveler" title="Archie The Time Traveler" loading="lazy">

                <div class="card-body">
                  <div class="mb-2 place_badge">
                    <img src="https://www.archerexteriors.com/img/art-contest/winners-image/gold.png" style="color: var(--grad-light);font-size: 16px;" width="24" title="First Place" alt="First Place">
                    First Place (Prize: Laptop)
                  </div>
                  <div class="title">Archie The Time Traveler</div>
                  <div class="meta">Antonio Coloma / Ages 11-13</div>
                  <div class="meta">La Quinta, CA</div>
                  <div class="small-desc">Archie going through a time portal to travel 66 million years ago to learn the ways of the dinosaurs.</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <!-- 2nd -->
              <div class="card second position-relative"
                data-title="Ciao from Italy"
                data-meta="Emerson Rados / Ages 11-13 / Quitman, GA"
                data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/imagination-architects-11-13/emerson-rados-2-thumb.jpg"
                data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/imagination-architects-11-13/emerson-rados-2.jpg"
                data-desc="I used acrylic paint, acrylic paint markers, and water color pencils to create a painting inside a painting. The “Ciao from Italy” postcard features Archie doing the iconic pose with the Leaning Tower of Pisa, as it sits on my art desk with a pencil and paintbrush."
                data-place="silver">

                <img src="https://www.archerexteriors.com/img/art-contest/winners-image/imagination-architects-11-13/emerson-rados-2-thumb.jpg" class="art-thumb" alt="Ciao from Italy" title="Ciao from Italy" loading="lazy">

                <div class="card-body">
                  <div class="mb-2 place_badge">
                    <img src="https://www.archerexteriors.com/img/art-contest/winners-image/silver.png" style="color: var(--grad-light);font-size: 16px;" width="24" title="Second Place" alt="Second Place">
                    Second Place (Prize: iPad)
                  </div>
                  <div class="title">Ciao from Italy</div>
                  <div class="meta">Emerson Rados / Ages 11-13</div>
                  <div class="meta">Quitman, GA</div>
                  <div class="small-desc">I used acrylic paint, acrylic paint markers, and water color pencils to create a painting inside a painting. The “Ciao from Italy” postcard features Archie doing the iconic pose with the Leaning Tower of Pisa, as it sits on my art desk with a pencil and paintbrush.</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <!-- 3rd -->
              <div class="card third position-relative"
                data-title="Archie Helps Find The Way"
                data-meta="Evelyn Dinozo / Ages 11-13 / Levittown, PA"
                data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/imagination-architects-11-13/evelyn-dinozo-3-thumb.jpg"
                data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/imagination-architects-11-13/evelyn-dinozo-3.jpg"
                data-desc="After getting separated from the rest of the campers on a hiking trip, four children are left alone in a national forest with no idea how to get back to their wilderness camp. While taking a stroll through the forest, Archie happens to come across the lost children and volunteers to help them find their way back. Using his long neck to see over the trees, Archie leads the children on an adventure through the forest and back to their camp."
                data-place="bronze">

                <img src="https://www.archerexteriors.com/img/art-contest/winners-image/imagination-architects-11-13/evelyn-dinozo-3-thumb.jpg" class="art-thumb" alt="Archie Helps Find The Way" title="Archie Helps Find The Way" loading="lazy">

                <div class="card-body">
                  <div class="mb-2 place_badge">
                    <img src="https://www.archerexteriors.com/img/art-contest/winners-image/bronze.png" style="color: var(--grad-light);font-size: 16px;" width="24" title="Third Place" alt="Third Place">
                    Third Place (Prize: Kindle Fire)
                  </div>
                  <div class="title">Archie Helps Find The Way</div>
                  <div class="meta">Evelyn Dinozo / Ages 11-13</div>
                  <div class="meta">Levittown, PA</div>
                  <div class="small-desc">After getting separated from the rest of the campers on a hiking trip, four children are left alone in a national forest with no idea how to get back to their wilderness camp. While taking a stroll through the forest, Archie happens to come across the lost children and volunteers to help them find their way back. Using his long neck to see over the trees, Archie leads the children on an adventure through the forest and back to their camp.</div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Visioneers -->
        <div class="tab-pane fade" id="visioneers">
          <div class="row">
            <div class="col-lg-4">
              <!-- 1st -->
              <div class="card first position-relative"
                data-title="Archie's Underwater Dream"
                data-meta="Gabrielle Coloma / Ages 14-16 / La Quinta, CA"
                data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/visioneers-14-16/gabrielle-coloma-1-thumb.jpg"
                data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/visioneers-14-16/gabrielle-coloma-1.jpg"
                data-desc="Archie dives into the ocean's depths to explore the charming and surreal aquatic world."
                data-place="gold">

                <img src="https://www.archerexteriors.com/img/art-contest/winners-image/visioneers-14-16/gabrielle-coloma-1-thumb.jpg" class="art-thumb" alt="Archie's Underwater Dream" title="Archie's Underwater Dream" loading="lazy">

                <div class="card-body">
                  <div class="mb-2 place_badge">
                    <img src="https://www.archerexteriors.com/img/art-contest/winners-image/gold.png" style="color: var(--grad-light);font-size: 16px;" width="24" title="First Place" alt="First Place">
                    First Place (Prize: Laptop)
                  </div>
                  <div class="title">Archie's Underwater Dream</div>
                  <div class="meta">Gabrielle Coloma / Ages 14-16</div>
                  <div class="meta">La Quinta, CA</div>
                  <div class="small-desc">Archie dives into the ocean's depths to explore the charming and surreal aquatic world.</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <!-- 2nd -->
              <div class="card second position-relative"
                data-title="Building Community With Archie"
                data-meta="Lydia Ireland / Ages 14-16 / San Antonio, TX"
                data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/visioneers-14-16/lydia-ireland-2-thumb.jpg"
                data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/visioneers-14-16/lydia-ireland-2.jpg"
                data-desc="I envisioned Archie showing his love of animals, children and the community through volunteering at the local pet shelter. Serving in the community is one way that Archie meets new people and gives back."
                data-place="silver">

                <img src="https://www.archerexteriors.com/img/art-contest/winners-image/visioneers-14-16/lydia-ireland-2-thumb.jpg" class="art-thumb" alt="Building Community With Archie" title="Building Community With Archie" loading="lazy">

                <div class="card-body">
                  <div class="mb-2 place_badge">
                    <img src="https://www.archerexteriors.com/img/art-contest/winners-image/silver.png" style="color: var(--grad-light);font-size: 16px;" width="24" title="Second Place" alt="Second Place">
                    Second Place (Prize: iPad)
                  </div>
                  <div class="title">Building Community With Archie</div>
                  <div class="meta">Lydia Ireland / Ages 14-16</div>
                  <div class="meta">San Antonio, TX</div>
                  <div class="small-desc">I envisioned Archie showing his love of animals, children and the community through volunteering at the local pet shelter. Serving in the community is one way that Archie meets new people and gives back.</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <!-- 3rd -->
              <div class="card third position-relative"
                data-title="Archie Hooping with the Legends"
                data-meta="Mohammed Uzair / Ages 14-16 / Rochester Hills, MI"
                data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/visioneers-14-16/mohammed-uzair-3-thumb.jpg"
                data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/visioneers-14-16/mohammed-uzair-3.jpg"
                data-desc="Archie the amazing giraffe is seen dunking as NBA legends such as LeBron James, Kobe Bryant and Michael Jordan watch him in awe."
                data-place="bronze">

                <img src="https://www.archerexteriors.com/img/art-contest/winners-image/visioneers-14-16/mohammed-uzair-3-thumb.jpg" class="art-thumb" alt="Archie Hooping with the Legends" title="Archie Hooping with the Legends" loading="lazy">

                <div class="card-body">
                  <div class="mb-2 place_badge">
                    <img src="https://www.archerexteriors.com/img/art-contest/winners-image/bronze.png" style="color: var(--grad-light);font-size: 16px;" width="24" title="Third Place" alt="Third Place">
                    Third Place (Prize: Kindle Fire)
                  </div>
                  <div class="title">Archie Hooping with the Legends</div>
                  <div class="meta">Mohammed Uzair / Ages 14-16</div>
                  <div class="meta">Rochester Hills, MI</div>
                  <div class="small-desc">Archie the amazing giraffe is seen dunking as NBA legends such as LeBron James, Kobe Bryant and Michael Jordan watch him in awe.</div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>



<section class="section light ">
  <div class="container">
    <div class="row gy-4 gx-xl-5 text-center text-xl-start">
      <div class="col-xl-6 align-self-center">
        <?= $this->Html->image('art-contest/archer-exteriors-art-contest-beyond-imagination.png', [
          'class' => 'img-fluid d-none d-xl-block rad_4',
          'alt' => 'Beyond Imagination',
          'title' => 'Beyond Imagination'
        ]) ?>
        <?= $this->Html->image('art-contest/archer-exteriors-art-contest-beyond-imagination-sm.png', [
          'class' => 'img-fluid d-block d-xl-none mx-auto rad_4',
          'alt' => 'Beyond Imagination',
          'title' => 'Beyond Imagination'
        ]) ?>

        <h4 class="title_3 mt-4">A Special Shoutout to Thoughtful Masterpieces Where Creativity Speaks Beyond Color.</h4>
        <p class="mt-3">Some art shines not just in its colors but in the stories it dares to tell. These Honorable Mentions are more than brushstrokes and crayons—they are windows into young hearts and minds. Behind each thoughtful line and vibrant hue lies imagination that reaches deeper, carrying messages of kindness, hope, and wonder.</p>
        <p class="mt-3">We honor these masterpieces because they remind us that creativity isn’t only about what we see—it’s about what we feel. These young artists touched our hearts with visions that go beyond the canvas, reminding us of the beauty of sincerity, empathy, and dreams too big to be contained by paper.</p>

        <h4 class="title_4 mt-4">Here, we celebrate not just art, but the spirit that inspires it.</h4>

        <div class="shout_out_note mt-4">
          <?= $this->Html->image('art-contest/trophy.svg', [
            'class' => 'img-fluid',
            'width' => '80',
            'alt' => 'Special art supply gift',
            'title' => 'Special art supply gift'
          ]) ?>
          <p>All four shoutout submissions will receive a <b>special art supply gift</b>—something to keep their creative minds filled with colors, ideas, and endless imagination. </p>
        </div>

      </div>

      <div class="col-xl-6 align-self-center">
        <div class="shout_out_img_wrap">
          <div class="item mb-sm-4"
            data-title="Archie Paints a Museum Exhibit"
            data-meta="Marleina Dinozo / Ages 5-7 / Levittown, PA"
            data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/shout-out/marleina-dinozo-5-7-thumb.jpg"
            data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/shout-out/marleina-dinozo-5-7.jpg"
            data-desc="Archie helps the science museum paint their new Earth Kingdom exhibit. He helps the workers reach high places, holding paint buckets for them, and coming up with creative ideas for the new exhibit. He makes everyone happy while telling jokes.">
            <img class="shoutOut-thumb" src="https://www.archerexteriors.com/img/art-contest/winners-image/shout-out/marleina-dinozo-5-7-thumb.jpg" alt="Archie Paints a Museum Exhibit" title="Archie Paints a Museum Exhibit" loading="lazy">
            <div class="shout_out_text">
              <h4>Archie Paints a Museum Exhibit</h4>
              <p>Marleina Dinozo / Ages 5-7</p>
              <p style="line-height: 1;">Levittown, PA</p>
            </div>
          </div>

          <div class="item mt-sm-4"
            data-title="Archie work together at the community garden with Friends"
            data-meta="Ama Senevirathne / Ages 8-10 / Lake Worth, FL"
            data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/shout-out/ama-senevirathne-8-10-thumb.jpg"
            data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/shout-out/ama-senevirathne-8-10.jpg"
            data-desc="Archie and Friends are kind and help each other in the garden. Friends are from different backgrounds. They are kind to each other. They are enjoying the flowers they plant together.">
            <img class="shoutOut-thumb" src="https://www.archerexteriors.com/img/art-contest/winners-image/shout-out/ama-senevirathne-8-10-thumb.jpg" alt="Archie work together at the community garden with Friends" title="Archie work together at the community garden with Friends" loading="lazy">
            <div class="shout_out_text">
              <h4>Archie work together at the community garden with Friends</h4>
              <p>Ama Senevirathne / Ages 8-10</p>
              <p style="line-height: 1;">Lake Worth, FL</p>
            </div>
          </div>

          <div class="item"
            data-title="Inspirational Archie"
            data-meta="Aditya Jagan Mohan / Ages 11-13 / Somerset, NJ"
            data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/shout-out/aditya-jagan-mohan-11-13-thumb.jpg"
            data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/shout-out/aditya-jagan-mohan-11-13.jpg"
            data-desc="When the going gets tough, the tough get going. Archie reminds us all to never give up, no matter what life throws at us. Never get disheartened, and you will rise from the ashes like a phoenix.">
            <img class="shoutOut-thumb" src="https://www.archerexteriors.com/img/art-contest/winners-image/shout-out/aditya-jagan-mohan-11-13-thumb.jpg" alt="Inspirational Archie" title="Inspirational Archie" loading="lazy">
            <div class="shout_out_text">
              <h4>Inspirational Archie</h4>
              <p>Aditya Jagan Mohan / Ages 11-13</p>
              <p style="line-height: 1;">Somerset, NJ</p>
            </div>
          </div>

          <div class="item mt-sm-4"
            data-title="Archie the Roman Architect"
            data-meta="Tanvi Thalladi / Ages 14-16 / Windermere, FL"
            data-thumb="https://www.archerexteriors.com/img/art-contest/winners-image/shout-out/tanvi-thalladi-14-16-thumb.jpg"
            data-modal-img="https://www.archerexteriors.com/img/art-contest/winners-image/shout-out/tanvi-thalladi-14-16.jpg"
            data-desc="Archie walks down the streets of Rome, Italy and is mesmerized by the sights of the Colosseum, but, there is one problem! It appears to be unfinished! Archie ponders on how to complete this structure and then thinks of the perfect solution: call out to the Roman god Jupiter and ask him for a helping hand and lend Archie some electrifying lightning construction tools!">
            <img class="shoutOut-thumb" src="https://www.archerexteriors.com/img/art-contest/winners-image/shout-out/tanvi-thalladi-14-16-thumb.jpg" alt="Archie the Roman Architect" title="Archie the Roman Architect" loading="lazy">
            <div class="shout_out_text">
              <h4>Archie the Roman Architect</h4>
              <p>Tanvi Thalladi / Ages 14-16</p>
              <p style="line-height: 1;">Windermere, FL</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<section class="section drawing_medium">
  <div class="container">
    <div class="row gy-4 gx-lg-5">
      <div class="col-lg-6 align-self-center text-center text-lg-start">
        <?= $this->Html->image('art-contest/banner-judging-criteria.jpg', [
          'class' => 'rad_4',
          'alt' => 'Judging Criteria',
          'title' => 'Judging Criteria'
        ]) ?>
      </div>

      <div class="col-lg-6 align-self-center">
        <h2 class="text-white title_2">Judging Criteria</h2>

        <h4 class="title_4 text-white mt-4">Submissions will be judged based on:</h4>
        <ul class="check_list text-white mt-3">
          <li><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Creativity & Imagination</b> – How
              original and imaginative the concept and scene are.</span></li>
          <li><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Originality</b> – Unique ideas that
              stand out from the crowd.</span></li>
          <li><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Visual Impact</b> – Overall appeal and
              how striking or memorable the artwork is.</span></li>
          <li><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Theme Alignment (Archie & his
                world)</b> – How well the drawing incorporates Archie and fits the contest theme.</span></li>
          <li><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Use of Color</b> – Thoughtful and
              creative use of color to enhance the artwork.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>




<!-- artContest_prizes -->
<section class="section light">
  <div class="container">
    <div class="sec-title text-center">
      <h2>Prizes</h2>
      <p class="section_desc">Each age group will have <b>three winners</b>, selected based on <b>originality, imagination,</b> and
        <b>creativity</b> (not just technical skill). Prizes for chosen winners will be shipped to a valid
        residential address within the United States. P.O. Boxes are not eligible for delivery.
      </p>
    </div>

    <div class="price_list mt-5">
      <div class="prize_items my-5">
        <div>
          <?= $this->Html->image('art-contest/laptop.png', [
            'class' => 'img-fluid',
            'alt' => 'Laptop',
            'title' => 'Laptop'
          ]) ?>
        </div>
        <div>
          <?= $this->Html->image('art-contest/ipad.png', [
            'class' => 'img-fluid',
            'alt' => 'iPad',
            'title' => 'iPad'
          ]) ?>
        </div>
        <div>
          <?= $this->Html->image('art-contest/kindle-fire.png', [
            'class' => 'img-fluid',
            'alt' => 'Kindle Fire',
            'title' => 'Kindle Fire'
          ]) ?>
        </div>
        <div>
          <?= $this->Html->image('art-contest/art-supplies.png', [
            'class' => 'img-fluid',
            'alt' => 'Art Supplies',
            'title' => 'Art Supplies'
          ]) ?>
        </div>
      </div>

      <div class="row gy-4 justify-content-center">
        <div class="col-xxl-3 col-lg-6">
          <div class="item one">
            <h4>Group: Little Scribblers</h4>
            <h4>Ages 5-7:</h4>

            <ul class="check_list mt-2">
              <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>First Place:</b> iPad</li>
              <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Second Place:</b> Kindle Fire</li>
              <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Third Place:</b> Art Supplies</li>
            </ul>
          </div>
        </div>

        <div class="col-xxl-3 col-lg-6">
          <div class="item two">
            <h4>Group: Color Explorers</h4>
            <h4>Ages 8-10:</h4>

            <ul class="check_list mt-2">
              <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>First Place:</b> iPad</li>
              <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Second Place:</b> Kindle Fire</li>
              <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Third Place:</b> Art Supplies</li>
            </ul>
          </div>
        </div>

        <div class="col-xxl-3 col-lg-6">
          <div class="item three">
            <h4>Group: Imagination Architects</h4>
            <h4>Ages 11-13:</h4>

            <ul class="check_list mt-2">
              <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>First Place:</b> Laptop</li>
              <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Second Place:</b> iPad</li>
              <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Third Place:</b> Kindle Fire</li>
            </ul>
          </div>

        </div>

        <div class="col-xxl-3 col-lg-6">
          <div class="item four">
            <h4>Group: Visioneers</h4>
            <h4>Ages 14-16:</h4>

            <ul class="check_list mt-2">
              <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>First Place:</b> Laptop</li>
              <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Second Place:</b> iPad</li>
              <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Third Place:</b> Kindle Fire</li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <div class="d-flex gap-3 mt-5 align-items-center justify-content-center">
      <?= $this->Html->image('art-contest/svg/post-it.svg', [
        'alt' => 'All prizes are selected to support and encourage continued creativity and education.',
        'title' => 'All prizes are selected to support and encourage continued creativity and education.',
        'width' => '36'
      ]) ?>
      <p style="line-height: 1.4; font-size: 20px">All prizes are selected to support and encourage continued creativity and
        education.</p>
    </div>
  </div>
</section>
<!-- artContest_prizes end -->



<!-- artContest_announcement -->
<section class="two_col_section">
  <div class="outer_container">
    <div class="col left_col" style="background: -webkit-linear-gradient(-45deg, var(--grad-dark), var(--grad-light) 100%);">
      <div class="col_inner">
        <h2 class="mb-3 text-white">
          <?= $this->Html->image('art-contest/svg/announcement.svg', [
            'width' => '36',
            'class' => 'me-2',
            'alt' => 'Winners Announcement',
            'title' => 'Winners Announcement'
          ]) ?>Winners Announcement
        </h2>
        <p class="text-white">Winners will be announced on <b>1st October 2025</b> via <b><?= $this->Html->link('archerexteriors.com', '/', ['class' => 'link_reverse']) ?></b> and
          our social media platforms.</p>
        <ul class="check_list text-white mt-3">
          <li class="mb-3"><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span>Parents/Guardians of winners
              will be contacted directly via email or phone.</span></li>
          <li class="mb-3"><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span>All selected winners will be
              required to mail the original artwork to our corporate headquarters in New Jersey. </span></li>
          <li class="mb-3"><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span>Only original, hand-drawn
              artwork is eligible—no digital prints or computer-generated art will be accepted.</span></li>
          <li class="mb-3"><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span>A valid age verification
              document will be required for all winners.</span></li>
          <li class="mb-3"><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span>All winning artwork will be
              showcased across our platforms and proudly featured in our upcoming <b>"Color the World with Archie"</b>
              coloring book, to be shared with businesses, communities, charities, and families nationwide.</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="col right_col" style="background: #fff;">
      <div class="col_inner">
        <h2 class="mb-3">
          <?= $this->Html->image('art-contest/svg/alert-sign.svg', [
            'width' => '36',
            'class' => 'me-2',
            'alt' => 'Legal & Usage Note',
            'title' => 'Legal & Usage Note'
          ]) ?>Legal & Usage Note
        </h2>
        <p class="mb-3">All artwork submissions become the property of Archer Exteriors and may be used for marketing
          purposes, printed materials, promotional campaigns, and future brand-related content, including but not
          limited to coloring books, social media posts, TV commercials and community outreach materials.</p>
        <p>By submitting artwork, participants and their guardians acknowledge that:</p>

        <ul class="check_list mt-3">
          <li class="mb-3"><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Archer Exteriors will retain the original artwork submitted by all finalists and reserves the right to reproduce, publish, and distribute the artwork in any format.</li>
          <li class="mb-3"><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> The usage of submitted artwork does not
            constitute any financial royalty, compensation, or ownership rights now or in the future.</li>
          <li class="mb-3"><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> All contestants must reside in the United States and be between the ages of 5-16.</li>
          <li class="mb-3"><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Participation in the contest implies acceptance of these terms.</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- artContest_announcement end -->


<!-- Modal -->
<div class="modal modal-lg fade modal_v1" id="contestTermsModal" tabindex="-1" aria-labelledby="contestTermsModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-header-inner">
          <img class="img-fluid" src="./img/archer-icon-a-white.png" width="40" alt="Archer Exteriors"
            title="Archer Exteriors">
          <h1 class="modal-title fs-5" id="contestTermsModalLabel">Terms and Conditions of the Contest</h1>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
            class="fi fi-rr-cross"></i></button>
      </div>
      <div class="modal-body">
        <h4 class="mb-2">Legal & Usage Note:</h4>
        <p class="mb-3">All artwork submissions become the property of Archer Exteriors and may be used for marketing
          purposes, printed materials, promotional campaigns, and future brand-related content, including but not
          limited to coloring books, social media posts, TV commercials and community outreach materials.</p>
        <p>By submitting artwork, participants and their guardians acknowledge that:</p>

        <ul class="check_list mt-3">
          <li class="mb-3"><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Archer Exteriors will retain the original artwork submitted by all finalists and reserves the right to reproduce, publish, and distribute the artwork in any format.</li>
          <li class="mb-3"><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> The usage of submitted artwork does not
            constitute any financial royalty, compensation, or ownership rights now or in the future.</li>
          <li class="mb-3"><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> All contestants must reside in the United States and be between the ages of 5-16.</li>
          <li class="mb-3"><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Participation in the contest implies acceptance of these terms.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Winner Modal -->
<div class="modal_v1 modal fade" id="artModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <div class="header_info d-flex align-items-center gap-2">
          <img id="placeImg" src="https://www.archerexteriors.com/img/art-contest/winners-image/bronze.png" width="40" style="color: var(--grad-light);font-size: 16px;">
          <div>
            <h5 id="modalTitle" class="fs-5 text-white mb-0"></h5>
            <p id="modalMeta" class="text-white"></p>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal"><i class="fi fi-rr-cross"></i></button>
      </div>
      <div class="modal-body">
        <img id="modalImg" src="" alt="" title="" class="img-fluid rounded mb-3">
        <p id="modalDesc"></p>
      </div>
    </div>
  </div>
</div>

<!-- Shout-out Modal -->
<div class="modal fade modal_v1" id="shoutModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <div class="header_info">
          <h5 id="shoutModalTitle" class="fs-5 text-white mb-0"></h5>
          <p id="shoutModalMeta" class="text-white"></p>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal"><i class="fi fi-rr-cross"></i></button>
      </div>
      <div class="modal-body text-center">
        <img id="shoutModalImg" src="" alt="" title="" class="img-fluid rounded mb-3">
        <p id="shoutModalDesc"></p>
      </div>
    </div>
  </div>
</div>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    // --- Config ---
    const STAGGER_MS = 300; // time between reveals (ms)
    const BASE_DELAY = 20; // small base delay to allow layout settle

    // --- DOM refs for modal elements (cache for speed) ---
    const modalEl = document.getElementById('artModal');
    const modalTitleEl = document.getElementById('modalTitle');
    const modalMetaEl = document.getElementById('modalMeta');
    const modalImgEl = document.getElementById('modalImg');
    const modalDescEl = document.getElementById('modalDesc');
    const placeImgEl = document.getElementById('placeImg'); // place badge in header

    // guard: ensure modal parts exist
    function hasModalParts() {
      return modalEl && modalTitleEl && modalMetaEl && modalImgEl && modalDescEl && placeImgEl;
    }

    // map place -> badge image url (adjust URLs if needed)
    const placeImages = {
      gold: "https://www.archerexteriors.com/img/art-contest/winners-image/gold.png",
      silver: "https://www.archerexteriors.com/img/art-contest/winners-image/silver.png",
      bronze: "https://www.archerexteriors.com/img/art-contest/winners-image/bronze.png"
    };

    // human-friendly place labels for alt/title
    const placeLabels = {
      gold: '1st place',
      silver: '2nd place',
      bronze: '3rd place'
    };

    // token & loader references to cancel previous preloads
    let currentLoadToken = 0;
    let activeLoader = null;

    // --- Helper: open modal from card (preload + replace only after loaded) ---
    function openArtModalFromCard(card) {
      if (!card || !hasModalParts()) return;

      // text content: update immediately
      const title = card.dataset.title || '';
      const meta = card.dataset.meta || '';
      const desc = card.dataset.desc || '';

      modalTitleEl.textContent = title;
      modalMetaEl.textContent = meta;
      modalDescEl.textContent = desc;

      // handle place badge
      const place = (card.dataset.place || '').toLowerCase();
      if (place && placeImages[place]) {
        placeImgEl.src = placeImages[place];

        // Compose a descriptive alt/title: "<placeLabel> — <title>"
        const label = placeLabels[place] || place;
        const badgeText = title ? `${label} — ${title}` : label;

        placeImgEl.alt = badgeText;
        placeImgEl.title = badgeText;
        placeImgEl.style.display = ''; // make sure visible
      } else {
        // hide badge for non-ranked items and clear attributes
        placeImgEl.style.display = 'none';
        placeImgEl.alt = '';
        placeImgEl.title = '';
      }

      // choose image URL (fallbacks: data-modal-img -> data-img -> thumbnail src)
      const newImgUrl = card.dataset.modalImg || card.dataset.img || (card.querySelector('.art-thumb')?.src) || '';

      // increment token to invalidate previous loaders
      currentLoadToken += 1;
      const thisToken = currentLoadToken;

      // cancel previous loader (so its callbacks won't swap image later)
      if (activeLoader) {
        activeLoader.onload = null;
        activeLoader.onerror = null;
        activeLoader = null;
      }

      // Immediately clear the visible image so previous image is not shown
      modalImgEl.src = '';
      modalImgEl.alt = title;
      modalImgEl.title = title;

      // show modal immediately (it will be empty image until load completes)
      const bsModal = new bootstrap.Modal(modalEl);
      bsModal.show();

      // If there's nothing to load, leave src empty and return
      if (!newImgUrl) return;

      // preload new image
      const loader = new Image();
      activeLoader = loader;

      loader.onload = function() {
        // if a newer load started meanwhile, ignore this one
        if (thisToken !== currentLoadToken) return;
        // swap image src into modal
        modalImgEl.src = newImgUrl;
        // cleanup loader reference
        activeLoader = null;
      };

      loader.onerror = function() {
        if (thisToken !== currentLoadToken) return;
        activeLoader = null;
        // on error leave src empty (or optionally set to fallback)
        modalImgEl.src = '';
        modalImgEl.alt = title + ' (image failed to load)';
      };

      // start loading
      loader.src = newImgUrl;
    }

    // --- Initialize thumbnails from data-thumb if present ---
    document.querySelectorAll('.artContest_winner .tab-pane .card').forEach(card => {
      const thumb = card.dataset.thumb;
      if (thumb) {
        const img = card.querySelector('.art-thumb');
        if (img) img.src = thumb;
      }
    });

    // --- Ordered animate function (first -> second -> third) ---
    function animatePaneByRank(pane) {
      if (!pane) return;

      // pick in the order of rank classes so .first always shows first
      const orderSelectors = ['.first', '.second', '.third'];
      const cards = orderSelectors.map(sel => pane.querySelector(sel)).filter(Boolean);

      if (!cards.length) return;

      // prepare: set hidden state and ensure visible flag removed
      cards.forEach(card => {
        card.classList.remove('is-visible');
        card.classList.add('is-hidden');
        card.style.transitionDelay = '';
      });

      // reveal each card in order with staggered timeouts
      cards.forEach((card, i) => {
        setTimeout(() => {
          card.classList.remove('is-hidden');
          const onEnd = (e) => {
            if (e.propertyName === 'opacity') {
              card.classList.add('is-visible');
              card.style.transitionDelay = '';
              card.removeEventListener('transitionend', onEnd);
            }
          };
          card.addEventListener('transitionend', onEnd);
        }, BASE_DELAY + i * STAGGER_MS);
      });
    }

    // --- Animate initial active pane (if present) ---
    const initialPane = document.querySelector('.tab-pane.show') ||
      document.querySelector('.tab-pane.active') ||
      document.querySelector('.tab-pane');
    if (initialPane) animatePaneByRank(initialPane);

    // --- Hook into Bootstrap tab shown event to re-run ordered animation ---
    const tabButtons = Array.from(document.querySelectorAll('[data-bs-toggle="tab"]'));
    if (tabButtons.length) {
      tabButtons.forEach(btn => {
        btn.addEventListener('shown.bs.tab', (evt) => {
          const selector = evt.target?.getAttribute('data-bs-target') || evt.target?.dataset?.bsTarget;
          if (!selector) return;
          const pane = document.querySelector(selector);
          animatePaneByRank(pane);
        });
      });
    }

    // --- Delegated click handler for cards (prevents click while card is hidden) ---
    document.addEventListener('click', function(e) {
      const card = e.target.closest('.artContest_winner .tab-pane .card');
      if (!card) return;
      if (card.classList.contains('is-hidden')) return; // ignore until revealed

      // open modal using the shared function
      openArtModalFromCard(card);
    });

    // --- When the modal hides, clear the image and cancel pending loads ---
    if (modalEl) {
      modalEl.addEventListener('hidden.bs.modal', function() {
        // cancel any pending loader
        currentLoadToken += 1;
        if (activeLoader) {
          activeLoader.onload = null;
          activeLoader.onerror = null;
          activeLoader = null;
        }
        // clear image source so next open starts empty
        if (modalImgEl) {
          modalImgEl.src = '';
        }
        // hide place badge and clear its alt/title
        if (placeImgEl) {
          placeImgEl.style.display = 'none';
          placeImgEl.alt = '';
          placeImgEl.title = '';
        }
      });
    }

    // expose helpers optionally
    window.__artCards = {
      openArtModalFromCard,
      animatePaneByRank
    };
  });
</script>





<!-- Shout Out Modal Script  -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // --- DOM refs for shout modal ---
    const shoutModalEl = document.getElementById('shoutModal');
    const shoutTitleEl = document.getElementById('shoutModalTitle');
    const shoutMetaEl = document.getElementById('shoutModalMeta');
    const shoutImgEl = document.getElementById('shoutModalImg');
    const shoutDescEl = document.getElementById('shoutModalDesc');

    function hasShoutParts() {
      return shoutModalEl && shoutTitleEl && shoutMetaEl && shoutImgEl && shoutDescEl;
    }

    // preload cancellation token + active loader reference
    let shoutLoadToken = 0;
    let shoutActiveLoader = null;

    // initialize thumbnails from data-thumb (for all shout items)
    document.querySelectorAll('.shout_out_img_wrap .item').forEach(item => {
      const thumb = item.dataset.thumb;
      const imgEl = item.querySelector('img.shoutOut-thumb');
      if (thumb && imgEl) imgEl.src = thumb;
      // also ensure alt/title reflect data-title for accessibility
      const title = item.dataset.title || '';
      if (imgEl) {
        imgEl.alt = title;
        imgEl.title = title;
      }
      // keep the visible text (h4 / p) as-is, script uses data-* for modal content
    });

    // Open shout modal from an item element (preload and swap only after loaded)
    function openShoutModalFromItem(item) {
      if (!item || !hasShoutParts()) return;

      const title = item.dataset.title || '';
      const meta = item.dataset.meta || '';
      const desc = item.dataset.desc || '';
      const newImg = item.dataset.modalImg || item.dataset.img || (item.querySelector('img.shoutOut-thumb')?.src) || '';

      // update text immediately
      shoutTitleEl.textContent = title;
      shoutMetaEl.textContent = meta;
      shoutDescEl.textContent = desc;

      // increment token to invalidate previous loaders
      shoutLoadToken += 1;
      const thisToken = shoutLoadToken;

      // cancel previous loader callbacks
      if (shoutActiveLoader) {
        shoutActiveLoader.onload = null;
        shoutActiveLoader.onerror = null;
        shoutActiveLoader = null;
      }

      // immediately clear modal image so previous image never flashes
      shoutImgEl.src = '';
      shoutImgEl.alt = title;
      shoutImgEl.title = title;

      // show modal right away (image area will be empty until load completes)
      const bsModal = new bootstrap.Modal(shoutModalEl);
      bsModal.show();

      // nothing to load? just leave image empty
      if (!newImg) return;

      // preload new image
      const loader = new Image();
      shoutActiveLoader = loader;

      loader.onload = function() {
        // if another load started, ignore this one
        if (thisToken !== shoutLoadToken) return;
        shoutImgEl.src = newImg;
        shoutActiveLoader = null;
      };
      loader.onerror = function() {
        if (thisToken !== shoutLoadToken) return;
        shoutActiveLoader = null;
        shoutImgEl.src = '';
        shoutImgEl.alt = title + ' (image failed to load)';
      };
      loader.src = newImg;
    }

    // Delegated click handler for shout items (uses data-* attributes)
    document.addEventListener('click', function(e) {
      const item = e.target.closest('.shout_out_img_wrap .item');
      if (!item) return;
      // if you use .is-hidden animation on these items, prevent clicks while hidden
      if (item.classList.contains('is-hidden')) return;
      openShoutModalFromItem(item);
      e.stopPropagation();
    });

    // clear and cancel loader when shout modal hides
    if (shoutModalEl) {
      shoutModalEl.addEventListener('hidden.bs.modal', function() {
        shoutLoadToken += 1;
        if (shoutActiveLoader) {
          shoutActiveLoader.onload = null;
          shoutActiveLoader.onerror = null;
          shoutActiveLoader = null;
        }
        shoutImgEl.src = '';
      });
    }

    // optional export for debugging / manual control
    window.__shout = {
      openFromItem: openShoutModalFromItem
    };
  });
</script>