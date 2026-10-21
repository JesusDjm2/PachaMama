<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Preserves original publication dates in published_at,
 * then refreshes updated_at to today so Google sees the content as recently reviewed.
 */
class RefreshBlogDatesSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        // Copy original created_at into published_at (only where still null)
        DB::statement('UPDATE blogs SET published_at = created_at WHERE published_at IS NULL');
        DB::statement('UPDATE enblogs SET published_at = created_at WHERE published_at IS NULL');

        // Touch updated_at for every blog — signals fresh content to Google crawlers
        DB::table('blogs')->update(['updated_at' => $now]);
        DB::table('enblogs')->update(['updated_at' => $now]);

        $this->command->info('Blogs ES actualizados: ' . DB::table('blogs')->count());
        $this->command->info('Blogs EN actualizados: ' . DB::table('enblogs')->count());
        $this->command->info('updated_at → ' . $now->toDateString());
    }
}
