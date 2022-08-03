<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>calculator | ماشین حساب</title>
</head>
<body>
    <form>
        <fieldset>
        <table class="cursor">
        <?php 
            //ماشین حساب [ + , - , / , * , **]
        class Amir{

            // تو این قسمت لاین 17 و 18 مقدارمون رو وارد میکنیم
            public $value1=" VALUE1 "; 
            public $value2=" VALUE2 ";
                public function aaa(){
                    return $this -> value1  +  $this -> value2;
                }
                public function bbb(){
                    return $this -> value1  -  $this -> value2;
                }
                public function ccc(){
                    return $this -> value1  *  $this -> value2;
                }
                public function ddd(){
                    return $this -> value1  /  $this -> value2;
                }
                public function eee(){
                    return $this -> value1 ** $this -> value2;
                }
        }
$abolfathy=new Amir;
echo "<p class='title'> Calcuiator | ماشین حساب </p>";
echo "<tr><th><mark>* Addition ( + ) : </mark></th><td>" . $abolfathy -> aaa() . "</td></tr>";
echo "<tr><th>* Subtraction ( - ): </th><td>" . $abolfathy -> bbb() . "</td></tr>";
echo "<tr><th><mark>* Multipiction ( * ): </mark></th><td>" . $abolfathy -> ccc() . "</td></tr>";
echo "<tr><th>* Taghsim ( / ): </th><td>" . $abolfathy -> ddd() . "</td></tr>";
echo "<tr><th><mark>* Exponent ( ** ): </mark></th><td>" . $abolfathy -> eee() . "</td></tr>";

        ?>
        </table>
        </fieldset>
    </form>
</body>
</html>
