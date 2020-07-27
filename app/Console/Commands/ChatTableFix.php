<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Lexx\ChatMessenger\Models\Message;
use Lexx\ChatMessenger\Models\Participant;
use Lexx\ChatMessenger\Models\Thread;

class ChatTableFix extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix:chat-table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fix old chat package to new package insert data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $msg_thread_table = DB::table('message_threads')->get();

        if ($msg_thread_table) {
            foreach ($msg_thread_table as $thread) {
                $this->line($thread->id);
                $thread = Thread::create([
                    'starred' => 1
                ]);
                $msg_thread_participants_table = DB::table('message_thread_participants')->where('thread_id', $thread->id)->get();
                foreach ($msg_thread_participants_table as $participant) {
                    Participant::create([
                        'thread_id' => $thread->id,
                        'user_id' => $participant->user_id,
                        'last_read' => $participant->last_read
                    ]);
                }
                dump($msg_thread_participants_table);
                $msg_messages_table = DB::table('messages')->where('thread_id', $thread->id)->get();
                foreach ($msg_messages_table as $message) {
                    Message::create([
                        'thread_id' => $thread->id,
                        'user_id' => $message->sender_id,
                        'body' => $message->body,
                        'created_at' => $message->created_at
                    ]);
                }
            }
        }
        return $this->line("chat table imported");
    }
}
