<?php
 function getLetterGrate($score){
     if($score>=80){
         $grade="A+";
     }elseif($score>=70 && $score<80){
        $grade="A";
     }elseif($score>=60 && $score<70){
        $grade="A-";
     }elseif($score>=50 && $score<60){
        $grade="B";
     }elseif($score>=40 && $score<50){
        $grade="C";
     }elseif($score>=33 && $score<40){
        $grade="D";
     }else{
        $grade="F";
     }
     
     return $grade;


 }
 function getCGPA($score){
    if($score>=80){
        $grade=5;
    }elseif($score>=70 && $score<80){
       $grade=4;
    }elseif($score>=60 && $score<70){
       $grade=3.5;
    }elseif($score>=50 && $score<60){
       $grade=3;
    }elseif($score>=40 && $score<50){
       $grade=2;
    }elseif($score>=33 && $score<40){
       $grade=1;
    }else{
       $grade=0;
    }
    
    return $grade;
}
    function avgLetterGrade($score){

        if($score==5){
            $grade="A+";
        }elseif($score>=4 && $score<5){
            $grade="A";
        }elseif($score>=3.5 && $score<4){
            $grade="A-";
        }elseif($score>=3 && $score<3.5){
            $grade="B";
        }elseif($score>=2 && $score<3){
            $grade="C";
        }elseif($score>=1 && $score<2){
            $grade="D";
        }else{
            $grade="F";
        }
        return $grade;
    }

?>