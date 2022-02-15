<?php


namespace App\classes;


class StudentInfo
{
    protected $name;
    protected $email;
    protected $phone;
    protected $value;
    protected $result;
    protected $imageFile;
    protected $imageName , $imageDirectory;
    public function __construct($post=null , $file=null)
    {
        if ($post)
        {
            $this->name=$post['name'];
            $this->email=$post['email'];
            $this->phone=$post['phone'];
            $this->value = $post;
        }
        if ($file)
        {
            $this->imageFile = $file['image'];
        }
    }

    public function index()
    {


//        $this->imageName = $_FILES['image']['name'];
//        $this->imageDirectory = 'assests/img/upload/'.$this->imageName;
//        move_uploaded_file($_FILES['image']['tmp_name'],$this->imageDirectory);
//        echo 'Success';
//        echo '<pre>';
//        print_r($_FILES);
        $this->imageUpload();
        $db = 'db.txt';
        $file = fopen()
    }
    protected function imageUpload()
    {
        $this->imageName =time(). $this->imageFile['name'];
        $this->imageDirectory =  'assests/img/upload/' . $this->imageName;
        move_uploaded_file($this->imageFile['tmp_name'],$this->imageDirectory);
        echo 'success';

    }

}