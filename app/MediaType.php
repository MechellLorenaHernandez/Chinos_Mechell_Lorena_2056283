<?php 
 
namespace App; 
 
use Illuminate\Database\Eloquent\Model; 
 
class MediaType extends Model
{      
    protected $table = "media_types";  
    protected $primaryKey = "MediaTypeId";   
    public $timestamps = false; 
}
