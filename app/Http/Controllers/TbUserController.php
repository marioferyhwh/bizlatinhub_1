<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TbUser;

class TbUserController extends Controller
{
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
			return TbUser::all();
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
				$user = new TbUser;
				$user->name = $request->input('nombre');
				$user->lastname = $request->input('apellido');
				$user->documenttype_id = $request->input('tipo_documento');
				$user->document = $request->input('documento');
				$user->usertype_id = $request->input('tipo_usuario');
				$user->save();
		}

		/**
		 * Display the specified resource.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function show($id)
		{
			return TbUser::findOrFail($id);
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
			$user = TbUser::findOrFail($id);
			$user->name = $request->input('nombre');
			$user->lastname = $request->input('apellido');
			$user->documenttype_id = $request->input('tipo_documento');
			$user->document = $request->input('documento');
			$user->usertype_id = $request->input('tipo_usuario');
			$user->save();
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function destroy($id)
		{
				$user = TbUser::findOrFail($id);
				$user->delete();
		}
}
