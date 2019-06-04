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


        $menus = [
            [
                'url' => route('bundles.all'),
                'name' => 'Bundles'
            ],
        ];

        $nav_menu = \Harimayco\Menu\Models\Menus::where('name', '=', 'nav-menu')->first();
        if ($nav_menu == "") {
            $nav_menu = new \Harimayco\Menu\Models\Menus();
        }
        $nav_menu->name = 'nav-menu';
        $nav_menu->save();
        foreach ($menus as $key => $item) {
            $key++;
            $menuItem = \Harimayco\Menu\Models\MenuItems::where('link', '=', $item['url'])
                ->where('menu', '=', $nav_menu->id)->first();
            if ($menuItem == "") {
                $menuItem = new \Harimayco\Menu\Models\MenuItems();
                $menuItem->label = $item['name'];
                $menuItem->link = \Illuminate\Support\Arr::last(explode('/', $item['url']));
                $menuItem->parent = 0;
                $menuItem->sort = $key;
                $menuItem->menu = $nav_menu->id;
                $menuItem->depth = 0;
                $menuItem->save();
            }
        }
    }
}
