<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Anatomy</title>
  <link href="./anatomy-style.css"  rel="stylesheet" type="text/css"/>
  <script src="./jquery.min.js"></script>
  <script src="./anatomy-config.js"></script>
  <script src="./anatomy-script.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../fontawesome-free-5.15.2-web/css/all.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white text-danger fixed-top pt-3 shadow-sm">
    <div class="container">
    <img src="../img/logo.png" alt="logo" class="w-150px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item active">
            <a class="nav-link" href="#home">HOME <span class="sr-only">(current)</span></a>
          </li>
        <li class="nav-item ">
          <a class="nav-link text-uppercas text-secondary" href="#about">ABOUT</a>
        </li>
        <li class="nav-item mr-2">
          <a class="nav-link text-uppercas text-secondary" href="#contact">CONTACT</a>
        </li>
        
          <li class="nav-item mr-3">
          <a class="btn btn-info" href="Questions.php" role="button">Start Diagnostics</a>
          </li>
      </ul>
    </div>
    </div>
  </nav>
  <h2 class="m-5 pt-5">Where do you feel pain?</h2>
<span id="tip-basic"></span>
<div id="basic-wrapper" style="opacity:0;"><!-- basic-v2.6 -->
  <div id="basic-basea">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 1360" xml:space="preserve">
      <image overflow="visible" width="800" height="1360" xlink:href="images/modela.png" ></image>
      <path id="basic_1" class="head" fill="transparent" stroke="#8C8C8C" vector-effect="non-scaling-stroke" d="M456.334,107.667c-1.001,4.667-6.417,27.583-5.709,32.708c0.25,3.375-2.125,13-4.75,18.625c-9.208,14.333-24.041,23-45.708,23C378.5,182,359,162.667,356,158.667c-2.167-6.334-2.666-13.667-3.333-18.834c0-10-4.627-25.305-6.667-33c0.333-3.834-0.333-11.5-0.667-16.167s0.585-19.872,2.5-28.167c3-13,22.333-44.5,53.167-44.5c19,0,53.668,19,55.334,51C458,101,457.001,100.334,456.334,107.667z M337.833,105c-4,4-1.833,17-0.833,20.667s5.833,14.666,7.167,15.833c1.333,1.167,5.167,4.833,8.5-1.667c0-10-4.627-25.305-6.667-33C345,105.001,341.833,101,337.833,105z M450.625,140.375c3.75,6.375,8.875,3.25,10-1.75s7.625-7.875,6.75-23.625s-8.041-11.666-11.041-7.333C455.333,112.334,449.917,135.25,450.625,140.375z"/>
      <path id="basic_2" class="neck" fill="transparent" stroke="#8C8C8C" vector-effect="non-scaling-stroke" d="M345.667,243.167c15.667-0.833,41.167-2.166,45.333,3.667c4.167,5.833,15.834,6,19.667,0c3.833-6,38.028-6.245,50.833-4.333c4.95,0.739,9.833,0.81,14.438,0.363c10.976-1.066,20.373-5.078,25.342-10.017c-8.889,0.081-18.524-5.195-31.03-10.721C454.125,215,445.625,206.25,445,203.5s0.125-34.5,0.875-44.5c-9.208,14.333-24.041,23-45.708,23C378.5,182,359,162.667,356,158.667c2.167,6.333,1.5,29.833,0.75,45.333c-8.5,15.25-40,24-48,27.5c2.042,1.655,10.695,6.598,20.857,9.508C334.793,242.493,340.373,243.448,345.667,243.167z"/>
      <path id="basic_3" class="chest" fill="transparent" stroke="#8C8C8C" vector-effect="non-scaling-stroke" d="M524.5,294c-2.018-20.749-37.75-48.25-48.562-51.137c-4.605,0.447-9.488,0.376-14.438-0.363c-12.805-1.911-47-1.667-50.833,4.333c-3.833,6-15.5,5.833-19.667,0c-4.167-5.833-29.667-4.5-45.333-3.667c-5.294,0.281-10.873-0.674-16.059-2.159c-8.004,3.48-46.033,26.426-52.127,58.308c-0.46,2.402-0.744,4.852-0.814,7.351c-1,35.667,0.003,72.11-0.165,85.722c0.383-0.096,9.665,25.111,12.165,30.778c2.5,5.667,5.083,17.833,8.583,24.583C305.5,455.5,344,473,370.5,466s36.5-6.244,65,0.128c28.5,6.372,52.668-2.794,73.084-27.211c1.25-3.25,4.75-11.75,5.333-15s2.667-6.999,4.084-9.749c1.417-2.75,7.455-21.675,8.005-21.176C526.678,379.65,525.667,306.001,524.5,294z"/>
      <path id="basic_4" class="abdomen" fill="transparent" stroke="#8C8C8C" vector-effect="non-scaling-stroke" d="M435.5,466.128C407,459.756,397,459,370.5,466s-65-10.5-73.25-18.25c3.5,6.75,2,12,3.75,17.75s5,21.334,0.5,41.501c-4.5,20.167-1.667,35.666-0.5,40.166c0.785,3.029,2.326,5.001,1.419,8.814C314,567.5,332.834,590.5,402.917,590.5s86.417-20.498,98.75-33.499c-1.666-4.5-0.501-12,2.499-21.167s-3.499-44.667-3.833-52.833c-0.334-8.166,2.501-21.5,2.751-27.584c0.25-6.084,4.25-13.25,5.5-16.5C488.168,463.334,464,472.5,435.5,466.128z"/>
      <path id="basic_5" class="pelvis" fill="transparent" stroke="#8C8C8C" vector-effect="non-scaling-stroke" d="M501.667,557.001C489.334,570.002,473,590.5,402.917,590.5s-88.917-23-100.498-34.519c-0.44,1.851-1.458,4.137-3.419,7.188c-2.708,4.214-5.009,15.491-6.673,27.332c10.34,9.027,56.211,47.94,84.085,82.636c7.636,9.505,13.921,18.693,17.755,26.864c1-2.167,2.75-2.833,6.833-3.167s5.75,0.834,6.917,1.584c3.8-7.69,10.228-16.519,18.101-25.734c28.214-33.03,74.964-71.046,85.649-79.515C510.667,579.502,503.333,561.501,501.667,557.001z"/>
      <path id="basic_6" class="arm-rt" fill="transparent" stroke="#8C8C8C" vector-effect="non-scaling-stroke" d="M308.75,231.5c-8,3.5-15.5,2-26.75,4.25S240.5,249,228.5,273.5s-9.5,57-9.25,65.75c0.034,1.202,0.012,2.258-0.058,3.222c-0.436,6.049-2.914,8.093-7.442,14.778C206.5,365,196.5,396.5,193,408.5c-0.507,1.738-0.896,3.229-1.221,4.551c-1.918,7.803-1.51,9.506-8.779,18.699c-5.907,7.47-15.794,29.063-22.538,48.927c-2.96,8.722-5.318,17.111-6.462,23.823c-2.028,11.896-8.779,39.212-16.707,62.487c-1.735,5.094-3.563,9.992-5.337,14.495c-5.112,12.975-9.775,22.651-10.456,24.143c-0.886,1.939-1.456,3.337-2.977,4.62c-1.911,1.612-5.326,3.042-12.773,5.13c-1.854,0.519-3.833,1.291-5.874,2.231c-12.688,5.84-27.892,18.435-31.876,21.019c-4.625,3-7.75,8.375-11.875,10.5s-4.125,8.625,0,10.5s9.625,0.125,13-1.5s9.042-8.457,15.5-10.5c3.788-1.198,7.625-1.5,7.625,0.125s-8.5,22.375-9.125,25.5s-3.875,13.875-5.875,21.125s-5.5,21.25-6.75,29.25s0.875,11.75,5.125,12.625s7.875-7.625,8.646-10.625s2.854-12.75,3.979-15.5s6.625-18.75,8-22s2.375-8.625,4.375-7.75s-0.375,5.875-1.75,9.75S91.75,714.875,91,718.75s-5,19.75-5.25,22.5s-1.875,8.75,2.75,10.5s7.75-1.875,9.5-5.625s5.375-17.625,7.375-26.125s5.75-19.5,7.125-24s2.125-8,3.875-7.875s1.5,2.5,0.75,4.75S111,713.5,110,718.5s-4.25,16.125-5.375,20.375s-1.75,9.25,2.5,10.75s6.875-1.5,8.75-4.75s7.875-21.5,9.369-27.125c1.494-5.625,4.756-18.5,6.131-22.375s2.5-5.625,3.625-5.5s0.25,2.625-1.125,7s-5.375,18.5-7.125,25s-2.25,9.625,0,12s7.083-0.541,8.25-2.541s3-11,5.667-16.333c1.676-3.352,3.669-11.246,6.53-19.381c1.691-4.808,4.336-9.699,5.636-13.786c0.352-1.106,0.67-2.172,0.973-3.219c2.707-9.367,3.628-16.586,6.027-25.281c2.667-9.667,0.167-11.667,1-20.167c0.096-0.975,0.344-2.156,0.705-3.482c2.127-7.809,8.37-20.88,13.05-29.598c1.457-2.714,2.764-5.01,3.745-6.587c4.667-7.5,11.917-19.251,24.917-35.251s25.5-39.75,32-55.75c0.255-0.629,0.508-1.285,0.76-1.953c6.154-16.332,11.13-43.69,11.49-47.172c0.245-2.366,0.815-4.26,2.15-7.163c0.711-1.544,1.634-3.368,2.85-5.712c3.5-6.75,23.363-47.953,24.001-48.111c0.168-13.611-0.835-50.055,0.165-85.722c0.07-2.499,0.354-4.949,0.814-7.351c6.094-31.882,44.123-54.828,52.127-58.308C319.445,238.098,310.792,233.155,308.75,231.5z"/>
      <path id="basic_7" class="arm-lt" fill="transparent" stroke="#8C8C8C" vector-effect="non-scaling-stroke" d="M740.25,640.25c-2.75-3.75-17.5-11.5-21.75-14.5c-2.125-1.5-7.938-4.375-14.281-7.375c-6.344-3-13.219-6.125-17.469-8.125c-8.5-4-5.75-8.25-9.5-15c-1.7-3.061-4.019-8.847-6.417-15.19c-2.89-7.643-5.898-16.096-8.083-21.56c-4-10-12.75-51-18.75-74.25c-2.028-7.858-4.954-16.439-9.03-24.074c-4.97-9.31-16.414-30.066-17.72-32.176c-3.25-5.25-5.336-9.194-6.5-17.25c-1.625-11.25-17.875-51.25-22-57.25c-2.265-3.294-4.53-6.027-5.655-11.06c-0.768-3.438-1.004-7.947-0.345-14.44c1.931-19.007-4.875-52.125-17.875-68.5s-53.125-26.75-63.595-26.654c-4.969,4.939-14.366,8.951-25.342,10.017C486.75,245.75,522.482,273.251,524.5,294c1.167,12.001,2.178,85.65,1.506,98.992c0.108,0.098,20.827,42.675,23.494,48.175s7,11.333,7,17.333c0,1.363,1.692,13.781,4.385,25.353c2.187,9.397,5.372,18.235,6.115,20.147c7,18,35.75,60.25,40.375,65.875s16.49,23.007,19.5,28.25c1.544,2.69,5.188,10.48,8.506,17.668c3.15,6.824,6.007,13.104,6.494,13.957c1,1.75-0.875,7.125,0.125,16.25s4.125,23.25,6.375,32.125s7,18.375,8.5,22.875s9.403,29.364,12.625,32c2.75,2.25,7.5,0.75,8.25-2.75s-1.625-10.875-2.5-14.125s-5.625-19.25-6.5-21.75s-2-5.125-0.25-5.125s2.125,2.75,3.25,5.625s5.875,19.5,6.875,24.125s4.5,17,6.25,21.75s5,10,9,9.75s4.875-4.75,5.125-8.375s-5.875-23.5-6.375-27.625s-5.375-19.25-6.125-21.25s-1.375-5,0.625-5.125s2.875,5.625,3.75,8.625s9.75,31.875,10.25,35.5s2.625,14.5,6,17.75c2.744,2.643,5.625,3.875,8.625,0.875s2.25-10,0.875-15.25s-4.625-21.125-5.5-25s-6.375-20.875-7.25-24s-2.125-5.375-1.125-5.75s2.25,1.125,3.5,5.25s6.625,20.5,8.375,25.5s1.5,11.625,4.125,17.375s7,7.625,10.625,7.125s4.277-7.391,4.375-10.125c0.098-2.734-4.75-20.5-6.25-27.375s-5.25-16.625-6.5-23s-7.375-23.375-8.625-26s-0.625-4.75,2.5-3.875s9.25,2.625,13,7.625s10.875,6.75,13.375,7s8.5,0.375,9.25-6.375S743,644,740.25,640.25z"/>
      <path id="basic_8" class="leg-rt" fill="transparent" stroke="#8C8C8C" vector-effect="non-scaling-stroke" d="M390.083,712.333c-0.25-8.667,3.083-10.166,4.083-12.333c-3.834-8.171-10.12-17.359-17.755-26.864c-27.874-34.696-73.744-73.608-84.084-82.636c-2.021,14.389-3.102,29.611-2.827,34c0.5,8-6.5,46-11.5,70c-3.981,19.107-12.131,56.915-14.375,92.477c-0.575,9.106,0.172,18.063,0.375,26.523c0.845,35.061,9.541,55.489,16.139,69.427c1.212,2.56,2.353,4.901,3.361,7.073c6.5,14,6,37.5,6.5,61c0.078,3.657,0.262,7.679,0.348,11.921c0.085,4.202,0.072,8.622-0.239,13.122c-1.393,20.15-4.799,41.913-4.109,52.957c1,16,4.5,62,7.5,83s6.875,83,7.125,87.5c0.06,1.082,0.008,2.26-0.107,3.478c-0.363,3.847-1.388,8.108-1.768,11.147c-0.5,4,2.125,8.625,1.375,15.875c-0.034,0.332-0.091,0.67-0.146,1.008c-1.15,7.047-6.68,15.393-10.854,23.742c-4.375,8.75-13,19.375-21,28.25c-2.286,2.536-4.111,5.777-5.548,9.185c-3.593,8.519-4.755,18.083-4.577,20.315c0.25,3.125,3.125,5.875,6.125,5.5c0,1.125,1,2.875,4.25,2.5c0.25,2,0,6.25,8.25,5c4,4.875,7.875,4.625,10.75,1.75c5.292,6.314,10.383,6.492,15.75,5.809c4.375-0.558,11.125-7.809,12.25-10.559s2.25-3.875,5.875-6.75c1.972-1.563,3.795-4.086,5.156-8.824c0.683-2.376,1.247-5.519,1.657-8.232c0.275-1.824,0.481-3.456,0.604-4.525c0.667-5.833,0.667-10.834,4.5-21.334c8.667-3.667,14-10.333,15.5-18.833c0.113-0.642,0.215-1.28,0.311-1.918c1.177-7.814,1.064-15.23-0.477-19.082c-1.667-4.166-2.167-7.167-0.833-12.5s-0.667-18.667-1.833-21.834c-0.178-0.482-0.368-1.097-0.562-1.79c-1.079-3.858-2.297-10.522-2.438-15.043c-0.167-5.333,7.5-47.167,8.333-58.333s3.667-29.5,4.333-33.333s5.75-17.168,9.5-25.918s3.5-20,2.5-27.25s-3.75-45.75-4.5-51.375s-2.25-13.125-3.5-15.125c-0.615-0.984-0.563-2.333-0.248-3.642c0.325-1.35,0.929-2.658,1.373-3.483c0.875-1.625,2.125-10.625,3.375-16.625s2-18.5,4-26.75c0.175-0.721,0.386-1.643,0.623-2.715c2.478-11.204,8.03-39.965,9.627-52.285c1.75-13.5,10.083-66.333,11.815-88.167c1.732-21.834,1.269-38.833,0.435-43.166S390.333,721,390.083,712.333z"/>
      <path id="basic_9" class="leg-lt" fill="transparent" stroke="#8C8C8C" vector-effect="non-scaling-stroke" d="M541.166,1292.167c-1.167-4.167-9.666-14.833-16.333-21.833s-7.833-11.333-12.5-18.667S505,1237,503,1231.5s-2.25-5.75-1-9.25s2.25-12,1.5-16.25s-1.75-10-1-22.25s5-60.25,8.25-87.75s6.75-82,4.5-96.5s-3.5-32-3.5-43.5s3.25-39.334,3.584-50.334c0.334-11,1.333-13,7-23s13.999-27.333,15.999-52.333c0.874-10.926,1.602-27.168,0.824-43.078c-1.002-20.493-3.844-40.436-5.157-47.754c-2.333-13-14.834-82.834-17-92.667s-4.333-40-5.333-53.666c-10.686,8.469-57.436,46.484-85.649,79.515c-7.872,9.216-14.301,18.044-18.101,25.734c1.167,0.75,3.083,5.083,4.333,8.083s1,20.75-0.25,31.5s1.5,59.75,3.75,71s8.417,55.334,10.084,67.001s5.166,31.5,7.166,39.833s4.333,14.167,4.333,24s4,22.167,5.167,25s-1.25,16.416-4.25,33.916s-4.083,48.751-3.083,56.751s9.667,28.833,11.833,35s0.667,8.833,2,20.833s7.167,47.334,9,59s1.5,21-0.667,27.167s-3.166,21-2.666,22.667s0.833,9.333-1,13.499s-1.667,13.334-0.667,21.5s12,15,15,16.5s3,4.167,3.833,7s2.834,10.667,3.834,21s6.25,15.749,8.666,17.666s2.834,3,3.667,4.667s3.417,6.083,11.167,9.75s14.999-1.167,16.749-4.75c4.5,4.5,11.084,0.416,12.25-2.084c4.916,1.416,7.834-3.25,7.917-5.166c1.583,0.334,3.584-1.082,4.25-2.582c0.833,0.334,2.5,0.666,5-3.334S542.333,1296.334,541.166,1292.167z"/>
    </svg>
  </div><!-- basic-basea-->
</div><!-- basic-wrapper-->
<div class="clear"></div>

<section class="footer" id="contact">
  <div class="icon-footer">
      <ul>
              <li> <a href="#"> <i class="fab fa-facebook-f fa-lg"></i> </a> </li>
              <li> <a href="#"> <i class="fab fa-twitter fa-lg"></i></a> </li>
              <li> <a href="#"> <i class="fab fa-google fa-lg"></i></a> </li>
              <li> <a href="#"> <i class="fab fa-github-alt fa-lg"></i> </a> </li>
      </ul>
  </div>
  <p>Copy Right 2022 © By
      <a class="alt" href="#"> PTUK</a>
      All Rights Reserved</p>

</section>
</body>
</html>