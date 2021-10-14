<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ComicController extends Controller
{
	public function index()
	{
		$comics = Comic::all();
		return View::make("hqs")->with('comics', $comics);
	}

	public function adicionar()
	{
		return View::make("adicionar_hq");
	}

	public function buscar()
	{
		return View::make("buscar_hq");
	}

	public function store(Request $request)
    {
    	
    	$comic = new Comic;

        $comic->id = $request->input('id');
        $comic->title = $request->input('title');
        $comic->page_count = $request->input('page_count');
        $comic->date = $request->input('date');
        $comic->image = $request->input('image');
        $comic->price = $request->input('price');
        $comic->writer = $request->input('writer');

        $comic->save();

        return redirect()->route('comic.show');
        
    }

    public function update($id, Request $request)
    {
    	$comic = Comic::find($id);

    	$comic->id = $request->input('id');
        $comic->title = $request->input('title');
        $comic->page_count = $request->input('page_count');
        $comic->date = $request->input('date');
        $comic->image = $request->input('image');
        $comic->price = $request->input('price');
        $comic->writer = $request->input('writer');

        $comic->save();

        return redirect()->route('comic.show');
    }

    public function editar($id)
    {
    	$comic = Comic::find($id);
    	return View::make("editar_hq")->with('comic', $comic);
    }

    public function deletar($id)
    {
    	$comic = Comic::find($id);
		$comic->delete();
		return redirect()->route('comic.show');
    }

    public function src(Request $request)
    {
    	$comic;
    	$id = $request->input('id');
    	$title = $request->input('title');

    	if(!($id===NULL))
    	{
    		$comic = Comic::where('id', $id)->first();

    		if ($comic) {
    			return View::make("mostrar_busca_hq")->with('comic', $comic);
    		}else{
    			$comic = "erro";
    			return View::make("mostrar_busca_hq")->with('comic', $comic);
    		}
    	}
    	if(!($title===NULL))
    	{
    		$comic = Comic::where('title', $title)->first();

    		if ($comic) {
    			return View::make("mostrar_busca_hq")->with('comic', $comic);
    		}else{
    			$comic = "erro";
    			return View::make("mostrar_busca_hq")->with('comic', $comic);
    		}
    	}

    }

}
