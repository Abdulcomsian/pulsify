<?php


namespace App\Utils;


use Illuminate\Support\Facades\File;
use Notification;
use App\Models\DoctorReview;

class HelperFunctions
{
    public static function saveFile($oldFile = null, $newFile, $filePath)
    {
        try {
            $public_path = public_path($filePath);
            File::isDirectory($public_path) or File::makeDirectory($public_path, 0777, true, true);
            if ($oldFile) {
                @unlink($oldFile);
            }
            $filename = time() . rand(10000, 99999) . '.' .$newFile->getClientOriginalExtension();
            $newFile->move($public_path, $filename);
            return $filePath . $filename;
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function path()
    {
    }

    //avg function for rating
    public static function avg($id)
    {
        return DoctorReview::where('doctor_detail_id',$id)->avg('overall_rating');
    }


}
       