<?php

namespace Application\Helpers;

use GuzzleHttp\Psr7\UploadedFile;

class FileUploader
{
    public const DEFAULT_UPLOAD_DIR = __DIR__.'/../../public/uploads';

    public static function uploadFile( UploadedFile $file, string $pathDirectory = self::DEFAULT_UPLOAD_DIR)
    {
        $newFilename = md5(uniqid()).'_'.$file->getClientFilename();
        //$fullPath = $pathDirectory.$newFilename;
        $fullPath = 'C:\wamp64\www\oc_my_first_blog_php\public\uploads\\'.$newFilename;
        dump($fullPath);
        return [

            'isSuccess' => move_uploaded_file($file['tmp_name'], $fullPath),
            'filename' => $newFilename
        ];

    }

}