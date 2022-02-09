<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TbSellAuto;

class TbSellAutoController extends Controller
{
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
			return TbSellAuto::all();
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
				$sell_auto = new TbSellAuto;
				$sell_auto->user_id_sell = $request->input('vendedor');
				$sell_auto->user_id_buy = $request->input('comprador');
				$sell_auto->auto_id = $request->input('auto');
				$sell_auto->save();
		}

		/**
		 * Display the specified resource.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function show($id)
		{
			return TbSellAuto::findOrFail($id);
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
			$sell_auto = TbSellAuto::findOrFail($id);
			$sell_auto->user_id_sell = $request->input('vendedor');
			$sell_auto->user_id_buy = $request->input('comprador');
			$sell_auto->auto_id = $request->input('auto');
			$sell_auto->save();
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function destroy($id)
		{
				$sell_auto = TbSellAuto::findOrFail($id);
				$sell_auto->delete();
		}
}
