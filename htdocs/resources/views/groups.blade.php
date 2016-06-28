<!DOCTYPE html>
<html>
    <head>
        <title>IBM Digital Innovation Lab - Groups</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="originalStyle.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="stylesheet" href="originalStyle.css" />
        <link rel="stylesheet" href="windows8-animations/css/demo-styles.css" />
        <link rel="stylesheet" type="text/css" href="my-icons-collection/font/flaticon.css"> 
        <script src="windows8-animations/js/modernizr-1.5.min.js"></script>
        <style type="text/css">



        </style>
    </head>
    <body>
      @if (Session::has('message'))
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{ Session::get('message') }}
      </div>
      @endif
      <div class="container">
       <?php include('../resources/views/menuBar.blade.php');?>  
 
 <!--===============================Start Demo====================================================-->
<div class="demo-wrapper">
  <div class="row">
            <div class="col-md-12">
              <p style="text-align:left; font-size:180%">Category<span style="float:right; font-size:54%"></span></p>
            </div>
        </div>
        <hr>

<!-- classnames for the pages should include: 1) type of page 2) page name-->
  <div class="s-page random-restored-page">
    <h2 class="page-title">Some minimized App</h2>
    <div class="close-button s-close-button">x</div>
  </div>

  <div class="s-page custom-page">
    <h2 class="page-title">Thank You!</h2>
    <div class="close-button s-close-button">x</div>
  </div>
  <div class="r-page random-r-page">

    <div class="page-content">
      <h2 class="page-title">App Screen</h2>
      <p>Chew iPad power cord chew iPad power cord attack feet chase mice leave dead animals as gifts and stick butt in face chew iPad power cord. Chase mice. Run in circles use lap as chair why must they do that. Intrigued by the shower destroy couch leave hair everywhere sleep on keyboard chew iPad power cord. Use lap as chair. Missing until dinner time stand in front of the computer screen, intently sniff hand. Find something else more interesting. Destroy couch play time so inspect anything brought into the house hate dog burrow under covers. Sleep on keyboard destroy couch so hate dog so hide when guests come over. Chase mice destroy couch lick butt throwup on your pillow use lap as chair yet intrigued by the shower but climb leg. Stare at ceiling make muffins or hunt anything that moves claw drapes. Intently sniff hand intrigued by the shower. Why must they do that. Cat snacks leave dead animals as gifts or inspect anything brought into the house sweet beast so stare at ceiling give attitude. Flop over claw drapes but sun bathe lick butt, and chase mice. Rub face on everything lick butt leave hair everywhere lick butt, missing until dinner time for use lap as chair lick butt. Make muffins leave dead animals as gifts play time. Chew foot intrigued by the shower stare at ceiling inspect anything brought into the house yet hopped up on goofballs. 

      </p>
    </div>
    
    <div class="close-button r-close-button">x</div>
  </div>
