<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function __construct()
    {
        $this->middleware(['auth'])->only(['index', 'create', 'show', 'store', 'edit', 'update', 'destroy']);
    }

    public function index()
    {
		/*$user_id = Auth::user()->id;
		$cars = Car::where('user_id', $user_id)->get();
        return view('cars.index', [
            'cars' => $cars
        ]);*/


		$user_id = Auth::user()->id;
        //$cars = Car::latest()->paginate(2);
		$cars = Car::where('user_id', $user_id)->get();

		return view('cars.index', [
            'cars' => $cars
        ]);
  
        /*return view('cars.index',compact('cars'))
            ->with('i', (request()->input('page', 1) - 1) * 5);*/
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brandname' => 'required',
            'year' => 'required|integer|min:4',
			'model' => 'required',
			'color' => 'required',
			'mileage' => 'required',
			'regno' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

		

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

		$input['user_id'] = Auth::user()->id;
  
        Car::create($input);
   
        return redirect()->route('cars.index')
                        ->with('success','Car created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show',compact('car'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.edit',compact('car'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'brandname' => 'required',
            'year' => 'required|integer|min:4',
			'model' => 'required',
			'color' => 'required',
			'mileage' => 'required',
			'regno' => 'required',
            'detail' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        
        $car->update($input);
  
        return redirect()->route('cars.index')
                        ->with('success','Car updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
  
        return redirect()->route('cars.index')
                        ->with('success','Car deleted successfully');
    }
}
