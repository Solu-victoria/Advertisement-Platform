<?php
include('connection.php');

function getRealIpUser(){
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_X_CLIENT_IP'])) : return $_SERVER['HTTP_X_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
    
}

function Password_Encryption($password){
    $Blowfish_Hash_Format="$2y$10$";
     $Salt_Length= 22;
    
     $Salt= Generate_Salt($Salt_Length);
    
    $Formatting_Blowfish_With_Salt = $Blowfish_Hash_Format .$Salt;
    $Hash=crypt($password,$Formatting_Blowfish_With_Salt);
    return $Hash;
}
 
function Generate_Salt($length){
    $unique_random_string = md5(uniqid(mt_rand(), true));
    
    $base64_string = base64_encode($unique_random_string);
    
    $modified_base64_string = str_replace('+', '.', $base64_string);
    
    $salt = substr( $modified_base64_string, 0, $length);
    
    return $salt;
}

function Password_Check($password, $existing_hash){
    
    $hash = crypt($password, $existing_hash);
    if($hash === $existing_hash){
        return true;
    }else{
        return false;
    }
}
function CheckEmail($email){
    global $link;
    
    $query="SELECT * FROM reg WHERE email='$email' ";
    $run = mysqli_query($link, $query);
    if(mysqli_num_rows($run)>0){
        return true;
    }else{
        return false;
    }
}
function CheckUsername($username){
    global $link;
    
    $query="SELECT * FROM lion WHERE username='$username' ";
    $run = mysqli_query($link, $query);
    if(mysqli_num_rows($run)>0){
        return true;
    }else{
        return false;
    }
}

function login($email,$password){
    global $link;
    $query="SELECT * FROM users WHERE email = '$email'";
     $run = mysqli_query($link, $query);
    if($admin=mysqli_fetch_assoc($run)){
        if( Password_Check($password,$admin["password"])){
            return $admin;
        }else{
            return null;
        }
    }
    
}

function loginadmin($email,$password){
    global $link;
    $quer="SELECT * FROM admin WHERE mail = '$email'";
     $ru = mysqli_query($link, $quer);
    if($adminn=mysqli_fetch_assoc($ru)){
        if( Password_Check($password,$adminn["password"])){
            return $adminn;
        }else{
            return null;
        }
    }
    
}
?>