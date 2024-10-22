<?php
function table_date($datetime)
{
    $date = DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $datetime);
    if ($date instanceof DateTime) {
        return $date->format('M d, Y');
    } else {
        return 'Invalid datetime';
    }
}

function end_url()
{
    return url('/api') . '/';
}

function user_roles($role_no)
{
    switch ($role_no) {
        case 1:
            return 'Super_Admin';
        case 2:
            return 'Brand';
        case 3:
            return 'Influencer';
        default:
            return false;
    }
}

function auth_users()
{
    // status : 1 for active , 2 for pending, 3 for suspended , 4 for unverified ,5 for delete ...
    $user_status =  [1, 2];
    return $user_status;
}

function active_users()
{
    // status : 1 for active , 2 for pending, 3 for suspended , 4 for unverified ,5 for delete ...
    $user_status =  [1];
    return $user_status;
}

function user_role_no($role_no)
{
    switch ($role_no) {
        case 'Super_Admin':
            return 1;
        case 'Brand':
            return 2;
        case 'Influencer':
            return 3;
        default:
            return false;
    }
}

function view_permission($page_name)
{
    $user_role = auth()->user()->role;
    switch ($user_role) {

        case 'Super_Admin':
            switch ($page_name) {
                case 'dashboard':
                case 'products':
                    return true;
                default:
                    return false;
            }

        case 'Brand':
            switch ($page_name) {
                case 'dashboard':
                case 'products':
                case 'settings':
                
                    return true;
                default:
                    return false;
            }

        case 'Influencer':
            switch ($page_name) {
                case 'dashboard':
                case 'settings':
                    return true;
                default:
                    return false;
            }

        default:
            return false;
    }
}

