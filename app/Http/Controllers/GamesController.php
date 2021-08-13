<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()


    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;
        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;

       //  $popularGames = Http::withHeaders([
         //                'Client-ID' => 'asezcrn77m7xm1mpp4euc1sf21ker9',
           //              'Authorization' => 'Bearer 22k9rx1uo93qo4mghf8r3d6p97srhb'
            //             ])->withBody(
              //                       "
                //                     fields name, cover.url, first_release_date, /, platforms.abbreviation, rating, slug; where platforms = (48,49,130,6); &(firts_release_date > {before} $ first_release_date < {&after});
 // & total_rating_count > 5; sort total_rating_count desc; limit 12;", "text/plain"
                                

    //                     )->post('https://api.igdb.com/v4/games')
      //                  ->json();

                        $recentlyReviewed = Http::withHeaders([
                         'Client-ID' => 'asezcrn77m7xm1mpp4euc1sf21ker9',
                         'Authorization' => 'Bearer 22k9rx1uo93qo4mghf8r3d6p97srhb'
                         ])->withBody(
                                     "
                                     fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, slug; where platforms = (48,49,130,6); &(firts_release_date > {before} $ first_release_date < {&after});
 & total_rating_count > 5; sort total_rating_count desc; limit 12;", "text/plain"
                                

                         )->post('https://api.igdb.com/v4/games')
                        ->json();


                        $mostAnticipated = Http::withHeaders([
                         'Client-ID' => 'asezcrn77m7xm1mpp4euc1sf21ker9',
                         'Authorization' => 'Bearer 22k9rx1uo93qo4mghf8r3d6p97srhb'
                         ])->withBody(
                                     "
                                     fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, slug; where platforms = (48,49,130,6); &(firts_release_date > {before} $ first_release_date < {&after});
 & total_rating_count > 5; sort total_rating_count desc; limit 12;", "text/plain"
                                

                         )->post('https://api.igdb.com/v4/games')
                        ->json();

                         $comingSoon= Http::withHeaders([
                         'Client-ID' => 'asezcrn77m7xm1mpp4euc1sf21ker9',
                         'Authorization' => 'Bearer 22k9rx1uo93qo4mghf8r3d6p97srhb'
                         ])->withBody(
                                     "
                                     fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, slug; where platforms = (48,49,130,6); &(firts_release_date > {before} $ first_release_date < {&after});
 & total_rating_count > 5; sort total_rating_count desc; limit 12;", "text/plain"
                                

                         )->post('https://api.igdb.com/v4/games')
                        ->json();

                        //dump($popularGames);
                        return view('index', [
                             //'popularGames' => $popularGames,
                              'recentlyReviewed' => $recentlyReviewed,
                              'mostAnticipated' => $mostAnticipated,
                              'comingSoon'=> $comingSoon,
                        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
