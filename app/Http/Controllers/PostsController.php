<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Input;
use Validator;
use Redirect;

use App\Post;

class PostsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		//
		$posts = Post::all();

		return view('posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return back()->withErrors($validator)->withInput();
		}

		Post::create($data);
		return redirect('posts/index');
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
		$post=Post::findOrFail($id);
		return view('posts.show',compact('post'));
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
		$post = Post::findOrFail($id);

		return view('posts.edit', compact('post'));
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
		$post = Post::findOrFail($data['id']);

		$validator = Validator::make($data, Post::$rules);

		if ($validator->fails())
		{
			return back()->withErrors($validator)->withInput();
		}

		$post->update($data);

		return redirect('posts/show/'.$data['id']);
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
		Post::destroy($id);

		return redirect('posts/index');
	}

}
