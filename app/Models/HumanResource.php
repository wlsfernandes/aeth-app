<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Exception;
use Illuminate\Support\Facades\Log;

class HumanResource extends Model
{

    protected $table = 'human_resources';

    protected $fillable = [
        'name',
        'email',
        'email_personal',
        'phone',
        'phone_personal',
        'address',
        'address_complement',
        'city',
        'state',
        'country',
        'zipcode',
        'emergency_contact',
        'emergency_contact_phone',
        'emergency_relationship',
        'restrictions',
        'title_en',
        'title_es',
        'title_pt',
        'description_en',
        'description_es',
        'description_pt',
        'photo_url',
        'slug',
        'isActive',
        'contractorCompany',
        'timezone',
        'group',
        'dateOfBirthday',
        'order'
    ];

    protected $casts = [
        'isActive' => 'boolean',
        'dateOfBirthday' => 'date',
    ];

    use HasFactory;

    public static function getCountries(): array
    {
        try {
            return ['Canada', 'Mexico', 'Brazil', 'United States'];
        } catch (Exception $e) {
            Log::error('Error retrieving countries: ' . $e->getMessage());
            throw new Exception('Failed to retrieve countries.');
        }
    }

    public static function getTimezones(): array
    {
        try {
            return [
                '(AST) Atlantic Standard Time',
                '(EST) Eastern Standard Time',
                '(CST) Central Standard Time',
                '(MST) Mountain Standard Time',
                '(PST) Pacific Standard Time',
                '(AKS) Alaska Standard Time',
                '(HAS) Hawaii-Aleutian Standard Time'
            ];
        } catch (Exception $e) {
            Log::error('Error retrieving timezones: ' . $e->getMessage());
            throw new Exception('Failed to retrieve timezones.');
        }
    }
    public static function getGroups(): array
    {
        try {
            return ['Staff', 'Consultants', 'Service Partners', 'Interns'];
        } catch (Exception $e) {
            Log::error('Error retrieving languages: ' . $e->getMessage());
            throw new Exception('Failed to retrieve groups.');
        }
    }
    public function programs()
    {
        return $this->hasMany(Program::class);
    }

}
