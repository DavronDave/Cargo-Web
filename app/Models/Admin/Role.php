<?php

namespace App\Models\Admin;

use App\Http\Traits\Translation;
use App\Models\Admin\Translate;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Role extends Model
{
    use HasFactory, Translation, Sortable;

    protected $guarded = [];

    protected $casts = [
        'permissions' => 'json'
    ];

    public const MODERATOR = 'Moderator';

    public function nameSortable($query, $direction)
    {
        return $query
            ->join('translates', 'roles.id', '=', 'translates.model_id')
            ->where('lang', getDefaultLanguage())
            ->where('table_name', 'roles')
            ->orderBy('translates.value', $direction)
        ->select('roles.*');
    }

    public static $permissions = array(
        'users.index',
        'users.create',
        'users.store',
        'users.destroy',
        'users.edit',
        'users.update',
        'users.show',
        'profile.index',
        'books.index',
        'books.create',
        'books.store',
        'books.destroy',
        'books.edit',
        'books.update',
        'books.show',
        'themes.index',
        'themes.create',
        'themes.store',
        'themes.destroy',
        'themes.edit',
        'themes.update',
        'themes.show',
        'tasks.index',
        'tasks.create',
        'tasks.store',
        'tasks.destroy',
        'tasks.edit',
        'tasks.update',
        'tasks.show',
        'questions.index',
        'questions.create',
        'questions.store',
        'questions.destroy',
        'questions.edit',
        'questions.update',
        'questions.show',
        'languages.index',
        'languages.create',
        'languages.store',
        'languages.destroy',
        'languages.edit',
        'languages.update',
        'languages.show',
        'categories.index',
        'categories.create',
        'categories.store',
        'categories.destroy',
        'categories.edit',
        'categories.update',
        'categories.show',
        'courses.index',
        'courses.create',
        'courses.store',
        'courses.destroy',
        'courses.edit',
        'courses.update',
        'courses.show',
        'roles.index',
        'roles.create',
        'roles.store',
        'roles.destroy',
        'roles.edit',
        'roles.update',
        'roles.show',
        'settings.index',
        'settings.create',
        'settings.store',
        'settings.destroy',
        'settings.edit',
        'settings.update',
        'settings.show',
        'instruments.index',
        'instruments.create',
        'instruments.store',
        'instruments.destroy',
        'instruments.edit',
        'instruments.update',
        'instruments.show',
        'practical_works.index',
        'practical_works.create',
        'practical_works.store',
        'practical_works.destroy',
        'practical_works.edit',
        'practical_works.update',
        'practical_works.show'
    );

    public static function getTranslatePermission($permission)
    {
        if($permission == 'books.themes.index'){
            return 'Темы(Список)';
        }
        if($permission == 'books.themes.edit'){
            return 'Темы(Редактировать)';
        }
        if($permission == 'books.themes.create'){
            return 'Темы(Создать)';
        }
        if($permission == 'books.tasks.index'){
            return 'Задачи(Список)';
        }
        if($permission == 'books.tasks.edit'){
            return 'Задачи(Редактировать)';
        }
        if($permission == 'books.tasks.create'){
            return 'Задачи(Создать)';
        }
        if($permission == 'books.tasks.questions.index'){
            return 'Вопросы(Список)';
        }
        if($permission == 'books.tasks.questions.edit'){
            return 'Вопросы(Редактировать)';
        }
        if($permission == 'books.tasks.questions.create'){
            return 'Вопросы(Создать)';
        }
        if($permission == 'books.themes.practical_works.index'){
            return 'Практические работы(Список)';
        }
        if($permission == 'books.themes.practical_works.edit'){
            return 'Практические работы(Редактировать)';
        }
        if($permission == 'books.themes.practical_works.create'){
            return 'Практические работы(Создать)';
        }
        $result = explode('.', $permission);

        if($result[0] == 'users'){
            return 'Пользователи('.getPermisson($result[1]).')';
        }
        if($result[0] == 'categories'){
            return 'Категории('.getPermisson($result[1]).')';
        }
        if($result[0] == 'courses'){
            return 'Курсы('.getPermisson($result[1]).')';
        }
        if($result[0] == 'languages'){
            return 'Языки('.getPermisson($result[1]).')';
        }
        if($result[0] == 'roles'){
            return 'Роли('.getPermisson($result[1]).')';
        }
        if($result[0] == 'settings'){
            return 'О платформе('.getPermisson($result[1]).')';
        }
        if($result[0] == 'instruments'){
            return 'Инструменты('.getPermisson($result[1]).')';
        }
        if($result[0] == 'themes'){
            return 'Темы('.getPermisson($result[1]).')';
        }
        if($result[0] == 'tasks'){
            return 'Задачи('.getPermisson($result[1]).')';
        }
        if($result[0] == 'books' && $result[1] != 'themes' && $result[1] != 'tasks'){
            return 'Книги('.getPermisson($result[1]).')';
        }
        if($result[0] == 'practical_works'){
            return 'Практические работы('.getPermisson($result[1]).')';
        }
        if($result[0] == 'questions'){
            return 'Вопросы('.getPermisson($result[1]).')';
        }
        if($result[0] == 'profile'){
            return 'Профиль('.getPermisson($result[1]).')';
        }

    }

    public function scopeKey($query , $data = null)
    {
        if($data){
            return $query->where('key', 'like', '%'.$data.'%');
        }
        return  $query;
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function saveTranslate($names):void
    {
        foreach($names as $key => $name)
        {
            $translate = new Translate;
            $translate->table_name = 'roles';
            $translate->column_name = 'name';
            $translate->model_id = $this->id;
            $translate->value = $name;
            $translate->lang = $key;

            $translate->save();
        }
    }

    public function updateTranslate($names, $column_name):void
    {

        $translates = Translate::query()
            ->where('model_id', $this->id)
            ->where('table_name', $this->table)
            ->where('column_name', $column_name)
            ->get();

        foreach ($translates as $translate) {
            $translate['value'] = $names[$translate->lang];
            $translate->save();
        }

        $urls = array_diff_assoc(getAllLanguage()->pluck('url')->all(), $translates->pluck(('lang'))->all());
        foreach($urls as $url)
        {
            $translate = new Translate;
            $translate->table_name = $this->table;
            $translate->column_name = $column_name;
            $translate->model_id = $this->id;
            $translate->value = $names[$url];
            $translate->lang = $url;

            $translate->save();
        }
    }

    public function translates()
    {
        return $this->hasMany(Translate::class, 'model_id', 'id')->where('table_name', 'roles');
    }

    public function translate()
    {
        return $this->hasOne(Translate::class, 'model_id', 'id')
            ->where('table_name', 'roles')
            ->where('lang', getDefaultLanguage());
    }

}
