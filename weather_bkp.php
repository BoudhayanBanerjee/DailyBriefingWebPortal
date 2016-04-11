<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- If IE use the latest rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- Set the page to the width of the device and set the zoon level -->
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <link rel="icon" href="images/site-logo.jpg">
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/weather-icons.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid Sans">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lobster">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.11/angular.min.js"></script>
    </head>
    <style>
        .page-header{
            text-align: center;
            font-family: 'Lobster',serif;
            color: #FFFFFF;
            border-bottom-style: hidden;
            text-align: center;
        }
    
        .nav{
            font-family: 'Lobster',serif;
            border-bottom-style: hidden;
        }
        a.navs{
            color: #FFFFFF;
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
                                            if ($weather == "Rain" || $weather == "Drizzle"|| $weather == "Rain Showers"|| $weather == "Rain Mist")
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
                                             }
        
            
        echo "body{
            background: #546E7A;
            background-image:".$bg.";"
            ."
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #FFFFFF;
            font-family: 'Droid Sans',serif;
        }";
        ?>
        .row{
            margin-bottom: 80px;
            
        }       
       
        #ct{
             
            background: rgba(26, 255, 102,0)
            color: #ffffff;
            font-family: 'Ubuntu',serif;
            font-size: 5%;
            text-align: center;
            margin-bottom: 5%;
            margin-top: 5%;
            padding-left: 35%;
            padding-right: 35%;
        }
        .wi{
            font-size: 30px;
        }
        .forca{
            padding-left: 35px;
            padding-bottom: 25px;
        }
    </style>
    <body>
            <ul class="nav nav-tabs">
                  <li role="presentation" ><a href="index.php" class="navs">Home</a></li>
                  <li role="presentation" class="navs"><a href="news.php" class="navs">News</a></li>
                  <li role="presentation"><a href="score.php" class="navs">Score</a></li>
                  <li role="presentation" class="active"><a href="weather.php" class="navs">Weather</a></li>
            </ul>
           
           <div class="container" id="ct">
               
               
               
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
                        $weather      = $results['current_observation']['weather'];
                        $windKph = $results['current_observation']['wind_kph'];
                        $windGkph = $results['current_observation']['wind_gust_kph'];
                        $windMph = $results['current_observation']['wind_mph'];
                        $windGmph = $results['current_observation']['wind_gust_mph'];
                        $feelslikeC = $results['current_observation']['feelslike_c'];
                        $feelslikeF = $results['current_observation']['feelslike_f'];
                        
                        ?>
                         <table id="currtemp">
                                 <tr>
                                     <td> 
                                         <table>
                                         <tr><h4><?php echo $locationCity.",".$locationState ?></h4></tr>
                                         <tr><h4><?php echo $feelslikeC." "."C"." | ".$feelslikeF." "."F"; ?></h4></tr>
                                         <tr><h4><?php echo $weather." with wind gust ".$windKph." kph"?></h4></tr>
                                         </table>
                                     </td>
                                     <td>
                                         <?php
                                            if ($weather == "Rain" || $weather == "Drizzle"|| $weather == "Rain Showers"|| $weather == "Rain Mist")
                                            {
                                                echo '<i class="wi wi-wu-chancerain"></i>';
                                            }
                                             elseif($weather == "Clear" )
                                             {echo '<i class="wi wi-night-clear"></i>';
                                             }
                                             elseif ($weather == "Hail" || $weather == "Snow"|| $weather == "Ice Pellets"|| $weather == "Ice Crystals" ||$weather == "Hail"||$weather == "Snow Showers"||$weather == "Hail Showers"||$weather == "Blowing Snow"||$weather == "Ice Pellet Showers"||$weather == "Hail Showers"||$weather == "Freezing Rain"||$weather == "Light Snow")
                                            {
                                                echo '<i class="wi wi-day-snow-wind"></i>';
                                            }
                                             elseif ($weather == "Partly Cloudy" || $weather == "Mostly Cloudy"|| $weather == "Scattered Clouds"|| $weather == "Overcast")
                                            {
                                                echo '<i class="wi wi-day-cloudy"></i>';
                                            }
                                             elseif ($weather == "Unknown")
                                            {
                                                echo '<i class="wi wi-day-sunny"></i>';
                                            }
                                             elseif ($weather == "Thunderstorm" || $weather == "Thunderstorms and Rain"|| $weather == "hunderstorms and Snow"|| $weather == "Thunderstorms and Ice Pellets")
                                            {
                                                echo '<i class="wi wi-day-thunderstorm"></i>';
                                            }
                                             else{
                                                 echo '<i class="wi wi-day-sunny"></i>';
                                             }
                                          ?>
                                     </td>                                     
                                 </tr> 
                         </table>
               
                 </div>
               
           
        
           <div class="container">
               
               <div class="row">
                   
                   <div class="col-lg-12">
                       
                        <?php
                         $currentState = 'IA'; #to be implemented using geolocation
                        $currentCity  = 'Ames'; #to be implemented using geolocation
                        $weatherJson = file_get_contents("http://api.wunderground.com/api/f7ae5780d22f532f/forecast10day/q/".$currentState."/".$currentCity.".json");
                        
                          
                        $results = json_decode($weatherJson,true);
                        $weather ="Unknown";
                        
                        echo '<table><tr>';
                        foreach ($results['forecast']['simpleforecast']['forecastday'] as $i)
                        {
                            
                            echo '<td class="forca">';
                                
                                 if ($i['conditions'] == "Rain" ||$i['conditions'] == "Drizzle"|| $i['conditions'] == "Rain Showers"|| $i['conditions'] == "Rain Mist"|| $i['conditions'] =="Chance of Rain")
                                            {
                                                echo '<i class="wi wi-wu-chancerain"></i>';
                                            }
                                             elseif($i['conditions'] == "Clear" )
                                             {echo '<i class="wi wi-night-clear"></i>';
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
                                             else{
                                                 echo '<i class="wi wi-day-sunny"></i>';
                                             }
                                 
                            echo "</td>";
                            
                            
                        }
                       
                        echo "</tr>";
                       
                        echo "<tr>";
                        foreach ($results['forecast']['simpleforecast']['forecastday'] as $i)
                        {
                            
                            echo '<td class="forca">';
                                echo $i['date']['weekday'];
                                echo "<br>";
                                echo $i['high']['celsius']."|".$i['low']['celsius'];
                                echo "<br>";
                                echo $i['conditions'];
                            echo "</td>";
                            
                            
                        }
                       
                        echo "</tr></table>";
                       
                        ?>
                         
                   
                   </div>
               </div>
        
           </div>
           
    </body>
</html>