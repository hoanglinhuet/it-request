<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Employees')->insert(
        	[
        		[
		            'name' => 'Linh',
		            'username' => 'linh',
		            'password' => bcrypt('linh'),
		            'image' => null,
		            'position' => 1,
			            'team_id' => 1
		        ],
		        [
		            'name' => 'Nam',
		            'username' => 'nam',
		            'password' => bcrypt('nam'),
		            'image' => null,
		            'position' => 2,
		            'team_id' => 2
		        ],
		        [
		            'name' => 'Qui',
		            'username' => 'qui',
		            'password' => bcrypt('qui'),
		            'image' => null,
		            'position' => 1,
		            'team_id' => 1
		        ]
        	]
    );
    }
}
