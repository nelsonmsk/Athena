<?php


use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *

     * @return void
     */


    public function run()
    {


	$this->call([
		UsersTableSeeder::class,
		SiteDefaultsTableSeeder::class,
		ServicesTableSeeder::class,
		GalleriesTableSeeder::class,		
		OrdersTableSeeder::class,
		ReservationsTableSeeder::class,
		ProfilesTableSeeder::class,
		CoffeesTableSeeder::class,
		BreakfastsTableSeeder::class,
		StartersTableSeeder::class,
		MainsTableSeeder::class,
		WinesTableSeeder::class,
		DessertsTableSeeder::class,
		CustomersTableSeeder::class,
	]);
    }

}
