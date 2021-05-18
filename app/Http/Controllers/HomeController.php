<?php

namespace App\Http\Controllers;

use App\Models\ModelBook;
use App\User;
use App\Http\Requests\homeRequest;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{

private $objUser;
private $objBook;

    public function __construct()
    {
        $this-> objUser=new User();
        $this-> objBook=new ModelBook();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $book= $this->objBook->paginate(2);
       return view('home',compact('book'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user= $this->objUser->all();
        return view('create', compact('user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeRequest $request)
    {
        $cad=$this->objBook->create([
          'id_user'=>$request->id_user,
          'titulo'=>$request->titulo
        ]);
        if( $cad){
            return redirect('books');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book= $this->objBook->find($id);
        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $book= $this->objBook->find($id);
      $user= $this-> objUser-> all();

      return view('create',compact('book','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomeRequest $request, $id)
    {
        $this->objBook->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'id_user'=>$request->id_user
        ]);
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $del= $this->objBook->destroy($id);
       return ($del)?'sim':'não';
    }
}
