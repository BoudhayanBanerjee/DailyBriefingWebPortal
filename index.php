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
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.11/angular.min.js"></script>
    </head>
    <style>
        #morning.jumbotron{
            background-color:#1E88E5;
            color:white;
                }
        #aftern.jumbotron{
            background-color:#212121;
            color:white;
                }
         #night.jumbotron{
            background-color:#2E2D88;
            color:white;
                }
        #weather.jumbotron{
            background-color:#263238;
            color:white;
                }
        #nytimes.jumbotron{
            background-color:#00897B;
            color:white;
                }
        #nytimesr.jumbotron{
            background-color:#C62828;
            color:white;
                }
        #remainder{
            background-color:#263238;
            color:white;
                }
     
        #welcome{
            font-family: 'Roboto',serif;
            font-size: 25px;
        }
        #dashboard{
            
            font-family: 'Lobster',serif;
            text-align: center;
            
        }
        .nav{
            font-family: 'Lobster',serif;
        }
         a.navs{
             color: #00897B;
             text-decoration: none;
        }
        
    </style>
    
    <!-- Ticking clock angular app -->
    <script>
        var module = angular.module('clock', []);

        module.controller('TimeCtrl', function($scope, $interval) {
          var tick = function() {
            $scope.clock = Date.now();
          }
          tick();
          $interval(tick, 1000);
        });
    </script>
    
    
    <body>
        <ul class="nav nav-tabs">
                  <li role="presentation" class="active"><a href="index.php">Home</a></li>
                  <li role="presentation"><a href="news.php" class="navs">News</a></li>
                  <li role="presentation"><a href="score.php" class="navs">Score</a></li>
                  <li role="presentation"><a href="weather.php" class="navs">Weather</a></li>
        </ul>
        
        
        <div class="container">
            <div class="page-header">
                <h2 id="dashboard">Dashboard</h2>
            </div>
            <div <?php $hour = (int)date('H');
                  if ($hour >= 0 && $hour < 12){
                      echo 'class="jumbotron" id="morning"'; 
                  }
                  elseif ($hour >=12 && $hour < 18){
                      echo 'class="jumbotron" id="aftern"'; 
                  }
                 else{
                      echo 'class="jumbotron" id="night"'; 
                  }
                 ?>
            >
                
                      
                         <p id="welcome">
                               <?php $hour = (int)date('H');
                                     $mins = date('i');
                                     $time = "PM";
                                 if ($hour >= 0 && $hour < 12){
                                     echo "Good Morning ";
                                     $time = "AM";
                                 }
                                elseif ($hour >=12 && $hour < 18){
                                    echo "Good AfterNoon ";

                                }
                                else{
                                    echo "Good Night ";
                                }
                              ?>
                              <?php echo "Boudhayan"?>
                              
                        </p>   
                      
                  
                 <!-- Single button -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sports Update <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="score.php#epl">Premier League</a></li>
                    <li><a href="score.php#laliga">La Liga</a></li>
                    <!--<li role="separator" class="divider"></li>
                    <li><a href="http://www.cricbuzz.com">Cricket</a></li>-->
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    News Update <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="news.php#World">world</a></li>
                    <li><a href="news.php#National">national</a></li>
                    <li><a href="news.php#Business">business</a></li>
                    <li><a href="news.php#Politics">politics</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="news.php#Travel">travel</a></li>
                    <li><a href="news.php#Health">health</a></li>
                    <li><a href="news.php#Dining">Dining</a></li>
                    <li><a href="news.php#Technology">technology</a></li>
                  </ul>
                </div>
                
                
                
             </div>
            
            
 
            
            <div class="row">
                
                        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            
                    <?php 
                        
                        $currentState = 'IA'; #to be implemented using geolocation
                        $currentCity  = 'Ames'; #to be implemented using geolocation
                        $weatherJson = file_get_contents("http://api.wunderground.com/api/f7ae5780d22f532f/geolookup/conditions/q/".$currentState."/".$currentCity.".json");
                          
                        $results = json_decode($weatherJson,true);
                             
                        $locationCity = $results['current_observation']['display_location']['city'];
                        $locationState = $results['current_observation']['display_location']['state'];
                        $locationCountry = $results['current_observation']['display_location']['country'];
                        $locationZip = $results['current_observation']['display_location']['zip'];
                        $weatherTempC = $results['current_observation']['temp_c'];
                        $weatherTempF = $results['current_observation']['temp_f'];                             
                        $weather      = $results['current_observation']['weather'];
                        $windKph = $results['current_observation']['wind_kph'];
                        $windGkph = $results['current_observation']['wind_gust_kph'];
                        $windMph = $results['current_observation']['wind_mph'];
                        $windGmph = $results['current_observation']['wind_gust_mph'];
                        $feelslikeC = $results['current_observation']['feelslike_c'];
                        $feelslikeF = $results['current_observation']['feelslike_f'];
                             
                    
                       
                    ?>
                    <div class="jumbotron" id="weather">
                        <p><?php echo $locationCity.",".$locationState ?></p><br>
                        <p><?php echo $feelslikeC." "."C"." | ".$feelslikeF." "."F"; ?></p><br>
                        <p><?php echo $weather." with wind gust ".$windKph." kph"?></p>
                        
                        

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="jumbotron" id="nytimes">
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
                                                                          if ($count == 4){
                                                                              break;
                                                                          }
                                                                        
                                                                    }
                            
                            
                        ?>  
                        
                        <a href="news.php" class = "btn btn-default" role="button">More news</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="jumbotron" id="nytimesr">
                        <?php
                            $nyTimesT20ApiKey = "b71c431d1098efaf5b6d78c021063d48:17:74735669";
                            $newsSection = "sports";
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
                                                                          if ($count == 4){
                                                                              break;
                                                                          }
                                                                        
                                                                    }
                          
                            
                        ?>  
                        <a href="score.php" class = "btn btn-default" role="button">More sports</a>
                        
                    </div>
                </div>
            </div>
            

        </div>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://apis.google.com/js/client.js?onload=listUpcomingEvents"></script>
    </body>
</html>