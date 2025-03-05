<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ErrorLog
 * 
 * Represents a log entry for application errors.
 *
 * @package App\Models
 * @property int $id Unique identifier for the error log entry.
 * @property string $error_message The error message describing the issue.
 * @property string|null $stack_trace The stack trace of the error (if available).
 * @property int|null $error_code The error code associated with the issue (if applicable).
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the error was logged.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the log entry was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog whereErrorCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog whereErrorMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog whereStackTrace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class ErrorLog extends Model
{
    use HasFactory;

    protected $fillable = ['error_message', 'stack_trace', 'error_code'];
}
