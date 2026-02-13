<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Calm Roll-On',
                'slug' => 'calm-roll-on',
                'description' => 'A calming aromatherapy roll-on formulated with Lavender, Peppermint, and Ylang Ylang to help reduce anxiety, panic moments, and emotional stress.',
                'type' => 'medicine',
                'price' => 699,
                'stock' => 100,
                'image' => 'products/calm-rollon.png',
                'is_active' => 1,
            ],
            [
                'name' => 'Confidence & Intent Roll-On',
                'slug' => 'confidence-intent-roll-on',
                'description' => 'Designed to boost motivation, positivity, and self-confidence using Orange, Cinnamon, Frankincense, and Patchouli essential oils.',
                'type' => 'medicine',
                'price' => 699,
                'stock' => 100,
                'image' => 'products/confidence-intent-rollon.png',
                'is_active' => 1,
            ],
            [
                'name' => 'Energy Reset Aromatherapy Roll-On',
                'slug' => 'energy-reset-aromatherapy-roll-on',
                'description' => 'A revitalizing aromatherapy blend with Camphor, Clary Sage, Rose, Cinnamon, and Clove to restore energy and mental clarity.',
                'type' => 'medicine',
                'price' => 699,
                'stock' => 100,
                'image' => 'products/energy-reset-rollon.png',
                'is_active' => 1,
            ],
            [
                'name' => 'Focus Flow Roll-On',
                'slug' => 'focus-flow-roll-on',
                'description' => 'Improves focus and concentration using Rosemary, Lavender, Bergamot, Lemon, and Cedarwood essential oils.',
                'type' => 'medicine',
                'price' => 699,
                'stock' => 100,
                'image' => 'products/focus-flow-rollon.png',
                'is_active' => 1,
            ],
            [
                'name' => 'Grounded Breath Roll-On',
                'slug' => 'grounded-breath-roll-on',
                'description' => 'Supports calm breathing and emotional grounding with Cardamom, Eucalyptus, Pine, Lemon, Peppermint, and Tea Tree.',
                'type' => 'medicine',
                'price' => 699,
                'stock' => 100,
                'image' => 'products/grounded-breath-rollon.png',
                'is_active' => 1,
            ],
            [
                'name' => 'Mood Lift Roll-On',
                'slug' => 'mood-lift-roll-on',
                'description' => 'An uplifting essential oil blend with Lavender, Sweet Orange, Bergamot, and Cedarwood to improve mood and reduce fatigue.',
                'type' => 'medicine',
                'price' => 699,
                'stock' => 100,
                'image' => 'products/mood-lift-rollon.png',
                'is_active' => 1,
            ],
            [
                'name' => 'Sleep Ritual Roll-On',
                'slug' => 'sleep-ritual-roll-on',
                'description' => 'Promotes deep sleep and relaxation using Chamomile, Lavender, and natural calming essential oils.',
                'type' => 'medicine',
                'price' => 699,
                'stock' => 100,
                'image' => 'products/sleep-ritual-rollon.png',
                'is_active' => 1,
            ],
            [
                'name' => 'Stress Reset Roll-On',
                'slug' => 'stress-reset-roll-on',
                'description' => 'Relieves stress and emotional tension with Bergamot, Patchouli, Ylang Ylang, and Sweet Marjoram.',
                'type' => 'medicine',
                'price' => 699,
                'stock' => 100,
                'image' => 'products/stress-relief-rollon.png',
                'is_active' => 1,
            ],
            [
                'name' => 'Tension Release Roll-On',
                'slug' => 'tension-release-roll-on',
                'description' => 'Targets headaches and muscle tension using Peppermint, Eucalyptus, Camphor, and Wintergreen.',
                'type' => 'medicine',
                'price' => 699,
                'stock' => 100,
                'image' => 'products/tension-release-rollon.png',
                'is_active' => 1,
            ],
            [
                'name' => 'Women Empowerment Roll-On',
                'slug' => 'women-empowerment-roll-on',
                'description' => 'Supports hormonal balance and emotional well-being using Rose Geranium, Lavender, and Clary Sage.',
                'type' => 'medicine',
                'price' => 699,
                'stock' => 100,
                'image' => 'products/women-empowerment-rollon.png',
                'is_active' => 1,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->updateOrInsert(
                ['slug' => $product['slug']], // prevents duplicates
                array_merge($product, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ])
            );
        }
    }
}
