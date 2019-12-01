<?php

use Illuminate\Database\Seeder;

class permissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=[
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'course-list',
            'course-create',
            'course-edit',
            'course-delete'
        ];
        foreach($permissions as $permission){
            permission::create(['name'=>$permission]);
        }
    }
}
