<?php

namespace App\Http\Controllers;


use App\Http\Model\Room;  // use room 
use Illuminate\Http\Request;  

class RoomController extends Controller
{
    public function index ()
    {

        $rooms = Room::latest()->get();
        // x = 10;
        // x = [room1, room2, room3];

        return view('rooms.index', compact('rooms')); // compact data alot 
    }


    //show form to create a new room
    public function create()
    {
        return view('rooms.creat');
    }
    

    // show a new room in the database 
    public function store(Request $request) // vailidate
    {
        // User must fill in all tha date
        $request->vailidate([
            'name' => 'required',
            'description' => 'required',
            'floor' => 'required|integer',
            'capacity' => 'required|integer',
        ]);   

        // save the new room to the database
        Room::create($request->all());

        return redirect('room')->with('success','Room create successfully.');
    }


    // show form to edit an extsting room 
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }
}
