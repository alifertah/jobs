<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * 
     */
    public function manageCategories(Request $r){
        return(view("admin.categories"));
    }

    /**
     * 
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
}
