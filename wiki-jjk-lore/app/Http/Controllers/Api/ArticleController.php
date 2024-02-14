<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->validate([
            'reason' => 'required'
        ]);

        $reason=Reason::create([
            'reason' => $data['reason']
        ]);
        if($reason){
            return response()->json([
                'message' => 'Se ha creado un registro',
                'data' => $reason
            ]);
        }else{
            return response()->json([
                'message' => 'Error al crear el registro',
            ]);
        }
    } 

    public function update (Request $request){
        $article = ::where('id','=' $data['id'])->first();

        if($article){
            $old = $article;
            $article->name = $data['name'];
            $article->title_id = $data['title_id'];
            $article->category_id = $data['category_id'];
            $article->creator_id = $data['creator_id'];
            $article->mod_id = $data['mod_id'];
            $article->editor_id = $data['editor_id'];
            
            if($article->save()){
                $object = [
                    "response" => 'Item updated succesfully.',
                    "old" => $old,
                    "new" => $article
                ];

                return response()->json($object);
            }else{
                $object = [
                    "response" => 'An error ocurred, please retry.'
                ];
                return response()->json($object);
            }  
        }
        else{
            $object = [
                "response" => 'Object has not been found.'
            ];
            return response()->json($object);
        }
    }
}

