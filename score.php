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

        #scoreHead{
            text-align: center;
            font-family: 'Lobster',serif;
        }
        .section{
            
            font-family: 'Oswald',serif;
            text-align: center;
            
        }
        .table_head{
            font-family: 'Oswald',serif;
            color:#FFFFFF;
            background-color: #424242;
        }
        .score{
            background-color: #F5F5F5;
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
                  <li role="presentation" ><a href="index.php" class="navs">Home</a></li>
                  <li role="presentation" class="navs"><a href="news.php" class="navs">News</a></li>
                  <li role="presentation" class="active"><a href="score.php">Score</a></li>
                  <li role="presentation"><a href="weather.php" class="navs">Weather</a></li>
            </ul>
        
           <div class="page-header">
                <h2 id="scoreHead">Soccer Updates</h2>
                 
            </div>
        

       <?php
            $uri = 'http://api.football-data.org/v1/soccerseasons/399/leagueTable';
            $reqPrefs['http']['method'] = 'GET';
            $reqPrefs['http']['header'] = 'X-Auth-Token: 276c78d8584e46778af8ee1047eb5ae3';
            $stream_context = stream_context_create($reqPrefs);
            $response = file_get_contents($uri, false, $stream_context);
            $fixtures = json_decode($response,true);
            #var_dump($fixtures  ,true);
        ?>
         <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        
                            <h4 class="section" id="laliga">La Liga</h4>
                            <table class="table table-sm table-hover">
                            <theader>
                                <th class="table_head">Position</th>
                                <th class="table_head">Team</th>
                                <th class="table_head">Played</th>
                                <th class="table_head">Points</th>
                                <th class="table_head">GF</th>
                                <th class="table_head">GA</th>
                                <th class="table_head">GD</th>
                                <th class="table_head">W</th>
                                <th class="table_head">D</th>
                                <th class="table_head">L</th>
                            </theader>

                            <?php    
                            foreach ($fixtures['standing'] as $i)
                            {
                                echo '<tr><td class="score">';print_r($i['position']);echo"</td>";
                                echo '<td class="score">';print_r($i['teamName']);echo"</td>";
                                echo '<td class="score">';print_r($i['playedGames']);echo"</td>";
                                echo '<td class="score">';print_r($i['points']);echo"</td>";
                                echo '<td class="score">';print_r($i['goals']);echo"</td>";
                                echo '<td class="score">';print_r($i['goalsAgainst']);echo"</td>";
                                echo '<td class="score">';print_r($i['goalDifference']);echo"</td>";
                                echo '<td class="score">';print_r($i['wins']);echo"</td>";
                                echo '<td class="score">';print_r($i['draws']);echo"</td>";
                                echo '<td class="score">';print_r($i['losses']);echo"</td></tr>";

                            }
                            ?>
                            </table>
                        
                </div>  
             
                <?php
                    $uri = 'http://api.football-data.org/v1/soccerseasons/398/leagueTable';
                    $reqPrefs['http']['method'] = 'GET';
                    $reqPrefs['http']['header'] = 'X-Auth-Token: 276c78d8584e46778af8ee1047eb5ae3';
                    $stream_context = stream_context_create($reqPrefs);
                    $response = file_get_contents($uri, false, $stream_context);
                    $fixtures = json_decode($response,true);
                    #var_dump($fixtures  ,true);
                ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        
                            <h4 class="section" id="epl">Premier League</h4>
                            <table class="table table-sm table-hover">
                            <theader>
                                <th class="table_head">Position</th>
                                <th class="table_head">Team</th>
                                <th class="table_head">Played</th>
                                <th class="table_head">Points</th>
                                <th class="table_head">GF</th>
                                <th class="table_head">GA</th>
                                <th class="table_head">GD</th>
                                <th class="table_head">W</th>
                                <th class="table_head">D</th>
                                <th class="table_head">L</th>
                            </theader>

                            <?php    
                            foreach ($fixtures['standing'] as $i)
                            {
                               echo '<tr><td class="score">';print_r($i['position']);echo"</td>";
                                echo '<td class="score">';print_r($i['teamName']);echo"</td>";
                                echo '<td class="score">';print_r($i['playedGames']);echo"</td>";
                                echo '<td class="score">';print_r($i['points']);echo"</td>";
                                echo '<td class="score">';print_r($i['goals']);echo"</td>";
                                echo '<td class="score">';print_r($i['goalsAgainst']);echo"</td>";
                                echo '<td class="score">';print_r($i['goalDifference']);echo"</td>";
                                echo '<td class="score">';print_r($i['wins']);echo"</td>";
                                echo '<td class="score">';print_r($i['draws']);echo"</td>";
                                echo '<td class="score">';print_r($i['losses']);echo"</td></tr>";

                            }
                            ?>
                            </table>
                        
                </div>   
         </div>     
    </body>
</html>