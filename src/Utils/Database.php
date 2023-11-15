<?php 
namespace App\Utils;
use Illuminate\Database\Capsule\Manager as DB;

class Database{
    public function __construct(){
        $db = new DB;
        $db->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'school',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        // Set the event dispatcher used by Eloquent models... (optional)
        // Make this db instance available globally via static methods... (optional)
        $db->setAsGlobal();

        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $db->bootEloquent();


    }

    public function index(){
        $students = DB::table('students')->get();
        return $students;
    }

    public function destroy($id){
        $result = DB::table('students')->where('id',$id)->delete();
        if($result){
            header("location: index.php");
        }
    }

    public function store($data){
        $id = DB::table("students") ->insertGetId([
            "name" => $data["name"],
            "email"=> $data["email"],
            "gender"=> $data["gender"],
            "dob"=> $data["dob"],
            "age"=> $data["age"]
        ]);
        if ($id) {
            header("location:edit.php?id={$id}");     
        }else{
                echo "Try Again";
        };  
    }

    public function show($id){
        return DB::table("students") -> where("id",$id)->first();
    }

    

    public function update($data){
        $result = DB::table("students") -> where('id',$data['id']) -> update([
            "name" => $data["name"],
            "email"=> $data["email"],
            "gender"=> $data["gender"],
            "dob"=> $data["dob"],
            "age"=> $data["age"]
        ]);
        
        if($result){
            header("location:index.php");
        }
    }
        

}



?>