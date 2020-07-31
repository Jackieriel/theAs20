<?php

namespace App\Http\Controllers;

use App\Models\Pictures;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class PicturesController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Pictures::orderBy('updated_at', 'desc')->paginate(10);

        // load the view and pass the nerds
        if (isset($message)) {
            Session::flash('message', $message);
            return view('pages.photos.index')
                ->with('photos', $photos)
                ->with('message', $message);
        }
        return view("pages.pix.index")
            ->with('photos', $photos);
    }


      /**
     * Display a listing of the resource for guest users.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {

        // load the view and pass the nerds
        $photos = Pictures::orderBy('updated_at', 'desc')->paginate(4);

        // load the view and pass the nerds
        if (isset($message)) {
            Session::flash('message', $message);
            return view('pages.pix.view')
                ->with('photos', $photos)
                ->with('message', $message);
        }
        return view("pages.pix.view")
            ->with('photos', $photos);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pix.create');
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
            'caption' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);

        // validate inputs
        if ($validator->fails()) {
            dd($validator->fails());
            return back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        } else {
            try {
                // $input['id'] = uniqid("pk", false);
                if (isset($input['image'])) {
                    $input['image'] =  $this->getBaseUrl() . $this->uploadFile($request->image, 'wedding-images');
                }
                $pictures = Pictures::create($input);
                // redirect
                Session::flash('success', 'Uploaded successfully!');
                return $this->index();
            } catch (\Throwable $th) {
                dd($th);
                Session::flash('error', 'Error Uploading!');
                return back()->withErrors($th->getMessage());
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pictures  $pictures
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $photo = Pictures::where('id', $id)->first();
        
        // fetch for unauthenticated users
        if (!Auth::user()) {
            return view("/pages.pix.view")
                ->with('photo', $photo);
        }

        // Admin view
        if (Auth::user()) {
            // load the view and pass the photo
            return view("/pages.pix.show")
                ->with('photo', $photo);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pictures  $pictures
     * @return \Illuminate\Http\Response
     */
    public function edit(Pictures $pictures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pictures  $pictures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pictures $pictures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pictures  $pictures
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $photo = Pictures::where(['id' => $id])->first();
        $respStatus = $respMsg = '';
        if (!$photo) {
            $respStatus = 'error';
            $respMsg = 'Photo not found';
        }
        $photoDelStatus = $photo->delete();
        if ($photoDelStatus) {
            $respStatus = 'success';
            $respMsg = 'Photo deleted successfully';
        } else {
            $respStatus = 'error';
            $respMsg = 'Oops something went wrong. Photo not deleted successfully';
        }
        return redirect('photos')->with($respStatus, $respMsg);
    }
}
