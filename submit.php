<!-- Aakash -->
<!-- 8622564 -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $age =$password = $city = $country ='';
    
    $username =$_POST['username'];
    $age =$_POST['age'];
    $password =$_POST['password'];
    $city =$_POST['city'];
    $country =$_POST['country'];
    if(empty($username)){
        echo "please enter username";

    }
    else
    {
        $user = strip_tags($username);
    }
    if(empty($age)){
        echo "please enter age";

    }
    else
    {
        if(filter_var($age,FILTER_VALIDATE_INT ) >=18  && filter_var($age,FILTER_VALIDATE_INT ) <=120)
        {
            $ag =strip_tags($age);
        }
        else{
            echo "please enter a age between 18 to 120";
        }
    } if(empty($password)){
        echo "please enter password";

    }
    else
    {
        if(preg_match('/^(?=[^A-Z]*[A-Z])(?=[^a-z]*[a-z])(?=[^\d]*\d)[a-zA-Z\d]{6,}$/',$password)){
            $pass = strip_tags($password);

        }
        else
        {
            echo "please enter strong password 6 character long with special characters";
        }




    } if(empty($city)){
        echo "please enter valid city name";

    }
    else
    {
        $cit = strip_tags($city);
    } 
    
    
    if(empty($country)){
        echo "please enter valid country";

    }
    else
    {
        $count= strip_tags($country);
    } 
    
    
    
if (isset($user) && isset($ag) && isset($cit) && isset ($count) && isset($pass)){

    echo " Success";
}
    
    
}






?>