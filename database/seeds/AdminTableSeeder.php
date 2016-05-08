<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('admin')->insert([
	    	'dept' => 'AR',
	        'userName' => 'arch',
	        'password' => sha1('cse'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'CS',
	        'userName' => 'cse',
	        'password' => sha1('cse'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'CL',
	        'userName' => 'chem',
	        'password' => sha1('chem'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'CV',
	        'userName' => 'civ',
	        'password' => sha1('civ'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'CY',
	        'userName' => 'chemy',
	        'password' => sha1('chemy'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'CA',
	        'userName' => 'ca',
	        'password' => sha1('ca'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'CC',
	        'userName' => 'cecase',
	        'password' => sha1('cecase'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'EN',
	        'userName' => 'energy',
	        'password' => sha1('energy'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'EE',
	        'userName' => 'eee',
	        'password' => sha1('eee'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'HM',
	        'userName' => 'hm',
	        'password' => sha1('hm'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'ME',
	        'userName' => 'mech',
	        'password' => sha1('mech'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'MA',
	        'userName' => 'math',
	        'password' => sha1('math'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'MME',
	        'userName' => 'mme',
	        'password' => sha1('mme'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'MS',
	        'userName' => 'ms',
	        'password' => sha1('ms'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'PR',
	        'userName' => 'prod',
	        'password' => sha1('prod'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'IC',
	        'userName' => 'ice',
	        'password' => sha1('ice'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'PH',
	        'userName' => 'phy',
	        'password' => sha1('phy'),
        ]);

        DB::table('admin')->insert([
	    	'dept' => 'all',
	        'userName' => 'all',
	        'password' => sha1('all'),
        ]);
    }
}
