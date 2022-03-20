<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class DestinationController extends Controller
{
    // public function __construct()
    // {
        //This will apply to every method inside the controller
        //$this->middleware('user');

        //This will apply only to the methods listed inside the array
        //$this->middleware('admin', ['only' => ['store', 'update', 'destroy']]);

        //This will apply only to the methods except the ones listed inside the array
        // $this->middleware('subscribed', ['except' => ['fooAction', 'barAction']]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Destination::all();
        return response()->json($data);
    }

    public function alamDestination()
    {
        $data=Destination::getAlamDestination()->paginate(2);
        return response()->json($data);
    }

    public function kotaDestination()
    {
        $data=Destination::getKotaDestination()->paginate(2);
        return response()->json($data);
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
        $validated = $request->validate([
        'destination_name' => 'required',
        'destination_description' => 'required',
        'destination_location' => 'required',
        'destination_day_temp' => 'required',
        'destination_night_temp' => 'required',
        'destination_rating' => 'required|numeric',
        'destination_image' => 'required|file|mimes:png,jpg',
        'destination_category' => 'required',
        ]);
        try {
            $filename = time().$request->file('destination_image')->getClientOriginalName();
            $path = $request->file('destination_image')->storeAs('uploads/destination_image',$filename);
            $validated['destination_image']=$path;
            $response = Destination::create($validated);
            return response()->json([
                'success' => true,
                'message' => 'store success',
                'data' => $response
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'error',
                'errors' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        $data=$destination;
        return response()->json($data);
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
        $validated = $request->validate([
            'destination_name' => '',
            'destination_description' => '',
            'destination_location' => '',
            'destination_day_temp' => '',
            'destination_night_temp' => '',
            'destination_rating' => '',
            'destination_image' => '',
            'destination_category' => '',
            ]);
            try {
                $response = Destination::find($id);
                if($request->file('destination_image')){
                    $filename = time().$request->file('destination_image')->getClientOriginalName();
                    $path = $request->file('destination_image')->storeAs('uploads/destination_image',$filename);
                    $validated['destination_image']=$path;
                    Storage::delete($response->destination_image);
                }
                $response->update($validated);
                return response()->json([
                    'success' => true,
                    'message' => 'update success',
                    'data' => $response
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'message' => 'error',
                    'errors' => $e->getMessage()
                ]);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $response = Destination::find($id);
            Storage::delete($response->destination_image);
            $response->delete();
            return response()->json([
                'success' => true,
                'message' => 'delete success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'error',
                'errors' => $e->getMessage()
            ]);
        }
    }
}
