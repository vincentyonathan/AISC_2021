<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class volregis extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'institution',
        'major',
        'batch',
        'domicile',
        'email',
        'phone_number',
        'line_id',
        'position_1',
        'position_2',
        'twibbon_link',
        'proof_link'
    ];

    public function file(){
        return $this->hasMany(File::class);
    }

    public function getVolregis(){
        $records = DB::table('volregis')->select('full_name', 'institution', 'major', 'batch', 'domicile', 
        'email', 'line_id', 'phone_number', 'position_1', 'position_2', 'twibbon_link', 'proof_link');
        return $records;
    }
}
