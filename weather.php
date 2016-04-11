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
        <link rel="stylesheet" type="text/css" href="css/weather-icons.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lobster">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.11/angular.min.js"></script>
    </head>
    <style>
       
        .nav{
            font-family: 'Lobster',serif;
            border-bottom-style: hidden;
        }
        a.navs{
            color: #00897B;
            text-decoration: none;
        }
        <?php    
        
                        
                 $currentState = 'IA'; #to be implemented using geolocation
                 $currentCity  = 'Ames'; #to be implemented using geolocation
                 $weatherJson = file_get_contents("http://api.wunderground.com/api/f7ae5780d22f532f/geolookup/conditions/q/".$currentState."/".$currentCity.".json");
                   
                 $results = json_decode($weatherJson,true);
                 #$weather ="Unknown";
                      
                 $locationCity = $results['current_observation']['display_location']['city'];
                 $locationState = $results['current_observation']['display_location']['state'];
                 $locationCountry = $results['current_observation']['display_location']['country'];
                 $locationZip = $results['current_observation']['display_location']['zip'];
                 $weatherTempC = $results['current_observation']['temp_c'];
                 $weatherTempF = $results['current_observation']['temp_f'];                             
                 $weather      = trim($results['current_observation']['weather']);
                 $windKph = $results['current_observation']['wind_kph'];
                 $windGkph = $results['current_observation']['wind_gust_kph'];
                 $windMph = $results['current_observation']['wind_mph'];
                 $windGmph = $results['current_observation']['wind_gust_mph'];
                 $feelslikeC = $results['current_observation']['feelslike_c'];
                 $feelslikeF = $results['current_observation']['feelslike_f'];

                 
        
        
                $bg=null;
                                            /*if ($weather == "Rain" || $weather == "Drizzle"|| $weather == "Rain Showers"|| $weather == "Rain Mist")
                                            {
                                                $bg="url(images/rain.jpg)";
                                            }
                                             elseif($weather === "Clear" )
                                             {$bg="url(images/sunny.jpg)";
                                             }
                                             elseif ($weather == "Hail" || $weather == "Snow"|| $weather == "Ice Pellets"|| $weather == "Ice Crystals" ||$weather == "Hail"||$weather == "Snow Showers"||$weather == "Hail Showers"||$weather == "Blowing Snow"||$weather == "Ice Pellet Showers"||$weather == "Hail Showers"||$weather == "Freezing Rain"||$weather == "Light Snow")
                                            {
                                               $bg="url(images/snow.jpg)";
                                            }
                                             elseif ($weather == "Partly Cloudy" || $weather == "Mostly Cloudy"|| $weather == "Scattered Clouds"|| $weather == "Overcast")
                                            {
                                                $bg="url(images/cloudy.jpg)";
                                            }
                                            elseif ($weather == "Unknown")
                                            {
                                               $bg="url(images/sunny.jpg)";
                                            }
                                            elseif ($weather == "Thunderstorm" || $weather == "Thunderstorms and Rain"|| $weather == "hunderstorms and Snow"|| $weather == "Thunderstorms and Ice Pellets")
                                            {
                                                $bg="url(images/thunderstorm.jpg)";
                                            }
                                             else{
                                                $bg="url(images/cloudy.jpg)";
                                             }*/
        
            
        echo "body{
            background: #ffffff;
            background-image:".$bg.";"
            ."
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Roboto',serif;
        }";
        ?>
           
       
        .container{
            font-family: 'Roboto',serif;
        }
        .wi{
            font-size: 30px;
        }
        .forca{
            
            text-align: justify;
            border-bottom-style: hidden;
            background-color: rgba(198,40,40,.9);
            color: #fff;
            
        }
        .right{
            
            text-align: right;
            border-bottom-style: hidden;
            background-color: rgba(198,40,40,.9);
            color: #fff;
            
        }
  
         #weatherHead{
            text-align: center;
            font-family: 'Oswald',serif;
        }
        #weather.jumbotron{
            background-color:#263238;
            font-family: 'Roboto',serif;
            color:white;
        }
       
    </style>
    <body>
        
            <ul class="nav nav-tabs">
                  <li role="presentation" ><a href="index.php" class="navs">Home</a></li>
                  <li role="presentation" class="navs"><a href="news.php" class="navs">News</a></li>
                  <li role="presentation"><a href="score.php" class="navs">Score</a></li>
                  <li role="presentation" class="active"><a href="weather.php" class="navs">Weather</a></li>
            </ul>
            <div class="page-header">
                <h2 id="weatherHead">10 day Forecast</h2><br>
            </div>
           <div class="container">               
               <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">            
                   
                        <div class="jumbotron" id="weather">
                            <p><?php echo $locationCity.",".$locationState ?></p><br>
                            <p><?php echo $feelslikeC." "."C"." | ".$feelslikeF." "."F"; ?></p><br>
                            <p><?php echo $weather." with wind gust ".$windKph." kph"?></p>

                        </div>
                   </div>   
 
                       
                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <?php
                                 $currentState = 'IA'; #to be implemented using geolocation
                                $currentCity  = 'Ames'; #to be implemented using geolocation
                                $weatherJson = file_get_contents("http://api.wunderground.com/api/f7ae5780d22f532f/forecast10day/q/".$currentState."/".$currentCity.".json");

                                $results = json_decode($weatherJson,true);
                                $weather ="Unknown";
                            ?>
                       
                        
                       
                            
                            <table class="table">
                                    <?php
                                        foreach ($results['forecast']['simpleforecast']['forecastday'] as $i)
                                        {   
                                             echo "<tr>";
                                             echo '<td class="forca"><p>';
                                             echo $i['date']['weekday'];
                                             echo "</p></td>";

                                             echo '<td class="forca">';
                                                                                        
                                                      if ($i['conditions'] == "Rain" ||$i['conditions'] == "Drizzle"|| $i['conditions'] == "Rain Showers"|| $i['conditions'] == "Rain Mist"|| $i['conditions'] =="Chance of Rain")
                                                        {
                                                            echo '<i class="wi wi-wu-chancerain"></i>';
                                                        }
                                                     elseif($i['conditions'] == "Clear" )
                                                         {
                                                             echo '<i class="wi wi-night-clear"></i>';
                                                         }
                                                     elseif ($i['conditions'] == "Hail" || $i['conditions'] == "Snow"|| $i['conditions'] == "Ice Pellets"|| $i['conditions'] == "Ice Crystals" ||$i['conditions'] == "Hail"||$i['conditions'] == "Snow Showers"||$i['conditions'] == "Hail Showers"||$i['conditions'] == "Blowing Snow"||$i['conditions'] == "Ice Pellet Showers"||$i['conditions'] == "Hail Showers"||$i['conditions'] == "Freezing Rain")
                                                        {
                                                            echo '<i class="wi wi-day-snow-wind"></i>';
                                                        }
                                                     elseif ($i['conditions'] == "Partly Cloudy" || $i['conditions'] == "Mostly Cloudy"|| $i['conditions'] == "Scattered Clouds"|| $i['conditions'] == "Overcast")
                                                        {
                                                            echo '<i class="wi wi-day-cloudy"></i>';
                                                        }
                                                     elseif ($i['conditions'] == "Unknown")
                                                        {
                                                            echo '<i class="wi wi-day-sunny"></i>';
                                                        }
                                                     elseif ($i['conditions'] == "Thunderstorm" || $i['conditions'] == "Thunderstorms and Rain"|| $i['conditions'] == "hunderstorms and Snow"|| $i['conditions'] == "Thunderstorms and Ice Pellets")
                                                        {
                                                            echo '<i class="wi wi-day-thunderstorm"></i>';
                                                        }
                                                     else
                                                         {
                                                             echo '<i class="wi wi-day-sunny"></i>';
                                                         }
                                             echo "</td>";
                                             echo '<td class="forca"><strong>';
                                             echo $i['conditions'];
                                             echo "</strong></td>";
                                             echo '<td class="forca"><p>';
                                             echo 'High : '.$i['high']['celsius']." &#8451"."<br>".'Low : '.$i['low']['celsius']." &#8451";
                                             echo "</p></td>";
                                             echo '<td class="forca"><p>';
                                             echo 'High : '.$i['high']['fahrenheit']." &#8457"."<br>".'Low : '.$i['low']['fahrenheit']." &#8457";
                                             echo "</p></td>";
                                             
                                             echo "</tr>";
                                        }
                                       
                                    ?>
                            </table>                             
                    
                   </div>
               </div>        
           </div>
           
    </body>
</html>