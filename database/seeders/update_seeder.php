<?php

namespace Database\Seeders;

use App\Models\accounts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class update_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $lst_acc = accounts::all();
        foreach($lst_acc as $acc){
            $acc->password = Hash::make($acc->password);
            $acc->save();
        }
    }
}
