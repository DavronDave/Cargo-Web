<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FileService
{
    public function __construct(private Request $request, private string $attribute)
    {

    }

    public function saveFile(&$model, string $attr_name, string $path):void {
        if($this->request->hasFile($this->attribute)){
            $file_path = $path.$model->{$this->attribute};

            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $file_name = md5(time()) . '.' . $this->request->{$this->attribute}->getClientOriginalExtension();

            $this->request->{$this->attribute}->move(public_path($path), $file_name);/* fayl bn fayl nomini birlashtiradi bir vaqtda bir xil fayl kiritilanda togri faylni topish uchun */
            $model->{$attr_name} = $file_name;
            $model->save();
        }
    }
}
