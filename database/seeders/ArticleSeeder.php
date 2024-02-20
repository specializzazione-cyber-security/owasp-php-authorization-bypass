<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::get('utils/articles.json');
        $decodedJson = json_decode($json, true);

        $admin = User::find(1);
        foreach($decodedJson['articoli'] as $article){
            $admin->articles()->create([
                'title' => $article['titolo'],
                'body' => $article['descrizione'],
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ]);
        }

        
    }
}
