<?php

namespace App\Http\Controllers;

use App\Models\Marriages;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class MarriagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marriages = Marriages::orderBy('updated_at', 'desc')->paginate(10);

        // load the view and pass the nerds
        if (isset($message)) {
            Session::flash('message', $message);
            return view('pages.marriage.index')
                ->with('marriages', $marriages)
                ->with('message', $message);
        }
        return view("pages.marriage.index")
            ->with('marriages', $marriages);
    }


      /**
     * Display a listing of the resource for guest users.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
                // load the view and pass the nerds
        $marriages = Marriages::orderBy('updated_at', 'desc')->paginate(10);

        // load the view and pass the nerds
        if (isset($message)) {
            Session::flash('message', $message);
            return view('pages.marriage.view')
                ->with('marriages', $marriages)
                ->with('message', $message);
        }
        return view("pages.marriage.view")
            ->with('marriages', $marriages);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.marriage.create');
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
            'status' => 'string'
        ]);

        // validate inputs
        if ($validator->fails()) {
            Session::flash('error', 'All field is require!');
            return Redirect::to('marriage/create')
                ->withErrors($validator->errors())
                ->withInput($request->all());
                
        } else {
            try {
                // store
                $input['id'] = uniqid("pk", false);
                $input['user_id'] = Auth::user()->id;
                $marriage = Marriages::create($input);
                

                // redirect
                Session::flash('success', 'Successfully created event programme!');
                return Redirect::to('marriage');
            } catch (\Throwable $th) {

                // dd($th);
                Session::flash('error', 'Event programme creating failed!');
                return back()->withErrors($th->getMessage());
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marriages  $marriages
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marriage = Marriages::where('id', $id)->first();
        
        // fetch for unauthenticated users
        if (!Auth::user()) {
            return view("/pages.marriage.view")
                ->with('marriage', $marriage);
        }

        // Admin view
        if (Auth::user()) {
            // load the view and pass the marriage
            return view("/pages.marriage.show")
                ->with('marriage', $marriage);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marriages  $marriages
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $userId = auth()->user()->id;
        $marriage = Marriages::where(['user_id' => $userId, 'id' => $id])->first();
        if ($marriage) {
            return view('pages.marriage.edit', [ 'marriage' => $marriage ]);
        } else {
            return redirect('marriage')->with('error', 'Programme not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marriages  $marriages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $marriage = Marriages::find($id);

        $marriage ->title = $request->title;
        $marriage ->description = $request->description;
        $marriage ->status = $request->status;
        $marriage ->updated_at =  \Carbon\Carbon::now();
        

        if (!$marriage) {
            return redirect('marriage')->with('error', 'Programme not found.');
        }


        $input = $request->input();
        $validator = Validator::make($request->input(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|string'
        ]);

        // validate inputs
        if ($validator->fails()) {
            return Redirect::to('marriage/' . $marriage->id . '/edit')
                ->withErrors($validator->errors())
                ->withInput($request->all());
        } else {
            // store
            $marriage->save();
            

            // redirect
            Session::flash('success', 'Successfully updated Programme!');
            return Redirect::to('marriage');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marriages  $marriages
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $userId = auth()->user()->id;
        $marriage = Marriages::where(['user_id' => $userId, 'id' => $id])->first();
        $respStatus = $respMsg = '';
        if (!$marriage) {
            $respStatus = 'error';
            $respMsg = 'Programme not found';
        }
        $marriageDelStatus = $marriage->delete();
        if ($marriageDelStatus) {
            $respStatus = 'success';
            $respMsg = 'Programme deleted successfully';
        } else {
            $respStatus = 'error';
            $respMsg = 'Oops something went wrong. Programme not deleted successfully';
        }
        return redirect('marriage')->with($respStatus, $respMsg);
    }
}
