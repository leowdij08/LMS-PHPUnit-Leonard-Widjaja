<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;
use App\Models\User;

class NotificationSeeder extends Seeder
{
    public function run()
    {
        $librarians = User::where('role', 'librarian')->get();

        foreach ($librarians as $librarian) {
            Notification::create([
                'user_id' => $librarian->id,
                'message' => 'Please review and update the library collection to ensure all materials are current.',
                'is_read' => false,
            ]);
        }
    }
}
