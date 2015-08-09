<?php

class CatalogController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /catalog
	 *
	 * @return Response
	 */
	public function index()
	{
		$catalog = Object::where('active', 1)->orderBy('created_at', 'desc')->paginate(12);

		return View::make('pages.catalog', ['objects' => $catalog]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /catalog/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /catalog
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /catalog/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$item = Object::findOrFail($id);

		if($item->active !== 1) {
			return App::abort(404);
		} else {
			
			$photos = Photo::where('object_id',$id)->get();
			$agent = Agent::where('id', $item->agent_id)->get()->first();
			$same = Object::where('case_type', $item->case_type)->where('active', 1)->where('id', '!=', $item->id)->orderBy('id', 'desc')->take(2)->get();
			$type = Type::find($item->type_id);
			
			return View::make('pages.property', ['item' => $item, 'photos' => $photos, 'agent' => $agent, 'same_objects' => $same, 'type' => $type]);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /catalog/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /catalog/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /catalog/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}