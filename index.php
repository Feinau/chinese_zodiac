<html>
  <head>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- site style -->
    <link rel="stylesheet" href="css/global_style.css">
    <title>Chinese Zodiac</title>
    <?php 
    include('includes/inc_header.php');
    include('includes/inc_button_nav.php');
    ?>
  </head>
  <body>
    <div class="row">
      <div class="col-lg-12">
        <?php 
        include('includes/inc_home.php');
        include('includes/home_links_bar.inc');
        include('Chinese_Zodiac_while_loop.php');
        include('includes/inc_chinese_zodiac.inc');
        
        
        if (isset($_GET['page'])):
          $request_page = $_GET['page'];

          switch ($request_page):

            case 'home_page';
              include('includes/inc_home.php');
              break;

            case 'site_layout';
              include('includes/inc_site_layout.php');
              break;

            case 'state_information';
              include('includes/inc_state_information.php');
              break;

            case 'string_functions';
              include('includes/inc_string_functions.php');
              break;

            case 'user_templates';
              include('includes/inc_user_templates.php');
              break;

            case 'web_forms';
              include('includes/inc_web_forms.php');
              break;

            case 'midterm_assessment';
              include('includes/inc_midterm_assessment.php');
              break;

            case 'final_project';
              include('includes/inc_final_project.php');
              break;
            
            default:
              include('includes/inc_home.php');
              break;

          endswitch;
          
        else:
          include('includes/inc_home.php');
        endif;
        ?>
      </div>
    </div>
  </body>
  <footer>
    <?php 
    include('includes/inc_footer.php');
    ?>
  </footer>
</html>