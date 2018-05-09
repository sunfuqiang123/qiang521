<?php  
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;  
use Illuminate\Support\Facades\DB;  
class Index extends Model  
{  
    protected $tableName = 'book';  
    public function book_show()
    {
    	return DB::table($this->tableName)->get();
    }
    
}
?>