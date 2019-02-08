<?php

namespace App\Observers;

use App\Models\Reply;
use App\Models\Topic;
use App\Models\User;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class UserObserver
{
    public function creating(User $user)
    {
        //
    }

    public function updating(User $user)
    {
        //
    }

    public function saving(User $user)
    {
        if(empty($user->avatar)){
            $user->avatar = 'https://iocaffcdn.phphub.org/uploads/images/201710/30/1/TrJS40Ey5k.png';
        }
    }

    public function deleted(User $user)
    {
        $topic_ids = Topic::where('user_id',$user->id)->pluck('id');

        \DB::table('topics')->whereIn('id',$topic_ids)->delete();
        \DB::table('replies')->whereIn('topic_id',$topic_ids)->delete();
        \DB::table('replies')->where('user_id',$user->id)->delete();

    }
}
