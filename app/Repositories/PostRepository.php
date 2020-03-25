<?php
      namespace App\Repositories;

      use Illuminate\Database\Eloquent\Model;
      use App\Models\Post;
      /**
       *
       */
      class PostRepository extends UserRepository
      {
        protected $Post;

        function __construct(Post $Post)
        {
          // code...
          $this->Post = $Post;
        }
        public function getAlllist(){

            return $this->Post->all();
        }
        public function  getbyId($id){

            return $this->Post->find($id);
        }
        public function editdata($post){

            try {

                $data = $this->Post::find($post['id']);

                $update = $data->update($post);

                if($update){

                    return $update;
                }

                return false;
            } catch (\Exception $e) {

                return $e->getMessage();
            }

        }
        public function delete($id){
            $post = $this->Post->find($id);
            $data = $post->delete();
            if($data){
                return $data;
            }
            return false;
        }
     }

?>
