<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Find cure for diseases with local remedies - healNaturally</title>
  <!-- Fav icon link -->
  <link rel="shortcut icon" href="../assets/images/fav.ico" type="image/x-icon">
  <!-- Bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- custom style css -->
  <link rel="stylesheet" href="../src/components/style.css" />
  <!-- Disease style css -->
  <link rel="stylesheet" href="../src/components/diseases_style.css" />
  <!-- Custom JS  -->
  <script src="../src/components/script.js"></script>
</head>

<body class="disease-page-body">


  <main class="py-5 disease-main">
    <!-- first row and container for the heading and search button -->
    <div class="container pb-5">
      <div class="row d-flex align-items-center">
        <div class="col col-12 col-md-6 col-lg-8">
          <h1 class="find-cure-head">Find Your Cure: <span style="color: var(--green)">Natural Remedies for Diseases</span></h1>
        </div>
        <div class="col col-12 col-md-6 col-lg-4">
          <!-- search button form and elements -->
          <form method="GET" class="disease-search-form">
            <div class="disease-input-div d-flex gap-0">
              <input type="text" class="disease-input" name="search-disease" placeholder="Search for diseases, herbal remedies, common ailments" required>
              <button type="submit" class="disease-submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </form>
          <!-- form ends here -->
        </div>
      </div>
    </div>

    <!-- second container and row to display fetched diseases -->
    <div class="container-fluid second-container">
      <div class="row">

        <!-- disease box to be fetched from the db -->
        <div class="disease-box col-12 col-md-12 col-lg-12 my-4">

          <!-- first row of disease title,description and image -->
          <div class="row d-box-row-1 d-flex align-items-center">
            <div class="col col-12 col-md-6 col-lg-6">
              <div class="disease-title-div">
                <h2>Common Cold</h2>
              </div>
              <div class="disease-desc-div">
                <p>A viral infection of your nose and throat (upper respiratory tract).</p>
              </div>
              <div class="disease-symptoms-div">
                <h5>Symptoms:</h5>
                <ul>
                  <li>Runny or stuffy nose</li>
                  <li>Sore throat</li>
                  <li>Cough</li>
                  <li>Congestion</li>
                  <li>Slight body aches or a mild headache</li>
                  <li>Sneezing</li>
                  <li>Low-grade fever</li>
                  <li>Generally feeling unwell (malaise)</li>
                </ul>
              </div>
            </div>
            <div class="col col-12 col-md-6 col-lg-6 disease-img-div">
              <img src="https://integrishealth.org/-/media/misc/woman-sneezing-sneeze-155785803.ashx?revision=92569ed4-e998-4883-843e-21dcf76f2be1" alt="common-cold">
            </div>
          </div>
          <!-- first row ends here -->
          <!--second row of usage guide and natural ingredients  -->
          <div class="row d-box-row-2 mt-4 mb-1">
            <h3>Herbal remedy for cure</h3>
            <div class="col col-12 col-md-6 col-lg-6">
              <div class="usage-guide-div">
                <h5>Usage Guide</h5>
                <p>
                  <strong>Honey and Lemon Tea:</strong> Mix one tablespoon of honey and juice of half a lemon in a cup of warm water. Drink this mixture twice a day.
                </p>
                <p>
                  <strong>Ginger Tea:</strong> Boil a few slices of ginger in water for 10 minutes. Strain the water, add a teaspoon of honey and drink it warm.
                </p>
                <p>
                  <strong>Garlic:</strong> Add minced garlic to soups or stews. Alternatively, consume one raw garlic clove daily.
                </p>
              </div>
            </div>
            <div class="col col-12 col-md-6 col-lg-6">
              <div class="natural-ingr-div">
                <h5>Natural Ingredients</h5>
                <ul>
                  <li>Honey</li>
                  <li>Ginger</li>
                  <li>Lemon</li>
                  <li>Garlic</li>
                </ul>
              </div>
            </div>
          </div>

          <button class="read-btn mb-4">Read more</button>

          <!-- second row ends here -->
          <div class="comments-btn-div">
            <!-- comment button goes here -->
            <button class="comment-btn">
              <span class="number-of-comments">
                23
              </span>
              <span class="comment-btn-text">Comments</span>
            </button>
            <!-- comment button ends here -->
          </div>
          <!-- Third row of comments -->
          <!-- <div class="row d-box-row-3 my-3 comment-section">
            <div class="col-12 col-lg-8 comment-form-div my-3">
              <h5 class="text-dark">Leave a comment</h5>
              <form class="comment-form">
                <input type="text" name="user-comment" class="user-comment" id="user-comment" placeholder="Have you tried this remedy? Share your thoughts...">
                <button type="submit" class="add-comment-btn">Comment</button>
                <button type="reset" class="cancel-comment-btn">Cancel</button>
              </form>
            </div>
            <hr>
            <div class="loop-all-comments">
              <div class="comment-display-div my-2">
                <div class="commentor-info-div">
                  <h5 class="commentor-name">User comment</h5>
                  <p class="commentor-date">2024-08-08</p>
                </div>
                <p class="comment-para">Textual data is information that is stored
                </p>
              </div>

              
            </div> -->
          </div>
        </div>
        <!-- Disease box ends here -->




      </div>
    </div>
  </main>




  <!-- Footer -->
   <?php include('../src/components/footer_new.php') ?>
  <!-- Footer -->


  <!-- Bootstrap script cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>