<?php  
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request;  
class PageController extends Controller 
{  public function ArticleController($id) { 
         return 'Halaman Artikel dengan ID ' .$id; 
 	}
    public function HomeController() {
        return 'Selamat Datang';
    }
    public function AboutController() {
        return 'Sukma Bagus Wahasdwika 2241720223';
    } 
} 


