<?php

namespace Database\Seeders;

use App\Models\Nickname;
use Illuminate\Database\Seeder;

class NicknameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nicknames = [
            'Gando',
            'Claude',
            'Clod',
            'Clœd',
            'Cløëd',
            'Clöd',
            'Cloddo',
            'Cloddoman',
            'CL',
            'Super',
            'S.',
            'Super Clod',
            'Suuupah',
            'KRAUT',
            'Ganz',
            'Ganzerker',
            'Callum',
            'Mullac',
            'CLOOOOOOOOD',
            'Gando McCallum',
            'Claudio Gandini',
        ];

        $i = 1;

        foreach ($nicknames as $nickname) {
            Nickname::create([
                'name' => $nickname,
                'sort' => $i++,
            ]);
        }
    }
}
