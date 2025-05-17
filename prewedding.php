<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>18percentgrey</title>
  <link rel="icon" href="img/Logo.png" />
</head>

<body>
  <?php
  require_once 'header.php'
  ?>

  <div class="container mt-3 mb-4  " style="padding-left: 15px; padding-right: 15px;">

    <div class="d-flex flex-wrap align-items-center justify-content-center gap-2 mt-3 text-center" id="sort-container">
      <p class="mb-0">Sort by:</p>
      <div class="d-flex flex-wrap align-items-center gap-2">
        <button class="sort-btn fw-bold" onclick="showContent('all')">All</button>
        <span class="separator">/</span>
        <button class="sort-btn fw-bold" onclick="showContent('Pre-Wedding')">Pre-Wedding</button>
        <span class="separator">/</span>
        <button class="sort-btn fw-bold" onclick="showContent('Engagement')">Engagement</button>
        <span class="separator">/</span>
        <button class="sort-btn fw-bold" onclick="showContent('Reception')">Reception</button>
      </div>
    </div>

    <div class="row g-3 mt-2  ">
      <div class="wrap">
        <div class="col-12 col-md-6 col-lg-4" data-type="Reception">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://www.facebook.com/share/p/18p1hPx6Q1/"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/hall.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">The HALLS Bangkok</h5>
                <p class="card-text">Pop & Bird</p>
              </div>
            </a>
          </div>
        </div>
         <div class="col-12 col-md-6 col-lg-4" data-type="Reception">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://www.facebook.com/share/p/1BQhck7Up3/"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/MP.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">Connext Sriracha</h5>
                <p class="card-text">May & Phop </p>
              </div>
            </a>
          </div>
        </div>
         <div class="col-12 col-md-6 col-lg-4" data-type="Engagement">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://www.facebook.com/share/p/19FTygQ6UQ/"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/found.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">Found</h5>
                <p class="card-text">Maprang & Shen </p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Reception">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://www.facebook.com/share/p/1AbH1bP9G6/"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/graph.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">GRAPH Hotels</h5>
                <p class="card-text">Yim & Jay </p>
              </div>
            </a>
          </div>
        </div>
          <div class="col-12 col-md-6 col-lg-4" data-type="Engagement">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://www.facebook.com/share/p/19JW6HqkTw/"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/banyan.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">Banyan Tree Bangkok</h5>
                <p class="card-text">Napassorn & Thanat </p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Reception">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://web.facebook.com/18percentgrey.studio/posts/pfbid0HP29TyAUPCZYus7NggXLZ2YkfPXEB18H91nf5sTiwtGPTUeKmfijX4xtLg5PNjp2l"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/ray.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">RAY VENUE</h5>
                <p class="card-text">Marsha & Earth </p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Engagement">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://www.facebook.com/share/p/197wPBZdmK/"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/G&H.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">Vivace Wedding Kamol Rama 5</h5>
                <p class="card-text">Gift & Hap</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Reception">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://web.facebook.com/18percentgrey.studio/posts/pfbid0HP29TyAUPCZYus7NggXLZ2YkfPXEB18H91nf5sTiwtGPTUeKmfijX4xtLg5PNjp2l"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/pd1.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">Once Upon a Time</h5>
                <p class="card-text">Mooham & Boy</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Engagement">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://web.facebook.com/18percentgrey.studio/posts/pfbid02DvHsqUheT4u9HTyggQuTAwT1Vp1hgcH2vAvzBXub6uacvgLVnRFdDSzydkT5Uaypl"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/pd1.2.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">Once Upon a Time</h5>
                <p class="card-text">Mooham & Boy</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Engagement">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://web.facebook.com/18percentgrey.studio/posts/pfbid038DVZrNi8z3SEzw1eDr6tjt3CjdgZZQVptte3DbN5M8FZm1UXJJrYhAHwTmSzkjFyl"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/pd2.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">Engagement The Eros</h5>
                <p class="card-text">Mee & Vic</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Reception">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://web.facebook.com/18percentgrey.studio/posts/pfbid02n455LyNLARaBxFQmfj3W73CrjcK4SWPPWgv5aAxnNUThekhTiLhWArmgJHYHfsPGl"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/pd3.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">GRAPH Hotels</h5>
                <p class="card-text">Ying & Bee</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Pre-Wedding">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://web.facebook.com/18percentgrey.studio/posts/pfbid035F3tQMz16FejCrzfXYkn1a2TdeTXWWGwb9JvUFxwhfs1JUPhp8ckM8fxrETN45q2l"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/pd4.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">Wat Ratchabophit Sathitmahasimaram</h5>
                <p class="card-text">Ying & Bee</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Engagement">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://web.facebook.com/18percentgrey.studio/posts/pfbid02PK9A5piMvfMC5wq9ufrYRosYg2mGS3YscuKRHxB48uMcZhsZsyy6DfFCAPU54EiGl"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/pd5.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">The Petal Garden & Studio Bangkok</h5>
                <p class="card-text">Nam & Irwin</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Reception">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://web.facebook.com/18percentgrey.studio/posts/pfbid02kevoMdEtE3XXcEEs3RxHcafDN1oWMJeQqSk4BVKSqaJrNvNiW7tL8AdeQ6HMVMmal"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/pt6.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">The Peninsula Bangkok</h5>
                <p class="card-text">Pim & Benz</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Reception">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://web.facebook.com/18percentgrey.studio/posts/pfbid02UtQMBijFu5G1rwio8uEcaY1rJHLnDBu8pesSHZ3CYkT4ynMeykKPEqXcVfpYMhP7l"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/pd6.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">AVA TRIVI Studio</h5>
                <p class="card-text">Film & Pete</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Reception">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://web.facebook.com/18percentgrey.studio/posts/pfbid0bJ3X4zRgjoBEQa61zyok4uG9cz8ptf56n95pU4yYjYeV12WvsHv4zBtSQHTnfA5l"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/pd7.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">NT Grand Ballroom</h5>
                <p class="card-text">Natt & Gun</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Engagement">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://web.facebook.com/18percentgrey.studio/posts/pfbid02PaDGunsG3MonP5XyoG7a2pGkSVKoxCQEGL4k1Vn7gg8qqfqEXPBwPNLtQ9LZpcuXl"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/pd8.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">NT Grand Ballroom</h5>
                <p class="card-text">Natt & Gun</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Engagement">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://web.facebook.com/18percentgrey.studio/posts/pfbid0hwSxpbp2wyEfojH8dLVu4bUdsqzLujXJQ2kGGaeXd8CH7eoSvDcNpkMNNPE8LekAl"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/pd9.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">Sacred Heart Catholic Church</h5>
                <p class="card-text">Aor + Gam</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4" data-type="Reception">
          <div class="card fadeup mb-3 custom-card border-0" id="hover-card">
            <a href="https://web.facebook.com/18percentgrey.studio/posts/pfbid0RXaCJ9YPH7H8qXbRHmJ6iC5pKsiGJBdY7gMNjCpbGZqRnQ6jkBAF52ije7GqPjwml"
              target="_blank"
              class="text-decoration-none text-dark">
              <img src="img/pt1.jpg" class="card-img-top img-fluid" alt="Image">
              <div class="card-body text-center">
                <h5 class="card-title">CAFE DEE HOUSE - Bangsaen</h5>
                <p class="card-text">Aor + Gam</p>
              </div>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>









  <?php
  require_once 'footer.php'
  ?>

  <script src="js/script.js"></script>
</body>

</html>