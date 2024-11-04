<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Exception;
use Illuminate\Support\Facades\Log;

class DigitalCollection extends Model
{
    protected $fillable = [
        'isLocked', 'itemNumber', 'omekaIdentifier', 'workflow', 'creator', 'title', 'publisher', 'occasion', 'place', 'copyright_id', 'typeOfDocument', 'subject', 'description', 'physicalLocation', 'downloadFile', 'media', 'jpegPreviewPath', 'isJpegUploaded', 'isFileUploaded', 'dateOfPublication', 'driveURL', 'jpegDateUpload', 'fileDateUpload', 'isWordFileUploaded', 'wordFileUrl', 'wordFileDateUpload','originalFileName', 'notes',
    ];

    protected $casts = [
        'jpegDateUpload' => 'datetime',
        'fileDateUpload' => 'datetime',
        'wordFileDateUpload' => 'datetime'
    ];


   
    public static function getTypeOfDocument(): array
    {
        try {
            return ['Article', 'Book', 'Discourse', 'Foreword', 'Interview', 'Lecture', 'Lesson', 'Other', 'Sermon', 'Video'];
        } catch (Exception $e) {
            Log::error('Error retrieving Type of Document: ' . $e->getMessage());
            throw new Exception('Failed to retrieve tType opf Document.');
        }
    }


    use HasFactory;
}
