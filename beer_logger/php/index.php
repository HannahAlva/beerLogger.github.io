<?php
  include_once '/home/student/Desktop/Beer-Logger/php/includes/DataBaseHandler.inc.php';
?>

<html dir="ltr" lang="en"><head>
  <meta charset="utf-8">
  <title>FormPage</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/0.7.0/modern-normalize.min.css">
  <link rel="stylesheet" href="/home/student/Desktop/BeerLogger/_site/Beer-Logger/stylesheets/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&amp;display=swap" rel="stylesheet">
</head>
  <body>
    <main>
      <header>
        <h1>Form Page</h1>
      </header>

      <nav>
        <ul class="nav-top">
          <li><a href="index.html">Home</a></li>
          <li><a href="logger_history.html">Logger History</a></li>
          <li><a href="about.html">About</a></li>
          <li class="nav-push-right"><a href="contact_us.html">Contact Us</a></li>
        </ul>
      </nav>

<!-- **********************************************************************  -->
<!-- DESCRIPTION: This is a style section for the slidebar. This code was    -->
<!-- copied from W3Schools. Look up how to do slidebar and its the first     -->
<!-- W3schools link you see.                                                 -->
<!-- **********************************************************************  -->
<!-- STATUS: Working  ?                                                      -->
<!-- **********************************************************************  -->

      <section>
        <h2>Beer Logger - Form Page</h2>

        <p>Below is an attempt at making a dropdown menu for the beer form</p>

        <!-- **************************************************************  -->
        <!-- DESCRIPTION: This is the code for the dropdown             8    -->
        <!-- **************************************************************  -->
        <!-- STATUS: Working                                                 -->
        <!-- **************************************************************  -->
        <form action="/home/student/Desktop/Beer-Logger/html/submit-page.html">
          <label for="beers">Choose a Beer:</label>
          <select name="beers" id="beers">
            <!-- Loggers -->
            <optgroup label="Lager">
              <option value="Budlight">
                Budlight
              </option>
              <option value="The Crisp - Sixpoint Brewery">
                The Crisp - Sixpoint Brewery
              </option>
              <option value="Prima Pils - Victory Brewing Company">
                Prima Pils - Victory Brewing Company
              </option>
            </optgroup>
            <!-- Blondes -->
            <optgroup label="Blonde">
              <option value="Sol Drifter - MadTree Brewing">
                Sol Drifter - MadTree Brewing
              </option>
              <option value="Golden Ale Park - Uinta Brewing">
                Golden Ale Park - Uinta Brewing
              </option>
              <option value="Double Bean Blonde - Schlafly Beer">
                Double Bean Blonde - Schlafly Beer
              </option>
            </optgroup>
            <!-- Copy above <optgroup> and <option> section below here -->
          </select>
          <br></br>

          <!-- ************************************************************* -->
          <!-- DESCRIPTION: This is the code that creates the slider itself  -->
          <!-- ************************************************************* -->
          <!-- STATUS: Working                                               -->
          <!-- ************************************************************* -->
          <div class="slidecontainer">
            <p>Rating:</p>
            <input
              type="range"
              min="1" max="100"
              value="50" class-"slider" id="myRange">
            <p>Rating Value: <span id="demo"></span></p>
          </div>

          <!-- ************************************************************* -->
          <!-- DESCRIPTION: This is the code that creates the slider itself  -->
          <!-- ************************************************************* -->
          <!-- STATUS: Working                                               -->
          <!-- ************************************************************* -->
          <script>
            var slider = document.getElementById("myRange")
            var output = document.getElementById("demo")
            output.innerHTML - slider.value;

            slider.oninput = function(){
              output.innerHTML = this.value;
            }
          </script>


          <!-- Add submission to "Logger" -->
          <input type="submit" value="Submit">

          <?php
            $sql = "SELECT * FROM users;";
            $result = mysqli_query($connection, $sql);

            # the variable '$resultCheck' is the number of rows with data from the
            # result of our above query
            $resultCheck = mysqli_num_rows($result);

            # if the number of rows with data from our '$result' is > 0
            # AKA - "If there is data that we can access, do the following"
            if($resultCheck > 0){
              # insert every row of data into the variable '$row' (also becomes an array)
              while($row = mysqli_fetch_assoc($result))
              {
                echo $row['username'];
                echo "\r\n";
              }
            }
          ?>

        </form>
      </section>
    </main>
  </body>
</html>
