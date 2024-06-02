<?php

namespace App\Http\Controllers\Api;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $book = Book::all();
            return [
                "status" => 200,
                "message" => "Success get data",
                "data" => $book
            ];
        } catch(\Exception $e){
            return [
                "status" => 400,
                "message" => "Bad Request",
                "error" => $e
            ];
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                "bookName" => "required|string",
                "bookDescription" => "required|string",
                "bookPrice" => "required|integer",
            ]);
    
            $book = Book::create([
                "bookName" => $request->bookName,
                "bookDescription" => $request->bookDescription,
                "bookPrice" => $request->bookPrice,
            ]);

            return [
                "status" => 200,
                "message" => "Success add data",
                "data" => $book
            ];
        } catch(\Exception $e){
            return [
                "status" => 400,
                "message" => "Bad Request",
                "error" => $e
            ];
        }  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       try{
            $book = Book::find($id);
            return [
                "status" => 200,
                "message" => "Success get data",
                "data" => $book
            ];
        } catch(\Exception $e){
            return [
                "status" => 400,
                "message" => "Bad Request",
                "error" => $e
            ];
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       try{
            $book = Book::find($id);
            $validator = Validator::make($request->all(), [
                'bookName' => 'nullable|string|max:255',
                'bookDescription' => 'nullable|string',
                'bookPrice' => 'nullable|numeric',
            ]);

             if ($validator->fails()) {
                return response()->json([
                    'status' => 400,
                    'message' => 'Validation error',
                    'errors' => $validator->errors(),
                ], 400);
            }

            if ($request->has('bookName')) {
                $book->update(['bookName' => $request->bookName]);
            }

            if ($request->has('bookDescription')) {
                $book->update(['bookDescription' => $request->bookDescription]);
            }

            if ($request->has('bookPrice')) {
                $book->update(['bookPrice' => $request->bookPrice]);
            }
            
            return [
                "status" => 200,
                "message" => "Success update data",
                "data" => $book
            ];
        } catch(\Exception $e){
            return [
                "status" => 400,
                "message" => "Bad Request",
                "error" => $e
            ];
        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $book = Book::find($id);
            if($book){
                $book->delete();
                return [
                    "status" => 200,
                    "message" => "Success delete data",
                ];
            } else{
                return [
                    "status" => 400,
                    "message" => "No data found",
                ];
            }
        }catch(\Exception $e){
              return [
                "status" => 400,
                "message" => "Bad Request",
                "error" => $e
            ];
        }
    }
}
