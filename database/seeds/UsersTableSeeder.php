<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;


class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
 
    * @return void
     */


    public function run()
    {
 		 
		$user1 = "nelsonM";	
		$user2 = "bettyG";
		$user3 = "brianB";
	   
    	 DB::table('users')->insert(array(

	array('id'=>'1','name'=>"nelson", 'email'=>"nelson@msk.com",'type'=>"admin",'password'=>bcrypt($user1)),
	array('id'=>'2','name'=>"betty", 'email'=>"betty@gw.com",'type'=>"organiser",'password'=>bcrypt($user2)),
 	array('id'=>'3','name'=>"brian", 'email'=>"brian@b.com",'type'=>"staff",'password'=>bcrypt($user3)),   
   ));
}

}
