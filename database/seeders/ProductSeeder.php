<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => "Côte d'Ivoire",            'team' => "Côte d'Ivoire",       'category' => 'Sélection nationale', 'image' => 'images (1).jpeg'],
            ['name' => 'Paris Domicile',           'team' => 'PSG',                 'category' => 'Club',                'image' => 'images (2).jpeg'],
            ['name' => 'Paris Extérieur',          'team' => 'PSG',                 'category' => 'Club',                'image' => 'images (3).jpeg'],
            ['name' => 'Real Extérieur',           'team' => 'Real Madrid',         'category' => 'Club',                'image' => 'images (4).jpeg'],
            ['name' => 'Real Domicile',            'team' => 'Real Madrid',         'category' => 'Club',                'image' => 'images (5).jpeg'],
            ['name' => 'Bayern Domicile',          'team' => 'Bayern Munich',       'category' => 'Club',                'image' => 'images (6).jpeg'],
            ['name' => 'Bayern Extérieur',         'team' => 'Bayern Munich',       'category' => 'Club',                'image' => 'images (7).jpeg'],
            ['name' => 'City Extérieur',           'team' => 'Manchester City',     'category' => 'Club',                'image' => 'images (8).jpeg'],
            ['name' => 'City Domicile',            'team' => 'Manchester City',     'category' => 'Club',                'image' => 'images (9).jpeg'],
            ['name' => 'Manchester United Domicile','team' => 'Manchester United',  'category' => 'Club',                'image' => 'images (10).jpeg'],
            ['name' => 'Burkina Faso',             'team' => 'Burkina Faso',        'category' => 'Sélection nationale', 'image' => 'images (11).jpeg'],
            ['name' => 'Liverpool Domicile',       'team' => 'Liverpool',           'category' => 'Club',                'image' => 'images (12).jpeg'],
            ['name' => 'Liverpool Extérieur',      'team' => 'Liverpool',           'category' => 'Club',                'image' => 'images (13).jpeg'],
            ['name' => 'Tottenham Domicile',       'team' => 'Tottenham',           'category' => 'Club',                'image' => 'images (14).jpeg'],
            ['name' => 'Tottenham Extérieur',      'team' => 'Tottenham',           'category' => 'Club',                'image' => 'images (15).jpeg'],
            ['name' => 'Boca Juniors',             'team' => 'Boca Juniors',        'category' => 'Club',                'image' => 'images (16).jpeg'],
            ['name' => 'Boca Juniors Extérieur',   'team' => 'Boca Juniors',        'category' => 'Club',                'image' => 'images (17).jpeg'],
            ['name' => 'Marseille Domicile',       'team' => 'Marseille',           'category' => 'Club',                'image' => 'images (18).jpeg'],
            ['name' => 'Marseille Extérieur',      'team' => 'Marseille',           'category' => 'Club',                'image' => 'images (19).jpeg'],
            ['name' => 'France Domicile',          'team' => 'France',              'category' => 'Sélection nationale', 'image' => 'images (20).jpeg'],
            ['name' => 'France Extérieur',         'team' => 'France',              'category' => 'Sélection nationale', 'image' => 'images (21).jpeg'],
            ['name' => 'Mali Domicile',            'team' => 'Mali',                'category' => 'Sélection nationale', 'image' => 'images (22).jpeg'],
            ['name' => 'Mali Extérieur',           'team' => 'Mali',                'category' => 'Sélection nationale', 'image' => 'images (23).jpeg'],
            ['name' => 'Allemagne Domicile',       'team' => 'Allemagne',           'category' => 'Sélection nationale', 'image' => 'images (24).jpeg'],
            ['name' => 'Allemagne Extérieur',      'team' => 'Allemagne',           'category' => 'Sélection nationale', 'image' => 'images (25).jpeg'],
            ['name' => 'Argentine Domicile',       'team' => 'Argentine',           'category' => 'Sélection nationale', 'image' => 'images (26).jpeg'],
            ['name' => 'Argentine Extérieur',      'team' => 'Argentine',           'category' => 'Sélection nationale', 'image' => 'images (27).jpeg'],
            ['name' => 'Maroc Domicile',           'team' => 'Maroc',               'category' => 'Sélection nationale', 'image' => 'images (28).jpeg'],
            ['name' => 'Maroc Extérieur',          'team' => 'Maroc',               'category' => 'Sélection nationale', 'image' => 'images (29).jpeg'],
            ['name' => 'Djibouti Domicile',        'team' => 'Djibouti',            'category' => 'Sélection nationale', 'image' => 'images (30).jpeg'],
            ['name' => 'Djibouti Extérieur',       'team' => 'Djibouti',            'category' => 'Sélection nationale', 'image' => 'images (31).jpeg'],
            ['name' => 'Brésil Domicile',          'team' => 'Brésil',              'category' => 'Sélection nationale', 'image' => 'images (32).jpeg'],
            ['name' => 'Brésil Extérieur',         'team' => 'Brésil',              'category' => 'Sélection nationale', 'image' => 'images (33).jpeg'],
            ['name' => 'Sénégal',                  'team' => 'Sénégal',             'category' => 'Sélection nationale', 'image' => 'images (34).jpeg'],
            ['name' => 'Congo',                    'team' => 'Congo',               'category' => 'Sélection nationale', 'image' => 'images (35).jpeg'],
            ['name' => "Côte d'Ivoire Third",      'team' => "Côte d'Ivoire",       'category' => 'Sélection nationale', 'image' => 'images (36).jpeg'],
            ['name' => 'Lens Domicile',            'team' => 'Lens',                'category' => 'Club',                'image' => 'images (37).jpeg'],
            ['name' => 'Binga FC Domicile',        'team' => 'Binga FC',            'category' => 'Club',                'image' => 'images (38).jpeg'],
            ['name' => 'Binga FC Extérieur',       'team' => 'Binga FC',            'category' => 'Club',                'image' => 'images (39).jpeg'],
            ['name' => 'FC Diarra Extérieur',      'team' => 'FC Diarra',           'category' => 'Club',                'image' => 'images (40).jpeg'],
            ['name' => 'FC Diarra Domicile',       'team' => 'FC Diarra',           'category' => 'Club',                'image' => 'images (41).jpeg'],
        ];

        $sizes = ['S', 'M', 'L', 'XL'];

        foreach ($products as $p) {
            Product::create([
                'name' => 'Maillot ' . $p['name'],
                'team' => $p['team'],
                'category' => $p['category'],
                'price' => rand(300, 900),
                'size' => $sizes[array_rand($sizes)],
                'stock' => rand(5, 50),
                'image' => 'images/maillots/' . $p['image'],
                'description' => 'Maillot officiel ' . $p['name'] . ', qualité premium, idéal pour les supporters.',
            ]);
        }
    }
}