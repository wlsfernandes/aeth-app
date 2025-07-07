<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Exception;
use Illuminate\Support\Facades\Log;

/**
 * 
 *
 * @property int $id
 * @property bool $isLocked
 * @property float $itemNumber
 * @property string|null $omekaIdentifier
 * @property string $workflow
 * @property string|null $creator
 * @property string $title
 * @property string|null $publisher
 * @property string|null $occasion
 * @property string|null $place
 * @property string|null $dateOfPublication
 * @property string|null $typeOfDocument
 * @property string|null $subject
 * @property string|null $description
 * @property string|null $physicalLocation
 * @property string|null $media
 * @property string|null $jpegPreviewPath
 * @property bool $isJpegUploaded
 * @property string|null $downloadFile
 * @property bool $isFileUploaded
 * @property string|null $driveURL
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $jpegDateUpload
 * @property \Illuminate\Support\Carbon|null $fileDateUpload
 * @property int|null $copyright_id
 * @property bool $isWordFileUploaded
 * @property string|null $wordFileUrl
 * @property \Illuminate\Support\Carbon|null $wordFileDateUpload
 * @property string|null $originalFileName
 * @property string|null $notes
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection query()
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereCopyrightId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereDateOfPublication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereDownloadFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereDriveURL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereFileDateUpload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereIsFileUploaded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereIsJpegUploaded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereIsLocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereIsWordFileUploaded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereItemNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereJpegDateUpload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereJpegPreviewPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereMedia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereOccasion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereOmekaIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereOriginalFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection wherePhysicalLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection wherePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection wherePublisher($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereTypeOfDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereWordFileDateUpload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereWordFileUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DigitalCollection whereWorkflow($value)
 * @mixin \Eloquent
 */
class DigitalCollection extends Model
{
    protected $fillable = [
        'isLocked',
        'itemNumber',
        'omekaIdentifier',
        'workflow',
        'creator',
        'title',
        'publisher',
        'occasion',
        'place',
        'copyright_id',
        'typeOfDocument',
        'subject',
        'description',
        'physicalLocation',
        'downloadFile',
        'media',
        'jpegPreviewPath',
        'isJpegUploaded',
        'isFileUploaded',
        'dateOfPublication',
        'driveURL',
        'jpegDateUpload',
        'fileDateUpload',
        'isWordFileUploaded',
        'wordFileUrl',
        'wordFileDateUpload',
        'originalFileName',
        'notes',
    ];

    protected $casts = [
        'jpegDateUpload' => 'datetime',
        'fileDateUpload' => 'datetime',
        'wordFileDateUpload' => 'datetime'
    ];

    public function scopePublished($query)
    {
        return $query->where('workflow', 'Published');
    }

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public static function getTypeOfDocument(): array
    {
        try {
            return ['Article', 'Book', 'Discourse', 'Foreword', 'Interview', 'Lecture', 'Lesson', 'Other', 'Sermon', 'Video'];
        } catch (Exception $e) {
            Log::error('Error retrieving Type of Document: ' . $e->getMessage());
            throw new Exception('Failed to retrieve tType opf Document.');
        }
    }

    public static function getCreator(): array
    {
        try {
            return ['González, Justo L.', 'González, Justo L.|González, Catherine G.', 'González, Catherine G.'];
        } catch (Exception $e) {
            Log::error('Error retrieving creator: ' . $e->getMessage());
            throw new Exception('Failed to retrieve creator.');
        }
    }
    public function copyright()
    {
        return $this->belongsTo(Copyright::class, 'copyright_id');
    }

    use HasFactory;
}
