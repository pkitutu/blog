<?php namespace App\Http\Controllers;

class ColorsController extends Controller {

	/**
	 * Display a listing of colors
	 *
	 * @return Response
	 */
	public function index()
	{
		$colors = Color::all();

		return View::make('colors.index', compact('colors'));
	}

	/**
	 * Show the form for creating a new color
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('colors.create');
	}

	/**
	 * Store a newly created color in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Color::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Color::create($data);

		return Redirect::route('colors.index');
	}

	/**
	 * Display the specified color.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$color = Color::findOrFail($id);

		return View::make('colors.show', compact('color'));
	}

	/**
	 * Show the form for editing the specified color.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$color = Color::find($id);

		return View::make('colors.edit', compact('color'));
	}

	/**
	 * Update the specified color in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$color = Color::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Color::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$color->update($data);

		return Redirect::route('colors.index');
	}

	/**
	 * Remove the specified color from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Color::destroy($id);

		return Redirect::route('colors.index');
	}

}
