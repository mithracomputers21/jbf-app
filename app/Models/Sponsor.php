<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'new_library_or_join_old_library', 
        'date',
        'village_address',
        'old_library_name',
        'new_library_land_size',
        'contact_person_name',
        'contact_person_phone',
        'ambedkariyam_50_sponsor_name',
        'ambedkariya_thoothuvar_land_sponsor',
        'building_materials_sponsor',
        'table_chair_sponsor',
        'computer_sponsor',
        'electrical_items_sponsor',
        'books_sponsors'
    ];
}
