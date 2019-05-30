<?php

use Illuminate\Database\Seeder;
use  Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class V2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'bundle_access',
            'bundle_create',
            'bundle_edit',
            'bundle_view',
            'bundle_delete'
        ];
        $permission_ids = [];

        foreach ($permissions as $item) {
            $permission = Permission::findOrCreate($item);
            $permission_ids[] = $permission->id;
        }
        $admin = Role::findByName('administrator');
        $admin->givePermissionTo($permission_ids);
        $teacher =Role::findByName('teacher');
        $teacher->givePermissionTo($permission_ids);

        $student =Role::findByName('student');
        $student->givePermissionTo(['bundle_view','bundle_access']);

    }
}
