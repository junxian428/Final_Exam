<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\workshop;
use App\Models\participant;

class Q3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $workshops = DB::table('workshops')->get();
        $participants = DB::table('participants')->get();
        //

        //$users = DB::table('users')
        //->join('posts', 'users.id', '=', 'posts.user_id')
        //->select('users.*', 'posts.*')
        //->get();
        $wps = DB::table('participants')
        ->join('workshops', 'participants.workshopID', '=', 'workshops.id')
        ->select('participants.*', 'workshops.*')
        ->get();
        //echo $wp;

        return view('participant', ['workshops' => $workshops],['participants' => $participants], ['wps' => $wps]);
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

    public function WorkshopCreate(Request $request){
        $id = $request -> input('workshopid');
        $name = $request -> input('workshopname');
        //echo $id. $name;
        $Workshop = new workshop();        
        //$user->timestamps = false;
        $Workshop->timestamps = false;
        $Workshop-> id  = $id;
        $Workshop-> name = $name;
        $Workshop->save();
        return view('participant', ['workshops' => $workshops],['participants' => $participants], ['wps' => $wps]);
   

    }
    public function PCreate(Request $request){
        //    protected $fillable = ['name','email','phoneNo','address','workshopID'];
        $name = $request->input('1');
        $email = $request->input('2');
        $id = $request->input('id');

        $phoneNo = $request->input('3');
        $address = $request->input('4');
        $workshopID = $request->input('5');
        echo $name .  $email  .  $phoneNo .   $address.  $workshopID;
        $Workshop = new participant();        

        $Workshop->timestamps = false;
        $Workshop-> id = $id;

        $Workshop-> name = $name;
        $Workshop-> email = $email;
        $Workshop-> phoneNo=  $phoneNo;
        $Workshop->   address = $address;
        $Workshop-> workshopID = $workshopID;

        $Workshop->save();
        return view('participant', ['workshops' => $workshops],['participants' => $participants], ['wps' => $wps]);

 
    }
    public function delete($id){
        DB::delete('delete from participants where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        return view('participant', ['workshops' => $workshops],['participants' => $participants], ['wps' => $wps]);
    }

    public function GOEdit(Request $request){
        //$phone = $request->input('phone');
        //echo $phone;
        //$edit_target = DB::table('phones')->get()->where('id', $phone);
        //echo $edit_target;
        //return view('edit', ['phones' => $edit_target]);
    }

    public function GOEdit2(Request $request){
        echo $request;

        return redirect('/');




       
    }
}