<!--each tile should specify what page type it opens (to determine which animation) and the corresponding page name it should open-->
  <div class="dashboard clearfix">
    <ul class="tiles">

      <div class="col1 clearfix">
        <li class="tile tile-big tile-1 slideTextLeft" data-page-type="" data-page-name="">
          <div><img src="/img/icon/robot-design.png" style="width:110px; height:110px; margin-top:15px; margin-right:500px;" align="left"></img>
            <p style="position:absolute; bottom: 40px; right: 120px; width:100%; text-align: center">AI</p></div>
          <div><p>#Artificial_Intelligence</p></div>
        </li>
        <li class="tile tile-small tile tile-2 slideTextRight" data-page-type="" data-page-name ="">
          <div><p class="flaticon-education-chart"></p></div>
          <div><p>API Economy</p></div>
        </li>
        <li class="tile tile-small last tile-2 slideTextRight" data-page-type="" data-page-name="">
          <div><p class="flaticon-technology" style="position:absolute; bottom: 90px; right: 0px; width:100%;"></p></div>
          <div><p>TV Apps</p></div>
        </li>
      <!--   
        <li class="tile tile-small last tile-3" data-page-type="r-page" data-page-name="random-r-page">
          <p class="flaticon-technology"> </p>
        </li> -->


        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="" data-page-name="">
          <div><img src="/img/icon/fingerprints.png" style="width:90px; height:90px; margin-top:27px; margin-right:500px; " align="left"></img>
            <p style="position:absolute; bottom: 40px; right: 105px; width:100%; text-align: center; font-size:25px">Authentication</p></div>
          <div><p>#Authentication</p></div>
        </li>


      </div>

      <div class="col2 clearfix">
        
        
        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="" data-page-name="">
          <div><img src="/img/icon/IoT.png" style="width:90px; height:90px; margin-top:27px; margin-right:500px; " align="left"></img>
            <p style="position:absolute; bottom: 40px; right: 120px; width:100%; text-align: center; font-size:25px">IoT</p></div>
          <div><p>#Internet_of_Things</p></div>
        </li>

        
        <li class="tile tile-big tile-5 slideTextLeft" data-page-type="" data-page-name="">
          <div><img src="/img/icon/smart-car.png" style="width:100px; height:100px; margin-top:22px; margin-right:500px; " align="left"></img>
            <p style="position:absolute; bottom: 40px; right: 100px; width:100%; text-align: center; font-size:25px">Connected Cars</p></div>
          <div><p>#Mojio</p></div>
        </li>
       
        <li class="tile tile-big tile-1 slideTextLeft" data-page-type="" data-page-name="">
          <div><img src="/img/icon/social-media-cloud.png" style="width:85px; height:85px; margin-top:25px; margin-right:500px;" align="left"></img>
            <p style="position:absolute; bottom: 40px; right: 100px; width:100%; text-align: center">Social Computing</p></div>
          <div><p>#Social_Computing</p></div>
        </li>
      </div>

      <div class="col3 clearfix">      
        

        <li class="tile tile-big tile-5 slideTextLeft" data-page-type="" data-page-name="">
          <div><img src="/img/icon/virtual-reality.png" style="width:85px; height:85; margin-top:25px; margin-right:500px; margin-left:10px;"></img>
            <p style="position:absolute; bottom: 40px; right: 115px; width:100%; text-align: center; font-size:25px">AR + VR</p></div>
          <div><p>#Virtual_Reality</p></div>
        </li>
       

        <li class="tile tile-big tile-1 slideTextLeft" data-page-type="" data-page-name="">
          <div><p style="position:absolute; bottom: 44px; right: 85px;  text-align: center">
            <span class="flaticon-smartwatch"  ></span>Wearables</p></div>
          <div><p>#Apple_Watch</p></div>
        </li>

        

        <!-- 
          <div><p><span class="icon-skype"></span>Skype</p></div>
          <div><p>Make a Call</p></div> -->
        


        <!--Tiles with a 3D effect should have the following structure:
            1) a container inside the tile with class of .faces
            2) 2 figure elements, one with class .front and the other with class .back-->
        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="" data-page-name="">
          <div><img src="/img/icon/Cognitive.png" style="width:110px; height:110px; margin-top:15px; margin-right:500px; " align="left"></img>
            <p style="position:absolute; bottom: 40px; right: 122px; width:100%; text-align: center; font-size:25px">Cognitive</p></div>
          <div><p>#Cognitive</p></div>
        </li>


      </div>
    </ul>

  </div><!--end dashboard-->

