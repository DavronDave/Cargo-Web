<?php
namespace App\Http\Traits;

use App\Models\Admin\Translate;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Image;
trait Translation
{
    public function getTranslation($column, $lang)
    {
        return $this->translates
            ->where('url', $lang)
            ->where('column_name', $column)
            ->first()->column_value ?? '';
    }
    public function translates(): HasMany
    {
        return $this->hasMany(Translate::class, 'model_id', 'id')->where('table_name', $this->getTable());
    }
    public function saveTranslation($value, $column_name, $lang, $default_value): void
    {
        $translate = new Translate;
        $translate->table_name = $this->getTable();
        $translate->column_name = $column_name;
        $translate->model_id = $this->id;
        $translate->column_value = $value ?? $default_value;
        $translate->url = $lang;

        $translate->save();
    }

    public function updateTranslation($values, $column_name, $default_value): void
    {
        $translates = Translate::query()
            ->where('model_id', $this->id)
            ->where('table_name', $this->getTable())
            ->where('column_name', $column_name)
            ->get();
        try{
            foreach ($translates as $translate) {
                if(in_array($translate->url, getAllLanguage()->pluck('url')->all())){
                    $translate->column_value = ($values[$translate->lang]) ? $values[$translate->lang] : $default_value;
                    $translate->save();
                }
        }
        }catch(\Exception $e){
            dd($e->getMessage());
        }

        $urls = array_diff_assoc(getAllLanguage()->pluck('url')->all(), $translates->pluck(('url'))->all());
        foreach($urls as $url)
        {
            $this->saveTranslation($values[$url], $column_name, $url, $default_value);
        }
    }

}
