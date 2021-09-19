<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CurrencyDenomination;
use App\Models\TenderList;

class ChangeController extends Controller
{
		/**
		 * Get the list of available currencies
		 * @return array
		 */
		public function getCurrencies() {
			$currencies = CurrencyDenomination::all();
			return response($currencies);
		}


		/**
		 * Calculate the change to return in tender
		 *
		 * @param $request
		 * 
		 * @return array
		 */
		public function calculate(Request $request)
		{
			$request->validate([
					'cost'     => 'required|numeric',
					'provided' => 'required|numeric'
			]);

			$cost     = (int)($request->input('cost') * 100);
			$provided = (int)($request->input('provided') * 100);
			$currency = (string)$request->input('currency') ?? 'USD';

			if ($provided < $cost) {
				return response('Not enough money provided!', 400);
			}

			if ($provided === $cost) {
				return response('No change required!', 400);
			}

			$currency = CurrencyDenomination::where('code', $currency)->first();

			$tenderList = new TenderList();
			$tenderList->calculate($currency, $provided - $cost);

			return response()->JSON([
				'symbol' => $currency->symbol,
				'change' => $tenderList->getList()
			]);
		}
}
