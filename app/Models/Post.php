<?php
  namespace App\Models;

  use Illuminate\Database\Eloquent\Model;

  /**
   *
   */
  class Post extends Model
  {

    protected $guarded = [];

    protected $table = "Post";

    protected $fillable = ['id','content','created_at','updated_at'];


  }


 ?>
