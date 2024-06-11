<?php 

require_once '../libraries/Database.php';

class User {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    //Find user by email or username
    public function findUserByEmailOrUsername($email, $username){
        $this->db->query('SELECT * FROM users WHERE usersUid = :username OR usersEmail = :email');
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);
        

        $row = $this->db->single();

        //Check row 
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    //Register User 
    public function register($data){
        if($this->findUserByEmailOrUsername($data['usersEmail'], $data['usersName'])){
            return false;
        }

        $this->db->query('INSERT INTO users (usersName, usersEmail, usersPwd)
        VALUES (:name, :email, :password)');
    
        //Bind values
        $this->db->bind(':name', $data['usersName']);
        $this->db->bind(':email', $data['usersEmail']);     
        $this->db->bind(':password', $data['usersPwd']);
        //Execute 
      
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

//Login user
    public function login($usersEmail, $usersPwd){
        $row = $this->findUserByEmailOrUsername($usersEmail, $usersEmail);
        if($row === false)  return false;
        $hashedPassword = $row->usersPwd;
        if(password_verify($usersPwd, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
    }
//
        public function checkuser($usersEmail, $usersPwd){
        $user = $this->findUserByEmailOrUsername($usersEmail, $usersEmail);

        if ($user) {
            $hashedPassword = $user->usersPwd;
            if (password_verify($usersPwd, $hashedPassword)) {
                return $user->usersRole;
            } else {
                return 0; 
            }
        } else {
            return -1; 
        }
    }
}
// PS D:\Xampp\htdocs\project1> git add .
// PS D:\Xampp\htdocs\project1> git commit -m "Thinh secord" 
// [main 9a62e5f] Thinh secord
//  1 file changed, 2 insertions(+), 1 deletion(-)
// PS D:\Xampp\htdocs\project1> git push -u origin main 