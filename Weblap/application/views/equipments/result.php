<style type="text/css">
    .center {
  padding: 70px 0;
  border: 3px solid green;
  text-align: center;
}
    body {
  margin: 0;
  padding: 0;
  background: #000;
  overflow: hidden; 
  background-image: url("https://media.giphy.com/media/UYBDCJjwOd9Re/giphy.gif");
}

</style>





<body>
 
 <div id="page-wrap" class="pyro">
    <div class="before"></div>
    <div class="after"></div>
    <div class="center">
        <h1>Az eredményed</h1>
 
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            if ($answer6 == "C") { $totalCorrect++; }
            if ($answer7 == "D") { $totalCorrect++; }


            if ($totalCorrect <= 3) {
                echo "<div id='results'><h2>$totalCorrect / 7 jó válasz. Gyakorolj még egy kicsit</h2></div>";    
            }
            elseif ($totalCorrect == 5) {
                echo "<div id='results'><h2>$totalCorrect / 7 jó válasz. Nem is rossz!</h2></div>";    
            }
            elseif ($totalCorrect == 6) {
                echo "<div id='results'><h2>$totalCorrect / 7 jó válasz. Majdnem hibátlan!</h2></div>";    
            }
            elseif ($totalCorrect == 7){
                echo "<div id='results'><h2>Gratulálunk! Hibátlanul teljesítetted a kvízt</h2></div>";
            }
            else{
                echo "<div id='results'><h2>$totalCorrect / 7 jó válasz</h2></div>";    
            }
            

            
        ?>
    </div>

    
 </div>
 <button class="btn btn-primary btn-lg" onclick="history.go(-1);">Back </button>
</body>