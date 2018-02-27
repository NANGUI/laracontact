<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Group;
use App\Model\Contact;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 3)->create();
        
        for($i = 0; $i < 20; $i++)
        {
            $group = factory(Group::class)->create();
            $contact = factory(Contact::class)->create();

            DB::table('group_contact')->insert([
                'group_id' => $group->id,
                'contact_id' => $contact->id,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
