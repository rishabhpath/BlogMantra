<?php

class signup
{
    private $error = "";
    public function evaluate($data)
    {
        foreach ($data as $key => $value )
        {
            if (empty($value))
            {
                $error =$error. $key." is empty!<br>";

            }
        }
        if ($error == "")
        {
            //NO ERROR
            $this->create_user($data);
        }
        else
        {
            return $error;
        }
    }

    public function create_user($data)
    {
        $query = "insert into users
        (userid,fname,lname,gender,email,password,url) 
        values 
        ('$userid','$fname','$lname','$gender','$email','$password','$url')"
        $DB= new database();
        $DB->save($query);

    }
}

?>