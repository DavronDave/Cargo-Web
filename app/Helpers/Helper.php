<?php
use App\Models\Language;

    function getDefaultLanguage()
    {
        return Language::where('default', 1)->first()->url;
    }
    function getAllLanguage()
    {
        return Language::get();
    }
    function getPermisson($permission)
    {
        if($permission == 'index'){
            return 'Список';
        }
        if($permission == 'edit'){
            return 'Редактировать';
        }
        if($permission == 'create'){
            return 'Создать';
        }
        if($permission == 'store'){
            return 'Добавить';
        }
        if($permission == 'destroy'){
            return 'Удалить';
        }
        if($permission == 'show'){
            return 'Просмотр';
        }
        if($permission == 'update'){
            return 'Изменить';
        }
    }
?>
