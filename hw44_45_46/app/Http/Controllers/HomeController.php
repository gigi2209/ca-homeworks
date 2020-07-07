<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Card;
use App\User;

class HomeController extends Controller
{
    public function index(){


        $cards = Card::all();

        return view('home', ['cards' => $cards]);
    }

    public function show($id){
     

      $card = Card::findOrFail($id);
      
      $user = User::find($card->user_id);

    //   if (request('tag')) { 
    //     $card = Category::where('name', request('tag'))->firstOrFail()->card;
    // } else {
    //     $card = Card::latest()->get();
    // }
      
      

      return view('card', ['card' => $card, 'user' => $user]);
        

    }

    public function store(Request $request) {

        $this->validateCard();

        $card = new Card();
        $card->body = $request->input('body');
        $card->img = $request->input('img');
        $card->save();

        return redirect('/');
    }

    public function edit($id){
 
      $card = Card::findOrFail($id);

      return view('edit', ['card' => $card]);

      

    }

    public function update(Card $card, $id){

      $cardObj = Card::find($id); 
      $cardObj->update($this->validateCard());



        return redirect(route('showRoute', $id));

      

    }

    public function destroy($id){
 
      $card = Card::find($id)->delete();

      return redirect('/');


    }

    public function validateCard(){


      return request()->validate([

        'body' => 'required|min:33',
        'img' => 'required'

      ]);
    }

}
