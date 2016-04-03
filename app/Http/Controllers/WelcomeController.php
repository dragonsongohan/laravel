<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {
    
    public function _construct() 
    {
        $this -> middleware('guest');
    }
    
    public function index() {
        return view('welcome');
    }
    
    public function showinfo() {
        return view('thongtin');
    } 
    
    public function testAction() {
        echo "Đây là 1 action trong class WelcomeController";
        return redirect() -> route('hcm');
    }
}
?>