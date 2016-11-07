<html>
    <head>
        <title>This Weeks Games and Apps</title>
        <link href="https://github.com/dawnify/a3/blob/master/style.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <h1>What my friends played and used this week</h1>
        <div class="mainwrapper">
            
            <div class="middle">

                <form action="ass3.php" method="post">
                    Write what you think was popular this week
                    <input type="text" name="formGames" maxlength="50"">
                    <input type="submit" name="formSubmit" value="Submit">
                </form>
            </div>
            <div class="right">
                    <?php
                    class games_hours{
                        public $name;
                        public $monday;
                        public $tuesday;
                        public $wednesday;
                        public $thursday;
                        public $friday;
                        public $saturday;
                        public $sunday;
                        public $photo_url;
                        
                        public function __gamesString($name, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday $photo_url) {
                            $this->name = $name;
                            $this->monday = $monday;
                            $this->tuesday = $tuesday;
                            $this->wednesday = $wednesday;
                            $this->thursday = $thursday;
                            $this->friday = $friday;
                            $this->saturday = $saturday;
                            $this->sunday = $sunday;
                            $this->photo_url = $photo_url;
                            
                        }
                    }
                    //$rides = new games_hours('', '', '', '', '', '', 'http://plusquotes.com/images/quotes-img/halloween-02.jpg', ''); 
                    $BlackOps3 = new games_hours('Black Ops 3',  '47',  '32',  '12',  '22',  '39',  '56',  '60', 'https://github.com/dawnify/a3/blob/master/bo3.jpg?raw=true'); 
                    $GrandTheftAutoV = new games_hours('Grand Theft Auto V',  '30',  '7',  '9',  '2',  '10',  '0',  '17', 'https://github.com/dawnify/a3/blob/master/gta5.jpg?raw=true'); 
					$Smite = new games_hours('SMITE',  '12',  '15',  '3',  '6',  '1',  '5',  '18', 'https://github.com/dawnify/a3/blob/master/smite.jpg?raw=true'); 
                    $Battlefield1 = new games_hours('Battlefield 1',  '23',  '13',  '16',  '21',  '9',  '14',  '16', 'https://github.com/dawnify/a3/blob/master/bf1.jpg?raw=true'); 
                    $RocketLeague = new games_hours('Rocket League',  '3',  '1',  '4',  '0',  '6',  '11',  '8', 'https://github.com/dawnify/a3/blob/master/rocket.jpg?raw=true'); 
                    $ForzaHorizon3 = new games_hours('Forza Horizon 3', '7',  '7',  '2',  '4',  '0',  '6',  '10', 'https://github.com/dawnify/a3/blob/master/forza3.jpg?raw=true'); 
					$Overwatch = new games_hours('Overwatch',  '2',  '5',  '4',  '1',  '5',  '5',  '9','https://github.com/dawnify/a3/blob/master/ow.jpg?raw=true');
                    $Youtube = new games_hours('Youtube',  '3',  '0',  '1',  '7',  '2',  '3',  '1', 'https://github.com/dawnify/a3/blob/master/yt.jpg?raw=true'); 
					$Netflix = new games_hours('Netflix',  '11',  '5',  '7',  '13',  '6',  '32',  '29','https://github.com/dawnify/a3/blob/master/Netflix.jpg?raw=true');
                    $Skype = new games_hours('Skype',  '6',  '1',  '0',  '2',  '0',  '5',  '2', 'https://github.com/dawnify/a3/blob/master/Skype.jpg?raw=true'); 
					$Twitch = new games_hours('Twitch',  '1',  '3',  '0',  '0',  '2',  '4',  '8', 'https://github.com/dawnify/a3/blob/master/twitch.jpg?raw=true');
                    
 
                    $games_hourss = array($blackOps3, $Overwatch, $Netflix, $Youtube, $Twitch, $Skype, $RocketLeague, $GrandTheftAutoV, $Smite, 
                     $Battlefield 1, $ForzaHorizon3);
                    $value = 0;            
                    if(isset($_POST['formSubmit']) == "Submit"){
                        $varGames = $_POST['formGames'];
                        $varGames = strtolower($varGames);
                        foreach($games_hourss as $games){
                            if($games->name == $varGames){
                                echo "<div class=media>";
                                echo "<img class='games_picture' src='" . $games->photo_url . "'>";
                            
                                echo "</div>";
                                //echo $games->monday;
                                echo "<div class='text'><p>" . $games->name ." <br> Hours Monday: " . $games->monday . " Hours Tuesday: " . $games->tuesday . ". Hours Wednesday: " . $games->wednesday . ". Hours Thursday: " . $games->thursday . ". Hours Friday: " . $games->friday .". Hours Saturday: " . $games->saturday . ". Hours Sunday: " . $games->sunday .  ".</p></div>";
                                $value = 1;
                            }
                        }
                        if($value == 0){
                            echo "<img class='image_index' src='https://github.com/dawnify/a3/blob/master/nothingtodohere.jpg?raw=true'>";
                            echo "<p class='text'>Unfortunatley, ". $varGames ." was not popular enough this week.</p>" ;   
                        }
                    }
                    else{
                        echo "<img class='image_index' src='https://github.com/dawnify/a3/blob/master/xbox_images.jpg?raw=true'>"; 
                        echo "<div class='map'><p>Check out if your favorite game made it to the popular list this week!</p></div>";
                    }
                    ?>
            </div>
            
            
            
            
        </div>
    </body>
    
</html>