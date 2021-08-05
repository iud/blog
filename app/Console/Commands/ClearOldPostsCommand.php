<?php

namespace App\Console\Commands;

use App\Repositories\PostsRepository;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ClearOldPostsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:clear {days : ile dni należy odjąć od obecnej daty}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Komenda czyści posty, które były wcześniej niż x dni temu.';

    /**
     * @var PostsRepository
     */
    protected PostsRepository $postsRepository;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(PostsRepository $postsRepository)
    {
        parent::__construct();
        $this->postsRepository = $postsRepository;
    }

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        $days = $this->argument('days');
        $deletedCount = $this->postsRepository->removePostsOlderThan(Carbon::now()->subDays($days));

        $this->info("Usunięto $deletedCount postów.");
    }
}
