<?php

namespace Database\Seeders;

use App\Models\Enblog;
use Illuminate\Database\Seeder;

/**
 * Sets blog_id on English posts that were created before the bilingual link column,
 * so each Spanish article (blogs.id) points to its English twin (enblogs.blog_id).
 *
 * Run: php artisan db:seed --class=LinkOrphanEnglishBlogPostsSeeder
 */
class LinkOrphanEnglishBlogPostsSeeder extends Seeder
{
    /** @var array<int, int> enblog.id => blogs.id */
    private const ENBLOG_TO_SPANISH_BLOG = [
        7 => 14,
        8 => 15,
        9 => 13,
        10 => 12,
        11 => 11,
        12 => 17,
        13 => 18,
        14 => 19,
        15 => 20,
        16 => 21,
        17 => 22,
    ];

    public function run(): void
    {
        foreach (self::ENBLOG_TO_SPANISH_BLOG as $enblogId => $blogId) {
            $row = Enblog::query()->find($enblogId);
            if (! $row) {
                continue;
            }
            if ($row->blog_id !== null) {
                continue;
            }
            if (Enblog::query()->where('blog_id', $blogId)->where('id', '!=', $enblogId)->exists()) {
                $this->command?->warn("Skip enblog {$enblogId}: blog_id {$blogId} already taken.");

                continue;
            }
            $row->blog_id = $blogId;
            $row->save();
            $this->command?->info("Linked enblog {$enblogId} → Spanish blog {$blogId}.");
        }
    }
}
