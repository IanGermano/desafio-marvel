<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\ComicController;

class UpdateHq extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hq:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the comic table with the newest comics via HTTP';

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
        $ts = now()->timestamp;
        $publicKey = "687bc230c2ca382bd66b6d322bb57e0e";
        $privateKey = "6d24afd2c2ae4dbf159fc0a64c4b07e7638a22a0";
        $hash = md5($ts . $privateKey . $publicKey);
        $url = "http://gateway.marvel.com/v1/public/comics?format=comic&formatType=comic&dateDescriptor=lastWeek&orderBy=title&ts=".$ts."&apikey=".$publicKey."&hash=".$hash;

        $response = Http::get($url)->json();

        $comics = $response['data']['results'];

        foreach ($comics as $comic) {

            $id = $comic['id'];
            $title = $comic['title'];
            $page_count = $comic['pageCount'];

            $date = $comic['dates'][0]['date'];
            $date = substr($date, 0, 10);

            $price = $comic['prices'][0]['price'];

            $image = $comic['images'][0]['path'];
            $image = substr_replace($image, 's', 4, 0);
            $image = substr_replace($image, '/clean.jpg', strlen($image), 0);

            $creators = $comic['creators']['items'];

            $writer = "";

            foreach ($creators as $creator) {
                if ($creator['role'] == 'writer') {
                    $writer .= $creator['name'].', ';
                }
            }

            $writer = substr($writer, 0, -2);

            $request = new Request([
                'id' => $id,
                'title' => $title,
                'page_count' => $page_count,
                'date' => $date,
                'image' => $image,
                'price' => $price,
                'writer' => $writer,
            ]);

            $comicController = new ComicController;
            $comicController->store($request);

        }
        echo("Tabela populada com os ultimos quadrinhos da semana!\n");

        return 0;
    }
}
