<?php
      namespace App\Repositories;

      use Illuminate\Database\Eloquent\Model;
      use App\User;
      /**
       *
       */
      class UserRepository implements  UserRepositoryinterface
      {
        protected $user;

        function __construct(User $user)
        {
          // code...
          $this->user = $user;
        }
        public function getAlllist(){
            return $this->user->all();
        }
        public function  getUserbyId($id){
            return $this->user->findOfail($id);
        }
     }

?>