</div><!--====================================end demo wrapper================================================-->

      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <p class="subtitle alighleft">People  </p> -->
                <!-- <p class="subtitle alignright" align="right">Click on the profile image to get redirected to LinkedIn profile.</p> -->

              <p style="text-align:left; font-size:180%">People<span style="float:right; font-size:54%">*Click on the profile image to get redirected to LinkedIn profile.</span></p>
            </div>
        </div>

        <hr>

        <div class="row" style="margin-bottom:20px">
          <div class="col-md-1"></div>
            <div class="col-md-11">
                <h3 class="subtitle">Current</h3>
            </div>
        </div>

        <div class="row ">
          <div class="col-md-1 "></div>

          <div class="col-md-2 text-center" >
              <a href="https://ca.linkedin.com/in/msashek" target="_blank" >
              <img src="/img/ashek.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Mahmood (M.S.)</p>
            <p class=" name">Ashek</p>
            <p>Executive Sponsor</p>
            <a href="mailto:mashek@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">mashek@ca.ibm.com</a>
          </div>          

          <div class="col-md-2 text-center">
            <a href="https://www.linkedin.com/in/mehrannajafi" target="_blank">
              <img src="/img/mehran.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Mehran</p>
            <p class="name">Najafi, PhD</p>
            <p class="title">Lab Supervisor,</p>
            <p>Solution Architect</p>
            <a href="mailto:mehranna@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">mehranna@ca.ibm.com</a>
          </div>

          <div class="col-md-2 text-center">
            <a href="https://ca.linkedin.com/in/subashanm" target="_blank">
              <img src="/img/subashan.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Subashan</p>
            <p class="name">Maheswaramoorthy</p>
            <p class="title">Solution Architect</p>
            <p>Co-op Coordinator</p>
            <a href="mailto:subashan@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">subashan@ca.ibm.com</a>
          </div>

          <div class="col-md-2 text-center">
            <a href="https://ca.linkedin.com/in/imad-m-obeid-meng-pmp-46866734" target="_blank">
              <img src="/img/imad.png" height="150" width="150"  alt="profile" >
            </a>
            <p class=" name">Imad Obeid </p>
            <p>Solution Architect</p>
            <a href="mailto:imad@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">imad@ca.ibm.com</a>
          </div>

           <div class="col-md-2 text-center">
            <a href="https://ca.linkedin.com/in/radu-bolboceanu-07aa2244" target="_blank">
              <img src="/img/radu.png" height="150" width="150" alt="profile" >
            </a>
            <p class=" name">Radu Bolboceanu </p>
            <p>Graphic Designer</p>
            <a href="mailto:radub@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">radub@ca.ibm.com</a>
          </div>

          <div class="col-md-1 "></div>
        </div>


        <div class="row ">
          <div class="col-md-1 "></div>

          <div class="col-md-2 text-center">
            <a href="https://ca.linkedin.com/in/jeremyaleung" target="_blank">
              <img src="/img/jeremy.png" height="150" width="150" alt="profile" >
            </a>
            <p class=" name">Jeremy Leung</p>
            <p>Graphic Designer</p>
            <a href="mailto:leung@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">leung@ca.ibm.com</a>
          </div>

          <div class="col-md-2 text-center">
            <a href="https://www.linkedin.com/in/a24choi" target="_blank">
              <img src="/img/andrew.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Andrew Choi </p>
            <p>uWaterloo, Co-op</p>
            <p>iOS, Internet of Things</p>
            <a href="mailto:achoi@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">achoi@ca.ibm.com</a>
          </div>

          <div class="col-md-2 text-center">
            <a href="https://www.linkedin.com/in/chelsea-thiel-jones-679357a2" target="_blank">
              <img src="/img/chelsea.jpg" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Chelsea Thiel-Jones</p>
            <p>Co-op</p>
            <p>iOS Developer</p>
            <a href="mailto:thielj@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">thielj@ca.ibm.com</a>
          </div>
          
            <div class="col-md-2 text-center">
            <a href="https://www.linkedin.com/" target="_blank">
              <img src="/img/dylant.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Dylan Trachsel</p>
            <p>Co-op</p>
            <p>Developer</p>
            <a href="mailto:dylant@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">dylant@ca.ibm.com</a>
          </div>

          <div class="col-md-2 text-center">
            <a href="https://www.linkedin.com/in/sonaleeshah" target="_blank">
              <img src="/img/sonalee.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Sonalee</p>
            <p>UBC, Co-op</p>
            <p>Developer</p>
            <a href="mailto:sonalee@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">sonalee@ca.ibm.com</a>
          </div>

          <div class="col-md-2 text-center"></div>

          <div class="col-md-1 "></div>
        </div>

        <div class="row ">
          <div class="col-md-1 "></div>

         
          <div class="col-md-2 text-center"></div>

          <div class="col-md-1 "></div>
        </div>



        <div class="row" style="margin-bottom:20px;margin-top:20px">
          <div class="col-md-1"></div>
            <div class="col-md-11">
                <h3 class="subtitle">Past</h3>
            </div>
        </div>

        <div class="row ">

          <div class="col-md-1 "></div>


                <div class="col-md-2 text-center">
            <a href="https://ca.linkedin.com/in/david-park-13728b89" target="_blank">
              <img src="/img/david.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">David Park </p>
            <p>uWaterloo, Co-op</p>
            <p>Virtual Reality</p>
            <a href="mailto:davidp@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">davidp@ca.ibm.com</a>
          </div>

          <div class="col-md-2 text-center">
            <a href="https://www.linkedin.com/in/andrewfrolkin" target="_blank">
              <img src="/img/andrewF.png" height="150" width="150" alt="profile" >
            </a>
            <p class="title name">Andrew Frolkin</p>
            <p>uWaterloo, Co-op</p>
            <p>iOS</p>
            <a href="mailto:andrewf@ca.ibm.com?Subject=IBM%20Innovation%20Lab" target="_blank">andrewf@ca.ibm.com</a>
          </div>




          <div class="col-md-2 text-center">

          </div>

          <div class="col-md-2 text-center">

          </div>

          <div class="col-md-2 text-center">

          </div>

          <div class="col-md-2 text-center">

          </div>

          <div class="col-md-1 "></div>

        </div>

      </div>
      </div>

    </body>
     <script src="windows8-animations/js/jquery-1.8.2.min.js"></script>
    <script src="windows8-animations/js/scripts.js"></script>
    <script>
    $(document).ready(function(){

    });
    </script>
</html>