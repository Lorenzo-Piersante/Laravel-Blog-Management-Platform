<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run() {
    	
        // user
        DB::table('users')->insert([
        	'username' => 'useruser',
            'name' => 'user user',
            'birthday' => '1995-10-13',
            'fiscalCode' => 'PRSLNZ58A47T',
            'residency' => 'via Brecce Bianche 13, Ancona',
            'description' => 'Suspendisse vitae feugiat arcu. Donec ultrices aliquet luctus. Morbi fermentum aliquam tortor, sit amet aliquet mi sollicitudin id. Donec eget placerat leo. Proin consectetur aliquam lectus id ultrices. Ut ut nulla sodales sem fringilla maximus. Ut gravida tempor nisl feugiat interdum. Quisque velit risus, finibus id lectus vehicula, lacinia tincidunt augue. Nullam venenatis malesuada venenatis. Pellentesque vulputate risus quis dictum imperdiet. Nullam dapibus tortor ipsum, et cursus nisl varius eget. Etiam tincidunt, nisi quis pharetra lacinia, sem leo dapibus neque, sit amet malesuada purus neque vehicula felis.',
            'role' => 'user',
            'email' => 'useruser@gmail.com',
            'password' => Hash::make('uzWnAasH'),
        ]);
        
        // staff
        DB::table('users')->insert([
        	'username' => 'staffstaff',
            'name' => 'staff staff',
            'birthday' => '1995-10-13',
            'fiscalCode' => 'PRSLNZ58A47T',
            'residency' => 'via Brecce Bianche 13, Ancona',
            'description' => 'Suspendisse vitae feugiat arcu. Donec ultrices aliquet luctus. Morbi fermentum aliquam tortor, sit amet aliquet mi sollicitudin id. Donec eget placerat leo. Proin consectetur aliquam lectus id ultrices. Ut ut nulla sodales sem fringilla maximus. Ut gravida tempor nisl feugiat interdum. Quisque velit risus, finibus id lectus vehicula, lacinia tincidunt augue. Nullam venenatis malesuada venenatis. Pellentesque vulputate risus quis dictum imperdiet. Nullam dapibus tortor ipsum, et cursus nisl varius eget. Etiam tincidunt, nisi quis pharetra lacinia, sem leo dapibus neque, sit amet malesuada purus neque vehicula felis.',
            'role' => 'staff',
            'email' => 'staffstaff@gmail.com',
            'password' => Hash::make('uzWnAasH'),
        ]);
        
        // admin
        DB::table('users')->insert([
        	'username' => 'adminadmin',
            'name' => 'admin admin',
            'birthday' => '1995-10-13',
            'fiscalCode' => 'PRSLNZ58A47T',
            'residency' => 'via Brecce Bianche 13, Ancona',
            'description' => 'Suspendisse vitae feugiat arcu. Donec ultrices aliquet luctus. Morbi fermentum aliquam tortor, sit amet aliquet mi sollicitudin id. Donec eget placerat leo. Proin consectetur aliquam lectus id ultrices. Ut ut nulla sodales sem fringilla maximus. Ut gravida tempor nisl feugiat interdum. Quisque velit risus, finibus id lectus vehicula, lacinia tincidunt augue. Nullam venenatis malesuada venenatis. Pellentesque vulputate risus quis dictum imperdiet. Nullam dapibus tortor ipsum, et cursus nisl varius eget. Etiam tincidunt, nisi quis pharetra lacinia, sem leo dapibus neque, sit amet malesuada purus neque vehicula felis.',
            'role' => 'admin',
            'email' => 'adminadmin@gmail.com',
            'password' => Hash::make('uzWnAasH'),
        ]);

        // dummy data
        factory(App\User::class, 5)->create();
        factory(App\Post::class, 5)->create();
    }
}
