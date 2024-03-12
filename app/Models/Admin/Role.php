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

//    public const MODERATOR = 'Moderator';
    const ADMIN = 'admin';
    const MODERATOR = 'moderator';

    public function nameSortable($query, $direction)
    {
        return $query
            ->join('translates', 'roles.id', '=', 'translates.model_id')
            ->where('lang', getDefaultLanguage())
            ->where('table_name', 'roles')
            ->orderBy('translates.value', $direction)
        ->select('roles.*');
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
