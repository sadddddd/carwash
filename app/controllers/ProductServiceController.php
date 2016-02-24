<?php

class ProductServiceController extends BaseController {

	public function maintenanceProSerCat()
	{
		$ids = DB::table('tblProdSerCat')
			->select('strCategId')
			->orderBy('created_at', 'desc')
			->orderBy('strCategId', 'desc')
			->take(1)
			->get();

		$ID = $ids["0"]->strCategId;
		$newID = $this->smart($ID);

		$cat = MProdServCat::all();

		return View::make('prod_ser_category')->with('categories', $cat)->with('newID', $newID);
	}

	public function deleteCategory()
	{
		$id=Input::get('categ_id_del');
		$cat = MProdServCat::find($id);
		//dd($cat);
		$cat->status='0';
		$cat->save();

		return Redirect::to('/Categories');
	}

	public function addCategory()
	{
		$id = Input::get('categ_id_add');
		//dd($id);
		$cat = MProdServCat::create(array(
			'strCategId' => Input::get('categ_id_add'),
			'strCategType' => Input::get('categ_type_add'),
			'strCategName' => Input::get('categ_name_add'),
			'strCategDesc' => Input::get('categ_desc_add'),
			'status' => '1'
		));
		$cat->save();

		return Redirect::to('/Categories');
	}

	public function updateCategory()
	{
		$id = Input::get('categ_id_edit');
		$cat = MProdServCat::find($id);
		$cat->strCategName = Input::get('categ_name_edit');
		$cat->strCategDesc = Input::get('categ_desc_edit');
		$cat->strCategType = Input::get('categ_type_edit');
		$cat->save();

		return Redirect::to('/Categories');
	}

	public function productPerService()
	{
		$ids = DB::table('tblServProd')
			->select('strServProd')
			->orderBy('created_at', 'desc')
			->orderBy('strServProd', 'desc')
			->take(1)
			->get();

		$ID = $ids["0"]->strServProd;
		$newID = $this->smart($ID);

		$serviceId = Input::get('servId');
		$products = DB::table('tblProduct')
			->join('tblUOM', 'tblProduct.strPUOM','=','tblUOM.strUOMId')
			->select('tblProduct.*','tblUOM.strUOMDesc')
			->get();

		$pps = DB::table('tblServProd')
				->join('tblServ', 'tblServProd.strSPServ','=','tblServ.strServId')
				->join('tblProduct', 'tblServProd.strSPProd','=','tblProduct.strProdId')
				->join('tblUOM',  'tblProduct.strPUOM','=','tblUOM.strUOMId')
				->select('tblServProd.*', 'tblServ.strServName', 'tblProduct.strProdName', 'tblUOM.strUOMDesc')
				->get();
		
		return View::make('productPerService')->with('newID',$newID)->with('servid',$serviceId)->with('product',$products)->with('pps',$pps);
	}

	public function prodUOM()
	{
		$pps = DB::table('tblServProd')
				->join('tblServ', 'tblServProd.strSPServ','=','tblServ.strServId')
				->join('tblProduct', 'tblServProd.strSPProd','=','tblProduct.strProdId')
				->join('tblUOM',  'tblProduct.strPUOM','=','tblUOM.strUOMId')
				->select('tblServProd.*', 'tblServ.strServName', 'tblProduct.strProdName', 'tblUOM.strUOMDesc')
				->get();
				
		return Response::json($pps);
	}



	public function productPerServiceDel()
	{
		$getID = Input::get('product_id_del');
		$ppsDel = MServProd::find($getID);
		$ppsDel->status = '0';
		//MServProd::where('strServProd', '=', $getID )->decrement('status');
		//dd($ppsDel);
		$ppsDel->save();

		return Redirect::to('/ServiceDetails');
	}

	public function productPerServiceAdd()
	{
		$id = Input::get('prod_ser_cat_id_add');
		//dd($id);
		$ppsAdd = MServProd::create(array(
			'strServProd' => Input::get('product_id_edit'),
			'strSPServ' => Input::get('serv_id_edit'),
			'strSPProd' => Input::get('prod_edit'),
			'dblUseProd' => Input::get('measure_add'),
			'status' => '1'
		));
		$ppsAdd->save();

		return Redirect::to('/ServiceDetails');
	}

	public function productPerServiceUp()
	{
		$id = Input::get('product_id_edit');
		$ppsUp = MServProd::find($id);
		$ppsUp->strSPServ = Input::get('serv_id_edit');
		$ppsUp->strSPProd = Input::get('prod_edit');
		$ppsUp->dblUseProd = Input::get('measure_edit');
		$ppsUp->save();

		return Redirect::to('/ServiceDetails');
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
