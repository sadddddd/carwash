<?php

class ProductController extends BaseController {

	public function maintenanceProduct()
	{
		$ids = DB::table('tblProduct')
			->select('strProdId')
			->orderBy('created_at', 'desc')
			->orderBy('strProdId', 'desc')
			->take(1)
			->get();

		$ID = $ids["0"]->strProdId;
		$newID = $this->smart($ID);

		$product = DB::table('tblProduct')
			->join('tblSupplier', 'tblProduct.strPSupp','=','tblSupplier.strSuppId')
			->join('tblUOM', 'tblProduct.strPUOM','=','tblUOM.strUOMId')
			->join('tblProdSerCat','tblProduct.strPCategory','=','tblProdSerCat.strCategId')
			->select('tblProduct.*', 'tblSupplier.strSuppName', 'tblUOM.strUOMDesc', 'tblProdSerCat.strCategName')
			->get();
		$category = MProdServCat::all();
		$supplier = MSupplier::all();
		$uom = MUOM::all();

		return View::make('productMaintenance')->with('newID',$newID)->with('products',$product)
		->with('uom',$uom)->with('uom2',$uom)->with('categories',$category)->with('suppliers',$supplier);
	}

	public function deleteProduct()
	{
		$id=Input::get('prod_id_del');
		$product = MProduct::find($id);
		$product->status='0';
		$product->save();

		return Redirect::to('/ProductDetails');
	}

	public function updateProduct()
	{
		$id=Input::get('prod_id_edit');
		$product = MProduct::find($id);
		$product->strProdName = Input::get('prod_name_edit');
		$product->strProdDesc = Input::get('prod_desc_edit');
		$product->strPCategory = Input::get('prod_sercat_edit');
		$product->strPSupp = Input::get('prod_supp_edit');
		$product->strPUOM = Input::get('prod_uom_edit2');
		$product->intProdReOLvl = Input::get('prod_reorderLevel_edit');
		$product->save();

		return Redirect::to('/ProductDetails');
	}

	public function addProduct()
	{
		$id = Input::get('prod_id_add');
		//dd($id);
		$product = MProduct::create(array(
			'strProdId' => Input::get('prod_id_add'),
			'strProdName' => Input::get('prod_name_add'),
<<<<<<< HEAD
=======
			'intProdStock' => Input::get('prod_stock_add'),
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
			'strProdDesc' => Input::get('prod_desc_add'),
			'strPCategory' => Input::get('prod_sercat_add'),
			'strPSupp' => Input::get('prod_supp_add'),
			'strPUOM' => Input::get('prod_uom_add'),
			'intProdReOLvl' => Input::get('prod_reorderLevel_add'),
			'status' => '1'
		));
		$product->save();

		return Redirect::to('/ProductDetails');
	}

	private function smart($id)
	{

		$arrID = str_split($id);

		$new = "";
		$somenew = "";
		$arrNew = [];
		$boolAdd = TRUE;

		for($ctr = count($arrID) - 1; $ctr >= 0; $ctr--)
		{
			$new = $arrID[$ctr];

			if($boolAdd)
			{

				if(is_numeric($new) || $new == '0')
				{
					if($new == '9')
					{
						$new = '0';
						$arrNew[$ctr] = $new;
					}
					else
					{
						$new = $new + 1;
						$arrNew[$ctr] = $new;
						$boolAdd = FALSE;
					}//else
				}//if(is_numeric($new))
				else
				{
					$arrNew[$ctr] = $new;
				}//else
			}//if ($boolAdd)
			
			$arrNew[$ctr] = $new;
		}//for

		for($ctr2 = 0; $ctr2 < count($arrID); $ctr2++)
		{
			$somenew = $somenew . $arrNew[$ctr2] ;
		}
		return $somenew;
	}
}