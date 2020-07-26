<?php

namespace Application\Core;

class File
{
    public function __construct()
    {
    }

    public static function returnOnlyImages($filesArray)
    {
        $arrayWithImages = [];
        $filesCount = count($filesArray['name']);
        $currentFile = 0;
        while ($currentFile != $filesCount)
        {
            $typeFile = $filesArray['type'][$currentFile];
            if ($typeFile === 'image/jpeg' || $typeFile === 'image/png' || $typeFile === 'image/gif')
            {
                $arrayWithImages['name'][$currentFile] = $filesArray['name'][$currentFile];
                $arrayWithImages['type'][$currentFile] = $filesArray['type'][$currentFile];
                $arrayWithImages['tmp_name'][$currentFile] = $filesArray['tmp_name'][$currentFile];
                $arrayWithImages['error'][$currentFile] = $filesArray['error'][$currentFile];
                $arrayWithImages['size'][$currentFile] = $filesArray['size'][$currentFile];
            }
            $currentFile++;
        }

        $arrayWithImages['name'] = array_values($arrayWithImages['name']);
        $arrayWithImages['type'] = array_values($arrayWithImages['type']);
        $arrayWithImages['tmp_name'] = array_values($arrayWithImages['tmp_name']);
        $arrayWithImages['error'] = array_values($arrayWithImages['error']);
        $arrayWithImages['size'] = array_values($arrayWithImages['size']);

        return $arrayWithImages;
    }

    public static function getFiles()
    {
        return $_FILES['upload'];
    }
}