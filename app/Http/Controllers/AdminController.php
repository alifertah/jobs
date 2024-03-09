<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * @return:returns the view of manage categories with all categories
     */
    public function manageCategories(Request $r){
        $c = Category::all();
        return(view("admin.categories", compact("c")));
    }

    /**
     * this function creates a new category
     * @return: returns a redirection to th manageCategories page with the status
     */
    public function newCategory(Request $r){
        $c = new Category();
        if($r->name){
            $c->name = $r->name;
            $c->save();
            return redirect()->route("manageCategories");
        } else{
            return redirect()->route("manageCategories")->with("error", "Category name can not be null!");
        }
    }
    
    /**
     * this function deletes a category and returns to the manageCategories page
     *@return: returns to categories page
     */
    public function deleteCategory(Request $r){
        $category = Category::find($r->id);
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully.');   
    }

    /**
     * this function edits a category name
     */
    public function editCategory(Request $r){
        $category = Category::find($r->id);

        $category->name = $r->title;
        $category->save();
        return redirect()->back()->with('success', 'Category updated successfully.');   
    }

    /**
     * this function shows the view to the admin page
     *
     */
    public function adminDashboard(){
        $events = Event::all();
        $users = User::all();
        $data = compact("events", "users");
        return view("admin.admin", compact("data"));
    }

    /**
     * deleteUser 
     */
    public function deleteUser(Request $r){
        $user = User::find($r->id);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    /**
     * this function edit a user permissions
     */
    public function editUserPerssion(Request $r){
        $user = User::find($r->id);
        $user->access = $r->access;
        $user->save();
        return redirect()->back()->with('success', 'User Permission edited.');
    }
    
    /**
     * this function acceptes an event
     */
    public function acceptEvent(Request $r){
        $event = Event::find($r->id);
        $event->status = "accepted";
        $event->save();
        return redirect()->back()->with('success', 'Event accepted');
    }
}
