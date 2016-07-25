<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Relics;
class TourismController extends Controller
{

	public function index()
	{
		$relics = DB::table('relics')->get();
		return view('index',['relics' => $relics]);


	}
	public function login()
	{
		$relics = DB::table('relics')->get();
		return view('login',['relics' => $relics]);
	}
	public function register()
	{
		/*$relicsname = $_POST['relicsname'];
		$address = $_POST['address'];
		$cost = $_POST['cost'];
		$time = $_POST['time'];
		$capacity = $_POST['capacity'];
		$note = $_POST['note'];
		$relics = DB::table('insert into users (relicsname, address, cost, time, capacity, note) values (?, ?, ?, ?, ?, ?)');
		return view('register',['register' => $relics]);
*/
		return view('register');
	}
}
?>