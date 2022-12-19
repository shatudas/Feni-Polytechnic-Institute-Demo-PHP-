<?php

class Datebase
{
	public $hostaddress="localhost";
	public $userName="root";
	public $password="";
	public $datebase_name="fpi_projuct";
	public $link;
	public $meaasge;

	public function __construct()
	{
		$this->Datebase_Connection();
	}


 //connection
	private function Datebase_Connection()
	{
		$this->link=new mysqli($this->hostaddress,$this->userName,$this->password,$this->datebase_name);
		if ($this->link)
		{
			$this->meaasge="<i style='color:green'>Database Connection Successfull</i>";
		}
		else
		{
			$this->meaasge="<i style='color:red'>Database Connection Unsuccessfull</i>";
		}

	}


	//Date Insert 

	function dateInsert ($AddDate)
	{
		$Dateinsert=$this->link->query($AddDate);
		if ($Dateinsert)
		{
			$this->meaasge="<i style='color:green'>Information Insert Suceessfull..</i>";
		}
		else
		{
			$this->meaasge="<i style='color:red'>Information Insert Unsuccessfull..</i>";
		}
	}


//view page query

	function SelectQuery($Viewdate)
	{
		$result=$this->link->query($Viewdate);
		if ($result->num_rows>0)
		{
			return $result;
		}
		else
		{
			$this->meaasge="<i style='color:red'> Can't available this page</i>";
		}
	}

// delect 
	function Delectdate ($delectdate)
{
	$delete=$this->link->query($delectdate);
	if ($delete)
	{
	 $this->meaasge="<i style='color:green'>Information Delete Successfull..</i>";
	}
	else
	{
		$this->meaasge="<i style='color:red'> Information Delete Unsuccessfull..</i>";
	}
}

//edit
function EditView($Editdata)
{
	$var_Edit=$this->link->query($Editdata);
	if ($var_Edit)
	{
		return $var_Edit;
	}
	else
	{
		return falus;
	}
}


function UPdateDate ($update)
	{
		$UpdateInfo=$this->link->query($update);
		if ($UpdateInfo)
		{
			$this->meaasge="<i style='color:green'>Information Update Suceessfull..</i>";
		}
		else
		{
			$this->meaasge="<i style='color:red'>Information Update Unsuccessfull..</i>";
		}
	}






 



	public function __destruct()
 {
	 $this->link->close();
 }

}




?>