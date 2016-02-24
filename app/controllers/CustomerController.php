<?php

class CustomerController extends BaseController {

	public function maintenanceCustomer()
	{
		$ctr=0;
		$ids = DB::table('tblCustomer')
			->select('strCustId')
			->orderBy('created_at', 'desc')
			->orderBy('strCustId', 'desc')
			->take(1)
			->get();
		$ID = $ids["0"]->strCustId;
		$newID = $this->smart($ID);

		$cust = MCustomer::all();
		$carmodel = MCarModel::all();

<<<<<<< HEAD
		return View::make('customerMaintenance')->with('customers', $cust)->with('carmodel', $carmodel)->with('newID', $newID)->with('ctr', $ctr);
	}
	
	public function reactivateCustomer()
	{

		$id = Input::get('customer_id_del');
		
		$modelid=$id;
		$model = MCustomer::find($modelid);
		$model->status='1';
		$model->save();
		
		return Redirect::to('/CustomerDetails');
=======
		return View::make('customerMaintenance')->with('customers', $cust)->with('carmodel', $carmodel)->with('newID', $newID);
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
	}

	public function updateCustomer()
	{
		$id = Input::get('custid_edit');
		//dd(Input::get('custid_edit'));
		$customer = MCustomer::find($id);
		$customer->strCustFName = Input::get('cus_Fname_edit');
		$customer->strCustMInit = Input::get('cus_Mname_edit');
		$customer->strCustLName = Input::get('cus_Lname_edit');
<<<<<<< HEAD
		$customer->strCustAdd = Input::get('cus_Add_edit');
	
=======
		$customer->strCustAdd = Input::get('custAdd_edit');
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
		$customer->strCustContNo = Input::get('custCont_edit');
		$customer->strCustLiscNo = Input::get('custLisc_edit');
		$customer->save();
		
		return Redirect::to('/CustomerDetails');
	}

	public function addCustomer()
	{
		$customer = MCustomer::create(array(
			'strCustId' => Input::get('custid_add'),
			'strCustLName' => Input::get('cus_Lname_add'),
			'strCustFName' => Input::get('cus_Fname_add'),
			'strCustMInit' => Input::get('cus_Mname_add'),
<<<<<<< HEAD
			'strCustAdd' => Input::get('cus_Add_add'),
=======
			'strCustAdd' => Input::get('custAdd_add'),
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
			'strCustContNo' => Input::get('custCont_add'),
			'strCustLiscNo' => Input::get('custLisc_add'),
			'status' => '1'
		));
		$customer->save();

		$newcar = MCustCar::create(array(
			'strCCCust' => Input::get('custid_add'),
			'strCCModel' => Input::get('carmodel_add'),
			'strCCPlateNo' => Input::get('carplate_add'),
			'status' => '1'
		));
		$newcar->save();
		return Redirect::to('/CustomerDetails');
	
	}

	public function deleteCustomer()
	{
		$id = Input::get('custid_delete');
		//dd(Input::get('custid_delete'));
		$customer = MCustomer::find($id);
		$customer->status = '0';

		$customer->save();
		return Redirect::to('/CustomerDetails');
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
