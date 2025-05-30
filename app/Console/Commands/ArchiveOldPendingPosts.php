<?php

namespace App\Console\Commands;
use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Console\Command;

class ArchiveOldPendingPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:archive-old-pending-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Archive Posts Pending for More Than 3 Days';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $cutoff = now()->subDays(3);

        $posts = Post::where('status', 'pending')
                ->where('created_at', '<', $cutoff)
                ->get();
        foreach($posts as $post){
            $post->status = 'archived';
            $post->save();
        }

        $this->info("Archived {$posts->count()} old pending posts.");
    }
}
