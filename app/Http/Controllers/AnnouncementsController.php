<?php

namespace App\Http\Controllers;

use App\Models\Announcements;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;


class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcements::orderBy('updated_at', 'desc')->paginate(10);

        // load the view and pass the nerds
        if (isset($message)) {
            Session::flash('message', $message);
            return view('pages.announcements.index')
                ->with('announcements', $announcements)
                ->with('message', $message);
        }
        return view("pages.announcements.index")
            ->with('announcements', $announcements);
    }


    /**
     * Display a listing of the resource for guest users.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $announcements = Announcements::where('status','publish')->orderBy('updated_at', 'desc')->paginate(6);

        // load the view and pass the nerds
        if (isset($message)) {
            Session::flash('message', $message);
            return view('pages.announcements.view')
                ->with('announcements', $announcements)
                ->with('message', $message);
        }
        return view("pages.announcements.view")
            ->with('announcements', $announcements);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'status' => 'required'
        ]);

        // validate inputs
        if ($validator->fails()) {
            return Redirect::to('announcements/create')
                ->withErrors($validator->errors())
                ->withInput($request->all());
        } else {
            try {
                // store
                $input['id'] = uniqid("pk", false);
                $input['user_id'] = Auth::user()->id;
                $announcement = Announcements::create($input);

                // redirect
                Session::flash('success', 'Successfully created announcementation!');
                return Redirect::to('announcements');
                // return view('pages.announcements.index', $announcement);
            } catch (\Throwable $th) {
                // dd($th);
                Session::flash('error', 'announcementation creation failed!');
                return back()->withErrors($th->getMessage());
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement = Announcements::where('id', $id)->first();
        
        // fetch for unauthenticated users
        if (!Auth::user()) {
            return view("/pages.announcements.index")
                ->with('announcement', $announcement);
        }

        // Admin view
        if (Auth::user()) {
            // load the view and pass the announcement
            return view("/pages.announcements.show")
                ->with('announcement', $announcement);
        }
    }


     // for none login users
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function showInfo($id)
    {
        $announcement = Announcements::find($id);
        return view('pages.announcements.show-more', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userId = auth()->user()->id;
        $announcement = Announcements::where(['user_id' => $userId, 'id' => $id])->first();
        if ($announcement) {
            return view('pages.announcements.edit', [ 'announcement' => $announcement ]);
        } else {
            return redirect('announcements')->with('error', 'announcement not found');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $announcement = Announcements::find($id);

        $announcement ->title = $request->title;
        $announcement ->description = $request->description;
        $announcement ->status = $request->status;
        $announcement ->updated_at =  \Carbon\Carbon::now();



        if (!$announcement) {
            return redirect('announcements')->with('error', 'Announcement not found.');
        }


        $input = $request->input();
        $validator = Validator::make($request->input(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'status' => 'required'
        ]);

        // validate inputs
        if ($validator->fails()) {
            return Redirect::to('announcements/' . $announcement->id . '/edit')
                ->withErrors($validator->errors())
                ->withInput($request->all());
        } else {
            // store
            // $announcement = $input->update($input);
            $announcement->save();
            

            // redirect
            Session::flash('success', 'Successfully updated announcement!');
            return Redirect::to('announcements');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userId = auth()->user()->id;
        $announcement = Announcements::where(['user_id' => $userId, 'id' => $id])->first();
        $respStatus = $respMsg = '';
        if (!$announcement) {
            $respStatus = 'error';
            $respMsg = 'announcement not found';
        }
        $announcementDelStatus = $announcement->delete();
        if ($announcementDelStatus) {
            $respStatus = 'success';
            $respMsg = 'announcement deleted successfully';
        } else {
            $respStatus = 'error';
            $respMsg = 'Oops something went wrong. announcement not deleted successfully';
        }
        return redirect('announcements')->with($respStatus, $respMsg);
    }
}
