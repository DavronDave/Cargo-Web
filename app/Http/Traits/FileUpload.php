<?php
namespace App\Http\Traits;
use Illuminate\Support\Facades\Storage;
trait FileUpload
{
    public  function uploadImage($file, $file_name, $path, $old = null, $sub_path = null)
    {
        if ($old != null && file_exists(public_path() . '/' . $old)) {
            unlink(public_path() . '/' . $old);
        }

        $image = '('.time() . ')' . $file->getClientOriginalName();

        if (is_null($sub_path)) {
            $file->move(public_path("storage/$path/"), $image);
            $this->{$file_name} = "storage/$path/" . $image;
            $this->save();
            return "storage/$path/" . $image;
        } else {
            $file->move(public_path("storage/$path/$sub_path/"), $image);
            $this->{$file_name} = "storage/$path/$sub_path/" . $image;
            $this->save();
            return "storage/$path/$sub_path/" . $image;
        }
    }
}
