<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function ratingUpdate(Request $request) {        //контроллер для обновления рейтинга фильма
        $userId = 1;

        $personalRating = DB::table('ratings')
            ->select('ratings.rating_id', 'value')
            ->where('ratings.user_id', '=', $userId)
            ->where('ratings.film_id', '=', $request['film_id'])
            ->first();

        if(isset($personalRating -> rating_id)) {
            switch ($request['action']) {
                case 'like':
                    DB::table('ratings')
                        ->where('ratings.user_id', '=', $userId)
                        ->where('ratings.film_id', '=', $request['film_id'])
                        ->update([
                            'value' => 1
                        ]);
                    DB::table('films')
                        ->where('films.film_id', '=', $request['film_id'])
                        ->update([
                            'likes' => DB::raw('likes + 1')
                        ]);
                    break;

                case 'dislike':
                    DB::table('ratings')
                        ->where('ratings.user_id', '=', $userId)
                        ->where('ratings.film_id', '=', $request['film_id'])
                        ->update([
                            'value' => -1
                        ]);
                    DB::table('films')
                        ->where('films.film_id', '=', $request['film_id'])
                        ->update([
                            'dislikes' => DB::raw('dislikes + 1')
                        ]);
                    break;

                case 'unlike':
                    DB::table('ratings')
                        ->where('ratings.user_id', '=', $userId)
                        ->where('ratings.film_id', '=', $request['film_id'])
                        ->update([
                            'value' => 0
                        ]);
                    DB::table('films')
                        ->where('films.film_id', '=', $request['film_id'])
                        ->update([
                            'likes' => DB::raw('likes - 1')
                        ]);
                    break;

            case 'undislike':
                DB::table('ratings')
                    ->where('ratings.user_id', '=', $userId)
                    ->where('ratings.film_id', '=', $request['film_id'])
                    ->update([
                        'value' => 0
                    ]);
                DB::table('films')
                    ->where('films.film_id', '=', $request['film_id'])
                    ->update([
                        'dislikes' => DB::raw('dislikes - 1')
                    ]);
                break;

                case 'like-undislike':
                    DB::table('ratings')
                        ->where('ratings.user_id', '=', $userId)
                        ->where('ratings.film_id', '=', $request['film_id'])
                        ->update([
                            'value' => 1
                        ]);
                DB::table('films')
                    ->where('films.film_id', '=', $request['film_id'])
                    ->update([
                        'likes' => DB::raw('likes + 1'),
                        'dislikes' => DB::raw('dislikes - 1')
                    ]);
                break;

                case 'dislike-unlike':
                    DB::table('ratings')
                        ->where('ratings.user_id', '=', $userId)
                        ->where('ratings.film_id', '=', $request['film_id'])
                        ->update([
                            'value' => -1
                        ]);
                    DB::table('films')
                        ->where('films.film_id', '=', $request['film_id'])
                        ->update([
                            'likes' => DB::raw('likes - 1'),
                            'dislikes' => DB::raw('dislikes + 1')
                        ]);
                    break;
            }
        } else {
            switch ($request['action']) {
                case 'dislike':
                    DB::table('ratings')->insert([
                        'user_id' => $userId,
                        'film_id' => $request['film_id'],
                        'value' => -1
                    ]);
                    DB::table('films')
                        ->where('films.film_id', '=', $request['film_id'])
                        ->update([
                            'dislikes' => DB::raw('dislikes + 1')
                        ]);
                    break;

                case 'like':
                    DB::table('ratings')->insert([
                        'user_id' => $userId,
                        'film_id' => $request['film_id'],
                        'value' => 1
                    ]);
                    DB::table('films')
                        ->where('films.film_id', '=', $request['film_id'])
                        ->update([
                            'likes' => DB::raw('likes + 1')
                        ]);
                    break;
            }
        }
    }
}
