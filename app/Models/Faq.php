<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Faq
 * 
 * Represents a Frequently Asked Question (FAQ) entry.
 *
 * @package App\Models
 * @property int $id Unique identifier for the FAQ entry.
 * @property string $question The question being asked.
 * @property string $answer The answer to the question.
 * @property \Illuminate\Support\Carbon|null $created_at Timestamp when the FAQ was created.
 * @property \Illuminate\Support\Carbon|null $updated_at Timestamp when the FAQ was last updated.
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq query()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Faq extends Model
{
    use HasFactory;
}
