<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   protected $fillable =
       [
           'title'
           ,'content'
           , 'source_website'
           , 'source_url'
           , 'published_date'
           , 'image_url'
           , 'category_id'
       ];

   public  function category(){
       return $this->belongsTo('App\Category');
   }

   public function get_small_content(){

       if (strlen($this->content) > 150){

           return str_split($this->content, 150)[0].'...';
       }
       return $this->content;
   }
}
