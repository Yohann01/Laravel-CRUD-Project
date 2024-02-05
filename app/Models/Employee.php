<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Laravel\Prompts\search;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['employee_number', 'first_name', 'last_name', 'birthdate',
     'contact_number', 'email'];

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false)
        {
            $query->where('id', 'like', '%' . request('search') . '%')
                ->orWhere('first_name', 'like', '%' . request('search') . '%')
                ->orWhere('last_name', 'like', '%' . request('search') . '%')
                ->orWhere('birthdate', 'like', '%' . request('search') . '%')
                ->orWhere('contact_number', 'like', '%' . request('search') . '%')
                ->orWhere('email', 'like', '%' . request('search') . '%');
        }
    }
}
