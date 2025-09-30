<?php
namespace App\Models
class User
{   private int $id_user;
    private string $pseudo;
    private int $password;
    private string $email;
    private string $picture;
    private string $description;
    private string $creation_date;
    private string $id_role;

    public function __construct(string $pseudo, int $password, string $email, string $picture, string $description, int $date, string $role )
    {   $this->id_user = $id_user;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->email = $email;
        $this->picture = $picture;
        $this->description= $description;
        $this->date = $date;
         $this->role = $role;
    }

    //Les SET
      public function setId(string $id_user)
    {
        $this->id_user = $id_user;
        return $this;
    }
    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;
        return $this;
    }

    public function setPassword (float $password)
    {
        $this->password = $password;
        return $this;
    }

    public function setEmail(int $email)
    {
        $this->email = $email;
        return $this;
    }
    public function setPicture(int $picture)
    {
        $this->picture = $picture;
        return $this;
    }
     public function setDescription(int $description)
    {
        $this->description = $description;
        return $this;
    }
       public function setDate(int $date)
    {
        $this->date = $date;
        return $this;
    }
       public function setRole(int $role)
    {
        $this->role = $role;
        return $this;
    }
    

    //LES GET


    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
}
