<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Input;
use Validator;
use Redirect;

use App\Registration;

class RegistrationsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		//
		$registrations = Registration::all();

		return view('registrations.index', compact('registrations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('registrations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Registration::$rules);

		if ($validator->fails())
		{
			return back()->withErrors($validator)->withInput();
		}

		Registration::create($data);
		return redirect('registrations/index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$registration=Registration::findOrFail($id);
		return view('registrations.show',compact('registration'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$registration = Registration::findOrFail($id);

		$registration->mchkt=false;
		$registration->fchkt=false;
		if($registration->sex=='m') $registration->mchkt=true;
		if($registration->sex=='f') $registration->fchkt=true;
		

		return view('registrations.edit', compact('registration'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		//

		$data = Input::all();
		$registration = Registration::findOrFail($data['id']);

		$validator = Validator::make($data, Registration::$rules);

		if ($validator->fails())
		{
			return back()->withErrors($validator)->withInput();
		}

		$registration->update($data);

		return redirect('registrations/show/'.$data['id']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		Registration::destroy($id);

		return redirect('registrations/index');
	}

}
