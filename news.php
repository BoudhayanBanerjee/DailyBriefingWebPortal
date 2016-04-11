<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- If IE use the latest rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- Set the page to the width of the device and set the zoon level -->
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <link rel="icon" href="site-logo.jpg">
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lobster">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.11/angular.min.js"></script>
    </head>
    <style>
        .jumbotron{
            background-color:#455A64;
            color:white;
                }
        #newsHead{
            text-align: center;
            font-family: 'Oswald',serif;
        }
        .section{
            
            font-family: 'Lobster',serif;
            
        }
         .nav{
            font-family: 'Lobster',serif;
        }
         a.navs{
            color: #00897B;
            text-decoration: none;
        }
    </style>
    <body>
         <ul class="nav nav-tabs">
                  <li role="presentation"><a href="index.php" class="navs">Home</a></li>
                  <li role="presentation" class="active" ><a href="news.php">News</a></li>
                  <li role="presentation"><a href="score.php" class="navs">Score</a></li>
                  <li role="presentation"><a href="weather.php" class="navs">Weather</a></li>
        </ul>
        
         <div class="container">
            <div class="page-header">
                <h2 id="newsHead">Curated News</h2>
            </div>
            <div class="row">
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    
                    <div class="jumbotron" id="World">
                        <p class="section">World</p>
                        <?php
                            $nyTimesT20ApiKey = "b71c431d1098efaf5b6d78c021063d48:17:74735669";
                            $newsSection = "world";
                            $newsJson = file_get_contents("http://api.nytimes.com/svc/topstories/v1/".$newsSection.".json?api-key=".$nyTimesT20ApiKey);
                            
                            $newsResult = json_decode($newsJson,true);
                            $count = 0;
                            foreach ($newsResult['results'] as $i) {
                                                                          echo "<strong>";
                                                                          print_r($i['title']);
                                                                          echo "</strong>";
                                                                          echo "<br>";
                                                                          echo "<h5>";
                                                                          print_r($i['abstract']);
                                                                          echo "</h5>";
                                                                          echo "<br>";
                                                                          $count ++;
                                                                          if ($count == 5){
                                                                              break;
                                                                          }
                                                                        
                                                                    }
                            #print_r($newsResult['results'][0]['title'])
                            
                        ?>  
                        
                        
                    </div>
                    
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    
                     <div class="jumbotron" id="National">
                         <p class="section">National</p>
                        <?php
                            $nyTimesT20ApiKey = "b71c431d1098efaf5b6d78c021063d48:17:74735669";
                            $newsSection = "national";
                            $newsJson = file_get_contents("http://api.nytimes.com/svc/topstories/v1/".$newsSection.".json?api-key=".$nyTimesT20ApiKey);
                            
                            $newsResult = json_decode($newsJson,true);
                            $count = 0;
                            foreach ($newsResult['results'] as $i) {
                                                                          echo "<strong>";
                                                                          print_r($i['title']);
                                                                          echo "</strong>";
                                                                          echo "<br>";
                                                                          echo "<h5>";
                                                                          print_r($i['abstract']);
                                                                          echo "</h5>";
                                                                          echo "<br>";
                                                                          $count ++;
                                                                          if ($count == 5){
                                                                              break;
                                                                          }
                                                                        
                                                                    }
                            #print_r($newsResult['results'][0]['title'])
                            
                        ?>  
                        
                        
                    </div>
                    
                </div>
                
             </div>
             
             <div class="row">
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    
                     <div class="jumbotron" id="Business">
                         <p class="section">Business</p>
                        <?php
                            $nyTimesT20ApiKey = "b71c431d1098efaf5b6d78c021063d48:17:74735669";
                            $newsSection = "business";
                            $newsJson = file_get_contents("http://api.nytimes.com/svc/topstories/v1/".$newsSection.".json?api-key=".$nyTimesT20ApiKey);
                            
                            $newsResult = json_decode($newsJson,true);
                            $count = 0;
                            foreach ($newsResult['results'] as $i) {
                                                                          echo "<strong>";
                                                                          print_r($i['title']);
                                                                          echo "</strong>";
                                                                          echo "<br>";
                                                                          echo "<h5>";
                                                                          print_r($i['abstract']);
                                                                          echo "</h5>";
                                                                          echo "<br>";
                                                                          $count ++;
                                                                          if ($count == 5){
                                                                              break;
                                                                          }
                                                                        
                                                                    }
                            #print_r($newsResult['results'][0]['title'])
                            
                        ?>  
                        
                        
                    </div>
                    
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    
                     <div class="jumbotron" id="Politics">
                         <p class="section">Politics</p>
                        <?php
                            $nyTimesT20ApiKey = "b71c431d1098efaf5b6d78c021063d48:17:74735669";
                            $newsSection = "politics";
                            $newsJson = file_get_contents("http://api.nytimes.com/svc/topstories/v1/".$newsSection.".json?api-key=".$nyTimesT20ApiKey);
                            
                            $newsResult = json_decode($newsJson,true);
                            $count = 0;
                            foreach ($newsResult['results'] as $i) {
                                                                          echo "<strong>";
                                                                          print_r($i['title']);
                                                                          echo "</strong>";
                                                                          echo "<br>";
                                                                          echo "<h5>";
                                                                          print_r($i['abstract']);
                                                                          echo "</h5>";
                                                                          echo "<br>";
                                                                          $count ++;
                                                                          if ($count == 5){
                                                                              break;
                                                                          }
                                                                        
                                                                    }
                            #print_r($newsResult['results'][0]['title'])
                            
                        ?>  
                        
                        
                    </div>
                    
                </div>   
             
            </div>
             
            <div class="row">
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    
                    <div class="jumbotron" id="Travel">
                        <p class="section">Travel</p>
                        <?php
                            $nyTimesT20ApiKey = "b71c431d1098efaf5b6d78c021063d48:17:74735669";
                            $newsSection = "travel";
                            $newsJson = file_get_contents("http://api.nytimes.com/svc/topstories/v1/".$newsSection.".json?api-key=".$nyTimesT20ApiKey);
                            
                            $newsResult = json_decode($newsJson,true);
                            $count = 0;
                            foreach ($newsResult['results'] as $i) {
                                                                          echo "<strong>";
                                                                          print_r($i['title']);
                                                                          echo "</strong>";
                                                                          echo "<br>";
                                                                          echo "<h5>";
                                                                          print_r($i['abstract']);
                                                                          echo "</h5>";
                                                                          echo "<br>";
                                                                          $count ++;
                                                                          if ($count == 5){
                                                                              break;
                                                                          }
                                                                        
                                                                    }
                            #print_r($newsResult['results'][0]['title'])
                            
                        ?>  
                        
                        
                    </div>
                    
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    
                    <div class="jumbotron" id="Health">
                        <p class="section">Health</p>
                        <?php
                            $nyTimesT20ApiKey = "b71c431d1098efaf5b6d78c021063d48:17:74735669";
                            $newsSection = "health";
                            $newsJson = file_get_contents("http://api.nytimes.com/svc/topstories/v1/".$newsSection.".json?api-key=".$nyTimesT20ApiKey);
                            
                            $newsResult = json_decode($newsJson,true);
                            $count = 0;
                            foreach ($newsResult['results'] as $i) {
                                                                          echo "<strong>";
                                                                          print_r($i['title']);
                                                                          echo "</strong>";
                                                                          echo "<br>";
                                                                          echo "<h5>";
                                                                          print_r($i['abstract']);
                                                                          echo "</h5>";
                                                                          echo "<br>";
                                                                          $count ++;
                                                                          if ($count == 5){
                                                                              break;
                                                                          }
                                                                        
                                                                    }
                            #print_r($newsResult['results'][0]['title'])
                            
                        ?>  
                        
                        
                    </div>
                </div>
                
             </div>
             
             <div class="row">
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    
                    <div class="jumbotron" id="Dining">
                        <p class="section">Dining</p>
                        <?php
                            $nyTimesT20ApiKey = "b71c431d1098efaf5b6d78c021063d48:17:74735669";
                            $newsSection = "dining";
                            $newsJson = file_get_contents("http://api.nytimes.com/svc/topstories/v1/".$newsSection.".json?api-key=".$nyTimesT20ApiKey);
                            
                            $newsResult = json_decode($newsJson,true);
                            $count = 0;
                            foreach ($newsResult['results'] as $i) {
                                                                          echo "<strong>";
                                                                          print_r($i['title']);
                                                                          echo "</strong>";
                                                                          echo "<br>";
                                                                          echo "<h5>";
                                                                          print_r($i['abstract']);
                                                                          echo "</h5>";
                                                                          echo "<br>";
                                                                          $count ++;
                                                                          if ($count == 5){
                                                                              break;
                                                                          }
                                                                        
                                                                    }
                            #print_r($newsResult['results'][0]['title'])
                            
                        ?>  
                        
                        
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                     
                     <div class="jumbotron" id="Technology">
                         <p class="section">Technology</p>
                        <?php
                            $nyTimesT20ApiKey = "b71c431d1098efaf5b6d78c021063d48:17:74735669";
                            $newsSection = "technology";
                            $newsJson = file_get_contents("http://api.nytimes.com/svc/topstories/v1/".$newsSection.".json?api-key=".$nyTimesT20ApiKey);
                            
                            $newsResult = json_decode($newsJson,true);
                            $count = 0;
                            foreach ($newsResult['results'] as $i) {
                                                                          echo "<strong>";
                                                                          print_r($i['title']);
                                                                          echo "</strong>";
                                                                          echo "<br>";
                                                                          echo "<h5>";
                                                                          print_r($i['abstract']);
                                                                          echo "</h5>";
                                                                          echo "<br>";
                                                                          $count ++;
                                                                          if ($count == 5){
                                                                              break;
                                                                          }
                                                                        
                                                                    }
                            #print_r($newsResult['results'][0]['title'])
                            
                        ?>  
                        
                        
                    </div>
                    
                </div> 
             
            </div>
        </div>         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>