<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'country_create',
            ],
            [
                'id'    => '18',
                'title' => 'country_edit',
            ],
            [
                'id'    => '19',
                'title' => 'country_show',
            ],
            [
                'id'    => '20',
                'title' => 'country_delete',
            ],
            [
                'id'    => '21',
                'title' => 'country_access',
            ],
            [
                'id'    => '22',
                'title' => 'audit_log_show',
            ],
            [
                'id'    => '23',
                'title' => 'audit_log_access',
            ],
            [
                'id'    => '24',
                'title' => 'team_create',
            ],
            [
                'id'    => '25',
                'title' => 'team_edit',
            ],
            [
                'id'    => '26',
                'title' => 'team_show',
            ],
            [
                'id'    => '27',
                'title' => 'team_delete',
            ],
            [
                'id'    => '28',
                'title' => 'team_access',
            ],
            [
                'id'    => '29',
                'title' => 'task_management_access',
            ],
            [
                'id'    => '30',
                'title' => 'task_status_create',
            ],
            [
                'id'    => '31',
                'title' => 'task_status_edit',
            ],
            [
                'id'    => '32',
                'title' => 'task_status_show',
            ],
            [
                'id'    => '33',
                'title' => 'task_status_delete',
            ],
            [
                'id'    => '34',
                'title' => 'task_status_access',
            ],
            [
                'id'    => '35',
                'title' => 'task_tag_create',
            ],
            [
                'id'    => '36',
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => '37',
                'title' => 'task_tag_show',
            ],
            [
                'id'    => '38',
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => '39',
                'title' => 'task_tag_access',
            ],
            [
                'id'    => '40',
                'title' => 'task_create',
            ],
            [
                'id'    => '41',
                'title' => 'task_edit',
            ],
            [
                'id'    => '42',
                'title' => 'task_show',
            ],
            [
                'id'    => '43',
                'title' => 'task_delete',
            ],
            [
                'id'    => '44',
                'title' => 'task_access',
            ],
            [
                'id'    => '45',
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => '46',
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);

    }
}
