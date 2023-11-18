<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        return Recipe::with('category', "tags", "user")->get();
    }

    public function store(Request $request)
    {
        $recipe = Recipe::create($request->all());
        return $recipe;
    }

    public function show(Recipe $recipe)
    {
        return $recipe->load('category', "tags", "user");
    }

    public function update(Request $request, Recipe $recipe)
    {
        $recipe->update($request->all());
        return $recipe;
    }
    
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return $recipe;
    }
    
}
