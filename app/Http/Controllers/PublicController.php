<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome() {
        return view('welcome');
    }
    public function filterByCategory($name, $category_id){
        
        $category = Category::find($category_id);
        $announcements = $category->announcements()->where('is_accepted', true)->paginate(6);
        return view('annunci.index', compact('category','announcements'));
        
    }
    public function search(Request $request) {
        $q = $request->input('q');
        $announcements = Announcement::search($q)->where('is_accepted', true)->get();
        $category = Category::search($q)->get();
        return view('annunci.search_result', compact('q', 'announcements', 'category'));
    }
    public function revisorForm(){
        return view('revisione.revisorForm');
    }
    public function sentRevisorForm(Request $request){
        $email = $request->input('email');
        $name = $request->input('name');
        $message = $request->input('message');
        $forAdmin = compact('email','name','message');
        Mail::to('amministrazione@presto.it')->send(new AdminMail($forAdmin));
        return redirect(route('welcome'));
    }
    public function locale($locale){
        session()->put('locale',$locale);
        return redirect()->back();
    }
}
