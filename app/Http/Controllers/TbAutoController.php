<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TbAuto;
class tbautoController extends Controller
{
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
			return TbAuto::all();
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
				//
				$auto = new TbAuto;
				$auto->marca = $request->input('marca');
				$auto->value = $request->input('valor');
				$auto->model = $request->input('modelo');
				$auto->year = $request->input('anio');
				$auto->save();
		}

		/**
		 * Display the specified resource.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function show($id)
		{
			return TbAuto::findOrFail($id);
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function edit($id)
		{

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
				$auto = TbAuto::findOrFail($id);
				$auto->marca = $request->input('marca');
				$auto->value = $request->input('valor');
				$auto->model = $request->input('modelo');
				$auto->year = $request->input('anio');
				$auto->save();
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function destroy($id)
		{
				$auto = TbAuto::findOrFail($id);
				$auto->delete();
		}
}
