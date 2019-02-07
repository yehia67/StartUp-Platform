<?php
    if (!function_exists('roles')) {
        function role($id = null)
        {
            $array = [
              trans('admin.user'),
              trans('admin.admin'),
            ];

            return $id == null ? $array : $array[$id];
        }
    }
